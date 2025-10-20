<?php
$utf8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

define('DB_HOST', 'db');          
define('DB_NAME', 'cursos');
define('DB_USER', 'user');      
define('DB_PASSWORD', 'userpass');

try {
    $cnnPDO = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASSWORD,
        $utf8
    );
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'No se pudo conectar a la base de datos: ' . $e->getMessage()
    ]);
    exit();
}
?>
