<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('user');?>
    <fieldset>
        <legend><?php echo __('Introduzca su nombre de usuario y contrase�a'); ?></legend>
    <?php
        echo $this->Form->input('username', array('label'=> 'Usuario'));
        echo $this->Form->input('password', array('label'=> 'Contrase�a'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Entrar'));?>
</div>