<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Unidades */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Unidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Nueva Unidad'];

?>
<div class="unidades-create">

    <h1></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
