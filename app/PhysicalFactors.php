<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class PhysicalFactors extends Model
{
    protected $table = 'physical_factors';
    public $timestamps = false;

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

}