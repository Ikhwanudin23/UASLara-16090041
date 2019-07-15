<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $categories = Category::all(); //ngambil semua isi dari categori
        return view('pages.categories.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.categories.addcategories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        Category::create([
//            'nama_kategori' => $request->input('nama_categories'),
//            'filename' => $request->file('filename')->store('images'),
//
//        ]);

        $foto = $request->file('filename');
        $filename = time().'.'.$foto->getClientOriginalExtension();
        $path = public_path('uploads/kategori');
        $foto->move($path,$filename);

        $categori = new Category();
        $categori->nama_kategori = $request->nama_categories;
        $categori->filename=$filename;
        $categori->save();

        //dd($c);

        return redirect()->route('categories');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::find($id);
        return view('pages.categories.editcategories', compact ('categories'));
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



        $categori = Category::find($id);
        $categori->nama_kategori = $request->nama_categories;
        $foto = $request->file('filename');
        if ($foto==''){
            $categori->filename=$request->old_filename;
        }else{
            $filename = time().'.'.$foto->getClientOriginalExtension();
            $path = public_path('uploads/kategori');
            $foto->move($path,$filename);
            $categori->filename=$filename;
        }


        $categori->update();

        //dd($c);

        return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $categori)
    {
       $categori->delete();
       return back(); 
    }
}
