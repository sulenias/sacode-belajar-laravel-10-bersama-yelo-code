<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store() {
        dump(request()->get('idea', ''));
    }
}
