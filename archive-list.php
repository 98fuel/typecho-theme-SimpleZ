<?php
/**
* 归档
*
* @package custom
*/

$this->need('header.php'); ?>
<main id="main">
    <article class="post">
			<h2 class="post-title"><?php $this->title() ?></h2>
        <div class="post-content">
            <ul class="archives">
                <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y 年 m 月')->to($archives); ?>
                <?php while ($archives->next()) : ?>
                
                    <li class="archives-item">
                        <div class="archives-item-content">
                            <h3 class="archives-item-title"><a href="<?php $archives->permalink(); ?>"><?php $archives->date(); ?></a></h3>
                            <?php
                            $year = $archives->year;
                            $month = $archives->month;
                            $nextYear = $month == 12 ? $year + 1 : $year;
                            $nextMonth = $month == 12 ? 1 : $month + 1;
                            $contents = $this->db->fetchAll($this->select()
                                ->where('table.contents.status = ?', 'publish')
                                ->where('table.contents.created >= ?', strtotime("$year-$month"))
                                ->where('table.contents.created < ?', strtotime("$nextYear-$nextMonth"))
                                ->where('table.contents.type = ?', 'post')
                                ->order('table.contents.created', Typecho_Db::SORT_DESC), array($this, 'push'));
                            //var_dump($contents);
                            foreach ($contents as $content) {
                                echo "<p><span class='archives-time'>$content[month]-$content[day]</span> <a href='$content[permalink]' title='$content[title]'>$content[title]</a></p>";
                            }
                            ?>
    
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </article>
</main>

<?php $this->need('footer.php'); ?>
