<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
class MigrationController extends Controller
{
    //
    public function user($userId, Request $request)
    {
        $user = User::with(['posts'])->find($userId);
        return response()->json($user);
    }

    //文章
    public function post($postId, Request $request)
    {
        $post = Post::with('comments')->find($postId);
        return response()->json($post);
    }

    //建立評論
    public function createComment(Post $post, Request $request)
    {
        $comment = Comment::create([
            'user_id' => 1,
            'content' => '評論內容...',
        ]);
        $post->comments()->attach($comment->id);
        return response()->json($post);
    }

}
