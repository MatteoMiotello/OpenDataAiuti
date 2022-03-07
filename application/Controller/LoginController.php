<?php

namespace Controller;

use Application\Library\TemplateHandler\TemplateHandler;
use Models\User;

class LoginController extends ControllerBase
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function getIndex(...$queryParams): string
    {
        if (isset($_SESSION['user_id'])) header('location:/home');

        return (new TemplateHandler())->compileComponent('login/login.twig');
    }

    public function getlogin()
    {
        $data = [
            'title' => 'Login',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        // Processing form data when form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => ''
            ];

            //Check for empty fields
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //if no errors
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                //check credentials
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);
                //user found
                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                    header('location:/home');
                    exit;
                } else {
                    //user not found
                    $data['passwordError'] = 'Incorrect username or password';
                }
            }

        } else {
            //not POST
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
    }

    public function createUserSession($user)
    {
        session_start();
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
    }
}