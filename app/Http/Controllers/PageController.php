<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function Index($slug)
    {
        return Page::findBypage($slug);
    }
}
