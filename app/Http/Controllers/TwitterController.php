<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twitter;

class TwitterController extends Controller
{
    private $count = 10;
    private $format = 'array';

    public function twitterUserTimeline()
    {
        $data = Twitter::getUserTimeline(['count' => $this->count, 'format' => $this->format]);
        return view('twitter', compact('data'));
    }
}
