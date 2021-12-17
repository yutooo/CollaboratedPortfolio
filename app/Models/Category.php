<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable= [
        'id',
        'user_id',
        'sort',
        'name',
        'created_at',
        'updated_at',
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }
    public function tickets(){
        return $this-> hasMany('App\Ticket');
    }
}
