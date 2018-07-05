<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Matakuliah */

$this->title = 'Update Matakuliah: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Matakuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matakuliah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
