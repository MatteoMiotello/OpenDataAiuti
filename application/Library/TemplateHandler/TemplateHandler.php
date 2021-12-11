<?php


namespace Application\Library\TemplateHandler;


use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TemplateHandler {
    private $Twig;


    public function __construct( string $baseFolder = '' ) {
        $folder = __DIR__ . '/../../Views/' . $baseFolder;

        $loader = new FilesystemLoader( $folder );

        $this->Twig = new Environment( $loader, [
            'cache' => false,
        ] );
    }

    public function compileComponent( $fileName, $params = [] ) {
        return $this->Twig->render( $fileName, $params );
    }
}