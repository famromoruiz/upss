<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\UnidadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidades-index box box-primary">

    <h1></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            

            'id',
            'marca',
            'modelo',
            'color',
            'placas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <p>
        <?= Html::a('Nueva Unidad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>


