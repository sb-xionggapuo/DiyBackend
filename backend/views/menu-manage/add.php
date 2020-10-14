<?php
$baseurl = \backend\assets\DiyAsset::register($this)->baseUrl;
?>
<div class="tpl-content-wrapper">
    <div class="tpl-content-page-title">
        Amaze UI 表单
    </div>
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li><a href="#">表单</a></li>
        <li class="am-active">Amaze UI 表单</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 表单
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">
                <div class="portlet-input input-small input-inline">
                    <div class="input-icon right">
                        <i class="am-icon-search"></i>
                        <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                </div>
            </div>


        </div>
<?php $form = \yii\widgets\ActiveForm::begin()?>
        <?=$form->field($model,"name")->label("请输入别名")?>
        <?=$form->field($model,"title")->label("请输入标题")?>
<!--        --><?//=$form->field($model,"image")->fileInput()->label("请选择图片")?>


        <div class="form-group field-menuform-image required">
            <label class="control-label" for="menuform-image">请选择图片</label>
            <input type="hidden" name="MenuForm[image]" value="">
            <div id="cupload"></div>
            <div class="help-block"></div>
        </div>

        <?=$form->field($model,"pid")->dropDownList(
            \yii\helpers\ArrayHelper::map($data,'id', 'title'),
                ["prompt"=>"请选择"])->label("请选择父栏目")?>
        <?=$form->field($model,"status")->radioList([
                0   =>     "隐藏",
                1   =>     "显示",
        ],["prompt"=>"请选择状态"])->label("状态")?>
        <?=$form->field($model,"sort")->textInput()->label("请输入排序")?>
        <div class="form-group">
            <?= \yii\helpers\Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
        </div>
<?php \yii\widgets\ActiveForm::end()?>



</div>








</div>
<?php $this->beginBlock('js');?>
    <script>
        var cuploadCreate = new Cupload({
            ele: '#cupload',
            url:"<?=\yii\helpers\Url::to(['menu-manage/up'])?>"
        });
    </script>
<?php $this->endBlock();?>