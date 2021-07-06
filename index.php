<?php
/**
 * SimpleZ 一款基于 typecho 程序的简约风双栏博客主题，专注于写作，抛弃了一切臃肿的功能，单纯为写作而存在。
 * 
 * @package SimpleZ
 * @author 子舒(shuxhan)
 * @version 1.0.0
 * @link https://shuxhan.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>

<div class="main">
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
        

   
</div>

<?php $this->need('footer.php'); ?>

