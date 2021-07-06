<?php
/**
 * 标签云
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
            <p>保持分类的好习惯，让我们更方便的管理和处理数据</p>
        </div>
        <div class="tags-content">
            <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
            <?php while ($tags->next()) : ?>
                <a href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a>
            <?php endwhile; ?>
        </div>
    </div>

</div>

<?php $this->need('footer.php'); ?>