<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book2;
use Illuminate\Http\Request;

class BookController2 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book2::latest()->get();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {

        Book2::create($request->validated());
        
        return redirect()
            ->route('books.index')
            ->with('success', 'buku berhasil ditambahkan :D');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book2 $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book2 $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book2 $book)
    {
        $book->update($request->validated());
        return redirect()
            ->route('books.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book2 $book)
    {
        $book -> delete();
        return redirect()
        ->route('books.index')
        ->with('success', 'Buku berhasil dihapus.');
    }
}
