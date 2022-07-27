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
        if (isset($_SESSION['user_id'])) {
            $params += [
                'user_id' => $_SESSION['user_id'],
                'username' => $_SESSION['username'],
                'user_email' => $_SESSION['email'],
                'user_level' => $_SESSION['user_level']
            ];
        }
        return $this->Twig->render( $fileName, $params );
    }
}