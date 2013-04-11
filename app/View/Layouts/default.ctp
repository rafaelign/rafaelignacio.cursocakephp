<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php #echo $this->Html->css('cake.generic'); ?>
    <?php echo $this->fetch('meta'); ?>
    <?php echo $this->fetch('css'); ?>

    <!-- CSS -->
    <?php echo $this->Html->css('bootstrap.min'); ?>
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
        footer { 
            text-align: center;
        }
        a.brand { color: #F55 !important; }
        div.box-img { text-align: center; }
    </style>
    <?php echo $this->Html->css('bootstrap-responsive.min'); ?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <?php echo $this->Html->meta('icon'); ?>
</head>
<body>
    <?php echo $this->element('menu', array(
        'itensMenu'=>array(
            array('href'=>'sobre-evento', 'icon'=>'icon-home', 'label'=>'Sobre o Evento'),
            array('href'=>'como-chegar', 'icon'=>'icon-map-marker', 'label'=>'Como Chegar'),
        ),
    )); ?>

    <div class="container">

        <?php echo $this->element('msg-demo'); ?>

        <!-- Example row of columns -->
        <div class="row">
            <div class="span12">
                <?php echo $this->Session->flash(); ?>
                <div class="box-img">
                    <img src="img/pti.png" class="img-rounded">
                </div>

                <hr />
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>

        <hr />

        <footer>
            <p>
                © I Debate Sobre Profissionais de TI 2013
                <?php echo $this->Html->link(
                    '<span class=\'label label-info\'>CakePHP v. '.Configure::version().'</span>',
                    'http://www.cakephp.org/',
                    array('target' => '_blank', 'escape' => false)
                );
                ?>
            </p>
        </footer>

    </div> <!-- /container -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script-->
    <!-- Load JS Files -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <?php echo $this->Html->script('bootstrap.min'); ?>
    <!-- EOF Load JS Files -->
</body>
</html>
