<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ActivityController extends Controller
{
    //建立文章
    public function createPost(Request $request)
    {
        $data = $request->all();
        Post::create($data);
        return [
            'status' => true,
            'message' => '建立文章成功',
        ];
    }

    //編輯文章
    public function editPost($id, Request $request)
    {
        $post = Post::find($id);
        $post->content = $request->json('content');
        $post->save();
        return [
            'status' => true,
            'message' => '編輯成功',
        ];
    }

    //刪除文章
    public function deletePost($id, Request $request)
    {
        Post::find($id)->delete();
        return [
            'status' => true,
            'message' => '刪除成功',
        ];
    }

}
