<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Servicios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <section>
        <div id="productos">
          <h3>Servicios</h3> <!--id productos-->
        <aside><!-- Este Aside muestra un producto-->
            <a href=""><img src="" alt=""/></a>
           <h4><a href=" ">Hoteles</a></h4>
            <p>Los mejores descuentos en hoteles 5 estrellas</p>
            <p><strong>noches desde $316.00 MXN por persona</strong></p>
            <div class="barinf">
            <a href="lista-productos-carrito.html"><i class="fa fa-shopping-cart"></i></a>
            <a href="lista-deseos.html"><i class="fa fa-heart"></i> </a>
                </div><!--terminadiv class="barinf"-->
        </aside>
        <aside><!-- Este Aside muestra un producto-->
              <a href=""><img src="" alt=""/></a>
              <h4><a href="">Transporte</a></h4>
              <p> Vuela a Cancún desde</p>
              <p><strong>$700.00 MXN</strong></p>
              <div class="barinf">
                <a href="lista-productos-carrito.html"><i class="fa fa-shopping-cart"> </i></a>
                <a href="lista-deseos.html"><i class="fa fa-heart"></i> </a>
                </div><!--terminadiv class="barinf"-->
        </aside>
        <aside><!-- Este Aside muestra un producto-->
                <a href=""><img src="" alt=""/></a>
                <h4><a href="">Paquetes</a></h4>
                <p>Crucero por el Caribe</p>
                <p><strong>Suite desde $5,559.00 MXN</strong></p>
                <div class="barinf">
                  <a href="lista-productos-carrito.html"><i class="fa fa-shopping-cart"></i></a>
                  <a href="lista-deseos.html"><i class="fa fa-heart"></i> </a>
                </div><!--terminadiv class="barinf"-->
              </aside>
                <div class="reset"></div>
      </div><!--Termina div productos-->
    </div></div>
</section>

    <code><?= __FILE__ ?></code>
</div>
