<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main">
       
        <div class="post">
            
            <!--正文-->
            <div class="post-header" itemprop="articleBody">
                <span class="title-category"><?php $this->Category(', ', true, 'none'); ?></span>
                <div class="post-title-wrap">
                    <a class="post-title"><?php $this->title() ?></a>
                </div>
                
                <div class="title-msg">
                    <div>
                        <span><?php $this->date('Y-m-d'); ?> </span>
                        <span>· <?php $this->Category(', ', true, 'none'); ?></span>
                        <span>· 本文共 <?php echo art_count($this->cid); ?> 字</span>
                        <!-- <span>· 阅读: <?php echo ViewsCounter_Plugin::getViews(); ?> 次</span> -->
                        <a href="#comments">· 评论: <?php $this->commentsNum('%d'); ?> 条</a>
                    </div>
                    <div>
                        <span class="tags"> #<?php $this->tags('&nbsp;&nbsp;#', true, 'none'); ?></span>
                    </div>
                </div>
            </div>
                
            <!--最后更新时间-->
            <div class="post-content">
                <?php $this->content(); ?>
                <p style="margin-top:100px;">( 最后更新时间为&nbsp;&nbsp;<span style="color:#000;text-decoration:underline;"><?php echo date('Y-m-d H:i:s' , $this->modified); ?></span>&nbsp;&nbsp;(<span class="lately-c"><?php echo date('Y-m-d H:i:s' , $this->modified); ?></span>)，如果资源无效请在评论区留言。 )</p>
            </div>
            
            <!--文章点赞-->
            <div class="zan">
                <?php AnotherLike_Plugin::theLike(); ?>
            </div>
                
            
            <!--版权信息-->
            <details class="copy-text" open>
                <summary>版权声明</summary>
                <ul>
                    <li>作者：<?php $this->author(); ?></li>
                    <li>文章链接：<a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a></li>
                    <li>著作权归作者所有，商业转载请联系作者获得授权，非商业转载请注明出处。</li>
                </ul>
            </details>
            
            <!--评论-->
            <div class="comments">
                <?php $this->need('comments.php'); ?>
            </div>
        </div>
    
</div>

<?php $this->need('footer.php'); ?>

