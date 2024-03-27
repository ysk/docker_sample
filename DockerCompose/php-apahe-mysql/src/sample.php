<?php
try {
  $dsn = "mysql:dbname=testdb;host=mariadb";
  $db  = new PDO($dsn, "testuser", "testpass");
  echo "接続に成功しました。";
  phpinfo();
} catch (PDOException $e) {
  echo "接続に失敗しました。";
  echo $e->getMessage();
  exit;
}