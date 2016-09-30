<?php

/**
 * Created by PhpStorm.
 * User: Saulo
 * Date: 29/09/2016
 * Time: 01:22 AM
 */
include('../request-library/library/Requests.php');
Requests::register_autoloader();

class Routes{
    CONST REQUEST_LIB = '../request-library/library/Requests.php';
    CONST HTTP_REST = 'http://localhost:8080/api.royalcoder.mx/cromwell_restful/';

    public function request_post( $route, $data ){
        return Requests::post(Routes::HTTP_REST . $route, array(), json_encode($data));
    }

    public function request_get( $route, $data ){
        return Requests::get(Routes::HTTP_REST . $route, array(), json_encode($data));
    }
}