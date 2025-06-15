<?php

namespace App\Http\Controllers;

use App\Models\Greetings;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //

    public function index()
    {
        // Logic to retrieve comments
        // Paginate 10
        $comments = Greetings::paginate(10);
        return view('pages.comments.index', compact('comments'));
    }
}
