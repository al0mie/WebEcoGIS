<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class BorderSettings extends Model
{
    protected $table = 'border_settings';
    public $timestamps = true;

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

}