<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chart */

$this->title = 'Update Chart: ' . $model->id_chart;
$this->params['breadcrumbs'][] = ['label' => 'Charts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_chart, 'url' => ['view', 'id' => $model->id_chart]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
