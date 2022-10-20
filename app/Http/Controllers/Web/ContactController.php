<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return  view('site.contact');
    }
}
