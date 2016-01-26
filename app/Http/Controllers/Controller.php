<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function output($data, $message = '', $status = true, $code = 200) {
        return response()->json([
    		'data' => $data,
    		'message' => $message, 
    		'status' => $status,
    		'code' => $code
    	], $code);
    }

    public function notFound($message = 'Request not found') {
    	return $this->output(null,$message,false,404);
    }

    public function success($message = 'Request successful') {
        return $this->output(null,$message);
    }

    public function successCreated($message = 'Record created') {
        return $this->output(null,$message,true,201);
    }

    public function error($message = 'Request error!') {
        return $this->output(null,$message,false,400);
    }

    public function welcome() {
    	return $this->output('Welcome to Cord App API');
    }
}
