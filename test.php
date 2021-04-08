<?php

require_once './src/RandomQuotes.php';

$request = new \RandomQuotes\RandomQuotes();

print_r($request->generate());

echo "\n";