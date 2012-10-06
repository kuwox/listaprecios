<div class="users form">
<?php echo $this->Form->create('User', array('action'=>'login'));?>
<table>
<tr>
<td width="200px;">
<address><img style="margin: 16px; float: left;" alt="atencion" src="http://www.franar.com.ve/images/stories/atencion.png" width="45" height="47" /></address><address><br /></address><address>Por favor introduzca</address><address>nombre de usuario</address><address>y contraseña<br /></address>
</br>
<fieldset>
        <!-- <legend><?php echo __('Introduzca su nombre de usuario y contraseña'); ?></legend> -->
		<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->Session->flash(); ?>
    <?php
        echo $this->Form->input('username', array('label'=> 'Usuario'));
        echo $this->Form->input('password', array('label'=> 'Contraseña'));
    ?>
</fieldset>
</td>
<td width="200px" bgcolor="#0095d9">
</br>
</br>
<p style="color:white; margin: 17px;">Si perdió su contraseña</br>de clic en:</br><a style="color:white; font-type: bold;" target="_blank" href="http://www.franar.com.ve/index.php/component/user/reset.html" >Recuperar su contraseña</a></p>
</br>
<p style="color:white; margin: 17px;">Si necesita ayuda para navegar</br>en Franar en línea comuniquese</br>con nosotros al (0416) 055-14-38</p>
</td>
</tr>
</table>


    

<?php echo $this->Form->end(__('Entrar'));?>
</div>



