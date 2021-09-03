<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
    <link rel="stylesheet" href="https://cdn.shuxhan.com/normalize.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>?t=<?php echo time(); ?>">
    <script src="<?php $this->options->themeUrl('js/jquery3.6.0.js'); ?>"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/gitalk@1/dist/gitalk.css">
    <script src="https://cdn.jsdelivr.net/npm/gitalk@1/dist/gitalk.min.js"></script>
</head>
<body>
<div class="header">
    <div class="header-wrap">
        <a class="logo" href="<?php $this->options->siteUrl(); ?>">
            <span><?php $this->options->title() ?></span>
        </a>
        <ul class="nav" id="nav">
            <li class="nav-item <?php if($this->is('index')): ?><?php endif; ?>">
                <a href="<?php $this->options->siteUrl(); ?>"><?php _e('Home'); ?></a> 
            </li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            <li class="nav-item <?php if($this->is('page', $pages->slug)): ?><?php endif; ?>">
                <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a> 
            </li>
            <?php endwhile; ?>
            <li class="search-wrap">
                <form action="<?php $this->options->siteUrl(); ?>/search">
                    <img class="search search-form-input" src="https://shuxhan.com/usr/themes/SimpleZ/img/search-white.png">
                </form>
            </li>
        </ul>
        
        <div class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
