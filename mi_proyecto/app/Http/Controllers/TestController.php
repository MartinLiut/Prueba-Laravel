<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class TestController extends Controller
{
    public function view($id){
    	$article = Article::find($id);
		$article->category;
		$article->user;
		$article->tag;

		return view('test.index', ['article' => $article]);
    } 
}
