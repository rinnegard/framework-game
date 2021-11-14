<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use \App\Classes\Yatzy;

class YatzyController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function start(Request $request)
    {
        $yatzy = app()->make(Yatzy::class);
        $request->session()->put('yatzy', $yatzy);
        return view("yatzy");
    }

    public function run(Request $request)
    {
        $data = $request->session()->get('yatzy')->play();
        return view("yatzy", $data);
    }
}
