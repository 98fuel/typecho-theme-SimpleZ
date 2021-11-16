<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main">
       
        <div class="post">
            
            <!--正文-->
            <div class="post-header" itemprop="articleBody">
                <span class="title-category post-title-category"><?php $this->Category(', ', true, 'none'); ?></span>
                <div class="post-title-wrap">
                    <span class="post-title"><?php $this->title() ?></span>
                </div>
                
                <div class="title-msg">
                    <div>
                        <span>发布时间: <?php $this->date('Y-m-d'); ?> </span>
                        <span>· <?php $this->Category(', ', true, 'none'); ?></span>
                        <span>· 阅读: <span id="twikoo_visitors"></span> 次</span>
                    </div>
                    <div>
                        <span class="tags"> #<?php $this->tags('&nbsp;&nbsp;#', true, 'none'); ?></span>
                    </div>
                </div>
            </div>
                
            <!--最后更新时间-->
            <div class="post-content">
                <div class="autoMenu" id="autoMenu" data-autoMenu></div>
                <?php $this->content(); ?>
                <p style="margin-top:40px;font-size:14px;color:#888;">更新时间: <span><?php echo date('Y-m-d H:i:s' , $this->modified); ?></span></p>
            </div>

            
            <!--版权信息-->
            <details class="copy-text">
                <summary>版权声明</summary>
                <ul>
                    <li>作者：<?php $this->author(); ?></li>
                    <li>文章链接：<a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a></li>
                    <li>著作权归作者所有，商业转载请联系作者获得授权，非商业转载请注明出处。</li>
                </ul>
            </details>
            
        </div>
        <!--评论-->
        <div class="comments">
            <?php $this->need('comments.php'); ?>
        </div>
    
</div>


<?php $this->need('footer.php'); ?>

