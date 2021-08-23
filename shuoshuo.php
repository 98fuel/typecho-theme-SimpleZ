<?php

/**
 * 动态说说
 *
 * @package custom
 */
?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main">
    <div class="shuoshuo">
        <div class="article-list">
            <img src="https://cdn.jsdelivr.net/gh/shuxhan/pic-cdn@8c1413152bff1bdd3950d5b49d2c749396cf3cac/2021/08/13/69a2b3acb4cd53b5e98b35a3d0d25a44.png" style="width:100%">
            <div style="position:relative;height:30px;">
            <?php $this->author->gravatar('40') ?>
            </div>
            <div style="padding:20px;padding-bottom:6px;"><?php $this->user->screenName(); ?> <a href="https://shuxhan.com/about.html" style="color:#666;font-size:14px;">@Hello</a></div>
            <p style="padding:0 20px">这一路走走停停,看不透的始终是人心。</p>
        </div>
        
        <?php function threadedComments($comments, $options)
        {
            $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  //评论层数大于0为子级，否则是父级
        ?>

            <li class="shuoshuo-list" id="li-<?php $comments->theId(); ?>" class="comment-body<?php
                if ($comments->levels > 0) {
                    echo ' comment-child';
                    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
                } else {
                    echo ' comment-parent';
                }
                $comments->alt(' comment-odd', ' comment-even');
                echo $commentClass;
                ?>">
                <div id="<?php $comments->theId(); ?>" class="pl-dan comment-txt-box">
                    <div class="t-u comment-author">
                        <div class="comment-title">
                            <strong>
                                <p>
                                    <span class="t-g"><?php $comments->date('Y-m-d H:i'); ?></span>
                                    <span class="comment-badge"><?php echo $group; ?></span>
                                </p>
                            </strong>
                        </div>
                       
                        <div class="t-s">
                            <?php $comments->content(); ?>
                        </div>

                    </div>
                </div>
                <?php if ($comments->children) { ?>
                    <div class="pl-list comment-children">
                        <?php $comments->threadedComments($options); ?>
                    </div>
                <?php } ?>
            </li>
        <?php } ?>

        <div id="comments">
            <?php $this->comments()->to($comments); ?>
            <?php if ($this->allow('comment')) : ?>
                <div id="<?php $this->respondId(); ?>" class="respond">
                    <div class="cancel-comment-reply">
                        <?php $comments->cancelReply(); ?>
                    </div>

                    <br />
                    <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">

                        <?php if ($this->user->hasLogin()) : ?>
                            <div class="form-me">
                                <?php _e('登录身份: '); ?>
                                <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>
                                <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a>
                            </div>

                            <textarea class="textarea" id="textarea" rows="5" cols="30" name="text" placeholder="遵守当地法律，文明评论！（支持markdown语法）" class="layui-textarea" required></textarea>
                            <div class="form-submit">
                                <button type="submit"><?php _e('发布'); ?></button>
                            </div>
                        <?php endif; ?>

                    </form>
                </div>
                <?php if ($comments->have()) : ?>
                    <h3><?php $this->commentsNum(_t('暂无评论'), _t('已发布 %d 条动态！')); ?></h3>

                    <div class="pinglun shuoshuo-pinglun">
                        <?php $comments->listComments(); ?>
                    </div>
                    <div class="page-nav">
                        <?php $comments->pageNav('«', '»', 1, '...', array('wrapTag' => 'div', 'wrapClass' => 'page-nav-ul', 'itemTag' => '', 'currentClass' => 'current',)); ?>
                    </div>
                <?php endif; ?>
            <?php else : ?>
                <h3><?php _e('评论已关闭'); ?></h3>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>