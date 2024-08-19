<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kill extends Model
{
    use HasFactory;

    protected $fillable = [
        'killID',
        'userID',
        'killCount',
        'timestamp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}