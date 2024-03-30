<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\post;

class PostController extends Controller
{
    public function index() {
        //postsテーブルから全てのデータを取得し、変数$postsに代入する
        $posts = DB::table('posts')->get();

        //変数$postsをposts/index.blade.phpファイルに渡す
        return view('posts.index',compact('posts'));
    }
    public function show($id) {
        //URL'/posts/{id}'部分と主キー(idカラム)の値が一致するデータをpostsテーブルから取得し、変数$postに代入する
        $posts = Post::find($id);

        //変数$postsをposts/show.blade.phpへ渡す
        return view('posts.show',compact('posts'));
    }
    //投稿作成関連
     //投稿データの作成(入力フォーム)
    public function create(){
        return View('posts.create');
    }
    
    public function store(Request $request){
     //バリデーションの設定
     $request->validate([
        'title'=>'required|max:20',
        'content'=>'required|max:200'
     ]);
     //フォームの入力内容を元にテーブルにデータを追加
     $post = new Post();
     $post->title = $request->input('title');
     $post->content = $request->input('content');
     $post->save();
     //投稿一覧ページに戻る
     return redirect("/posts");
    }
}
