<?php


class statistic extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
  public $timestamps = false;
	protected $table = 'statistics';
	protected $fillable = array('total_ram','latelifesaved','complaints');

}
