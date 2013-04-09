<?php
/**
 *
 * PHP 5
 *
 * Página principal;
 *
 * @author		  Ignácio, Rafael Crispim
 * @package       app.View.Pages
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>

<!-- Main hero unit for a primary marketing message or call to action -->
<div class="row">
	<div class="span6">
		<h2>Quem São?</h2>
		<p>Quem são esses que se categorizam como Profissionais de TI e porque eles fazem isso?</p>
	</div>

	<div class="span6">
		<h2>Onde Vivem?</h2>
		<p>Onde residem estes Profissionais?</p>
	</div>

	<div class="span6">
		<h2>Como Sobrevivem?</h2>
		<p>Como sobrevivem em meio a tanta pressão?</p>
	</div>

	<div class="span6">
		<h2>O que Pensam?</h2>
		<p>No que pensam essas criaturas quando estão trabalhando e quando estão de folga(folga?)?</p>
	</div>
</div>
