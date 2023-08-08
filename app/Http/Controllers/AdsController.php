<?php

namespace App\Http\Controllers;

use App\Models\ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = ads::all();
        return response()->json($use->ads);
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
        $ads = new Ads;
        $ads->title = $request->input('title');
        $ads->description = $request->input('description');
        $ads->amount = $request->input('amount');
        $ads->email = $request->input('email');
        $ads->save();
        return response()->json($ads,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ads $ads)
    {
        return response()->json($ads, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ads $ads)
    {
        $ads->title = $request->input('title');
        $ads->description = $request->input('description');
        $ads->amount = $request->input('amount');
        $ads->email = $request->input('email');
        $ads->save();
        return response()->json($ads, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ads $ads)
    {
        $ads->delete();
        return response()->json($ads, 200);
    }
}
