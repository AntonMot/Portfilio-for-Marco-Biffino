<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Main extends Model
{

    public function getDescriptionAttribute()
    {
        $locale = App::getLocale();
        $column = "description_" . $locale;
        return $this->{$column};
    }

    protected $table = 'main';
	protected $fillable = ['title','description_en', 'description_it'];
	public $timestamps = false;
}
