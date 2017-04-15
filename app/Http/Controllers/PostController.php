<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Auth;

class PostController extends Controller
{
    //
    public function showAllPost()
        {
        	$varpost=Post::all();

    		return view ('post')->with ('postview',$varpost);
    		//return view('post')->withPostview($varpost);
   		}

   	public function createPost(){
   		return view('postsform');
   	}

   	public function savePost(Request $request){

   		//dd($request -> all());
   		$this ->validate($request,[      
   				'title' => 'required | max:60',
   				'story' => 'required | max :60',

   		      ]);

   		$varpost=new Post;
   		$varpost->user_id=Auth::user()->id;
   		$varpost->title=$request->input('title');
   		$varpost->story=$request->input('story');

   		$varpost->save();

   		return redirect()->route('post.index')->withSuccess('Post Created Success Fully');

   	}

   	public function deletePost ($id) {
   		$varpost=Post::find($id);
   		//$varpost=Post::where([['id','=',$id],['user_id','=',Auth::user()->id]])->first();

   		if ($varpost) {
   			$varpost->delete();
   			return redirect()->route('post.index')->withSuccess('Post Successfuly Deleted');
   		}
   		else{

   			return redirect()->route('post.index')->withSuccess('Cannot Delete Post');
   		}


   	}

   	public function editPost ($id){


   	}


}
