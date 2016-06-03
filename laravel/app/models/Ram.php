<?php


class Ram extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Rams';

	protected $fillable = array('amountBytes', 'resolution','user_id');

}
