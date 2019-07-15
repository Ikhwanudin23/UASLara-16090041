@extends('templates.home')
@section('content')
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Kategori Event</h3>
          <p>Berikut adalah daftar kategori event yang di ada di web tegal event</p>
        </header>

        <div class="row about-cols">
          @foreach($categories as $category)
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="{{ asset('uploads/kategori/'.$category->filename) }}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="{{route('categories.detailCategories', $category->nama_kategori)}}">{{$category->nama_kategori}}</a></h2>
            </div>
          </div>
            @endforeach


        </div>

      </div>
    </section><!-- #about -->
    @endsection