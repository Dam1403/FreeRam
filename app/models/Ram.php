<?php


class Ram extends Eloquent{

	/*SCHEMA
		 $table->increments('id');
		 $table->integer('user_id');
		 $table->integer('amountBytes');
		 $table->string('resolution', 255);
		 $table->timestamps();
	*/

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Rams';

	protected $fillable = array('amountBytes', 'resolution','user_id');

}
