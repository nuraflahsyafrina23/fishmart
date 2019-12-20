<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Charts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chart-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Chart', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_chart',
            'username',
            'id_produk',
            'total',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
