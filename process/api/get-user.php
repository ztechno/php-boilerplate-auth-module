<?php

use Core\Response;

echo Response::json(jwtAuth(), 'user retireved');
die();
