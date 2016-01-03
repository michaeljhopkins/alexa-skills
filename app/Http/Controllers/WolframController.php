<?php

namespace Alexa\Http\Controllers;

use Develpr\AlexaApp\Alexa;
use Illuminate\Http\Request;

use Alexa\Http\Requests;
use Alexa\Http\Controllers\Controller;

class WolframController extends Controller
{
    /**
     * @var Alexa
     */
    private $alexa;

    public function __construct(Alexa $alexa)
    {

        $this->alexa = $alexa;
    }

    public function launch(){

    }

    public function intent(){
        foreach($this->alexa->session() as $key=>$val){
            \Log::info('key: '.$key.' | val: '.$val);
        }
        foreach(\Input::all() as $key=>$val){
            \Log::info('key: '.$key.' | val: '.$val);
        }
    }

    public function endSession()
    {
        return '{"version":"1.0","response":{"shouldEndSession":true}}';
    }
}
