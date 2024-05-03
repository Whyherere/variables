<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*1 $str1 = 'text1';
$str2 = 'text2';
$str3 = 'text3';
?>

<p><?= $str1; ?></p>
<p><?= $str2; ?></p>
<p><?= $str3; ?></p>
    */
/*  2   $show = true;
    ?>
    <?php if ($show): ?>
<div>
    <p>text+</p>
    <p>text+</p>
    <p>text+</p>
</div>
<?php else: ?>
<div>
    <p>text-</p>
    <p>text-</p>
    <p>text-</p>
</div>
<?php endif; ?> */
$arr = [
    [
        'name' => 'user1',
        'age' => 30,
    ],
    [
        'name' => 'user2',
        'age' => 31,
    ],
    [
        'name' => 'user3',
        'age' => 32,
    ],
];
?>
<?php foreach ($arr as $user): ?>
<div>
    <p>name:<?= $user['name']; ?></p>
    <p>age:<?= $user['age']; ?></p>
</div>
<?php endforeach; ?>
</body>
</html>