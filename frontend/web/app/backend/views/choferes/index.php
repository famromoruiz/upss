<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ChoferesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Choferes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="choferes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Choferes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'apellidos',
            'gafet',
            'licencia',
            // 'clave',
            // 'referencia',
            // 'id_unidad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
