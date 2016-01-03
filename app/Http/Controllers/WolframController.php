<?php

namespace Alexa\Http\Controllers;

use Illuminate\Http\Request;

use Alexa\Http\Requests;
use Alexa\Http\Controllers\Controller;

class WolframController extends Controller
{
    public function launch(){

    }

    public function intent(){
        foreach(\Alexa::session() as $key=>$val){
            \Log::info('key: '.$key.' | val: '.$val);
        }
    }

    public function endSession()
    {
        return '{"version":"1.0","response":{"shouldEndSession":true}}';
    }
}
