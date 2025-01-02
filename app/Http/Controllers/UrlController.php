<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Url;

class UrlController extends Controller
{
    public function index($short_url) {
        $url = DB::table('url')->where('short_url', $short_url)->first();
        if ($url == null) {
            return '404 not found';
        }
        return redirect()->away($url->original_url);
    }
}
