<?php
/**
* 标签
*
* @package custom
*/

$this->need('header.php'); ?>
<main id="main">
    <article class="post">
        <h2 class="post-title">分类</h2>
        <ul class="cate">
            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while($category->next()): ?>
            <li><a <?php if ($this->is('post')): ?><?php if ($this->category == $category->slug): ?> class="current"<?php endif; ?><?php else: ?><?php if ($this->is('category', $category->slug)): ?> class="current"<?php endif; ?><?php endif; ?> href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a></a></li>
            <?php endwhile; ?>
        </ul>
        <hr>
		<h2 class="post-title"><?php $this->title() ?></h2>
        <div class="post-content">
            <ul class="tags">
                <?php if($this->slug=="tags"): ?>
                <?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
                <?php if($tags->have()): ?>
                    <?php while ($tags->next()): ?>
                    <li><a 
                        style="color:rgb(<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>)" 
                        href="<?php $tags->permalink();?>"><?php $tags->name(); ?></a></li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php else: ?>
                <?php $this->content(); ?>
                <?php endif; ?>
            </ul>
        </div>
    </article>
</main>

<?php $this->need('footer.php'); ?>
