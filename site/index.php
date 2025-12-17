<?php

$action = $_GET['action'] ?? 'home';

switch ($action) {
    case 'home':
	echo "Hello World";
        break;

    default:
        echo "Action non reconnue.";
}
