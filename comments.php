<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php function threadedComments($comments, $options) {
    $commentClass = '';$group = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $group = '博主';
            $commentClass .= ' comment-by-author';  //如果是文章作者的评论添加 .comment-by-author 样式
        } else {
            $group = '';
            $commentClass .= ' comment-by-user';  //如果是评论作者的添加 .comment-by-user 样式
        }
    } 
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  //评论层数大于0为子级，否则是父级
?>

<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php 
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
        <div class="t-p comment-author">
            <?php $comments->gravatar('40', ''); ?>
        </div>
        <div class="t-u comment-author">
            <div class="comment-title">
                <strong>
                    <p>
                        <?php $comments->author(); ?>
                        <span class="comment-badge"><?php echo $group; ?></span>
                        <span class="t-g"><?php $comments->date('Y-m-d H:i'); ?></span>
                    </p>
                    <p>
                        
                        <span class="t-btn"><?php $comments->reply(); ?> </span> 
                    </p>
                </strong>
                
                 
            </div>
            <div class="comment-aite">
                <b><?php echo getPermalinkFromCoid($comments->parent); ?></b>
            </div>
            <div class="t-s" style="color:#333">
                <p>
                    <?php $comments->content(); ?>
                    
                </p>
            </div>
       
        </div><!-- 单条评论者信息及内容 -->
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
    
    <?php if($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply">
                <?php $comments->cancelReply(); ?>
            </div>
        
            <h4 id="response"><?php _e('发表评论'); ?></h4>
            <br/>
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                
                <?php if($this->user->hasLogin()): ?>
                <div class="form-me">
                    <?php _e('登录身份: '); ?>
                    <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>
                    <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a>
                </div>
                
                <textarea class="textarea" id="textarea" rows="5" cols="30" name="text" placeholder="遵守当地法律，文明评论！（支持markdown语法）" class="layui-textarea" required></textarea>
                
                <?php else: ?>
                
                <textarea class="textarea" id="textarea" rows="5" cols="30" name="text" placeholder="遵守当地法律，文明评论！（支持markdown语法）" class="layui-textarea" required></textarea>
                
                <div class="form-item">
                    <div class="form-name">
                        <input autocomplete="off" type="text" name="author" id="author" class="form-input" placeholder="* 昵称" value="<?php $this->remember('author'); ?>" required />
                    </div>
                    <div class="form-mail">
                        <input autocomplete="off" type="email" name="mail" id="mail" lay-verify="email" class="form-input" placeholder="<?php if ($this->options->commentsRequireMail): ?>* <?php endif; ?>邮箱" value="<?php $this->remember('mail'); ?>" <?php if ($this->options->commentsRequireMail): ?>required<?php endif; ?> />
                    </div>
                    <div class="form-link">
                        <input autocomplete="off" type="url" name="url" id="url" lay-verify="url" class="form-input" placeholder="<?php if ($this->options->commentsRequireURL): ?>* <?php endif; ?><?php _e('(个人主页)https://'); ?>" value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL): ?>required<?php endif; ?> />
                    </div>
                    
                    
                   
                </div>
                <div style="font-size:14px;margin-bottom:10px">
                    （邮箱并非是必填项，如果你想要得到别人的回复建议填写邮箱，如果只是简单的留言可以把邮箱空着，不要随手写一些例如：11@11.com 的垃圾邮箱，多次发现后，将会屏蔽您的ip，多谢。请友善评论，创造美好生活！）
                </div>
                <?php endif; ?>
                
                <div class="form-submit">
                    <button type="submit"><?php _e('提交评论'); ?></button>
                   
                </div>
            </form>
        </div>
        <?php if ($comments->have()): ?>
            <br/>
            <h3><?php $this->commentsNum(_t('暂无评论'), _t('已有 %d 条评论')); ?></h3>
            <br/>
            <div class="pinglun">
                <?php $comments->listComments(); ?>
            </div>
            <div class="page-navigator page-navigator-comment">
                <?php $comments->pageNav('«', '»', 1, '...', array('wrapTag' => 'div', 'wrapClass' => 'layui-laypage layui-laypage-molv', 'itemTag' => '', 'currentClass' => 'current', )); ?>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
