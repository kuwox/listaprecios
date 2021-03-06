<div class="tiposListas index">
	<h2><?php echo __('Tipos de Lista');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
	</tr>
	<?php
	foreach ($tiposListas as $tiposLista): ?>
	<tr>
		<td><?php echo h($tiposLista['TiposLista']['id']); ?>&nbsp;</td>
		<td><?php echo h($tiposLista['TiposLista']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tiposLista['TiposLista']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $tiposLista['TiposLista']['id']), null, __('Confirma que desea eliminar el tipo de lista # %s?', $tiposLista['TiposLista']['id'])); ?>
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
	<?php echo $this->Html->link('Nuevo tipo de lista', array('controller' => 'TiposListas', 'action' => 'add')); ?>
	<?php echo $this->Html->link('Volver al principal', array('controller' => 'pages', 'action' => 'display', 'menu')); ?>
	
</div>
