@extends('layouts.app')

@section('content')
    <h2 class="ms-4" style="font-weight: bold; color: #d6d6d6">Search Results</h2>
    <div class="d-flex mb-5" style="flex-wrap: wrap">
        @php
            $count = 0;
        @endphp
        @foreach($results as $sw)
            <div class="card ms-4 mt-3 shadow-lg" style="width: 19rem; background-color: #272727">
                <a href="/software/{{ $sw->title }}">
                    <img src="{{ $sw->softwareDetails->imgurl }}" class="card-img" style="opacity: 0.7" alt="...">
                </a>
                <div class="card-img-overlay-bottom ms-2 mt-1" style="color: #d6d6d6">
                    <h5 class="card-title">{{ $sw->title }}</h5>
                    <p class="card-text mb-2">{{ $sw->categories->category }}</p>
                </div>
            </div>
            @php
                $count++;
            @endphp
        @endforeach
        @if($count == 0)
            <h4 class="ms-4 mt-2" style="font-weight: bold; color: #d6d6d6">Game Not Found!</h4>
        @endif
    </div>
@endsection
