<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContaktController extends Controller
{
    public function submit(ContactRequest $req) {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение добавлено');
    }
    public function allData() {
        $contact = new Contact;
     //   $contact = Contact::all();
    //    dd($contact->all());
     //   dd(Contact::all());
     //   return view('messagesAll', ['data' => Contact::all()]);
     //return view('messagesAll', ['data' => $contact->orderBy('id')->take(3)->get()]);
     //   return view('messagesAll', ['data' => $contact->where('name', '=' , 'Дми')->get()]);
        return view('messagesAll', ['data' => $contact->all()]);
    }
    public function showOneMessage($id) {
        $contact = new Contact;
        return view('messageOne', ['data' => $contact->find($id)]);
    }
    public function updateMessage($id) {
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }
    public function updateMessageSubmit($id, ContactRequest $req) {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено');
    }
    public function deleteMessage($id) {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }
}
