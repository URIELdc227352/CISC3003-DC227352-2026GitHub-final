<?php
/**
 * CISC3003 Final Exam - Database Connection
 * Automatically detects environment variables from Railway
 */

// 优先读取 Railway 注入的环境变量，如果没有则使用本地默认值
$servername = getenv('MYSQLHOST') ?: "127.0.0.1";
$username   = getenv('MYSQLUSER') ?: "root";
$password   = getenv('MYSQLPASSWORD') ?: "";
$dbname     = getenv('MYSQLDATABASE') ?: "finalexam_a";
$port       = getenv('MYSQLPORT') ?: 2345;

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// 检查连接
if ($conn->connect_error) {
    die("Database Connection Error: " . $conn->connect_error);
}
?>
