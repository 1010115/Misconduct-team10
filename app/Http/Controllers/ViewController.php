<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Models\Users;


class ViewController extends Controller
{
//
//    public function index()
//    {

//        $users = Users::select('id', 'name', 'email')->get();
//        return view('users.index', compact('users'));
//
//    }


//    public function create(){
//        return view('users.create');
//    }
//
//    public function delete(){
//        return view('users.create');
//    }
    public function homePage() {
        $users = Users::select('id', 'name', 'email')->get();
        return view('homePage', compact('users'));
    }

    public function profile() {
        $users = Users::select('id', 'name', 'email')->get();
        return view('profile', compact('users'));
    }

    public function editProfile(){
        $users = Users::select('id', 'name', 'email','password')->get();
        return view('editProfile', compact('users'));
    }

    public function store(Request $request){
        //$data = $request->except('_method', 'token', 'submit');
        //validate
        $request -> Validator ([
            'title' => 'required',
            'description'=> 'required',
            'price' =>['required', 'numeric']
        ]);
    }

}
