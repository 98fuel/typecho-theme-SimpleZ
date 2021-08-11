<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
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
        ), '', ' | '); ?><?php $this->options->title(); ?> </title>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
    <link rel="shortcut icon" href="https://img.shuxhan.com/favicon.ico"> <!-- 网站icon -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>?t=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/comments.css'); ?>"> <!-- 评论 -->
    <script src="<?php $this->options->themeUrl('js/jquery3.6.0.js'); ?>"></script>

</head>
<body>
<div class="header">
    <div class="header-wrap">
        <a class="logo" href="<?php $this->options->siteUrl(); ?>">
            <?php $this->author->gravatar('40') ?>
        </a>
        <div></div>
        <ul class="nav" id="nav">
            <li class="nav-item <?php if($this->is('index')): ?><?php endif; ?>">
                <a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a> 
            </li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            <li class="nav-item <?php if($this->is('page', $pages->slug)): ?><?php endif; ?>">
                <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a> 
            </li>
            <?php endwhile; ?>
            <li>
                <form action="<?php $this->options->siteUrl(); ?>/search">
                    <img class="search search-form-input" src="https://shuxhan.com/usr/themes/Simple/img/search-block.png">
                </form>
            </li>
        </ul>
        <span class="menu-icon">menu</span>
    </div>
</div>
</div>
