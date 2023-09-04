<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show() {
        $content =file_get_contents(public_path('assets/clean-code-php.md'));

       return view('blogs', ['content' => $content]);

    }
}
