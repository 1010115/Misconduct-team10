<?php

namespace App\Http\Controllers;


use App\Models\Message;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    //Here you can view made artwork requests
    public function index()
    {
        $posts = Message::select('id', 'name', 'text')->get();
        return view('users.posts', compact('posts'));
    }

    public function edit(Message $posts)
    {
        $posts = Message::find($posts);
        return view('users.edit')->with('posts', $posts);
    }

    public function update(Request $request, Message $posts)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $posts->update($request->all());

        return redirect()->route('posts.update')->with('succes', 'Post updated successfully');

    }



public function destroy($id)
{
    Message::destroy($id);
    return redirect('posts')->with('flash_message', 'Message deleted!');

}

}

