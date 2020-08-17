<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookRegister;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $books=BookRegister::all();
           return view('show',compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $result=$request->all();
        //dd($result);
        BookRegister::create($result);

        return redirect()->route('book');


         }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)


    {




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)


    {
        //dd($id);
        $bo=BookRegister::find($id);
        //dd($bo);

        return view('edit',compact('bo'));


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
        //dd($id);
        $bo=BookRegister::find($id);
        $bo->fname=request('fname');
        $bo->lname=request('lname');
        $bo->phone=request('phone');
        $bo->email=request('email');
        $bo->address=request('address');
        $bo->bid=request('bid');
        $bo->bname=request('bname');
        $bo->author=request('author');
         $bo->btype=request('btype');
         $bo->sdate=request('sdate');
         $bo->ddate=request('ddate');
         $bo->save();
         //echo "success";
         return redirect()->route('book');





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
    }


}
