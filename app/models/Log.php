<?php


namespace app\models;


class Log
{

    function getLog()
    {

        $file = file(ABSOLUTE_PATH . "/app/config/log.txt");

        $yesterday = time() - 84600;
        $home = 0;
        $checkout = 0;
        $shop = 0;
        $contact = 0;
        $login = 0;
        $register = 0;
        foreach ($file as $f) {

            $page = explode(" ", $f)[0];
            $date = explode(" ", $f)[1];
            // echo $page . " " . $date . '</br>';

            if ((strpos($page, 'page=home') != false) && (date($date) > date($yesterday))) {

                $home++;
            }

            if ((strpos($page, 'page=shop') != false) && (date($date) > date($yesterday))) {

                $shop++;
            }

            if ((strpos($page, 'page=contact') != false) && (date($date) > date($yesterday))) {

                $contact++;
            }

            if ((strpos($page, 'page=checkout') != false) && (date($date) > date($yesterday))) {

                $checkout++;
            }

            if ((strpos($page, 'page=login') != false) && (date($date) > date($yesterday))) {

                $login++;
            }

            if ((strpos($page, 'page=register') != false) && (date($date) > date($yesterday))) {

                $register++;
            }


        }

        return [$home, $shop, $contact, $checkout, $login, $register];
    }

}