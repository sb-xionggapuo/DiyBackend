<?php
$baseurl = \backend\assets\DiyAsset::register($this)->baseUrl;
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>登录界面</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="<?=$baseurl?>/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="<?=$baseurl?>/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="<?=$baseurl?>/css/amazeui.min.css" />
    <link rel="stylesheet" href="<?=$baseurl?>/css/admin.css">
    <link rel="stylesheet" href="<?=$baseurl?>/css/app.css">
</head>

<body data-type="login">

<div class="am-g myapp-login">
    <div class="myapp-login-logo-block  tpl-login-max">
        <div class="myapp-login-logo-text">
            <div class="myapp-login-logo-text">
                Amaze UI<span> Login</span> <i class="am-icon-skyatlas"></i>

            </div>
        </div>

        <div class="login-font">
            <i>Log In </i> or <span> Sign Up</span>
        </div>
        <div class="am-u-sm-10 login-am-center">
                <?php $form = \yii\widgets\ActiveForm::begin()?>
                <fieldset>
                    <div class="am-form-group">
                        <div class="am-form-group">
                        <?=$form->field($model,'username',['options' =>['class' => 'bigDiv','id'    =>  'doc-ipt-email-1'] ])->label("用户名")?>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <div class="form-group field-loginform-password required">
                            <?=$form->field($model,'password')->passwordInput()->label("密码")?>
                        </div>
                    </div>
                    <p><?php echo \yii\helpers\Html::submitButton("登录")?></p>
                </fieldset>
                <?php \yii\widgets\ActiveForm::end()?>
        </div>
    </div>
</div>
<script src="<?=$baseurl?>/js/jquery-2.1.1.js"></script>
<script src="<?=$baseurl?>/js/amazeui.min.js"></script>
<script src="<?=$baseurl?>/js/app.js"></script>

</body>
</html>
