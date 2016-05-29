<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class DEM extends Model
{
    protected $table = 'dem';
    public $timestamps = true;

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

}