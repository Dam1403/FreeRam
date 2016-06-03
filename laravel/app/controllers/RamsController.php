<?php

class RamsController extends BaseController {

  /*
    create - Creates a new ram object and inserts it into the database
  */
	public function create()
	{
    #Get the statistic object
    $stats = statistic::find(1);

    if(is_null($stats)){
      return 'Statistical Error';
    }
    #Get the Ram object
		$ramEntry = new Ram;
    if (Input::has('ram_amount'))
    {
      #set ramEntries amountBytes
      $ramEntry->amountBytes = Input::get('ram_amount');
      #add the current amountBytes to the total ram section of the statistic row
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
  /*
    getinfo - This returns the statistics displayed on the info.blade.php
    view. This function handles the '/' get request.
  */
  public function getinfo(){
    #get statistic object
    $stats = statistic::find(1);
    if(is_null($stats)){
      return 'Statistical Error';
    }


    return View::make('info')->with('stats',$stats);
  }
  /*
    This function processes the complaint post request from the complain.blade.php
    view
  */
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
