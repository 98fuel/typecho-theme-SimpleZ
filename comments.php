<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!-- 搜索 gitalk 进行配置 -->
<h3>评论~</h3>
<div id="gitalk-container"></div>
<script>
    var gitalk = new Gitalk({
        clientID: '', 
        clientSecret: '', 
        repo: '',    
        owner: '', 
        admin: [''], 
        id: location.pathname, 
    })
    
    gitalk.render('gitalk-container'); 
</script>

