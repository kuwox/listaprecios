<div class="tiposClientesTiposListas view">
<h2><?php  echo __('Tipos Clientes Tipos Lista');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tiposClientesTiposLista['TiposClientesTiposLista']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tiposClientesTiposLista['TiposCliente']['id'], array('controller' => 'tipos_clientes', 'action' => 'view', $tiposClientesTiposLista['TiposCliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos Lista'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tiposClientesTiposLista['TiposLista']['id'], array('controller' => 'tipos_listas', 'action' => 'view', $tiposClientesTiposLista['TiposLista']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Archivo'); ?></dt>
		<dd>
			<?php echo h($tiposClientesTiposLista['TiposClientesTiposLista']['nombre_archivo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipos Clientes Tipos Lista'), array('action' => 'edit', $tiposClientesTiposLista['TiposClientesTiposLista']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipos Clientes Tipos Lista'), array('action' => 'delete', $tiposClientesTiposLista['TiposClientesTiposLista']['id']), null, __('Are you sure you want to delete # %s?', $tiposClientesTiposLista['TiposClientesTiposLista']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Clientes Tipos Listas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Clientes Tipos Lista'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Clientes'), array('controller' => 'tipos_clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Cliente'), array('controller' => 'tipos_clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Listas'), array('controller' => 'tipos_listas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Lista'), array('controller' => 'tipos_listas', 'action' => 'add')); ?> </li>
	</ul>
</div>
