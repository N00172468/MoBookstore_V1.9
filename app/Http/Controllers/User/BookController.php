<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-17T14:31:57+01:00
# @Filename: BookController.php
# @Last modified by:   mo
# @Last modified time: 2019-10-17T15:56:19+01:00




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

        return view('user.books.show')->with([
          'book' => $book
        ]);
    }
}