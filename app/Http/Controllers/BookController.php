<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Auth::user()->books()->paginate(6);
        return view('mybooks.index', compact('books'));
    }
    

    public function create()
    {
        return view('mybooks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    
        $book = new Book([
            'titulo' => $request->get('title'), // Cambiado a 'titulo'
            'descripcion' => $request->get('description'), // Cambiado a 'descripcion'
            'imagen' => 'images/'.$imageName, // Ajustado a 'imagen'
            'user_id' => Auth::id(),
        ]);
        $book->save();
    
        return redirect()->route('mybooks.index')->with('success', 'Book has been added');
    }
    

    public function edit(Book $book)
    {
        return view('mybooks.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);

        $book->titulo = $request->get('titulo');
        $book->descripcion = $request->get('descripcion');

        if ($request->hasFile('image')) {
            if (!is_null($book->imagen)) {
                Storage::delete($book->imagen);
            }
            
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $book->imagen = 'images/'.$imageName;
        }

        $book->save();

        return redirect()->route('mybooks.index')->with('success', 'Book has been updated');
    }


    public function destroy(Book $book)
    {
        Storage::delete($book->imagen);
        $book->delete();

        return redirect()->route('mybooks.index')->with('success', 'Book has been deleted');
    }
}
