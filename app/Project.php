<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function forma()
    {
        return $this->belongsTo('App\Forma');
    }

    public function companies()
    {
        return $this->hasMany('App\Company', 'seller_account_id');
    }

    public function products()
    {
        return $this->hasMany('App\Product', 'account_id');
    }

    public function sites()
    {
        return $this->hasMany('App\Site', 'seller_account_id');
    }


}