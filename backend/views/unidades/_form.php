<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Unidades */
/* @var $form yii\widgets\ActiveForm */
$titulo = $model->isNewRecord ? 'Nueva':'Actualizar';
?>

<div class="box box-primary">
	<?php $form = ActiveForm::begin(); ?>
            <div class="box-header with-border">
              <h3 class="box-title"><?= $titulo?> Unidad</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Marca</label>
                    <?= $form->field($model, 'marca')->textInput(['maxlength'=> true ,'class'=>'form-control'])->label(false) ?>
                  <!--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">-->
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Modelo</label>
                  <?= $form->field($model, 'modelo')->textInput(['maxlength'=> true ,'class'=>'form-control'])->label(false) ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Color</label>
                  <?= $form->field($model, 'color')->textInput(['maxlength'=> true ,'class'=>'form-control'])->label(false) ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Placas</label>
                  <?= $form->field($model, 'placas')->textInput(['maxlength'=> true ,'class'=>'form-control'])->label(false) ?>
                </div>
                
                
              <!-- /.box-body -->

              <div class="box-footer">
                <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
              </div>
            </form>
            <?php ActiveForm::end(); ?>
          </div>