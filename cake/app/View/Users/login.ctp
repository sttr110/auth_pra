<h2>User Login</h2>

<?php
echo $this->Form->create('User', array('url' => 'login'));
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->end('login');
?>


<?php

echo $this->Html->Link('create user', array('controller' => 'Creates', 'action' => 'index'));
?>
