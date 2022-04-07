<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // ダミーデータ
        $articles = [
            (object) [
                'id' => 1,
                'name' => '名前1',
                'base' => 'ベース1',
                'taste' => '味わい1',
                'feature' => '特徴1',
                'material' => '材料1',
                'comment' => 'コメント1',
                'user_id' => 1,
                'created_at' => now(),
            ],
            (object) [
                'id' => 2,
                'name' => '名前2',
                'base' => 'ベース2',
                'taste' => '味わい2',
                'feature' => '特徴2',
                'material' => '材料2',
                'comment' => 'コメント2',
                'user_id' => 1,
                'created_at' => now(),
            ],
            (object) [
                'id' => 3,
                'name' => '名前3',
                'base' => 'ベース3',
                'taste' => '味わい3',
                'feature' => '特徴3',
                'material' => '材料3',
                'comment' => 'コメント3',
                'user_id' => 1,
                'created_at' => now(),
            ],
        ];

        return view('articles.index', ['articles' => $articles]);
    }
}