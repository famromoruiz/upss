<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';



?>
<div class="site-index">

    

    <div class="body-content">

       <?php

/* @var $this yii\web\View */

$this->title = 'Panel';
?>
<div class="site-index">

   <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $unid?></h3>

              <p>Unidades Activas</p>
            </div>
            <div class="icon">
              <i class="fa fa-taxi"></i>
            </div>
            
            <?= Html::a('Ver <i class="fa fa-arrow-circle-right"></i>', ['/unidades/index'], ['class' => 'small-box-footer']) ?>

          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $unidl?></h3>

              <p>Unidades Libres</p>
            </div>
            <div class="icon">
              <i class="fa fa-taxi"></i>
            </div>
            <a href="#" class="small-box-footer">Localizar <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $unidt?></h3>

              <p>Unidades en reparacion</p>
            </div>
            <div class="icon">
              <i class="fa fa-taxi"></i>
            </div>
            <a href="#" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $unido?></h3>

              <p>Unidades Ocupadas</p>
            </div>
            <div class="icon">
              <i class="fa fa-taxi"></i>
            </div>
            <a href="#" class="small-box-footer">Localizar <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
</div>


    </div>
</div>
