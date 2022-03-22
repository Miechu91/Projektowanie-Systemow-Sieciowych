<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\Validator;
use app\forms\AdminForm;

class AdminCtrl
{
    private $records; //rekordy pobrane z bazy danych
    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new AdminForm();
    }

    public function action_admin(){
        try {
            $this->records = App::getDB()->select("users", [
                "id",
                "name",
                "surname",
                "mail",
                "login",
                "id_role",
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->generateView();
    }

    public function action_changerole(){
        try {
            $this->records = App::getDB()->select("users", [
                "id",
                "name",
                "surname",
                "mail",
                "login",
                "id_role",
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $v = new Validator();
        $this->form->id_user = $v->validateFromRequest("id_user", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Pole "ID użytkownika" nie może być puste',
            'int' => true,
            'validator_message' => 'Podana wartość "ID użytkownika" musi być ilczbą całkowitą',
        ]);
        $this->form->id_role = $v->validateFromRequest("id_role", [
            'trim' => true,
            'required' => true,
            'required_message' => 'Pole "Numer roli" nie może być puste',
            'int' => true,
            'validator_message' => 'Podana wartość "Numer roli" musi być ilczbą całkowitą z przedziału 1-3',
        ]);
        if ($this->form->id_role < 1 || $this->form->id_role > 3) {
            Utils::addErrorMessage('Podana wartość "Numer roli" musi być ilczbą całkowitą z przedziału 1-3');
        }
        $v_user_id = App::getDB()->get('users', ['id'], [
            'id' => $this->form->id_user
        ]);
        if (empty($v_user_id['id'])){
            Utils::addErrorMessage('Podana wartość "ID użytkownika" musi być jedną z liczb z tabeli');
        }
        if (App::getMessages()->isError()) {
            $this->generateView();
            return false;
        }

            App::getDB()->update("users", [
                "id_role" => $this->form->id_role,
            ], [
                "id" => $this->form->id_user
            ]);
            App::getRouter()->redirectTo("admin");

    }

    public function generateView(){
        App::getSmarty()->assign('users', $this->records);
        App::getSmarty()->display('AdminView.tpl');
    }
}