<?php

namespace App\Http\Controllers;

use App\Http\Requests\UrlGeneratorRequest;
use App\Models\UrlGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UrlGeneratorController extends Controller
{
    public function store(UrlGeneratorRequest $request)
    {
        $url = UrlGenerator::create($request->validated());

        return redirect('/')->with(['url' => $url->url, 'token' => $url->token]);
    }
}
