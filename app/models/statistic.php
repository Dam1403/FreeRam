<?php


class statistic extends Eloquent{

	/*
	SCHEMA
			$table->increments('id');
			$table->integer('total_ram');
			$table->string('latelifesaved', 255);
			$table->integer('complaints');
			$table->timestamps();
	*/
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
  public $timestamps = false;
	protected $table = 'statistics';
	protected $fillable = array('total_ram','latelifesaved','complaints');

}
