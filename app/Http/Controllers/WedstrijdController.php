<?php

namespace Mvh\Http\Controllers;

use Illuminate\Support\Facades\View;
use Mvh\Wedstrijd;

class WedstrijdController extends BaseController {

    public function dezeMaand(){
        $wedstrijden = Wedstrijd::getWedstrijdenDezeMaand();
        return View::make('home')->with("wedstrijden", $wedstrijden);
    }

}

?>
