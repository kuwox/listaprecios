<div class="clientes index">
	<h2><?php echo __('Clientes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id' );?></th>
			<th><?php echo $this->Paginator->sort('xpf_users_id', 'Usuario');?></th>
			<th><?php echo $this->Paginator->sort('tipos_clientes_id', 'Tipo Cliente');?></th>
	</tr>
	<?php
	foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td>
			<?php echo h($cliente['XpfUsers']['name']); ?>
		</td>
		<td>
			<?php echo h($cliente['TiposClientes']['nombre_tipo_cliente']); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'Edit', $cliente['Cliente']['id'])); ?>
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
