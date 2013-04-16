<?php
/** 
 * View inscrever
 */
?>

<h3>Inscrição</h3>
<!-- Init Form -->
<?php echo $this->Form->create('Inscricao', 
	array(
		'url' => array('controller' => 'inscricoes', 'action' => 'inscrever'),
		'class' => 'form-horizontal',
	)
); ?>
	<!-- Itens Form -->
	<?php echo $this->Form->input('nome', array('placeholder'=>'Nome')); ?>
	<?php echo $this->Form->input('email', array('placeholder'=>'Email')); ?>
	<?php echo $this->Form->input('telefone', array('placeholder'=>'Telefone')); ?>
	<?php echo $this->Form->input('endereco', array('label'=>'Endereço', 'placeholder'=>'Endereço')); ?>
	<?php echo $this->Form->submit('Inscrever-se'); ?>
<!-- End Form -->
<?php echo $this->Form->end(); ?>