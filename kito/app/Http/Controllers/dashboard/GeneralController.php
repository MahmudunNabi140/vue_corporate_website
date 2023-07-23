<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\dashboard\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = General::all();
        return response()->json(['data' => $data]);
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
        $filename = time() . '_' . $r->file->getClientOriginalName();
        $r->file->move(public_path('uploads/'), $filename);
        // $data['photo']=$filename;
        $data = General::create([
            'address' => $r->address,
            'phone' => $r->phone,
            'email' => $r->email,
            'map' => $r->map,
            'logo' => $filename
        ]);
        return response()->json(['success' => true, 'data' => $data, 'message' => 'Successfully Inserted!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = General::find($id);
        return response()->json(['success' => true, 'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = General::find($id);
        return response()->json(['success' => true, 'data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, string $id)
    {

        if ($r->file()) {
            $filename = time() . '_' . $r->file->getClientOriginalName();
            $r->file->move(public_path('uploads/'), $filename);
            $data = General::find($id)->update(['title' => $r->title]);
            $data = General::find($id)->update([
                'address' => $r->address,
                'phone' => $r->phone,
                'email' => $r->email,
                'map' => $r->map,
                'logo' => $filename
            ]);
        } else {
            $data = General::find($id)->update([
                'address' => $r->address,
                'phone' => $r->phone,
                'email' => $r->email,
                'map' => $r->map
            ]);
        }
        return response()->json(['success' => true, 'data' => $data, 'message' => 'Successfully Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = General::find($id)->delete();
        return response()->json(['success' => true, 'data' => $data, 'message' => 'Successfully Deleted!']);
    }
}
