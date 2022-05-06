<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function confirm(Request $request)
    {
        $data = $request->all();

        return view('confirm', $data);
    }

    public function post(Request $request)
    {
        if($request->get('back')){
            return redirect('/')->withInput();
        }elseif($request->get('post')){
            $fullname = $request->first . $request->last;
            $request->merge(['fullname' => $fullname]);
            $form = $request->all();
            Contact::create($form);
            return view('thanks');
        }
    }

    public function admin(){
        $items = Contact::Paginate(10);
        return view('admin', ['items' => $items]);
    }

    public function search(Request $request)
    {
        $query = new Contact();

        if($request->name){
            $query = $query->where('fullname', 'like', '%' . $request->name . '%');
        }

        if($request->gender){
            $query = $query->where('gender', $request->gender);
        }

        if(!empty($request['from']) && !empty($request['until'])){
            $query = $query->whereBetween('created_at', [$request['from'], $request['until']]);
        }
        
        if($request->email){
            $query = $query->where('email', 'like', '%' . $request->email . '%');
        }

        $items = $query->paginate(10);

        return view('admin', ['items' => $items]);
    }

    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/admin');
    }
}
