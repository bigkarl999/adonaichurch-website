<?php
header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');
$configFile=dirname(__DIR__).'/config.php';
if(!file_exists($configFile)){echo json_encode([]);exit;}
$c=require $configFile;
try{$pdo=new PDO("mysql:host={$c['db_host']};dbname={$c['db_name']};charset=utf8mb4",$c['db_user'],$c['db_pass'],[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);$q=$pdo->query("SELECT id,title,category,image_url,created_at FROM gallery ORDER BY created_at DESC");echo json_encode($q->fetchAll(PDO::FETCH_ASSOC));}catch(Throwable $e){http_response_code(500);echo json_encode([]);}