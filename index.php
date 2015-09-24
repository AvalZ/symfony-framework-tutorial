<?php

$input = isset($_GET['name']) ? $_GET['name'] : 'World';

printf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8'));
