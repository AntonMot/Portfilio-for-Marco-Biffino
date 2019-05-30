<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Works extends Model
{

    public function getTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "title_" . $locale;
        return $this->{$column};
    }

    public function getDescriptionAttribute()
    {
        $locale = App::getLocale();
        $column = "description_" . $locale;
        return $this->{$column};
    }

    protected $table = 'works';
    protected $fillable = ['title_en', 'title_it', 'description_en', 'description_it', 'preview', 'link'];
    public $timestamps = false;
}
