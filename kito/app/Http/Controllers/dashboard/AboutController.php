<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\dashboard\About;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = About::all();
        return response()->json(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $filename = time() . '_' . $r->file->getClientOriginalName();
        $r->file->move(public_path('uploads/'), $filename);
        // $data['photo']=$filename;
        $data = About::create(['title' => $r->title, 'photo' => $filename]);
        return response()->json(['success' => true, 'data' => $data, 'message' => 'Successfully Inserted!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = About::find($id);
        return response()->json(['success' => true, 'data' => $data, 'message' => 'ok']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = About::find($id);
        return response()->json(['success' => true, 'data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->file()) {
            $filename = time() . '_' . $request->file->getClientOriginalName();
            $request->file->move(public_path('uploads/'), $filename);
            $data = About::find($id)->update(['title' => $request->title, 'photo' => $filename]);
        } else {
            $data = About::find($id)->update(['title' => $request->title]);
        }

        return response()->json(['success' => true, 'data' => $data, 'message' => 'Successfully Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = About::find($id)->delete();
        return response()->json(['success' => true, 'data' => $data, 'message' => 'Successfully Deleted!']);
    }
}
