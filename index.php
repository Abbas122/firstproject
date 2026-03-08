<?php
// index.php
function greet($name) {
    return "Hello, " . $name . "!";
}

// Only run if accessed via browser or CLI
if (php_sapi_name() === 'cli-server' || php_sapi_name() === 'cli') {
    echo greet("World");
}
