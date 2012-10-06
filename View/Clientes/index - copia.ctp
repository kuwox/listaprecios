<div class="clientes index">
	<h2><?php echo __('Clientes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('xpf_users_id');?></th>
			<th><?php echo $this->Paginator->sort('tipos_clientes_id');?></th>
	</tr>
	<?php
	foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cliente['XpfUsers']['name'], array('controller' => 'xpf_users', 'action' => 'view', $cliente['XpfUsers']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cliente['TiposClientes']['nombre_tipo_cliente'], array('controller' => 'tipos_clientes', 'action' => 'view', $cliente['TiposClientes']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'View', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'Edit', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'Delete', $cliente['Cliente']['id']), null, __('Confirma borrar el cliente # %s?', $cliente['Cliente']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} of {:pages}, mostrando {:current} registos de {:count} totales, iniciando en el registro {:start}, finalizando en {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
