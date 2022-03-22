<?php

use Library\ModelConverter\AiutoConverter;
use Library\Helpers\UploadedFiles;
use Prewk\XmlStringStreamer;
use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . '/../../vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../environment/.env');
$uploadedFiles = new UploadedFiles();

//scandir
$dir = __DIR__ . '/../Uploads/';
$files = scandir($dir);
$filetoupload = '';
$result = '';

//find first file
foreach ($files as $file){
    if($file != '.' && $file != '..'){
        if ( !($uploadedFiles -> alreadyUploaded($file))){
            $filetoupload = $file;
            break;
        }
    }
}

//if found upload it
if($filetoupload != ''){
    $streamer = XmlStringStreamer::createStringWalkerParser(__DIR__ . '/../Uploads/'.$filetoupload);

    while ($node = $streamer->getNode()) {
        //$node = str_replace("&#2","",$node);

        $simpleXmlNode = simplexml_load_string($node);

        $aiuto = (new AiutoConverter())->convert($simpleXmlNode);

        foreach ($aiuto as $item){
            $res = $item->save();

            //check for exception and add exception to result if it didn't already occur
            if($res != ''){
                if(strpos($result,$res) === false){
                    $result .= $res.' , ';
                }
            }
        }

    }
}

//upload cronjob log
$uploadedFiles ->addLog($filetoupload,$result);