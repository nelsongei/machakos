<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  
protected $fillable=['user_id','role'];


public function user(){
	return $this->belongsTo(User::class);
}












}
