<?php

namespace Mvh\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Mvh\Uitslag;
use Mvh\Wedstrijd;

class UitslagController extends BaseController {

    public function showWedstrijdUitslag($wedstrijd_id){
        $uitslagen = Uitslag::getWedstrijdUitslag($wedstrijd_id);
        $wedstrijd = Wedstrijd::where("id", "=", $wedstrijd_id)
            ->select("id", DB::raw("date_format(datum, '%d/%m/%Y') as datum"), "omschrijving", "aantal_reeksen")
            ->get();
        return View::make('uitslag/uitslag')
                ->with("wedstrijd", $wedstrijd[0])
                ->with("uitslagen", $uitslagen);
    }
 
}

?>
