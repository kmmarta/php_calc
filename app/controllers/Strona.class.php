<?php

namespace app\controllers;

Class Strona {

    public function action_showStrona() {
        if (!inRole('admin')) {

            getMessages()->addError("Ty nie możesz wejsc!");

            forwardTo('calcShow');
        } else {

            $this->getFromDatabase();
            $this->generateView();
        }
    }

    private function getFromDatabase() {
        $data = getDatabase()->select("wynik", [
            "idwynik",
            "kwota",
            "lat",
            "procent",
            "rata",
            "data"
        ]);

        getSmarty()->assign('data', $data);
    }

    public function generateView() {
        getSmarty()->assign('user', unserialize($_SESSION['user']));
        getSmarty()->assign('page_title', 'Historia Wynikow');
        getSmarty()->display('StronaView.tpl');
    }

}
