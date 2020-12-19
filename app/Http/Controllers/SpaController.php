<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class SpaController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return $products;

    }

    public function sendOrder(Request $request)
    {

        $sendArray = [];

        $sendArray['name'] = 'ФИО: ' . $request->input('name');
        $sendArray['tel'] = 'Телефон: ' . $request->input('tel');
        $sendArray['address'] = 'Адрес: ' . $request->input('address');
        $sendArray['order'] = 'Заказ: ';

        for($i=0; $i<count($request->input('data')); $i++){
            $sendArray['order'] .= $request->input('data')[$i]['name'] . ' ' . $request->input('data')[$i]['price'] . 'р., ';
        }

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID'),
            'text' => substr(implode(PHP_EOL, $sendArray), 0, 4096)
        ]);
    }

    private function getText($request)
    {
        $sendArray = [];

        $sendArray['name'] = 'ФИО: ' . $request->input('name');
        $sendArray['tel'] = 'Телефон: ' . $request->input('tel');
        $sendArray['address'] = 'Адрес: ' . $request->input('address');

        $sendArray['data'] = 'Заказ: ' . $request->input('data');

        return substr(implode(PHP_EOL, $sendArray), 0, 4096);
    }
}
