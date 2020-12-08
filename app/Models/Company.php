<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'company';
    protected $primaryKey = 'id_company';
    public $timestamps = false;
    protected $fillable = ['name', 'site_url', 'acronym', 'year', 'role', 'country', 'start_date', 'end_date', 'city'];

}
