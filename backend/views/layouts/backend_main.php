<?php
use \yii\helpers\Html;
    $baseurl = \backend\assets\DiyAsset::register($this)->baseUrl;
    $uploader = \backend\assets\WebUploaderAsset::register($this)->baseUrl;
?>
<?php $this->beginPage()?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=Html::encode($this->title) ?></title>
    <?php $this->registerCsrfMetaTags() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="<?=$baseurl?>/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="<?=$baseurl?>/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="<?=$baseurl?>/css/amazeui.min.css" />
    <link rel="stylesheet" href="<?=$baseurl?>/css/admin.css">
    <link rel="stylesheet" href="<?=$baseurl?>/css/app.css">
    <link rel="stylesheet" href="<?=$uploader?>/webuploader.css">
    <script src="<?=$baseurl?>/js/echarts.min.js"></script>
    <script src="<?=$uploader?>/jquery-1.8.3.min.js"></script>
    <script src="<?=$uploader?>/webuploader.js"></script>

    <?php $this->head();?>
</head>

<body data-type="index">
<?php
$this->beginBody();
?>

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <a href="javascript:;" class="tpl-logo">
            <img src="<?=$baseurl?>/img/logo.png" alt="">
        </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-bell-o"></span> 提醒 <span class="am-badge tpl-badge-success am-round">5</span></span>
                </a>
                <ul class="am-dropdown-content tpl-dropdown-content">
                    <li class="tpl-dropdown-content-external">
                        <h3>你有 <span class="tpl-color-success">5</span> 条提醒</h3><a href="###">全部</a></li>
                    <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-plus tpl-dropdown-ico-btn-size tpl-badge-success"></span> 【预览模块】移动端 查看时 手机、电脑框隐藏。</a>
                        <span class="tpl-dropdown-list-fr">3小时前</span>
                    </li>
                    <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-check tpl-dropdown-ico-btn-size tpl-badge-danger"></span> 移动端，导航条下边距处理</a>
                        <span class="tpl-dropdown-list-fr">15分钟前</span>
                    </li>
                    <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-bell-o tpl-dropdown-ico-btn-size tpl-badge-warning"></span> 追加统计代码</a>
                        <span class="tpl-dropdown-list-fr">2天前</span>
                    </li>
                </ul>
            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-comment-o"></span> 消息 <span class="am-badge tpl-badge-danger am-round">9</span></span>
                </a>
                <ul class="am-dropdown-content tpl-dropdown-content">
                    <li class="tpl-dropdown-content-external">
                        <h3>你有 <span class="tpl-color-danger">9</span> 条新消息</h3><a href="###">全部</a></li>
                    <li>
                        <a href="#" class="tpl-dropdown-content-message">
                                <span class="tpl-dropdown-content-photo">
                      <img src="<?=$baseurl?>/img/user02.png" alt=""> </span>
                            <span class="tpl-dropdown-content-subject">
                      <span class="tpl-dropdown-content-from"> 禁言小张 </span>
                                <span class="tpl-dropdown-content-time">10分钟前 </span>
                                </span>
                            <span class="tpl-dropdown-content-font"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </span>
                        </a>
                        <a href="#" class="tpl-dropdown-content-message">
                                <span class="tpl-dropdown-content-photo">
                      <img src="<?=$baseurl?>/img/user03.png" alt=""> </span>
                            <span class="tpl-dropdown-content-subject">
                      <span class="tpl-dropdown-content-from"> Steam </span>
                                <span class="tpl-dropdown-content-time">18分钟前</span>
                                </span>
                            <span class="tpl-dropdown-content-font"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-calendar"></span> 进度 <span class="am-badge tpl-badge-primary am-round">4</span></span>
                </a>
                <ul class="am-dropdown-content tpl-dropdown-content">
                    <li class="tpl-dropdown-content-external">
                        <h3>你有 <span class="tpl-color-primary">4</span> 个任务进度</h3><a href="###">全部</a></li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">Amaze UI 用户中心 v1.2 </span>
                                <span class="percent">45%</span>
                                </span>
                            <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-success" style="width:45%"></div></div>
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">新闻内容页 </span>
                                <span class="percent">30%</span>
                                </span>
                            <span class="progress">
                       <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-secondary" style="width:30%"></div></div>
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">管理中心 </span>
                                <span class="percent">60%</span>
                                </span>
                            <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-warning" style="width:60%"></div></div>
                    </span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick">禁言小张</span><span class="tpl-header-list-user-ico"> <img src="<?=$baseurl?>/img/user01.png"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                    <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="<?=\yii\helpers\Url::to(['site/logout']);?>"><span class="am-icon-power-off"></span>退出</a></li>
                </ul>
            </li>
            <li><a href="<?=\yii\helpers\Url::to(['site/logout']);?>" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
        </ul>
    </div>
</header>







<div class="tpl-page-container tpl-page-header-fixed">


    <div class="tpl-left-nav tpl-left-nav-hover">
        <div class="tpl-left-nav-title">
            Amaze UI 列表
        </div>
        <div class="tpl-left-nav-list">
            <?php $url = Yii::$app->requestedRoute?>
            <ul class="tpl-left-nav-menu">
                <li class="tpl-left-nav-item">
                    <a href="<?=\yii\helpers\Url::to(['index/index'])?>" class="nav-link <?= $url == 'index/index'?'active':''?>">
                        <i class="am-icon-home"></i>
                        <span>首页</span>
                    </a>
                </li>
                <li class="tpl-left-nav-item">
                    <a href="<?=\yii\helpers\Url::to(['chart/index'])?>" class="nav-link tpl-left-nav-link-list <?= $url == 'chart/index'?'active':''?>">
                        <i class="am-icon-bar-chart"></i>
                        <span>数据表</span>
                        <i class="tpl-left-nav-content tpl-badge-danger">
                            12
                        </i>
                    </a>
                </li>

                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-table"></i>
                        <span>表格</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                    </a>
                    <?php if (isset($this->params['nav'])){?>
                    <ul class="tpl-left-nav-sub-menu" style="display: <?=$this->params['nav'] == "table"?'block':'none';?>;">
                        <?php }else{?>
                        <ul class="tpl-left-nav-sub-menu" style="display:none;">
                        <?php }?>
                        <li>
                            <a href="<?= \yii\helpers\Url::to(['table-font/index']);?>" class="<?= $url == 'table-font/index'?'active':''?>">
                                <i class="am-icon-angle-right"></i>
                                <span>文字表格</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>

                            <a href="<?= \yii\helpers\Url::to(['table-image/index']);?>" class="<?= $url == 'table-image/index'?'active':''?>">
                                <i class="am-icon-angle-right"></i>
                                <span>图片表格</span>
                                <i class="tpl-left-nav-content tpl-badge-success">
                                    18
                                </i>

                                <a href="<?= \yii\helpers\Url::to(['form-news/index']);?>" class="<?= $url == 'form-news/index'?'active':''?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>消息列表</span>
                                    <i class="tpl-left-nav-content tpl-badge-primary">
                                        5
                                    </i>


                                    <a href="<?= \yii\helpers\Url::to(['form-news-list/index']);?>" class="<?= $url == 'form-news-list/index'?'active':''?>">
                                        <i class="am-icon-angle-right"></i>
                                        <span>文字列表</span>

                                    </a>
                        </li>
                    </ul>
                </li>

                        <li class="tpl-left-nav-item">
                            <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                                <i class="am-icon-table"></i>
                                <span>菜单管理</span>
                                <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                            </a>
                            <?php if (isset($this->params['nav'])){?>
                            <ul class="tpl-left-nav-sub-menu" style="display: <?=$this->params['nav'] == "menu"?'block':'none';?>;">
                                <?php }else{?>
                                <ul class="tpl-left-nav-sub-menu" style="display:none;">
                                    <?php }?>
                                    <li>
                                        <a href="<?= \yii\helpers\Url::to(['menu-manage/index']);?>" class="<?= $url == 'menu-manage/index'?'active':''?>">
                                            <i class="am-icon-angle-right"></i>
                                            <span>栏目管理</span>
                                        </a>

<!--                                        <a href="--><?//= \yii\helpers\Url::to(['form-news-list/index']);?><!--" class="--><?//= $url == 'form-news-list/index'?'active':''?><!--">-->
<!--                                            <i class="am-icon-angle-right"></i>-->
<!--                                            <span>文字列表</span>-->
<!---->
<!--                                        </a>-->
                                    </li>
                                </ul>
                                </li>



                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-wpforms"></i>
                        <span>表单</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                    </a>
                    <?php if (isset($this->params['nav'])){?>
                    <ul class="tpl-left-nav-sub-menu" style="display: <?=$this->params['nav'] == "form"?'block':'none';?>;">
                        <?php }else{?>
                        <ul class="tpl-left-nav-sub-menu" style="display: none;">
                        <?php }?>
                        <li>
                            <a href="<?=\yii\helpers\Url::to(['form-amazeui/index'])?>" class="<?= $url == 'form-amazeui/index'?'active':''?>">
                                <i class="am-icon-angle-right"></i>
                                <span>Amaze UI 表单</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>

                            <a href="<?=\yii\helpers\Url::to(['form-line/index'])?>" class="<?= $url == 'form-line/index'?'active':''?>">
                                <i class="am-icon-angle-right"></i>
                                <span>线条表单</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <?=$content?>
</div>
<script src="<?=$baseurl?>/js/jquery-2.1.1.js"></script>
<script src="<?=$baseurl?>/js/amazeui.min.js"></script>
<script src="<?=$baseurl?>/js/iscroll.js"></script>s
<script src="<?=$baseurl?>/js/app.js"></script>
<?=$this->blocks['js']?>
<?php $this->endBody();?>
</body>
</html><!doctype html>
<?php $this->endPage();?>
