<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;
use Carbon\Carbon;
use Dimsav\Translatable\Translatable;

class Project extends Model
{
    use Translatable;

    public $translationModel = 'App\ProjectTranslation';

    public $translatedAttributes = [
        'title',
        'content',
        'client_name',
        'project_name',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $table = 'project';

    protected $fillable = [
        'created_date',
        'category'
    ];

    public static $category = ["Mechanical Design"     => "Mechanical Design",
                               "Automation Production" => "Industrial Automation",
                               "Outsourcing"           => "Outsourcing",
                               "Consulting"            => "Consulting"
    ];

    public static function boot()
    {
        parent::boot();

        Project::observe(new UserActionsObserver);
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setCreatedDateAttribute($input)
    {
        if ($input != '') {
            $this->attributes['created_date'] = Carbon::createFromFormat(config('quickadmin.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['created_date'] = '';
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getCreatedDateAttribute($input)
    {
        if ($input != '0000-00-00') {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('quickadmin.date_format'));
        } else {
            return '';
        }
    }

}