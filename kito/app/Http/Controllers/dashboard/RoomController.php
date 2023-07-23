<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\dashboard\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Room::all();
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
    public function store(Request $request)
    {
        $filename = time() . '_' . $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads/'), $filename);
        $data = Room::create([
            'title' => $request->title,
            'details' => $request->details,
            'photo' => $filename
        ]);
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Successfully Inserted!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Room::find($id);
        return response()->json(['success' => true, 'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Room::find($id);
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
            $data = Room::find($id)->update(['title' => $request->title, 'details' => $request->details, 'photo' => $filename]);

        } else {
            $data = Room::find($id)->update(['title' => $request->title, 'details' => $request->details]);
        }

        return response()->json(['success' => true, 'data' => $data, 'message' => 'Successfully Updated!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Room::find($id)->delete();
        return response()->json(['success' => true, 'data' => $data, 'message' => 'Successfully Deleted!']);
    }
}
