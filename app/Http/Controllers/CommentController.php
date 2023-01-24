<?php

namespace App\Http\Controllers;

use App\Models\{Comment, User};
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $comment;
    protected $user;

    public function __construct(Comment $comment, User $user)
    {
        $this->comment = $comment; 
        $this->user = $user; 
    }

    public function index($userId) {
        $user = $this->user->find($userId);

        $comment = $user->comments()->get();

        return view('users.comments.index', compact('user', 'comment'));
    }


    public function create($userId) {
        $user = $this->user->find($userId);

        $comment = $user->comments()->get();

        return view('users.comments.create', compact('user'));
    }


    
}
