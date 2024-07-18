<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profil', [
            'title' => 'Profile',
            'user' => Auth::user()
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:30',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($id)
            ],
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        
        if($request->hasFile('image')){
            $imageName = $id.'_'. $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('img/profile', $imageName, 'public');
            User::where('id', $id)->update([
                'image' => $imageName
            ]);
        }

        User::where('id', $id)->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);

        return redirect()->route('profile.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
