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
            <h3>分类</h3>
            <ul class="cotegory-ul">
                <?php $this->widget('Widget_Metas_Category_List')
                   ->parse('<li><a href="{permalink}">{name}<span>{count}</span></a></li>'); ?>
            </ul>
        </div>
        <hr>
        <div class="title-page">
            <h3>标签</h3>
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
        

    </div>


</div>

<?php $this->need('footer.php'); ?>