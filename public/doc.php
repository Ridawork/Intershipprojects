<?php
require("../vendor/autoload.php");
$openapi = \OpenApi\scan(__DIR__.'/../src/Core/Controllers');
header('Content-Type: application/x-yaml');
echo $openapi->toYaml();