<?php

namespace TanerInCode\Cities\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function __construct()
    {
        parent::__construct();
        $this->table = config('cities.tables.city', 'cities');
    }

    public function counties()
    {
        return $this->hasMany(config('cities.models.county', 'TanerInCode\Cities\Models\County'));
    }
}
