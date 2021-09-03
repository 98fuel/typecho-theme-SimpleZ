<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="footer">
    <span>
        <?php echo online_users() ?>
        <?php echo timer_stop();?>
    </span>
   
    <span>&nbsp;<?php echo theAllViews();?></span>
    
    <div style="padding:10px 0;">
        <span>&copy; 2020 - <?php echo date('Y'); ?>&nbsp;<?php $this->options->title() ?> </span>
    </div>

</div>

<!--返回顶部-->
<a id="gotop">
    <span id="gotopvalue">0%</span>
    <span>top</span>
</a>

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
