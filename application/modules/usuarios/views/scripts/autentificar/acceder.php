<p>
<?php echo $this->partial('portada/views/scripts/prompt.php', array(
    'pwd' => '/usuarios',
    'cmd' => 'dialog --ok-label "acceder" --nocancel --form "login" 0 0 0 "usuario:" 1 1 "$username" 1 25 25 0 "contraseña:" 2 1 "$password" 2 25 25 0',
    'sudo' => false,
    'user' => $this->user,
)) ?>
<br />
<br />
<span class="cyan bold form">=============================================</span>
<span class="cyan bold form">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGIN</span>
<span class="cyan bold form">=============================================</span>
<?php echo $this->form ?>
<br/>
<br/>
</p>
