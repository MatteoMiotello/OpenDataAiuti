<?php

use Library\ModelConverter\AiutoConverter;
use Library\Helpers\UploadedFiles;
use Prewk\XmlStringStreamer;
use Symfony\Component\Dotenv\Dotenv;



require __DIR__ . '/../../vendor/autoload.php';

$filetoupload = '';
$uploadedFiles = new UploadedFiles();
$dotenv = new Dotenv();

$dir = __DIR__ . '/../Uploads/';
$exceptions = 0;

$dotenv -> load(__DIR__ . '/../environment/.env');

$uploadedFiles -> addLog('','run',0);

    try {
        //scandir
        $files = scandir($dir);

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

            $index = $uploadedFiles -> getResumeIndex($filetoupload);

            //arriva all'index
            if($index != 0){
                for ($i=0; $i < $index; $i++){
                    $streamer->getNode();
                }
                $uploadedFiles -> addLog($filetoupload,'resume',$index);
            } else {
                $uploadedFiles -> addLog($filetoupload,'start',$index);
            }

            $i=0;
            while($i <= 25000){ //25001
                if($node = $streamer->getNode()){
                    $simpleXmlNode = simplexml_load_string($node);

                    $aiuto = (new AiutoConverter())->convert($simpleXmlNode);

                    foreach ($aiuto as $item){
                        if(!($item->alreadyIn())){
                            $item->save();
                        }
                    }
                    $i++;
                } else {
                    $uploadedFiles -> addLog($filetoupload,'finish',$index+$i);
                    echo $filetoupload.' finished';
                    exit;
                }
            }
            $uploadedFiles -> addLog($filetoupload,'pause',$index+$i);
            echo $filetoupload.' paused';

        }
    } catch (Throwable $exception) {
        if ($exceptions == 0){
            $uploadedFiles ->addLog($filetoupload,$exception->getMessage(),0);
            $exceptions++;
            $index = 0;
            $filetoupload = '';
            echo 'fuck';
        }
    }
