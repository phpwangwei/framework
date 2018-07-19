<?=$username ?>
<hr />
<?=$age ?>
<hr />
<?php 
foreach ($order as $k=>$v){
	echo $k.'__'.$v.'<br />';
}
?>
<hr />
<?php foreach ($order as $k=>$v):?>
	<?=$k ?>__<?=$v ?><br />
<?php endforeach ?>

	
