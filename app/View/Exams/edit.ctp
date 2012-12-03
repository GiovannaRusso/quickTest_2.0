<div class="exams form">
<?php echo $this->Form->create('Exam'); ?>
	<fieldset>
		<legend><?php echo __('Edit Exam'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('percent');
		echo $this->Form->input('created_on');
		echo $this->Form->input('limit_date');
		echo $this->Form->input('period_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Exam.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Exam.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Exams'), array('action' => 'index')); ?></li>
	</ul>
</div>
