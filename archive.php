<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main">
    
    <div class="map">
        <span class="map-breadcrumb">
            <a><cite>
                <?php $this->archiveTitle(array(
                    'category'  =>  _t('分类 %s 下的文章'),
                    'search'    =>  _t('包含关键字 %s 的文章'),
                    'tag'       =>  _t('标签 %s 下的文章'),
                    'author'    =>  _t('%s 发布的文章')
                ), '', ''); ?>
            </cite></a>
        </span>
    </div>
       
            
    <?php if ($this->have()): ?>
    <ul>
        <?php while($this->next()): ?>
            <div class="article-list">
                <span class="article-list-time"><?php $this->date('Y-m-d'); ?></span>
                <div class="article-list-title">
                    <a href="<?php $this->permalink() ?>">
                       <?php $this->title() ?>
                    </a>
                    <span class="tags"><?php $this->tags('&nbsp;&nbsp;', true, 'none'); ?></span>
                </div>
                
            </div>
        <?php endwhile; ?>
    </ul>
    
    
    
    <?php else: ?>
        <div class="post">
            <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
        </div>
    <?php endif; ?>
        
        
</div>

<?php $this->need('footer.php'); ?>
