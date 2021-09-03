<?php
/**
 * SimpleZ 一款基于 typecho 程序的简约风双栏博客主题，专注于写作，抛弃了一切臃肿的功能，单纯为写作而存在。
 * 
 * @package SimpleZ
 * @author Nov8nana
 * @version 2.0.0
 * @link https://shuxhan.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>

<div class="main">
    <ul>
        
        <?php while($this->next()): ?>
            
            <div class="article-list">
                
                <div class="article-list-title">
                    <a href="<?php $this->permalink() ?>">
                       <?php $this->title() ?>
                    </a>
                </div>
                <!--<span class="article-list-time"><?php $this->date('Y-m-d'); ?></span>-->
                <p class="article-list-detail"><?php $this->excerpt(120, '...'); ?></p>
                <div class="article-list-info">
                    <span><?php $this->date('Y-m-d'); ?></span>
                    <span class="title-category"><?php $this->Category(', ', true, 'none'); ?></span>
                    <span class="tags"> #<?php $this->tags('&nbsp;&nbsp;#', true, 'none'); ?></span>
                </div>
                
            </div>
        <?php endwhile; ?>
        
    </ul>
    
    <div class="page-nav">
        <?php $this->pageNav('«', '»', 1, '...', array('wrapTag' => 'div', 'wrapClass' => 'page-nav-ul', 'itemTag' => '', 'currentClass' => 'current', )); ?>
    </div>
        

   
</div>

<?php $this->need('footer.php'); ?>

