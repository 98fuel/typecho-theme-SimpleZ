<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <footer id="footer">
        <p>&copy; 2020 - <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>·<a href="https://beian.miit.gov.cn/" target="_blank"><span> 浙ICP备2021002261号-2</span></a>·<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33010802012091"><img src="https://img.xiabanlo.cn/beian.png" >浙公网安备 33010802012091号</a></p>
            <p>博客已运行<span id="days">0</span>天 · 共计<?php WordsCounter_Plugin::allOfCharacters(); ?>字 · 访客量：<?php echo theAllViews();?> 次</p>
    
    
    <a class="top-btn">
        <div><i></i><i></i></div>
    </a>
    <!--图片灯箱-->
    <img src="" alt="" class="bigimg">
	<div class="mask"></div>
	<!---->
    </footer>
    <script src="https://cdn.xiabanlo.cn/list/zoom.js"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('code/pre.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('/main.js'); ?>"></script>
</div>
<?php $this->footer(); ?>
</body>
</html>