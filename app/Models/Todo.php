<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
     // untuk nentuin kalo initu buat table todos
    // protected $table = 'todos';
    protected $fillable = [
        'user_id',
        'title',
        'desc',
        'date',
        'status',
        'done_time'
    ];
}   

