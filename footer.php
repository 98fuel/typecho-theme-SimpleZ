<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="footer">
    <span>&copy; 2020 - <?php echo date('Y'); ?> · <?php $this->options->title() ?> </span> ·  <span>已运行 <span id="days"> </span> 天</span> 
    <div style="padding:10px 0;">
        <a href="https://beian.miit.gov.cn/" target="_blank"><span> 浙ICP备2021002261号-1</span></a> ·
        <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33010802011426" target="_blank">
            <span style="margin: 0;"> 浙公网安备 33010802011426号</span>
        </a>
    </div>


</div>

<!--返回顶部-->
	<a class="top-btn" id="">
		<div>
			<i></i>
			<i></i>
		</div>
	</a>

<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('js/toc.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>


</body>
</html>
