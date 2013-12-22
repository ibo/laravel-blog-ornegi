<?php

class Blog extends Eloquent {

	protected $table = 'blog';

	protected $fillable = array('user_id','title', 'content');

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

}