<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Achievements extends Model
{

    public function getNameAttribute()
    {
        $locale = App::getLocale();
        $column = "name_" . $locale;
        return $this->{$column};
    }

    protected $table = 'achievements';
    protected $fillable = ['name_en', 'name_it', 'value'];
    public $timestamps = false;
}
