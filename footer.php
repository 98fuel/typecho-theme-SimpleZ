<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="footer">
    <span>
        <?php echo online_users() ?>
        <?php echo timer_stop();?>
    </span>
   
    <span>&nbsp;<?php echo theAllViews();?></span>
    
    <div style="padding:10px 0;">
        <span>&copy;  <?php echo date('Y'); ?>&nbsp;<?php $this->options->title() ?> </span>&nbsp;
        <span> 备案号请复制粘贴到 footer.php 文件中 </span>
    </div>

</div>

<!--返回顶部-->
<a id="gotop">Scroll to top</a>
<!--网页顶部进度条-->
<progress id="content_progress" value="0"></progress>

<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/gh/Tokinx/Lately@master/lately.js"></script>
<script>
    Lately({
        'target' : '.lately-a,.lately-b,.lately-c'
    })
</script>

</body>
</html>
