<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\Validator;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\LoginForm;

class LoginCtrl
{
    private $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function action_login(){
        $this->generateView();
    }

    public function action_logged(){

        // Walidacja formularza
        $v = new Validator();
        $this->form->login = $v->validateFromRequest("login", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Pole "Login" nie może być puste',
        ]);
        $this->form->pass = $v->validateFromRequest("pass", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Pole "Hasło" nie może być puste',
        ]);

        if (App::getMessages()->isError()) {
            $this->generateView();
            return false;
        }
        else {
            try {
                $login_pass = App::getDB()->get('users', ['pass', 'id_role', 'id'], [
                    'login' => $this->form->login
                ]);

                SessionUtils::store('user_id', $login_pass['id']);

                if (empty($login_pass['pass'])){
                    Utils::addErrorMessage('Błedny login lub hasło');
                    $this->generateView();
                    return false;
                }

                if (sha1($this->form->pass) == $login_pass['pass']) {
                    RoleUtils::addRole($login_pass['id_role']);
                    App::getRouter()->redirectTo("start");

                } else {
                    Utils::addErrorMessage('Błedny login lub hasło');
                }

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        $this->generateView();
    }

    public function action_logout() {
        session_destroy();
        App::getRouter()->redirectTo('start');
        }

    public function generateView(){
        App::getSmarty()->display('LoginView.tpl');
    }
}