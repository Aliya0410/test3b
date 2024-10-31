<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function store(Request $request, Contact $contact) {
        $request->validate([
            'tel' => 'required',
        ]);

        $phone = new Phone();
        $phone->tel = $request->tel;
        $phone->contact_id = $contact->id;
        $phone->save();

        return back();
    }
}
