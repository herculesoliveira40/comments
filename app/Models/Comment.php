<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'visible',
    ];

    protected $casts = [
        'visible' => 'bollean'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
