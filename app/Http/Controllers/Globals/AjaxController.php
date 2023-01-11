<?php

namespace App\Http\Controllers\Globals;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\MyHelper;
use App\Traits\Api;

/**
 * Description of AjaxController
 *
 * @author I00396.ARIF
 */
class AjaxController extends Controller {

//put your code here
    use Api;
    public function fn_ajax_get(Request $request, $method = '') {
        //switch ($method) {
        //    case "get-permission":
        //        $response = $this->fn_get_($request);
        //        break;
        //}
        return $response;
    }

    public function fn_ajax_post(Request $request, $method = '') {
        switch ($method) {
            case "insert-message":
                $response = $this->fn_post_insert_message($request);
                break;
        }
        return $response;
    }

    public function fn_post_insert_message(Request $request) {
         $data = $request->json()->all();
        if (isset($data) && !empty($data)) {
            $params = [
                'uri' => '',
                'auth' => false,
                'body'=> $data
            ];
            $response = $this->__init_request_api($request, $params);
            dd($response);
            if (isset($data) && !empty($data)) {
                echo json_encode($output);
            } else {
                echo json_encode(array());
            }
        } else {
            echo json_encode(array());
        }
    }

}
