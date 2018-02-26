<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.index', ['title' => 'TRY Nieruchomości']);
    }

    // TODO clean that assets dir, get to know how to manage that with bower, elixir or something :)
    // TODO check other index pages if there are nicer footers
}
