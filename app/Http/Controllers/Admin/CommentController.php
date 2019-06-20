<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($value='')
    {
    	$comments = Comment::orderBy('id','DESC')->get();
    	return view('admin.comment',compact('comments'));
    }
}
