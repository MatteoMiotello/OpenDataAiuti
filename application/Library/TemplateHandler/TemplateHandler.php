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
        //session_start();
        if (isset($_SESSION['id'])) {
            $params = [
                'user_id' => $_SESSION['user_id'],
                'user_username' => $_SESSION['username'],
                'user_email' => $_SESSION['email']
            ];
        }
        return $this->Twig->render( $fileName, $params );
    }
}