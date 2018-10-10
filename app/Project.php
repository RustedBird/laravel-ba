<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    protected $fillable = ['*'];

    protected $dates = ['deleted_at'];

    public static function getSomeProjects($value = NULL)
    {
        return self::where('id', '>', $value)->get();
    }

    public function changeName(String $newName)
    {
        return $this->attributes['name'] = $newName;
    }

    public function project_metadata()
    {
        return $this->hasOne('App\ProjectMeta');
    }

    public function project_articles()
    {
        return $this->hasMany('App\Article');
    }
}
