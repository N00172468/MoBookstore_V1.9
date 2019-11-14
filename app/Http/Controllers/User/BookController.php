<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-17T14:31:57+01:00
# @Filename: BookController.php
# @Last modified by:   mo
# @Last modified time: 2019-11-08T14:12:23+00:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('role:user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('user.books.index')->with([
          'books' => $books
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);

        // dd($book->reviews()->get());

        $reviews = $book->reviews()->get();

        return view('user.books.show')->with([
          'book' => $book,
          'reviews' => $reviews
        ]);
    }
}
