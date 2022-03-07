<?php

namespace App\Http\Controllers;

use App\Books;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Returns all books;

        $data=Books::all();
        return response()->json($data);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        {
            //inserting data into the database
            $validateData=$request->validate([
                 'name'=>'required |unique:books|max:250',
                'authors'=>'required',
            ]);


    $data=array();
    $data['name']=$request->name;
    $data['authors']=$request->authors;
    $data['created_at']=Carbon::now();
    $insert=DB::table('books')->insert($data);
    return response('Book Added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $show=DB::table('books')->where('id',$id)->first();
        return response()->json($show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $show=DB::table('books')->where('id',$id)->delete();
        $book=Books::findOrFail($id);
        $book->delete();
        // return response('Book Deleted Successfully');
        return response(null,204);
    }
}
