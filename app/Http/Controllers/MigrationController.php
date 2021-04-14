<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class MigrationController extends Controller
{
    //根據用戶模型取得所有 文章及評論
    public function user(User $user, Request $request)
    {
        return response()->json($user);
    }

    //根據用戶模型 建立文章
    public function createPost(User $user, Request $request)
    {
        $jsonData = $request->json()->all();
        $post = $user->posts()->create($jsonData);
        return response()->json($post);
    }

    //建立文章及評論關聯
    public function createComment(Post $post, Request $request)
    {
        $user_Id = 1;
        $jsonData = $request->json()->all();
        $comment = Comment::create([
            'user_id' => $jsonData['user_id'], //發文者先寫死
            'content' => $jsonData['content'],
        ]);

        $post->comments()->attach($comment->id, ['user_id' => $user_Id]);
        return response()->json($post);
    }

}
