<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
    <?php echo ($data1); ?> <hr />

    <?php if($data2['sex'] == '男'): ?>强大
    <?php else: ?>
        相对弱小需要保护<?php endif; ?>

    <hr />

    <?php if(is_array($data3)): foreach($data3 as $key=>$v): echo ($v["name"]); ?>_<?php echo ($v["age"]); ?>_<?php echo ($v["sex"]); ?><br /><?php endforeach; endif; ?>

</body>
</html>