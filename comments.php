<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<!--<article id="comments">-->
<!--    <?php $this->comments('comment')->to($comments); ?>-->
<!--    <?php if($this->allow('comment')): ?>-->
<!--        <div id="<?php $this->respondId(); ?>" class="respond">-->
<!--            <div class="comment-head"><p>发表评论<span class="cancel-comment-reply"><?php $comments->cancelReply(); ?></span></p></div>-->
<!--            <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">-->
<!--                <?php if($this->user->hasLogin()): ?>-->
<!--                <p><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="退出">退出</a></p>-->
<!--                <?php else: ?>-->
<!--                <ul class="login_meta">-->
<!--                    <li>   -->
<!--                        <input type="text" name="author" id="author" placeholder="称呼*" value="<?php $this->remember('author'); ?>" required/>-->
<!--                        <input type="text" name="mail" id="mail" placeholder="电子邮件*" value="<?php $this->remember('mail'); ?>" required/>-->
<!--                        <input type="text" name="url" id="url" placeholder="网站" value="<?php $this->remember('url'); ?>"/>-->
<!--                    </li>-->
<!--                </ul>-->
<!--                <?php endif; ?>-->
<!--                <p>-->
<!--                    <textarea rows="3" cols="50" name="text" id="textarea" placeholder="说点什么~" required ><?php $this->remember('text'); ?></textarea>-->
<!--                    <span><?php $comments->smilies(); ?></span>-->
<!--                </p>-->
<!--                <p>-->
<!--                    <button type="submit" class="submit">评 论</button>-->
<!--                </p>-->
<!--            </form>-->
<!--        </div>-->
<!--    <?php else: ?>-->
<!--    <div class="comments_state"><p>评论已关闭</p></div>-->
<!--    <?php endif; ?>-->
<!--    <?php if ($comments->have()): ?>-->
<!--        <div class="comments_count"><?php $this->commentsNum(_t('当前暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></div>-->
<!--        <div class="comments_box">-->
<!--            <?php $comments->listComments(); ?>-->
<!--            <?php $comments->pageNav(); ?>-->
<!--        </div>-->
<!--    <?php endif; ?>-->
<!--</article>-->


<link rel="stylesheet" href="<?php $this->options->themeUrl('css/comments.css'); ?>">  <!-- 改行始终存在，切勿删掉 -->


<section id="comments">
  <div class="comments-title">
    <p>Leave a comment to join the discussion.</p>
  </div>
  <div id="tcomment"></div>
  <script src="https://cdn.jsdelivr.net/npm/twikoo@1.4.9/dist/twikoo.all.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.1.8/css/lightgallery.css">
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.1.8/lightgallery.min.js"></script>
  <script>
    twikoo.init({
      envId: '',  // twikoo 腾讯云函数id，使用时查看 twikoo 官方文档
      el: '#tcomment',
      path: 'window.TWIKOO_MAGIC_PATH||window.location.pathname',
      lang: 'zh-CN',
      onCommentLoaded: function () {
        var commentContents = document.getElementsByClassName('tk-content');
        for (var i = 0; i < commentContents.length; i++) {
          var commentItem = commentContents[i];
          var imgEls = commentItem.getElementsByTagName('img');
          if (imgEls.length > 0) {
            for (var j = 0; j < imgEls.length; j++) {
              var imgEl = imgEls[j];
              var aEl = document.createElement('a');
              aEl.setAttribute('class', 'tk-lg-link');
              aEl.setAttribute('href', imgEl.getAttribute('src'));
              aEl.setAttribute('data-src', imgEl.getAttribute('src'));
              aEl.appendChild(imgEl.cloneNode(false));
              imgEl.parentNode.insertBefore(aEl, imgEl.nextSibling);
              imgEl.remove();
            }
            lightGallery(commentItem, {
              selector: '.tk-lg-link',
              share: false
            });
          }
        }
      }
    })
  </script>
</section>