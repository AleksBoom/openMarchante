<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="css/responsiveslides.css"/>
    
</head>
<body>

<header id="barsup"><!-- Considerar este encabezado como una barra de estado superior
    -->
      <aside id="moneda">$ Moneda <i class="fa fa-caret-down"></i></aside>
      <nav id="menuStat" ><a href="contacto.html"> <i class="fa fa-phone"></i> 55 50 51 53</a>
        <a href="login.html"><i class="fa fa-user"></i> User  </a><a href="lista-deseos.html"> <i class="fa fa-heart"></i> Deseos </a>
        <a href="lista-productos-carrito.html"><i class="fa fa-shopping-cart"></i> Carrito</a> <a href="login.html"><i class="fa fa-sign-out"></i> Salir</a>
      </nav><!-- Termina NAV menuStat-->
      <div class="reset">
      </div>
  </header>
  <header>
      <a href="index.php"><img src="img/logo268x51.png" alt="OpenMarchante-logo"/>
 </a>
      <aside id="carStatus">
        <i class="fa fa-shopping-cart"></i> 0 item(s)-$0.00
      </aside>
      <form action="index.html" method="get">
        <input id="busqueda" type="text" name="palabras"
        required placeholder="haga una búsqueda"/><button id="submit"
        type="submit"><i class="fa fa-search"></i></button>
      </form>

      </header>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'OpenMarchante',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Nosotros', 'url' => ['/site/index']],
            ['label' => 'Destinos', 'url' => ['/site/destinos']],
            ['label' => 'Servicios', 'url' => ['/site/servicios']],
            ['label' => 'Contacto', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ?
                ['label' => 'Entrar', 'url' => ['/site/login']] :
                [
                    'label' => 'Salir (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div><!--terminadiv class="container"-->
</div><!--termina div class="wrap"-->


<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <img src="img/got-it-logo80x73.png" alt="got-it! logo"/>  <?= date('Y') ?></p>

        <!--<p class="pull-right"><?= Yii::powered() ?></p>-->
    </div>
    <section>
    <aside>
      <h3>Información</h3>
      <ul>
          <li><a href="index.php">Acerca de</a></li>
          <li><a href="politicasdeuso.html">Privacy Policy</a></li>
          <li><a href="terminosycondiciones.html">Terms & Conditions</a></li>
        </ul>
    </aside>
    <aside>
      <h3>Customer Service</h3>
      <ul>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="index.php">Returns</a></li>
    </ul>
    </aside>
    <aside>
      <h3>Extras</h3>
      <ul>
          <li><a href="http://www.despegar.com.mx/">Despegar.com</a></li>
          <li><a href="http://www.mundotravel.es/">Mundo travel</a></li>
          <li><a href="http://www.bestday.com.mx/">BestDay</a></li>
          <li><a href="http://mundojoven.com/">Mundo Joven</a></li>
    </ul>
    </aside>
    <aside class="ultimo">
      <h3>Mi cuenta</h3>
      <ul>
        <li><a href="login.php">Login</a></li>
        <li><a href="">Registrar nuevo usuario</a></li>
        <li><a href="">Lista de deseos</a></li>
        <li><a href="">Lista de compras</a></li>
    </ul>
    </aside>
    <div class="reset">
    </div>
    <hr/>
    <p>Power By OpenMarchante: got it!<br/>
      Your Store, CopyLeft 2015</p>
  </section>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
