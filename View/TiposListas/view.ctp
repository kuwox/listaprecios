<div class="tiposListas view">
<h2><?php  echo __('Tipos Lista');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tiposLista['TiposLista']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tiposLista['TiposLista']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipos Lista'), array('action' => 'edit', $tiposLista['TiposLista']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipos Lista'), array('action' => 'delete', $tiposLista['TiposLista']['id']), null, __('Are you sure you want to delete # %s?', $tiposLista['TiposLista']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Listas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Lista'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Clientes'), array('controller' => 'tipos_clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Cliente'), array('controller' => 'tipos_clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tipos Clientes');?></h3>
	<?php if (!empty($tiposLista['TiposCliente'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Tipo Cliente'); ?></th>
		<th><?php echo __('Carpeta Archivos'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tiposLista['TiposCliente'] as $tiposCliente): ?>
		<tr>
			<td><?php echo $tiposCliente['id'];?></td>
			<td><?php echo $tiposCliente['nombre_tipo_cliente'];?></td>
			<td><?php echo $tiposCliente['carpeta_archivos'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tipos_clientes', 'action' => 'view', $tiposCliente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tipos_clientes', 'action' => 'edit', $tiposCliente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tipos_clientes', 'action' => 'delete', $tiposCliente['id']), null, __('Are you sure you want to delete # %s?', $tiposCliente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tipos Cliente'), array('controller' => 'tipos_clientes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
