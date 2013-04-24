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
    <?php echo $this->fetch('meta'); ?>

    <!-- CSS -->
    <?php echo $this->Html->css(array('bootstrap.min', 'main.css', 'bootstrap-responsive.min')); ?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <?php echo $this->Html->meta('icon'); ?>
</head>
<body>
    <!-- Navbar
    ======================================================================= -->
    <?php echo $this->element('menu', array(
        'itensMenu'=>array(
            array('href'=>array('controller'=>'pages', 'action'=>'display', 'home'), 'label'=>'Sobre o Evento'),
            array('href'=>array('controller'=>'pages', 'action'=>'display', 'localizacao'), 'label'=>'Como Chegar'),
            array('href'=>array('controller'=>'inscricoes', 'action'=>'inscrever'), 'label'=>'Inscrição'),
            array('href'=>array('controller'=>'palestras', 'action'=>'index'), 'label'=>'Palestras'),
            array('href'=>array('controller'=>'palestrantes', 'action'=>'index'), 'label'=>'Palestrantes'),
        ),
    )); ?>

    <div id="header">
        <span class="jumbotron">
            <?php echo $this->Html->image('header.png', array()); ?>
        </span>
    </div>

    <div class="container">

        <?php echo $this->element('msg-demo'); ?>

        <!-- Example row of columns -->
            <div class="row">
            <div class="span12">
                <?php echo $this->Session->flash(); ?>

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

    <!-- Load JS Files -->
    <?php echo $this->Html->script(array('http://code.jquery.com/jquery-1.9.1.min.js', 'bootstrap.min', 'main.js')); ?>
    <!-- EOF Load JS Files -->
</body>
</html>
