<?php
$console = new Pux\Console;
try {
    $console->run( $argv );
} catch ( Exception $e ) {
    echo $e->getMessage(), "\n";
    exit(-1);
}
