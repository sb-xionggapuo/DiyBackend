<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuManage */

$this->title = 'Create Menu Manage';
$this->params['breadcrumbs'][] = ['label' => 'Menu Manages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-manage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
