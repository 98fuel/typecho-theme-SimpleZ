<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>

    <?php if($this->allow('comment')): ?>
        <?php if ($this->is('attachment')) : ?>
        <?php _e(''); ?>
        <?php else: ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h2><?php _e('发表评论'); ?></h2>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<div class="comment-text">
    		    <p>
        			<input autocomplete="off" placeholder="昵称 *" type="text" name="author" id="author" class="text" value="" required />
        		</p>
        		<p>
        			<input autocomplete="off" placeholder="邮箱<?php if ($this->options->commentsRequireMail): ?> *<?php endif; ?>" type="email" name="mail" id="mail" class="text" value=""<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
        		</p>
        		<p>
        			<input autocomplete="off" type="url" name="url" id="url" class="text" placeholder="网站<?php if ($this->options->commentsRequireURL): ?> *<?php endif; ?>" value=""<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
        		</p>
    		</div>
		    <p>
                <nocompress><?php spam_protection_math();?></nocompress>
		    </p>
            <?php endif; ?>
    		<div class="textarea-main">
    		    
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('misubmit').click();return false};" placeholder="<?php _e('参与讨论....'); ?>" required ><?php $this->remember('text'); ?></textarea>
                <?php $comments->smilies(); ?>
    		</div>
    		
    		<p>
                <button type="submit" class="submit" id="misubmit"><?php _e('发表评论'); ?></button>
            </p>
    	</form>
    </div>
    <?php endif; ?>
    <?php else: ?>
    <?php _e(''); ?>
    <?php endif; ?>
    
    <?php if ($comments->have()): ?>
	<div class="respondtitle"><h2><?php $this->commentsNum(_t('暂无评论'), _t('仅有 1 条评论'), _t('已有 %d 条评论')); ?></h2></div>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>
</div>