<div class="userTypes form">
<?php echo $this->Form->create('UserType'); ?>
	<fieldset>
		<legend><?php echo __('Add User Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List User Types'), array('action' => 'index')); ?></li>
	</ul>
</div>