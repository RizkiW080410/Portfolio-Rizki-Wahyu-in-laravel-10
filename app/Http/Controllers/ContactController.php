<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact',[
            'title' => 'contact'
        ]);
    }

    public function store(Request $request)
    {
        $datacontact = $request->validate([
            'name' => 'nullable|max:65',
            'number' => 'required|min:12|max:20',
            'email' => 'required|email:dns',
            'emailsub' => 'required|max:255',
            'message' => 'required|max:255'
        ]);

        Contact::create($datacontact);

    return redirect('/contact')->with('success', 'Pesan terkirim dengan sukses!');
    }
}
