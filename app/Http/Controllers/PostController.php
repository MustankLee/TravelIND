<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //

    public function postEdit(Request $data){
        $post = Post::find($data->id);
        $post->review = $data->review;
        $post->save();
        return redirect()->back();
    }

    public function postDelete(Request $data){
        DB::table('posts')->where('id', '=', $data->id)->delete();
        return redirect()->back();
    }

    public function insert_review(Request $data) {
        DB::table('posts')->insert([
            'user_id' => $data->user_id,
            'tourist_attraction_id'=> $data->tourist_attraction_id,
            'review' => $data->review,
            'time' => date('m/d/Y', time())
        ]);

        return redirect()->back();
    }
}
