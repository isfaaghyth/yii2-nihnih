<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Matakuliah */

$this->title = 'Create Matakuliah';
$this->params['breadcrumbs'][] = ['label' => 'Matakuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matakuliah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
