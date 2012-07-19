<?php $this->placeholder('menu')->captureStart() ?>
<ul>
<li<?php echo $this->isActive($this->route, 'frontpage') ? ' class="active"' : '' ?>>
<a accesskey="1" href="<?php echo $this->url(array(), 'frontpage') ?>">inicio</a>
</li>
<li<?php echo $this->isActive($this->route, 'exhibitions') ? ' class="active"' : '' ?>>
<a accesskey="2" href="<?php echo $this->url(array(), 'exhibitions') ?>">exposiciones</a>
</li>
<li<?php echo $this->isActive($this->route, 'users') ? ' class="active"' : '' ?>>
<a accesskey="3" href="<?php echo $this->url(array(), 'users') ?>">participantes</a>
</li>
<li<?php echo $this->isActive($this->route, 'sponsors') ? ' class="active"' : '' ?>>
<a accesskey="4" href="<?php echo $this->url(array(), 'sponsors') ?>">auspiciadores</a>
</li>
</ul>
<?php $this->placeholder('menu')->captureEnd() ?>