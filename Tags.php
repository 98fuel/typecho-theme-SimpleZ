<?php

/**
 * 标签
 *
 * @package custom
 */
?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<div class="main">


    <div class="post">
        <div class="title-page">
            <h3>标签云</h3>
            <em>保持分类的好习惯，让我们更方便的管理和处理数据</em>
            <br>

        </div>
        <div class="tags-content">
            <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=99')->to($tags); ?>
            <?php while ($tags->next()) : ?>
                <a href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a>
            <?php endwhile; ?>
        </div>
        <hr>
        <div class="title-page">
            <h3>文章归档</h3>
            <em><?php $stat = Typecho_Widget::widget('Widget_Stat');
                _e('目前共计 %s 篇日志，共 %s 条评论，加油啊~', $stat->PublishedPostsNum, $stat->PublishedCommentsNum); ?></em>

        </div>
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
                            echo "<p><span class='archives-time'>$content[month]-$content[day]</span><a href='$content[permalink]' title='$content[title]'>$content[title]</a></p>";
                        }
                        ?>

                    </div>
                </li>
            <?php endwhile; ?>

        </ul>

    </div>


</div>

<?php $this->need('footer.php'); ?>