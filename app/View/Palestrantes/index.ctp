<h1 class="featurette-heading">Palestrantes</h1>
<?php
if (isset($palestrantes) && !empty($palestrantes)) {
    foreach ($palestrantes as $i => $palestrante) {
        ?>
        <div class="featurette">
            <?php echo $this->Html->image('palestrante.png', array('class'=>'featurette-image pull-right')); ?>
            <h2 class="featurette-heading">
                <?php 
                $link = '/palestrante/'.strtolower(Inflector::slug($palestrante['Palestrante']['nome'], '-')).'/'.$palestrante['Palestrante']['id'];
                echo $this->Html->link($palestrante['Palestrante']['nome'], $link);
                ?>.
            </h2>
            <p class="lead">
                <?php echo $palestrante['Palestrante']['descricao']; ?>
            </p>
        </div>

        <?php
        if ($i < (count($palestrantes) - 1)) {
            ?>
            <hr class="featurette-divider">
            <?php
        }
    }
}
?>