<?php

use Library\Database\Db;
use Library\ModelConverter\AiutoConverter;
use Prewk\XmlStringStreamer;
use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . '/../../vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../environment/.env');

$streamer = XmlStringStreamer::createStringWalkerParser(__DIR__ . '/../../Public/Upload/OpenData_Aiuti_2021_11.xml');

while ($node = $streamer->getNode()) {
    $simpleXmlNode = simplexml_load_string($node);

    $aiuto = (new AiutoConverter())->convert($simpleXmlNode);

    $aiuto->save();
}
