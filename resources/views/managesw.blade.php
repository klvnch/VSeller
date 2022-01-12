@extends('layouts.app')

@section('content')
    <h2 class="ms-4" style="font-weight: bold; color: #d6d6d6">Manage Softwares</h2>
    <h6 class="ms-4 mt-4" style="font-weight: bold; color: #d6d6d6">Filter by Software Name</h6>
    <form class="" action="/filter" method="GET">
        @csrf
        <input class="form-control me-2 bg-dark ms-4" style="width: 30%; color: #d6d6d6; border: none" type="search" name="search" placeholder="Search" aria-label="Search">
        <h6 class="ms-4 mt-3" style="font-weight: bold; color: #d6d6d6">Filter by Software Category</h6>
        @php
            $category = App\Models\SoftwareCategory::all();
        @endphp
        <div class="d-flex" style="flex-wrap: wrap">
            @foreach ($category as $ctgry)
                <div class="form-check ms-4 mb-4">
                    <input class="form-check-input" type="checkbox" name="category" value="{{ $ctgry->id }}" id="category">
                    <label class="form-check-label" for="category" style="color: #d6d6d6">{{ $ctgry->category }}</label>
                </div>
            @endforeach
        </div>
        <button class="btn btn-secondary ms-4" type="submit">Search</button>
    </form>
    <div class="d-flex mb-5" style="flex-wrap: wrap">
        @foreach($software as $sw)
            <div class="card ms-4 mt-3 shadow-lg" style="width: 19rem; background-color: #272727">
                <img src="{{ $sw->softwareDetails->imgurl }}" class="card-img" style="opacity: 0.7; height: 10rem" alt="...">
                <div class="card-img-overlay-bottom ms-2 mt-1">
                    <h5 class="card-title" style="color: #d6d6d6">{{ $sw->title }}</h5>
                    <p class="card-text mb-2" style="color: #d6d6d6">{{ $sw->categories->category }}</p>
                    <div class="mb-2 mt-4">
                        <a href="/updatesw/{{ $sw->title }}" class="btn btn-secondary me-2">Update</a>
                        <a href="/deletesw/{{ $sw->id }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="ms-4 mb-3 text-dark">
            {{ $software->links() }}
        </div>
        <div class="ms-4 rounded" style="z-index: 1; position: fixed; bottom: 2%; right: 1%">
            <a href="/createsw" class="btn btn-secondary" style="font-size: 20px; font-weight: bold">Insert Software</a>
        </div>
    </div>
@endsection
