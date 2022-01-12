<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'softwares_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'users_id');
    }

    public function softwares(){
        return $this->belongsTo(Softwares::class, 'softwares_id');
    }
}
