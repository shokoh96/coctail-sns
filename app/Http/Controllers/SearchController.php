<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $word = $request->word;
        $base = $request->base_id;
        $taste = $request->taste_id;
        $alcohol = $request->alcohol;

        if ($alcohol !== null) {
            $alcohol = explode(" ", $alcohol);
            $alcohol_from = (int) $alcohol[0];
            $alcohol_to = (int) $alcohol[1];
        } else {
            $alcohol_from = '';
            $alcohol_to = '';
        }

        $url = "https://cocktail-f.com/api/v1/cocktails?" . 'word=' . $word . '&' . 'base=' . $base . '&' . 'taste=' . $taste . '&' . 'alcohol_from=' . $alcohol_from . '&' . 'alcohol_to=' . $alcohol_to;
        $method = "GET";

        $client = new Client();
        $response = $client->request($method, $url);

        $posts = $response->getBody();
        $posts = json_decode($posts, true);
        $posts = $posts['cocktails'];

        return view('tops.search_result', ['posts' => $posts]);
    }
}