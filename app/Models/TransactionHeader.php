<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'cardname',
        'cardnumber',
        'total',
        'totalitem'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'users_id');
    }

    public function transDetail(){
        return $this->hasMany(TransactionDetail::class, 'transaction_id');
    }

}
