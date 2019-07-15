@extends('templates.home')
@section('content')

    <section id="portfolio"  class="section-bg" >
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Detail Kategori Event</h3>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                       {{-- <li data-filter=".filter-app">SMA/SMK</li>
                        <li data-filter=".filter-card">Mahasiswa</li>
                        <li data-filter=".filter-web">Umum</li>--}}
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                @foreach($events as $event)

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{ asset('BizPage/img/portfolio/app1.jpg') }}" class="img-fluid" alt="">
                            <a href="{{ asset('BizPage/img/portfolio/app1.jpg') }}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="{{route('detail.event', $event->nama_event)}}">{{$event->nama_event}}</a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

              @endforeach

            </div>

        </div>
    </section>

@endsection