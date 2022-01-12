<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'softwares_id'
    ];

    public function header(){
        return $this->belongsTo(TransactionHeader::class, 'transaction_id');
    }

    public function softwares(){
        return $this->belongsTo(Softwares::class, 'softwares_id');
    }
}
