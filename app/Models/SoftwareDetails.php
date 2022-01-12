<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareDetails extends Model
{
    use HasFactory;
    protected $guard =['id'];

    protected $fillable = [
        'softwares_id',
        'imgurl',
        'vidurl',
        'description',
        'shortdesc',
        'developer',
        'releasedate',
        'price',
        'versionnumber'
    ];

    public function softwares(){
        return $this->belongsTo(Softwares::class);
    }
}
