<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;

class IndexController extends Controller
{
    //
    public function index()
    {
    	$message='Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Которое пунктуация великий продолжил агенство семь свой напоивший своих, имеет! Океана ipsum там пунктуация, прямо грустный лучше щеке гор диких.';
    	$header='Hello World!';
    	$articles=Article::select(['id', 'title', 'desc'])->get();
    	dump($articles);
    	return view('page')->with(['message'=>$message,'header'=>$header,'articles' => $articles]);
    }
}
