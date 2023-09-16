<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("dashboard",[
            'Posts' => Post::all()->sortByDesc('id'),
            'Category' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view("admin.createPost",[
            'Category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

       $formFields = $request->validate([
       'Title' => 'required',
       'Author' => 'required',
       'category_id' => 'required',
       'Content' => 'required',
       'isPublished' => 'required'
    ]);
    if($request->hasFile('Image')){
        $formFields['imagePath'] = $request->file('Image')->store('images','public');
    }

        Post::create($formFields);


        return redirect('/dashboard');
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
