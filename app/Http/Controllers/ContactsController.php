<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{

    public function update($id, Request $request)
    {
        $data = Contact::find($id);
        // dd($request->mobile_no);

        $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email',
            'mobile_no' => 'required|min:10|max:12',
            'address' => 'required'

        ]);
        $imageName = null;

        if ($request->image != null) {
            $contact =  Contact::find($id);
            unlink(storage_path('app/' . $contact->profile_image_path));

            if ($request->hasFile('image')) {
                $imageExtension = $request->image->getClientOriginalExtension();
                $imageName = time() . "." . $imageExtension;
                $imageName =  $request->file('image')->store();
                $data->profile_image_path = $imageName;
            }
        }

        $data->update([
            // $request->validated()

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->mobile_no
        ]);

        // $data->first_name = $request->input('first_name');
        // $data->last_name = $request->input('last_name');
        // $data->email = $request->input('email');
        // $data->phone_number = $request->input('mobile_no');
        // $data->address = $request->input('address');
        // $data->save();
        session()->flash('success', 'contact updated successful');
        return redirect()->route('contacts.index');
    }
    //
    public function create()
    {

        return view('contacts.create');
    }
    public function show()
    {
        return view('contacts.show');
    }

    public function edit($id)
    {
        $data = Contact::find($id);
        return view('contacts.edit', compact('data'));





        // return $result;
    }
    public function delete($id)
    {
        $contact =  Contact::find($id);
        unlink(storage_path('app/' . $contact->profile_image_path));
        Contact::destroy($id);
        session()->flash('success', 'contact deleted successful');
        return back();
    }
    public function index()
    {
        $contacts = Contact::all();
        // dd($contacts);

        return view('contacts.index', [
            'contacts' => $contacts
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email',
            'mobile_no' => 'required|min:10|max:10',
            'address' => 'required',
            'image' => 'required'
        ]);
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageExtension = $request->image->getClientOriginalExtension();
            $imageName = time() . "." . $imageExtension;
            $imageName =  $request->file('image')->store();
        }

        Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->mobile_no,
            'user_id' => 1,
            'address' => $request->address,
            'profile_image_path' => $imageName
        ]);
        session()->flash('success', 'phoneBook added');
        return redirect('contacts');
    }
}
