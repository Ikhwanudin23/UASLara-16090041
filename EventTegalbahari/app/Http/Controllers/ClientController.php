<?php

namespace App\Http\Controllers;

use App\Client;
use App\Event;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $client = Client::all();
        $event = Event::all();
        return view('pages.client.client', compact('client','event'));
    }

    public function create(){
        $event = Event::all();
        return view('pages.client.addclient', compact ('event'));
    }
    public function store(Request $request){
        $client = new Client();
        $client->nama_client = $request->nama_client;
        $client->email = $request->email;
        $client->password = bcrypt($request->password);
        $client->id_event = $request->event;
        $client->save();

        return redirect()->route('client');
        //dd($request->all());
    }
    public function edit($id){
        $client = Client::find($id);
        $event = Event::all();
        return view('pages.client.editclient', compact ('event','client'));
    }


    public function update(Request $request,$id){
        $client = Client::find($id);
        $client->nama_client = $request->nama_client;
        $client->password = bcrypt($request->password);
        $client->id_event = $request->event;
        $client->update();


        return redirect()->route('client');
        //dd($request->all());
    }
    public function delete($id){
        $client = Client::find($id);
        $client->update(['status'=>'0']);

        return redirect()->route('client');
    }


}
