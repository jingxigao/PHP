<?php
// 如果需要在调用函数时忽略错误或者警告可以在函数名之前加上 @

// 1. 建立与数据库服务器之间的连接
// $connection = @mysqli_connect('127.0.0.1', 'root2', '123456', 'demo1');
$connection = mysqli_connect('127.0.0.1', 'root', '123456', 'demo1');
if (!$connection) {
  // 连接数据库失败
  exit('<h1>连接数据库失败</h1>');
}

// 基于刚刚创建的连接对象执行一次查询操作
// 得到的是一个查询对象，这个查询对象可以用来再到数据一行一行拿数据
$query = mysqli_query($connection, 'select * from users;');
// var_dump($query);

while ($row = mysqli_fetch_assoc($query)) {
  var_dump($row);
}