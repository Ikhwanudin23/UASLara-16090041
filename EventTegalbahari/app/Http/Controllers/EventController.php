<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
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
        $event = Event::all();
        $categories = Category::all();
        return view('pages.event.event',compact('event','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.event.addevent',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
          'required' => 'tidak boleh kosong bro',
            'min' => 'minimal isi deskripsi event 10 karakter',
            'max' => 'maksimal isi deskripsi event 500 karakter',
        ];
        $this->validate($request,[
           'deskripsi' => 'required|min:10|max:1000',
        ],$messages);


       /* $foto = $request->file('filename');
        $filename = time().'.'.$foto->getClientOriginalExtension();
        $path = public_path('uploads/event');
        $foto->move($path,$filename);*/


        $event = new Event();
        $event->nama_event = $request->nama_event;
       /* $event->filename=$filename;*/
        $event->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
        $event->jam = $request->jam_pelaksanaan;
        $event->tempat = $request->tempat_pelaksanaan;
        $event->link_registrasi = $request->link_registrasi;
        $event->contact_person = $request->contact_person;
        $event->deskripsi = $request->deskripsi;
        $event->persyaratan = $request->persyaratan;
        $event->id_kategori = $request->kategori;
        $event->save();

        return redirect()->route('event');

        /*dd($request->all());*/


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illum   inate\Http\Response
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
        $event = Event::find($id);
        $categories = Category::all();
        return view('pages.event.editevent',compact('categories','event'));
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
        $event = Event::find($id);
        $event->nama_event = $request->nama_event;
        $event->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
        $event->jam = $request->jam_pelaksanaan;
        $event->tempat = $request->tempat_pelaksanaan;
        $event->link_registrasi = $request->link_registrasi;
        $event->contact_person = $request->contact_person;
        $event->deskripsi = $request->deskripsi;
        $event->persyaratan = $request->persyaratan;
        $event->id_kategori = $request->kategori;
        $event->update();

        return redirect()->route('event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $event = Event::find($id);
        $event->update(['status'=>'0']);

        return redirect()->route('event');
    }
    public function detail($id)
    {
        $event = Event::find($id);
        $categories = Category::all();
        return view('pages.event.detailevent',compact('categories','event'));
    }
}
