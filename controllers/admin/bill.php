<?php
$action = (isset($_GET['action'])) ? $_GET['action'] : 'list';
switch ($action) {
    case 'list':
        $bills = $db->fetchAll("bills");
        break;

    case 'insert':
        break;

    case 'update':
        break;

    case 'delete':
        break;

    default:
        require_once("404.php");
        die();
        break;
}
