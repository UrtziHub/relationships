<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getUserPosts($user_id)
    {
        $user = User::find($user_id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $posts = $user->posts()->orderBy('title')->get();

        return response()->json(['posts' => $posts]);
    }

    public function getRecentPosts()
    {
        $posts = Post::orderByDesc('created_at')->take(12)->get();

        return response()->json(['posts' => $posts]);
    }
}
