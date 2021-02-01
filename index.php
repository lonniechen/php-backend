<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(-1);

    include_once 'DatabaseInterface.php';
    include_once 'ColorController.php';
    include_once 'TestController.php';

    setupEnv();

    if (isset($_GET['controller']) && isset($_GET['action'])) {
        if (class_exists($_GET['controller'])) {
            $ds = new $_GET['controller'];
            $params = $_GET;
            unset($params['controller']);
            unset($params['action']);

            call_user_func_array(array($ds,$_GET['action']), $params);
            // $ds->{$_GET['action']}();
        }
    }


    function setupEnv()
    {
        $handle = fopen('.env', 'r');
        if ($handle) {
            while (($line=fgets($handle))!==false) {
                putenv(trim($line));
            }
            fclose($handle);
        }
    }
