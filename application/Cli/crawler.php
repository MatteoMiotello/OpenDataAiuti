<?php

use Spatie\Crawler\Crawler;

$url = 'https://www.rna.gov.it/RegistroNazionaleTrasparenza/faces/pages/OpenDataAiuti.jspx';

function follow_links($url) {

    $doc = new DOMDocument();
    $doc->loadHTML(file_get_contents($url));

    echo file_get_contents($url);

    $linklist = $doc->getElementsByTagName('a');

    foreach ($linklist as $link) {
        echo $link->getAttribute('href');
    }

}

follow_links($url);