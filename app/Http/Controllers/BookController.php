<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
    * GET /books
    */
    public function index()
    {
        return 'Here are all the books...';
    }

    /**
    * GET one book
    */
    public function book($title)
    {
    	return 'You requested the book '.$title;
    }
}
