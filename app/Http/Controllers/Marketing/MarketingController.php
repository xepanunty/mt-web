<?php
namespace App\Http\Controllers\Marketing;

use App\External\Services\SendInBlueApi;
use Backpack\PageManager\PageManagerServiceProvider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MarketingController extends Controller
{

    public function sendEmail(Request $request)
    {
        $requestParams = $request->all();
        $result = SendInBlueApi::sendinBlueEmail(["marcelo.t80@gmail.com"],  3,
            ["MESSAGE" => $requestParams['message']
            , 'SUBJECT' => $requestParams['subject'] , 'NOME' => $requestParams['name'], 'Email' =>$requestParams['email']]);
        flash('Email Sent. Merci')->success();
        return redirect("/");
    }
}
