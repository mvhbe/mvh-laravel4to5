<?php

namespace Mvh\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends BaseController {

	public function dezeMaand(){
		return View::make('home');
    }

}

?>
