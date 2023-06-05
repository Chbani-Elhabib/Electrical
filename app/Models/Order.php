<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\People;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_order';
    public $incrementing = false;

    public function Person()
    {
        return $this->belongsTo(People::class , 'id_people' , 'id_people' );
    }
}
