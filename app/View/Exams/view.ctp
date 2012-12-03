<div class="exams view">
<h2><?php  echo __('Exam'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($exam['Exam']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Percent'); ?></dt>
		<dd>
			<?php echo h($exam['Exam']['percent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created On'); ?></dt>
		<dd>
			<?php echo h($exam['Exam']['created_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Limit Date'); ?></dt>
		<dd>
			<?php echo h($exam['Exam']['limit_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Period Id'); ?></dt>
		<dd>
			<?php echo h($exam['Exam']['period_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exam'), array('action' => 'edit', $exam['Exam']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Exam'), array('action' => 'delete', $exam['Exam']['id']), null, __('Are you sure you want to delete # %s?', $exam['Exam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Exams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam'), array('action' => 'add')); ?> </li>
	</ul>
</div>
