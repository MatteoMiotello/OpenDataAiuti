<?php


namespace Controller;


use Application\Library\TemplateHandler\TemplateHandler;

use Application\Models\Aiuto;
use Library\ModelConverter\AiutoConverter;
use Prewk\XmlStringStreamer;

class ImportController extends ControllerBase
{
    public function getIndex(...$queryParams): string
    {
        $this->importXml();
        return 'done';
    }

    public function importXml()
    {
        $streamer = XmlStringStreamer::createStringWalkerParser(__DIR__ . '/../../Public/Upload/OpenData_Aiuti_2021_11.xml');

        $childNames = [];
        while ($node = $streamer->getNode()) {
            $simpleXmlNode = simplexml_load_string($node);

            $aiuto = (new AiutoConverter())->convert($simpleXmlNode);

            $aiuto->save();
        }
    }
}
