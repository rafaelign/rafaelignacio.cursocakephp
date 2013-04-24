<h1 class="featurette-heading">Palestras</h1>
<?php
if (isset($palestras) && !empty($palestras)) {
    foreach ($palestras as $i => $palestra) {
        ?>
        <div class="featurette">
            <h2 class="featurette-heading"><?php echo $palestra['Palestra']['nome']; ?>. 
                <span class="muted pull-right">
                    <?php 
                    $link = '/palestrante/'.strtolower(Inflector::slug($palestra['Palestrante']['nome'], '-')).'/'.$palestra['Palestrante']['id'];
                    echo $this->Html->link($palestra['Palestrante']['nome'], $link);
                    ?>.
                </span>
            </h2>
            <p class="lead">
                <?php echo $palestra['Palestra']['descricao']; ?>
                <span class="label label-warning pull-right">
                    <?php echo date('H\h:i\m\i\n', strtotime($palestra['Palestra']['inicio'])); ?>
                </span>
            </p>
        </div>

        <?php
        if ($i < (count($palestras) - 1)) {
            ?>
            <hr class="featurette-divider">
            <?php
        }
    }
}
?>