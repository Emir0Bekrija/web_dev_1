<?php
require 'vendor/autoload.php';

flight::route("/", function(){
    echo "Hello world!";
});

flight::route("GET /test", function(){
    echo "Hello Test";
});

flight::start();
?>