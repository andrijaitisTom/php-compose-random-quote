<?php

namespace RandomQuotes;

class RandomQuotes {

public function getRandomQuotes() {
    $quotes = file_get_contents( __DIR__.'/../assets/quotes.json' );

    $quotes = json_decode($quotes, true);

    $index = mt_rand (0, count($quotes));

    return $quotes[$index];

    return $quotes;
}

    
    public function generate(){
    return $this->getRandomQuotes();
    }
} 