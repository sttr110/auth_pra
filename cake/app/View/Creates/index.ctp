<h2>create user</h2>

<center><?php echo $this->Html->Link('ログイン', array(
  'controller' => 'Users',
  'action' => 'login'));
?>
</center>


<?php
echo $this->Form->create('Create');
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->end('登録');
?>

<?php
echo $this->Form->create('Create', array('action' => 'delete'));
?>


<br><br><br>
<h3>ユーザ一覧</h3>
<table>
  <tr>
    <td><b>username</b></td>
    <td><b>password</b></td>
  </tr>
<?php foreach($users as $user): ?> 
<tr>
<td><?php echo $user['User']['username']; ?></td>
<td><?php echo $user['User']['password']; ?></td>
</tr>

<?php endforeach; ?>
</table>
<?php echo $this->Form->end('前ユーザ削除'); ?>
