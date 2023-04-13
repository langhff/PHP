<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['category_id', 'code', 'name', 'price', 'description', 'image', 'new', 'sale', 'old_price'];

    public function category ()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount() {
        if(!is_null($this->pivot->count)) {
            return $this->pivot->count * $this->price;
        } else {
            return $this->price;
        }
    }

    public function isNew() {
        return $this->new === 1;
    }

    public function isSale() {
        return $this->sale === 1;
    }

    public function setNewAttribute($value) {
        $this->attributes['new'] = $value == 'on' ? 1 : 0 ;
    }

    public function setSaleAttribute($value) {
        $this->attributes['sale'] = $value == 'on' ? 1 : 0 ;
    }
}
