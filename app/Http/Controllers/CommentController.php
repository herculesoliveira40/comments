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

    public function index(Request $request, $userId) {
        $user = $this->user->find($userId);

        $comment = $user->commentsUser()
        ->where('description', 'LIKE', "%{$request->search}%")
        ->get();
        return view('users.comments.index', compact('user', 'comment'));
    }


    public function create($userId) {
        $user = $this->user->find($userId);

        $comment = $user->commentsUser()->get();

        return view('users.comments.create', compact('user'));
    }


    public function store(Request $request, $userId) {
        $user = $this->user->find($userId);
        $user->commentsUser()->create([
            'description' => $request->description,
            'visible' => isset($request->visible),
            'user_id' => $user,
       ]);
      // dd($request->all());
        return redirect()->route('comments.user.index', $user->id);
    }


    public function edit($userId, $id) {
        $comment = $this->comment->find($id);

        $user = $comment->user;

        return view('users.comments.edit', compact('user', 'comment'));
    }


    public function update(Request $request, $id) {
        $comment = $this->comment->find($id);
        $comment->update([
            'description' => $request->description,
            'visible' => isset($request->visible),
       ]);
      // dd($request->all());
        return redirect()->route('comments.user.index', $comment->user_id);
    }
}
