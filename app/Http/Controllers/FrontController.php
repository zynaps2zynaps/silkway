<?php

//


namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use App\Telega;
//use GuzzleHttp;
//use App\MassDevice;
//use App\Masspsycho;
//use App\Tools;
//
// use GuzzleHttp\Client;




class FrontController extends Controller
{

    // переменные для отправки почты


    public function index()
    {
        return view('index');
    }


    public function sendTelegram() {
        $text = "Это тест SilkWay. Отправка сообщения в Телеграм работает";
        Telega::telegramMessageSilkWay($text);
    }


    public function test() {
        //App::setLocale('ru');
        return view('test');
    }


}
