<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Resul extends Model
{
    use HasFactory;
    protected $fillable = [
        's_id',
        'd_name',
        'institute',
        'p_name'
    ];

    /*public function user(){
        return $this->belongsTo(User::class,'created_by');
    }*/


}
