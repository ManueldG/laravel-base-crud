<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use illuminate\Support\Str;

use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$comics = Comic::paginate(3);
        $comics = Comic::orderBy('title','desc')->paginate(3);


        return view('comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_comic = new Comic();

        $new_comic->title = $data['title'];
        $new_comic->slug = Str::slug($data['title'],'-');
        $new_comic->description = $data['description'];
        $new_comic->thumb = $data['image'];
        $new_comic->type = $data['type'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = date("Y-m-d");

        $new_comic->save();

        return redirect()->route('comic.show',$new_comic->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $comics = Comic::where('slug',$slug)->first();
        if ($comics)
        return view('comics.show',compact('comics'));

        abort(404, 'PAGE NOT FOUND!');
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
    }
}
