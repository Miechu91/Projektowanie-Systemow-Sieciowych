<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;


class StartCtrl {

    public function start()
    {
        try {

            $this -> state_res = array();
            $results_per_page = 3;

            // Stronnicowanie
            $this->page = ParamUtils::getFromCleanURL(1,false,"Błędne wywołanie aplikacji");

            if ($this->page == '') {
                $this->page = 1;
            }

            if (!is_numeric($this->page)) {
                SessionUtils::storeMessages(Utils::addErrorMessage('Numer strony musi być liczbą.'));
                App::getRouter()->redirectTo("start");
            }

            $page_first_result = ($this->page-1) * $results_per_page;
            $number_of_result = App::getDB()->count('cars');

            $this->number_of_page = ceil ($number_of_result / $results_per_page);

            if ($this->page > $this->number_of_page || $this->page < 1) {
                SessionUtils::storeMessages(Utils::addErrorMessage('Podany numer strony nie istnieje.'));
                App::getRouter()->redirectTo("start");
            }

            $user_id = SessionUtils::load('user_id', $keep = true);
            $this->reservation = App::getDB()->select('reservations', ['id_users', 'id_cars', 'state'], [
                'id_users' => $user_id
            ]);

            foreach ($this->reservation as $res){
                $this -> state_res[$res["id_cars"]] = $res["state"];
            }

            $this->cars = App::getDB()->select('cars', ['id', 'marka', 'model', 'moc', 'wyposazenie',
                'spalanie', 'cena'], ['LIMIT' => [$page_first_result,$results_per_page]]);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function reservation()
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
    }

    public function action_start()
    {
        $this->start();
        App::getSmarty()->assign('user_reservations', $this->reservation);
        App::getSmarty()->assign('cars_list', $this->cars);
        App::getSmarty()->assign('state_res', $this->state_res);
        App::getSmarty()->assign('max_page', $this->number_of_page);
        App::getSmarty()->assign('curr_page', $this->page);
        App::getSmarty()->display('StartView.tpl');
    }
    public function action_startpart()
    {
        $this->start();
        App::getSmarty()->assign('user_reservations', $this->reservation);
        App::getSmarty()->assign('cars_list', $this->cars);
        App::getSmarty()->assign('state_res', $this->state_res);
        App::getSmarty()->assign('max_page', $this->number_of_page);
        App::getSmarty()->assign('curr_page', $this->page);
        App::getSmarty()->display('Start_PartView.tpl');
    }

    public function action_reservation()
    {
        $this->reservation();
        App::getSmarty()->assign('user_reservations', $this->reservation);
        App::getSmarty()->assign('cars_list', $this->cars);
        App::getSmarty()->assign('state_res', $this->state_res);
        App::getSmarty()->assign('max_page', $this->number_of_page);
        App::getSmarty()->assign('curr_page', $this->page);
        App::getSmarty()->display('StartView.tpl');
    }

}