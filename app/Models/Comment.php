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
        'visible' => 'boolean',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getComments(string | null $search = '' ) {
        $comments = $this->where(function ($query) use ($search) {
            if($search) {
                $query->where('description', 'LIKE', "%{$search}%");
               // $query->orwhere('title', $search);
            }
        })
       // ->with('user')
        ->get();

        return $comments;
    }
}
