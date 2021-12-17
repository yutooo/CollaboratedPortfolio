<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ticket extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'ticket_contents',
    //     'title',
    //     'user_id',
    //     'category_id',
    //     'open',
    //     'progress',
    //     'status',
    //     'priority',
    //     'work_hour',
    //     'scheduled_start_at',
    //     'scheduled_finish_at',
    //     'start_at',
    //     'finsh_at'
    // ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function users(){
        return $this->belongsTo(User:: class);
    }

    // public function users(){
    //     return $this->belongsTo(User:: class);
    // }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
