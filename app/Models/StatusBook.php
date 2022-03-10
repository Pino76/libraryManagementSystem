<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusBook extends Model
{
    use HasFactory;

    protected $table = 'status_books';
    protected $fillable = [
        'book_id',
        'user_id',
        'start_date',
        'end_date'
    ];
}
