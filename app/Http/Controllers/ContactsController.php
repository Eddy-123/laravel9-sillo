<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:500'
        ]);

        //dd(Contact::create($request->all()));

        $contact = new Contact();
        Contact::create([
            'email' => $request->email,
            'message' => $request->message
        ]);
        // $contact->email = $request->email;
        // $contact->message = $request->message;
        // $contact->save();

        return "Contact bien enregistre !";
    }
}
