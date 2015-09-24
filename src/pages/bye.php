<?php

$input = $request->get('name', 'World');

$response->setContent(sprintf('Bye %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));
