<?php

class RamsController extends BaseController {


	public function create()
	{
    $stats = statistic::find(1);
    if(is_null($stats)){
      return 'Statistical Error';
    }
		$ramEntry = new Ram;
    if (Input::has('ram_amount'))
    {
      $ramEntry->amountBytes = Input::get('ram_amount');
      $stats->total_ram = $stats->total_ram + $ramEntry->amountBytes;
    }
    else{
      return 'failure';
    }
    if (Input::has('resolution'))
    {
      $ramEntry->resolution = Input::get('resolution');
    }
    else{
      return 'failure';
    }
    $ramEntry->save();
    $stats->save();
    return Redirect::to('/')->with('message','Behold... Your computer now harnesses the power of 1000 suns');
	}
  public function getinfo(){
    $stats = statistic::find(1);
    if(is_null($stats)){
      return 'Statistical Error';
    }


    return View::make('info')->with('stats',$stats);
  }

  public function complaints(){
    $stats = statistic::find(1);
    if(is_null($stats)){
      return 'Statistical Error';
    }
    $stats->complaints = $stats->complaints + 1;
    $stats->save();
    return Redirect::to('/')->with('message','We are reading your complaint, while your reading this');


  }

}
