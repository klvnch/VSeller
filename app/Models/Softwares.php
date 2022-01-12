<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softwares extends Model
{
    use HasFactory;
    protected $guard =['id'];

    protected $fillable = [
        'category_id',
        'title'
    ];

    public function categories(){
        return $this->belongsTo(SoftwareCategory::class, 'category_id');
    }
    public function softwareDetails(){
        return $this->hasOne(SoftwareDetails::class);
    }
    public function cart(){
        return $this->hasMany(Cart::class);
    }
    public function detail(){
        return $this->hasMany(TransactionDetail::class);
    }
}
