<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';
include_once 'Aiuto.php';
include_once 'AiutoConverter.php';
$streamer = Prewk\XmlStringStreamer::createStringWalkerParser( 'OpenData_Aiuti_2021_12.xml' );

$childNames = [];
while ( $node = $streamer->getNode() ) {
    $simpleXmlNode = simplexml_load_string($node);

    echo '+';

    $aiuto = ( new AiutoConverter() )->convert( $simpleXmlNode );

    $aiuto->save();
}

