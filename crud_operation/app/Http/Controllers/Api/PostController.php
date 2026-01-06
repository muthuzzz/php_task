<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Message;

class PostController extends Controller
{
    //list all posts
    public function index()
    {
        return response()->json(
            ['status'=>true,
            'data'=>post::all()
        ]);
    }
        //store new post
        public function store(Request $request)
        {
            $validated=$request->validate(
                [
                    'title'=>'required|min:3',
                    'content'=>'required'
                ]);
                  $post = Post::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Post created successfully',
            'data' => $post
        ], 201);
        }
        //show single post
        public function show($id)
        {
            $post=post::find($id);
            if(!$post)
            {
                return response()->json(
                    [
                        'status'=>false,
                        'message'=>'post not found'
                    ],404
                );
            }
            return response()->json([
                'status'=>true,
                'data'=>$post
            ]);
        }
        //update post
      public function update(Request $request,$id)
      {
        $post=Post::find($id);
        if(!$post)
        {
            return response()->json(
                [
                    'status'=>false,
                    'message'=>'post not found'
                ],404);
        }
         $validated = $request->validate([
            'title'   => 'required',
            'content' => 'required'
        ]);

        $post->update($validated);

        return response()->json([
            'status' => true,
            'message' => 'Post updated successfully',
            'data' => $post
        ]);
    }
     // 5️⃣ Delete post
    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'status' => false,
                'message' => 'Post not found'
            ], 404);
        }

        $post->delete();

        return response()->json([
            'status' => true,
            'message' => 'Post deleted successfully'
        ]);
    }
      }
