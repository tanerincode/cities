<?php

namespace TanerInCode\Cities\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'county_id'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function __construct()
    {
        parent::__construct();
        $this->table = config('cities.tables.districts', 'districts');
    }

    public function neighborhoods()
    {
        return $this->hasMany(config('cities.models.neighborhood', 'TanerInCode\Cities\Models\Neighborhood'));
    }

    public function county()
    {
        return $this->belongsTo(config('cities.models.county', 'TanerInCode\Cities\Models\County'));
    }
}
