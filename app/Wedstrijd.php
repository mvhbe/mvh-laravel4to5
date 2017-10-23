<?php

namespace Mvh;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Wedstrijd extends Model {

    protected $table = "wedstrijden";

    public static function getWedstrijdenDezeMaand() {
        // geef wedstrijden/evenenmenten door van de huidige maand
        $datum = date("Ym");
        $wedstrijden = Wedstrijd::whereRaw("date_format(datum, '%Y%m') = ?", [$datum])
                ->select(DB::raw("date_format(datum, '%d/%m/%Y') as datum"), "omschrijving", "aanvang", "opmerkingen")
                ->orderByRaw('datum')
        		->get();
        return $wedstrijden;
    }
    
    public static function getWedstrijdenVanKalender($kalender_id) {
    	$wedstrijden = Wedstrijd::where('kalender_id', '=', $kalender_id)
                ->select(DB::raw("date_format(datum, '%d/%m/%Y') as datum"), "omschrijving", "aanvang", "opmerkingen", DB::raw("date_format(datum, '%Y%m%d') as sort_date"))
    			->orderBy("sort_date")
                ->get();
    	return $wedstrijden;
    }
}

?>
