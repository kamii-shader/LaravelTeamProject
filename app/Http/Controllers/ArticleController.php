<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function articles(Request $request){
        $search = $request->input("input");
        if($search == null){
            $data = Article::all();
        }else{
            $data = Article::where('title', 'LIKE', '%' . $search . '%')->get();
        }
        return view("articles", ["list_article" => $data]);
    }

    public function article_detail(Request $request){
        $search = $request->input("id");
        $data = Article::where('uuid', $search)->first();
        return view("article_detail", [ "article" => $data]);
    }
}
