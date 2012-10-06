<div class="tiposClientes view">
<h2><?php  echo __('Tipos Cliente');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tiposCliente['TiposCliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Tipo Cliente'); ?></dt>
		<dd>
			<?php echo h($tiposCliente['TiposCliente']['nombre_tipo_cliente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carpeta Archivos'); ?></dt>
		<dd>
			<?php echo h($tiposCliente['TiposCliente']['carpeta_archivos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipos Cliente'), array('action' => 'edit', $tiposCliente['TiposCliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipos Cliente'), array('action' => 'delete', $tiposCliente['TiposCliente']['id']), null, __('Are you sure you want to delete # %s?', $tiposCliente['TiposCliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Listas'), array('controller' => 'tipos_listas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Lista'), array('controller' => 'tipos_listas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tipos Listas');?></h3>
	<?php if (!empty($tiposCliente['TiposLista'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tiposCliente['TiposLista'] as $tiposLista): ?>
		<tr>
			<td><?php echo $tiposLista['id'];?></td>
			<td><?php echo $tiposLista['nombre'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tipos_listas', 'action' => 'view', $tiposLista['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tipos_listas', 'action' => 'edit', $tiposLista['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tipos_listas', 'action' => 'delete', $tiposLista['id']), null, __('Are you sure you want to delete # %s?', $tiposLista['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tipos Lista'), array('controller' => 'tipos_listas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
