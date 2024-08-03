<?php 

// Definir las rutas y sus archivos correspondientes
$routes = [
    '/' => 'index.php',
    '/about' => 'pag1.php',
];

// Obtener la ruta solicitada
$requestUri = $_SERVER['REQUEST_URI'];

// Buscar la ruta en el array de rutas
if (array_key_exists($requestUri, $routes)) {
    // Incluir el archivo correspondiente a la ruta
    include $routes[$requestUri];
} else {
    // Ruta no encontrada, mostrar un error 404
    http_response_code(404);
    echo "404 - Página no encontrada";
}

?>