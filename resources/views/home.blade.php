@extends('layouts.app')

@section('content')
    <h2 class="ms-4" style="font-weight: bold; color: #d6d6d6">Top Softwares</h2>
    <div class="d-flex mb-5" style="flex-wrap: wrap">
        @foreach($software as $sw)
            <div class="card ms-4 mt-3 text-light shadow-lg" style="width: 19rem; background-color: #272727">
                <a href="/software/{{ $sw->title }}">
                    <img src="{{ $sw->softwareDetails->imgurl }}" class="card-img" style="opacity: 0.7; height: 10rem" alt="...">
                </a>
                <div class="card-img-overlay-bottom ms-2 mt-1" style="color: #d6d6d6">
                    <h5 class="card-title">{{ $sw->title }}</h5>
                    <p class="card-text mb-2">{{ $sw->categories->category }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
