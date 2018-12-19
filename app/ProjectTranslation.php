<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use Carbon\Carbon;
//use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectTranslation extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'title',
        'content',
        'client_name',
        'project_name',
    ];
}