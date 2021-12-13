<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'date'      =>  _t('在<span> %s </span>发布的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php if ($this->is('post')) $this->category(',', false);?><?php if ($this->is('post')) echo ' - ';?><?php $this->options->title(); ?></title>

	<link rel="stylesheet" href="<?php $this->options->themeUrl('code/pre.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/main.css'); ?>">
    <link rel='icon' href='https://img.xiabanlo.cn/favicon.ico' type='image/x-icon' />
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header("generator=&template=&pingback=&wlw=&xmlrpc=&rss1=&atom=&rss2=/feed"); ?>
    <script src="https://cdn.xiabanlo.cn/list/jquery3.6.0.js"></script>
    <link rel="stylesheet" href="https://cdn.xiabanlo.cn/list/zoom.css">
</head>
<body>
<div class="container">
    <header id="header">
        <h1 class="site-title">
            <?php if ($this->options->logoUrl): ?>
                <a href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                </a>
            <?php else: ?>
                <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
            <?php endif; ?>
        </h1>
        <p class="site-description"><?php $this->options->description() ?></p>
    </header>
    <div class="menubar">
    <div class="mhome"><a <?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></div>
    <button id="menubutton" disable="enable" onclick="var qr = document.getElementById('menu'); if (qr.style.display === 'block') {qr.style.display='none';} else {qr.style.display='block'}">
                <span><i></i><i></i><i></i></span></button>
    <div id="menu">
        <nav id="nav-menu" role="navigation">
        <li class="whome"><a <?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>

            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            <li><a <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
			<li id="search">
			    <button class="search-form-input">搜索</button>
			</li>
			<div class="clearfix"></div>
        </nav>
    </div>
    <div class="clearfix"></div>
    </div>