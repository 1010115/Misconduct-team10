<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Models\Message;

class MessageController extends Controller
{

    public function index()
    {
        return view('users.message');
    }


  //Here you can create request for artwork.
        public function store(Request $request)
    {

        // Validate the inputs
        $request->validate([
            'name' => 'required',
        ]);


        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('text')) {

            $request->validate([
                'text' => '' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
//            $request->text->store('product', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $inbox = new Message([
                "name" => $request->get('name'),
                "text" => $request->get('text'),
            ]);
            $inbox->save(); // Finally, save the record.

        }

        return view('users.message')
        ->with('success','Message request was created successfully.');

    }
}
