<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(ContactRequest $request)
    {
        //$form = $request->all();
        //unset($form['_token']);
        //Contact::create($form);
        return view('contacts.confirm', ['form' => $request]);
    }
    
    public function store(Request $request)
    {
        return view('contacts.store', ['form' => $request]);
    }
}
