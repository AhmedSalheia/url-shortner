<?php

namespace App\Http\Controllers;

use App\Models\Url;

class ShortenerController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        $url = request('link');
        if (!(str_starts_with($url, 'https://') || str_starts_with($url, 'http://') ))
            $url = 'http://' . trim(trim($url,'/?&:'));

        $url = Url::firstOrCreate(
            ['url'=>$url],
            ['uuid'=>\Str::random('8'),'link'=>$url]
        );

        return $url->refresh()->uuid;
    }

    public function open($uuid)
    {
        $url = Url::findOrFail($uuid);
        return view('open')->with('url',$url);
    }
}
