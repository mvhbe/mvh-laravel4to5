<?php

namespace Mvh\Http\Controllers;

use Illuminate\Support\Facades\View;
use Mvh\Kalender;
use Mvh\Uitslag;
use Mvh\Wedstrijd;

class ArchiefController extends BaseController {

    public function overzichtKalenders(){
    	$kalenders = Kalender::orderBy('jaar', 'desc')->get();
        return View::make('archief.kalenders')
        		->with("kalenders", $kalenders);
    }

    public function showKalender($kalender_id) {
        $kalender = Kalender::find($kalender_id);
        $wedstrijden = Wedstrijd::getWedstrijdenVanKalender($kalender_id);
        return View::make('archief.kalender')
                ->with("kalender", $kalender)
                ->with("wedstrijden", $wedstrijden);
    }

    public function overzichtUitslagen(){
        $kalenders = Kalender::orderBy('jaar', 'desc')->get();
        return View::make('archief.uitslagen')
        		->with("kalenders", $kalenders);
    }

    public function overzichtWedstrijdUitslagen($kalender_id) {
        $kalender = Kalender::find($kalender_id);
        $wedstrijden = Uitslag::getWedstrijdenVanKalender($kalender_id);
        return View::make('archief.wedstrijden')
                ->with("kalender", $kalender)
                ->with("wedstrijden", $wedstrijden);
    }

}

?>
