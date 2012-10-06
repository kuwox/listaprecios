<div class="tiposClientesTiposListas index">
	<h2><?php echo __('Listas de precios asociadas a los tipos de clientes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('tipos_cliente_id', 'Tipo Cliente');?></th>
			<th><?php echo $this->Paginator->sort('tipos_lista_id', 'Tipo Lista asociada');?></th>
			<th><?php echo $this->Paginator->sort('nombre_archivo', 'Archivo de lista de precio');?></th>
	</tr>
	<?php
	foreach ($tiposClientesTiposListas as $tiposClientesTiposLista): ?>
	<tr>
		<td><?php echo h($tiposClientesTiposLista['TiposClientesTiposLista']['id']); ?>&nbsp;</td>
		<td>
			<?php echo h($tiposClientesTiposLista['TiposCliente']['nombre_tipo_cliente']); ?>
		</td>
		<td>
			<?php echo h($tiposClientesTiposLista['TiposLista']['nombre']); ?>
		</td>
		<td><?php echo h($tiposClientesTiposLista['TiposClientesTiposLista']['nombre_archivo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tiposClientesTiposLista['TiposClientesTiposLista']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $tiposClientesTiposLista['TiposClientesTiposLista']['id']), null, __('Confirma que desea eliminar el tipo de lista asociada # %s?', $tiposClientesTiposLista['TiposClientesTiposLista']['id'])); ?>
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
	<?php echo $this->Html->link('Volver al principal', array('controller' => 'pages', 'action' => 'display', 'menu')); ?>
</div>
