<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 这是我的首页
 <?php foreach( $data as $v){ ?>
<ul>

    <li><?php echo $v["name"]?></li>
    <li><?php echo $v["age"]?></li>
    <li><?php echo $v["sex"]?></li>

</ul>
 <?php }?>

 <a href="index.php/teach/log/add">添加日报</a>
</body>
</html>