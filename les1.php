<?php

$fruits=[
    'apple' =>'りんご',
    'banana'=>'ばなな'];
?>
<dl>
    <?php foreach ($fruits as $eng => $jp): ?>
    <dt><?php echo $eng?></dt>
    <dd><?php echo $jp?></dd>
    <?php endforeach ?>
</dl>