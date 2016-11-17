<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller{

    public function postContact(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:contacts',
            'tel' => 'required|max:11',
            'message' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->telephone = $request['tel'];
        $contact->message = $request['message'];
        $contact->save();
        return redirect()->back();

    }
    public function getMessages(){
        $contacts = Contact::all();
        return view('admin.contact',['contacts'=> $contacts]);
    }

    public function getDeleteMessage($contact_id){
        $contact = Contact::findOrfail($contact_id);
        $contact->delete();
        return redirect()->route('messages')->with(['success' => 'Deleted Successfully']);
    }
}