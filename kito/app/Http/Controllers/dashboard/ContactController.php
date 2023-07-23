<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\dashboard\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Contact::all();
        return response()->json([
            "success" => true,
            "data" => $data

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $data = Contact::create([
            'name' => $r->name,
            'email' => $r->email,
            'phone' => $r->phone,
            'message' => $r->message
        ]);
        return response()->json(['success' => true, 'data' => $data, 'message' => 'Successfully Inserted!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Contact::find($id)->delete();
        return response()->json([
            'success' => true, 'data' => $data, 'message' => 'Successfully deleted!'
        ]);
    }
}
