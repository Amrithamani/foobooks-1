<?php

class Book extends Eloquent {

	protected $guarded = array('id');

	public function author() {
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('Author');
    }

    public function tags() {
        # Books belong to many Tags
        return $this->belongsToMany('Tag');
    }


}