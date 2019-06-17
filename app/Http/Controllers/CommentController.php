<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request)
    {
    	// $validator = validator::make($request->all(),);
    	$rules = [
	        'title' => 'required',
	        'email' => 'required',
	    ];
	    $validator = Validator::make($request->all(), $rules);
	    if ($validator->fails()) {
	    	return redirect()->route('posts.index')->withErrors($validator);
	    }
    	$image = $request->file('image');
        $imageStore = time().'.'.$image->getClientOriginalExtension();
    	$destinationPath = public_path('comment_images');
        $image->move($destinationPath, $imageStore);
        $store = [
        	'comment' => $request->comment,
        	'name'    => $request->name,
        	'email'   => $request->email,
        	'image'   => 'public/'.$imageStore,
        ];
        // return $store;
    	Comment::create($store);
    	return redirect()->route('posts.index')->with('status', 'Thanks form comment we will soon response!!!');
    }
}
