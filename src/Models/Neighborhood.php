<?php

namespace TanerInCode\Cities\Models;

use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'pk', 'districtId'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function __construct()
    {
        parent::__construct();
        $this->table = config('cities.tables.neighborhoods', 'neighborhoods');
    }

    public function district()
    {
        return $this->belongsTo(config('cities.models.district', 'TanerInCode\Cities\Models\District'));
    }
}
