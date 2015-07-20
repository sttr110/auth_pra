<h2><?php echo $user['username'] ?>さんこんちくわ。</h2>
<p>会員番号: <?php echo $user['id'] ?></p>

<button><?php echo $this->Html->Link('ログアウト', array('action' => 'logout')); ?></button>
