<?php
$request_uri = $_SERVER['REQUEST_URI'];
$maipageURL = "mainpages/";

// Remove query string from request URI
if (strpos($request_uri, '?') !== false) {
    $request_uri = substr($request_uri, 0, strpos($request_uri, '?'));
}

// Remove leading and trailing slashes from request URI
$request_uri = trim($request_uri, '/');
// Map request URI to PHP script
switch ($request_uri) {
    case 'portfolio-v2':
        require $maipageURL.'home.php';
        break;
    case 'portfolio-v2/contact':
        require $maipageURL.'contact.php';
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Page not found';
        break;
}