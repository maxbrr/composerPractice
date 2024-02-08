<?php

namespace Cprac;
use Cprac\Utilities\DatabaseConnection;

require __DIR__ . '/../vendor/autoload.php';

echo 'Resoluted path to autoload.php' . PHP_EOL;
echo '=> ' . __DIR__ . '/../vendor/autoload.php' . PHP_EOL;

echo 'Heres the dbClass => ' . DatabaseConnection::getString();