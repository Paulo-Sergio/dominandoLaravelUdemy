<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {
    
    // $table = messages
    
    protected $fillable = [
	'name',
	'email',
	'message'
    ];
}
