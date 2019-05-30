<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Skills extends Model
{

    public function getSkillAttribute()
    {
        $locale = App::getLocale();
        $column = "skill_" . $locale;
        return $this->{$column};
    }

    public function getDescriptionAttribute()
    {
        $locale = App::getLocale();
        $column = "description_" . $locale;
        return $this->{$column};
    }
    protected $table = 'skills';
	protected $fillable = ['skill_en','skill_it','description_en','description_it','ability'];
	public $timestamps = false;
}
