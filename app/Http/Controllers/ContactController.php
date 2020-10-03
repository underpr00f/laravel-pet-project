<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
        $contact = new Contact();
        $contact->email = $req->input('email');
        $contact->message = $req->input('message');
        $contact->save();
        // $validation = $req->validate([
        //     'email' => 'required|min:5|max:50',
        //     'password' => 'required'
        // ]);
        return redirect()->route('welcome')->with('success', 'Сообщение отправлено');
    }
    public function contactData() {
        // $contact = Contact::all();
        $contact = new Contact;
        //$contact->orderBy('id','desc')->skip(1)->take(4)->get()
        //$contact->where('email','=','example@mail.com')->get()
        return view('contacts', ['data' => $contact->orderBy('id','desc')->take(4)->get()]);
    }
    public function contactSingle($id) {
        $contact = new Contact;
        return view('contact-single', ['data' => $contact->findOrFail($id)]);
    }
    public function contactUpdate($id, ContactRequest $req) {
        $contact = Contact::find($id);

        $contact->email = $req->input('email');
        $contact->message = $req->input('message');
        $contact->save();
        return redirect()->route('contact-single', $id)->with('success', 'Сообщение обновлено');
    }
    public function contactDelete($id) {
        Contact::find($id)->delete();
        $text = 'Сообщение '.$id.' удалено';
        return redirect()->route('contact-data')->with('success', $text);
    }
}
