<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Classes\Yatzy;
use App\Models\Yatzy as YatzyModel;

class YatzyController extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    public function start(Request $request)
    {
        $data = [
            "header" => "Yatzy!!",
            "message" => "Let's play!",
        ];
        $yatzy = app()->make(Yatzy::class);
        $request->session()->put('yatzy', $yatzy);
        return view("yatzy", $data);
    }

    public function run(Request $request)
    {
        // $yatsy = $request->session()->get('yatzy');
        // $data = $yatsy->play();
        // if (null !== $yatsy->getTotalScore()) {
        //     $yatzyModel = new YatzyModel();
        //     $yatzyModel->score = $yatsy->getTotalScore();
        //     $yatzyModel->save();
        // }
        $data = $request->session()->get('yatzy')->play();
        return view("yatzy", $data);
    }
}
