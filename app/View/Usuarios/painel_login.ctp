<?php echo $this->Session->flash(); ?>
<?php echo $this->Session->flash('auth'); ?>

<?php echo $this->Form->create('Usuario'); ?>
    <?php echo $this->Form->input('login'); ?>
    <?php echo $this->Form->input('senha', array('type'=>'password')); ?>
<?php echo $this->Form->end('Entrar'); ?>