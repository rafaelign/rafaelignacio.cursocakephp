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
    <?php echo $this->Html->css(array('cake.generic', 'bootstrap.min', 'bootstrap-responsive')); ?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <?php echo $this->Html->meta('icon'); ?>
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px; 
        }

        footer {
            text-align: right;
        }

        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }
      </style>
</head>
<body>
    <!-- Menu
    ======================================================================= -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brand" href="#">Painel de Controle I DSP de TI</a>
                <div class="nav-collapse collapse">
                    <p class="navbar-text pull-right">
                        Logado como <?php echo AuthComponent::user('nome'); ?>
                        <?php echo $this->Html->link(' [Sair] ', array('controller'=>'usuarios', 'action'=>'logout', 'painel'=>true), array('class'=>'navbar-link')); ?>
                    </p>
                    <ul class="nav">
                        <li><?php echo $this->Html->link('Inscrições', array('controller'=>'inscricoes', 'action'=>'index', 'painel'=>true)); ?></li>
                        <li><?php echo $this->Html->link('Palestras', array('controller'=>'palestras', 'action'=>'index', 'painel'=>true)); ?></li>
                        <li><?php echo $this->Html->link('Palestrantes', array('controller'=>'palestrantes', 'action'=>'index', 'painel'=>true)); ?></li>
                        <li><?php echo $this->Html->link('Usuários', array('controller'=>'usuarios', 'action'=>'index', 'painel'=>true)); ?></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Content
    ======================================================================= -->
    <div class="container-fluid">
        <div class="row-fluid">
            <span class="span12">
                <?php echo $this->element('msg-demo'); ?>
                <?php echo $this->Session->flash(); ?>
                <div class="well pull-left" style="width: 97%">
                    <?php echo $this->fetch('content'); ?>
                </div>
            </span>
        </div>
        <hr />
        <!-- Footer
        =================================================================== -->
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
    </div>

    <!-- Load JS Files -->
    <?php echo $this->Html->script(array('http://code.jquery.com/jquery-1.9.1.min.js', 'bootstrap.min', 'main.js')); ?>
    <!-- EOF Load JS Files -->
</body>
</html>
