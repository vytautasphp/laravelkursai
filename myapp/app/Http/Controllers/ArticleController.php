<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticle;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Google\Translate\TranslateClient;

class ArticleController extends Controller


{
    //
    public function index()
    {
        return Article::all();
    }
 
    public function show(Article $article)
    {
        //$this->authorize('view', $article);
         $client = new Client();
         $res = $client->request('GET', 'https://api.github.com/user', 
         ['auth' => ['user', 'pass']
            ]);

            echo $res->getStatusCode();
            


// Send an asynchronous request.
// $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
// $promise = $client->sendAsync($request)->then(function ($response) {
//     echo 'I completed! ' . $response->getBody();
// });
// $promise->wait();
    }











    public function store(StoreArticle $request)
    {
        $article = Article::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
       
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }


    

}
