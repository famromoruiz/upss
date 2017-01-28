<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ChoferesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Choferes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="choferes-index box box-primary">

    <h1></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'clave',
            'nombre',
            'apellidos',
            'gafet',
            'licencia',
            // 'referencia',
            // 'id_unidad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <p>
        <?= Html::a('Agregar Chofer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
