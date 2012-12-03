<div class="periods form">
<?php echo $this->Form->create('Period'); ?>
	<fieldset>
		<legend><?php echo __('Edit Period'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('course_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Period.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Period.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Periods'), array('action' => 'index')); ?></li>
	</ul>
</div>
