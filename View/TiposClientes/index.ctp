<div class="tiposClientes index">
	<h2><?php echo __('Tipos de Cliente');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre_tipo_cliente', 'Nombre');?></th>
	</tr>
	<?php
	foreach ($tiposClientes as $tiposCliente): ?>
	<tr>
		<td><?php echo h($tiposCliente['TiposCliente']['id']); ?>&nbsp;</td>
		<td><?php echo h($tiposCliente['TiposCliente']['nombre_tipo_cliente']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tiposCliente['TiposCliente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $tiposCliente['TiposCliente']['id']), null, __('Confirma que desea eliminar el tipo de cliente # %s?', $tiposCliente['TiposCliente']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Mostrando {:current} registros de {:count} totales, iniciando en el registro {:start}, finalizando en {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
	
	</br>
	<?php echo $this->Html->link('Nuevo tipo de cliente', array('controller' => 'TiposClientes', 'action' => 'add')); ?>
	<?php echo $this->Html->link('Volver al principal', array('controller' => 'pages', 'action' => 'display', 'menu')); ?>
</div>
