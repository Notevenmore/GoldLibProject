<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Book;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, $id)
    {
        $validated = $request->validate([
            'comment' => 'required',
            'user_id' => 'required',

        ]);
        $validated['book_id'] = $id;
        Review::create($validated);
        return redirect()->route('review', ['id' => $id]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('review', [
            'title' => 'Book Review',
            'user' => Auth::user(),
            'book' => Book::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
