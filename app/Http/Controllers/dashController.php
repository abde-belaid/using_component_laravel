<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //         date_default_timezone_set("Africa/tunis");
        // dd(now());
        $d = [];
        $data["intitule"] = "Souris";
        $data["prix"] = 188;
        $data["description"] = "lorem ipsum";
        $data["class"] = "danger";
        $data["source"] = "https://cdn.pixabay.com/photo/2017/02/27/21/47/yogurt-2104327_640.jpg";
        $d[] = $data;

        $data["intitule"] = "Souris3";
        $data["prix"] = 1899;
        $data["description"] = "lorem ipsum 3";
        $data["class"] = "info";
        $data["source"] = "https://cdn.pixabay.com/photo/2017/01/06/17/49/honey-1958464_640.jpg";
        $d[] = $data;

        $data["intitule"] = "Souris4";
        $data["prix"] = 188;
        $data["description"] = "lorem ipsum 4";
        $data["class"] = "success";
        $data["source"] = "https://cdn.pixabay.com/photo/2016/10/06/22/29/headphones-1720164_640.jpg";
        $d[] = $data;

        $data["intitule"] = "Souris2";
        $data["prix"] = 1899;
        $data["description"] = "lorem ipsum 2";
        $data["class"] = "primary";
        $data["source"] = "https://cdn.pixabay.com/photo/2016/03/27/07/12/apple-1282241_640.jpg";
        $d[] = $data;

        $data["intitule"] = "Souris2";
        $data["prix"] = 1899;
        $data["description"] = "lorem ipsum 2";
        $data["class"] = "warning";
        $data["source"] = "https://cdn.pixabay.com/photo/2017/08/21/17/26/solar-photovoltaic-2666106_640.jpg";
        $d[] = $data;

        return view("welcome", compact('d'));
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
        //
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
        //
    }
}
