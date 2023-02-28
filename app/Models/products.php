<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name', 'price', 'size', 'weight', 'podHeadHapacity'
        ,'material', 'batteryCapacity', 'outputPower', 'burningMode', 'charger', 'description'
        , 'brand_id', 'type_id','origin_id','color_id'
    ];

    public function brand()
    {
        return $this->belongsTo('App\Models\brand', 'brand_id', 'id');
    }
    public function type()
    {
        return $this->belongsTo('App\Models\type', 'type_id', 'id');
    }
    public function origin()
    {
        return $this->belongsTo('App\Models\origin', 'origin_id', 'id');
    }
    public function userViewedIncident()
    {
        return $this->hasMany('App\Models\color','color_id', 'id');
    }
}
