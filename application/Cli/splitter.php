<?php

use Prewk\XmlStringStreamer;

require __DIR__ . '/../../vendor/autoload.php';

$dir = __DIR__ . '/../../Public/Splitter/';
$files = scandir($dir);
$filetoupload ='';
$header = '<?xml version="1.0" encoding="UTF-8" standalone="no"?><LISTA_AIUTI xmlns="http://www.rna.it/RNA_aiuto/schema">';
$footer = '</LISTA_AIUTI>';
$fileno = 1;

//find first file
foreach ($files as $file){
    if($file != '.' && $file != '..'){
            $filetoupload = $file;
            break;
    }
}

$streamer = XmlStringStreamer::createStringWalkerParser($dir.$filetoupload);

$file=fopen($dir.str_replace('.xml','',$filetoupload).'_'.$fileno.'.xml', "a");
fwrite($file, $header);

$i=0;

while ($node = $streamer->getNode()) {
    if($i == 50000){
        fwrite($file, $footer);
        fclose($file);
        $i = 0;
        $fileno++;
        $file=fopen($dir.str_replace('.xml','',$filetoupload).'_'.$fileno.'.xml', "a");
        fwrite($file, $header);
    }
    fwrite($file,$node);
    $i++;
}

fwrite($file, $footer);
fclose($file);
