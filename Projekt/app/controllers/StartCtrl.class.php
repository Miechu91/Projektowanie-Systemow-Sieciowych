<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;


class StartCtrl {

    public function action_start()
    {
        try {
            $user_id = SessionUtils::load('user_id', $keep = true);
            $this->reservation = App::getDB()->select('reservations', ['id_users', 'id_cars', 'state'], [
                'id_users' => $user_id
            ]);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->generateView();
    }

    public function action_reservation()
    {
        $car_id = ParamUtils::getFromCleanURL(1,true,"Błędne wywołanie aplikacji");
        $user_id = SessionUtils::load('user_id', $keep = true);

        try {
            $this->reservation = App::getDB()->select('reservations', ['id_users', 'id_cars'], [
                'id_users' => $user_id
            ]);
            foreach ($this->reservation as $p){
                if ($p['id_cars'] == $car_id) {
                    SessionUtils::storeMessages(Utils::addInfoMessage('Zarezerwowałeś już ten samochód.'));
                    App::getRouter()->redirectTo("start");
                    return false;
                }
            }

            App::getDB()->insert("reservations", [
                "id_users" => $user_id,
                "id_cars" => $car_id,
                "state" => 1
            ]);
            SessionUtils::storeMessages(Utils::addInfoMessage('Zarezerwowałeś samochód. Poczekaj na akceptację moderatora.'));
            App::getRouter()->redirectTo("start");

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->generateView();
    }

        public function generateView()
        {
            App::getSmarty()->assign('user_reservations', $this->reservation);
            App::getSmarty()->display('StartView.tpl');
        }

}