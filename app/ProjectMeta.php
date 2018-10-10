<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectMeta extends Model
{
    protected $table = 'project_metadata';

    public function meta_project()
    {
        return $this->belongsTo('App\Project', 'project_id');
    }

}
