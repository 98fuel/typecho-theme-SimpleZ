<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main">
       
        <div class="post">
            
            <!--正文-->
            <div class="post-header" itemprop="articleBody">
                
                <div class="post-title-wrap">
                    <a class="post-title" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </div>
                
                <div class="title-msg">
                    <span><?php $this->date('Y-m-d'); ?> </span>
                    <span>· <?php $this->Category(', ', true, 'none'); ?></span>~
                    <span>本文共 <?php echo art_count($this->cid); ?> 字</span>~
                    <span>阅读: <?php echo ViewsCounter_Plugin::getViews(); ?></span>
                </div>
            </div>
                
                
            <div class="post-content">
                <?php $this->content(); ?>
            </div>
                
            
            <!--版权信息-->
            <details class="copy-text">
                <summary>版权声明</summary>
                <ul>
                    <li>若无特殊说明，本站所有文章均为博主原创，如若转载，注明出处与链接即可。</li>
                    <li>本文最后更新时间为&nbsp;&nbsp;<span style="color:#000;text-decoration:underline;"><?php echo date('Y-m-d H:i:s' , $this->modified); ?></span>&nbsp;&nbsp;(<span class="lately-c"><?php echo date('Y-m-d H:i:s' , $this->modified); ?></span>)，如果资源无效请在评论区留言。</li>
                    <li>本文首次发布：<a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a></li>
                </ul>
            </details>
           
            
            <!--评论-->
            <div class="comments">
                <?php $this->need('comments.php'); ?>
            </div>
        </div>
    
</div>

<?php $this->need('footer.php'); ?>

