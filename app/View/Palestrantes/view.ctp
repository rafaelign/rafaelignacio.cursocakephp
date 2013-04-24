<?php
if (isset($palestrante) && !empty($palestrante)) {
    ?>
    <div class="featurette">
        <?php echo $this->Html->image('palestrante.png', array('class'=>'featurette-image pull-right')); ?>
        <h2 class="featurette-heading"><?php echo $palestrante['Palestrante']['nome']; ?>.</h2>
        <p class="lead">
            <?php echo $palestrante['Palestrante']['descricao']; ?>
        </p>
        <h4 class="featurette-heading">
            <?php echo $this->Html->link('Site', $palestrante['Palestrante']['site'], array('target'=>'_blank')); ?>
        </h4>
    </div>
    <?php
}
?>