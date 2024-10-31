<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('index', compact('contacts'));
    }

    public function store(Request $request) {
        $request->validate([
            'fam' => 'required',
            'name' => 'required',
            'ot' => 'required',
        ]);

        $contact = new Contact();
        $contact->fam = $request->fam;
        $contact->name = $request->name;
        $contact->ot = $request->ot;
        $contact->save();

        return redirect()->route('index');
    }

    public function show(Contact $contact){
        return view('show', compact('contact'));
    }
}
