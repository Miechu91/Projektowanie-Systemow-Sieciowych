<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\Validator;
use app\forms\RegistrationForm;

class RegistrationCtrl {
    private $form;

    public function __construct() {
        $this->form = new RegistrationForm();
    }

    public function action_registration() {
        $this->generateView();
    }

    public function action_adduser() {
        // Walidacja formularza
        $v = new Validator();
        $this->form->name = $v->validateFromRequest("name", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Pole "Imię" nie może być puste',
            'min_length' => 3,
            'validator_message' => 'Imię nie może mieć mniej niż 3 znaki',
        ]);
        $this->form->surname = $v->validateFromRequest("surname", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Pole "Nazwisko" nie może być puste',
            'min_length' => 2,
            'validator_message' => 'Nazwisko nie może mieć mniej niż 2 znaki',
        ]);
        $this->form->mail = $v->validateFromRequest("mail", [
           'trim' => true,
           'required' => true,
           'required_message' => 'Pole "e-mail" nie może być puste',
           'email' => true,
           'validator_message' => 'Adres e-mail jest niepoprawny',
       ]);
        $this->form->login = $v->validateFromRequest("login", [
           'trim' => true,
           'required' => true,
           'required_message' => 'Pole "Login" nie może być puste',
           'min_length' => 5,
           'validator_message' => 'Login nie może mieć mniej niż 5 znaków',
       ]);
        $this->form->pass = $v->validateFromRequest("pass", [
           'trim' => true,
           'required' => true,
           'required_message' => 'Pole "Hasło" nie może być puste',
           'min_length' => 8,
           'validator_message' => 'Hasło nie może mieć mniej niż 8 znaków',
       ]);

        // Jeśli gdzieś będzie bład przerywamy wykonywanie kodu. Jeśli nie, dodajemy wpis do bazy
        if (App::getMessages()->isError()) {
            $this->generateView();
            return false;
        }
        else {
            try {
                App::getDB()->insert("users", [
                    "name" => $this->form->name,
                    "surname" => $this->form->surname,
                    "mail" => $this->form->mail,
                    "login" => $this->form->login,
                    "id_role" => 3,
                    "pass" => sha1($this->form->pass)
                ]);
                Utils::addInfoMessage('Twoje konto zostało założone. Możesz się zalogować.');

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        $this->generateView();
    }

    public function generateView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('RegistrationView.tpl');
    }

}