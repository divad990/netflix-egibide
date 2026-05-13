<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'type',
        'image',
        'file_url',
        'year',
        'featured',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function downloads(){
        return $this->hasMany(Download::class);
    }
}
