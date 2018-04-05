<?php

namespace TanerInCode\Cities\Models;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'cityId'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function __construct()
    {
        parent::__construct();
        $this->table = config('cities.tables.county', 'counties');
    }

    public function districts()
    {
        return $this->hasMany(config('cities.models.district', 'TanerInCode\Cities\Models\District'));
    }

    public function city()
    {
        return $this->belongsTo(config('cities.models.city', 'TanerInCode\Cities\Models\City'));
    }
}
