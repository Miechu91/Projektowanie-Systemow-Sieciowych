<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class ModerCtrl {

    private $list_before; //rekordy pobrane z bazy danych
    private $list_after; //rekordy pobrane z bazy danych

    public function action_moder()
    {
        try {
            $this->list_before = App::getDB()->select("reservations", ["[>]users" => ["id_users" => "id"],
                "[>]cars" => ["id_cars" => "id"]], [
                "reservations.id",
                "users.name",
                "users.surname",
                "cars.marka",
                "cars.model",
            ], ["reservations.state" => 1]);
            $this->list_after = App::getDB()->select("reservations", ["[>]users" => ["id_users" => "id"],
                "[>]cars" => ["id_cars" => "id"]], [
                "reservations.id",
                "users.name",
                "users.surname",
                "cars.marka",
                "cars.model",
            ], ["reservations.state" => 2]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->generateView();
    }

    public function action_resAccept()
    {
        $res_id = ParamUtils::getFromCleanURL(1,true,"Błędne wywołanie aplikacji");
        try {
            $v_res_id = App::getDB()->get('reservations', ['id'], [
                'id' => $res_id
            ]);
            if (empty($v_res_id['id'])){
                SessionUtils::storeMessages(Utils::addErrorMessage('Nie ma takiej rezerwacji'));
                App::getRouter()->redirectTo("moder");
                return;
            }
            App::getDB()->update("reservations", [
                "state" => 2,
            ], [
                "id" => $res_id
            ]);
            SessionUtils::storeMessages(Utils::addInfoMessage('Pomyślnie zaakceptowano'));
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getRouter()->redirectTo("moder");
    }

    public function action_resDelete()
    {
        $res_id = ParamUtils::getFromCleanURL(1,true,"Błędne wywołanie aplikacji");
        try {
            $v_res_id = App::getDB()->get('reservations', ['id'], [
                'id' => $res_id
            ]);
            if (empty($v_res_id['id'])){
                SessionUtils::storeMessages(Utils::addErrorMessage('Nie ma takiej rezerwacji'));
                App::getRouter()->redirectTo("moder");
                return;
            }

            App::getDB()->delete("reservations", [
                "id" => $res_id
            ]);
            SessionUtils::storeMessages(Utils::addInfoMessage('Pomyślnie usunięto wpis'));
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        App::getRouter()->redirectTo("moder");

    }

    public function generateView(){
        App::getSmarty()->assign('people', $this->list_before);  // lista rekordów z bazy danych
        App::getSmarty()->assign('people2', $this->list_after);  // lista rekordów z bazy danych
        App::getSmarty()->display('ModerView.tpl');
    }

}
