<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuManageSerach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-manage-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'appid') ?>

    <?= $form->field($model, 'is_addon') ?>

    <?php // echo $form->field($model, 'addons_name') ?>

    <?php // echo $form->field($model, 'pid') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'sort') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'tree') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
