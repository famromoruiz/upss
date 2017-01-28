<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\UnidadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidades-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Unidades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'marca',
            'modelo',
            'color',
            'placas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
