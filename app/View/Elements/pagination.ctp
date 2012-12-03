<?php //if((isset($show_counter)) && $show_counter == true) { ?>
<div class="paging-info">
        <?php
        echo $this->Paginator->counter(array(
        'format' => __('Página %page% de %pages%, mostrando %current% registros de %count% en total, empezando en el registro %start%, terminando en %end%')
        ));
        ?>
</div>
<?php //} ?>

<?php //if((isset($show_pagination)) && $show_pagination == true) { ?>
<div class="cake-paging">
        <ul>
                <?php echo $this->Paginator->first( $this->Html->image('/img/icons/navigation/first.png', array('alt' => '&nbsp;', 'width' => '10', 'height' => '10')) . 'Primero', array('tag' => 'li', 'class' => 'first', 'escape' => false)); ?>
                <?php echo $this->Paginator->prev( $this->Html->image('/img/icons/navigation/previous.png', array('alt' => '&nbsp;', 'width' => '10', 'height' => '10')) . 'Anterior', array('tag' => 'li', 'class' => 'previous', 'escape' => false), null, array('tag' => 'li', 'class' => 'previous disabled', 'escape' => false));?>
                <?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => null)); ?>
                <?php echo $this->Paginator->next( 'Siguiente' . $this->Html->image('/img/icons/navigation/next.png', array('alt' => '&nbsp;', 'width' => '10', 'height' => '10')), array('tag' => 'li', 'class' => 'next', 'escape' => false), null, array('tag' => 'li', 'class' => 'next disabled', 'escape' => false));?>
                <?php echo $this->Paginator->last( '&Uacute;ltimo' . $this->Html->image('/img/icons/navigation/last.png', array('alt' => '&nbsp;', 'width' => '10', 'height' => '10')), array('tag' => 'li', 'class' => 'last', 'escape' => false)); ?>
        </ul>
</div>
<?php //} ?>