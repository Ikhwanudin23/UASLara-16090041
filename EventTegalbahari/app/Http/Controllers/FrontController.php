<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Event;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('frontpage.awal', compact('categories'));
    }

    public function detailCategories($nama)
    {
        $category = Category::where('nama_kategori', $nama)->first();
        $events = Event::where('id_kategori',$category->id)->get();
//        $categories = Category::all();
        return view('frontpage.detailcategories', compact('events'));
    }

    Public function detailEvent($nama){
        $event = Event::where('nama_event',$nama)->first();
        return view('frontpage.detailevent', compact('event'));
    }
}
