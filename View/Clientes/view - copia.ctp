<div class="clientes view">
<h2><?php  echo __('Cliente');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Xpf Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['XpfUsers']['name'], array('controller' => 'xpf_users', 'action' => 'view', $cliente['XpfUsers']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos Clientes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['TiposClientes']['id'], array('controller' => 'tipos_clientes', 'action' => 'view', $cliente['TiposClientes']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
    <br/>
	<li><?php echo $this->Html->link(__('Lista de precios'), '/marcadeagua/lista_precio.php');?></li>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Xpf Users'), array('controller' => 'xpf_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Xpf Users'), array('controller' => 'xpf_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Clientes'), array('controller' => 'tipos_clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Clientes'), array('controller' => 'tipos_clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
