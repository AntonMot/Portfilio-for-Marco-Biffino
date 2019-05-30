<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Contact extends Model
{
    protected $table = 'contacts';
	protected $fillable = ['title','email','tel','twitter','instagram','facebook','linkedin'];
	public $timestamps = false;
}
