<?php

namespace App\Http\Controllers;


use App\Models\Message;
use App\Models\inbox;
use Illuminate\Http\Request;

class InboxController extends Controller
{

    //Here you can view the messages
    public function index()
    {
        $inbox = Message::select('id', 'name', 'text')->get();
        return view('users.inbox', compact('inbox'));
    }

    public function edit(Message $inbox)
    {
        $inbox = Message::find($inbox);
        return view('users.edit')->with('inbox', $inbox);
    }

    public function update(Request $request, Message $inbox)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $request->validate([
            'text' => 'required',
        ]);

        $inbox->update($request->all());

        return redirect()->route('inbox.update')->with('succes', 'Message updated successfully');
    }

public function destroy($id)
{
    Message::destroy($id);
    return redirect('inbox')->with('flash_message', 'Message deleted!');

}

}

