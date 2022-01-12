@extends('layouts.app')

@section('content')
    <h2 class="ms-4" style="font-weight: bold; color: #d6d6d6">Update Software ({{ $software->title }})</h2>
    @if(session()->has('invalid'))
        <div class="bg-danger text-light ms-4 mb-2 rounded" style="width: 70%">
            <span style="font-size: 20px" class="ms-4 ">{{ session('invalid') }}</span><br>
        </div>
    @endif
    <form action="/update/{{ $software->id }}" method="POST">
        @csrf
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="mb-2 col-8" style="font-weight: bold; font-size: 18px; color: #d6d6d6">Software Name</label>
            <input type="text" disabled class="form-control bg-dark" value="{{ $software->title }}" placeholder="Software Title" name="swname" style="width: 96%; color: #d6d6d6; border: none" id="swname">
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamedesc" class="mb-2 col-8" style="font-weight: bold; font-size: 18px; color: #d6d6d6">Short Description</label>
            <textarea class="form-control bg-dark" name="swshortdesc" id="swshortdesc" style="width: 96%; resize: none; color: #d6d6d6; border: none" rows="5">{{ $software->softwareDetails->shortdesc }}</textarea>
            <label for="text" class="text-info mt-1">Write some sentences about the software</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamedesc" class="mb-2 col-8" style="font-weight: bold; font-size: 18px; color: #d6d6d6">Software Description</label>
            <textarea class="form-control bg-dark" name="swdesc" id="swdesc" style="width: 96%; resize: none; color: #d6d6d6; border: none" rows="5">{{ $software->softwareDetails->description }}</textarea>
            <label for="text" class="text-info mt-1">Write some sentences about the software</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="mb-2 col-8" style="font-weight: bold; font-size: 18px; color: #d6d6d6">Software Developer</label>
            <input type="text" class="form-control bg-dark" value="{{ $software->softwareDetails->developer }}" placeholder="Software Developer" name="swdeveloper" style="width: 96%; color: #d6d6d6; border: none" id="swdeveloper">
            <label for="text" class="text-info mt-1">Write the software developer name</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="mb-2 col-8" style="font-weight: bold; font-size: 18px; color: #d6d6d6">Software Release Date</label>
            <input type="text" class="form-control bg-dark" value="{{ $software->softwareDetails->releasedate }}" placeholder="Software Release Date" name="swreleasedate" style="width: 96%; color: #d6d6d6; border: none" id="swreleasedate">
            <label for="text" class="text-info mt-1">Write the software release date</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="mb-2 col-8" style="font-weight: bold; font-size: 18px; color: #d6d6d6">Software Version</label>
            <input type="text" class="form-control bg-dark" value="{{ $software->softwareDetails->versionnumber }}" placeholder="Software Version" name="swversion" style="width: 96%; color: #d6d6d6; border: none" id="swdeveloper">
            <label for="text" class="text-info mt-1">Write the software version</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="mb-2 col-8" style="font-weight: bold; font-size: 18px; color: #d6d6d6">Software Category</label>
            <select name="swcategory" id="swcategory" class="form-select bg-dark" style="width: 96%; color: #d6d6d6; border: none">
            @php
                $category = App\Models\SoftwareCategory::all();
            @endphp
            @foreach ($category as $ctgry)
                @if($ctgry->id == $software->category_id)
                    <option value="{{$ctgry->id}}" selected>{{$ctgry->category}}</option>
                @else
                    <option value="{{$ctgry->id}}">{{$ctgry->category}}</option>
                @endif
            @endforeach
            </select>
            <label for="text" class="text-info mt-1">Choose software category</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="mb-2 col-8" style="font-weight: bold; font-size: 18px; color: #d6d6d6">Software Price</label>
            <input type="text" class="form-control bg-dark" value="{{ $software->softwareDetails->price }}" placeholder="Software Price" name="swprice" style="width: 96%; color: #d6d6d6; border: none" id="swprice">
            <label for="text" class="text-info mt-1">Write the software price</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="mb-2 col-8" style="font-weight: bold; font-size: 18px; color: #d6d6d6">Software Image</label>
            <input type="text" class="form-control bg-dark" value="{{ $software->softwareDetails->imgurl }}" placeholder="Software Image" name="swimg" style="width: 96%; color: #d6d6d6; border: none" id="swimg">
            <label for="text" class="text-info mt-1">Insert software Image (with URL)</label>
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="gamename" class="mb-2 col-8" style="font-weight: bold; font-size: 18px; color: #d6d6d6">Software Trailer</label>
            <input type="text" class="form-control bg-dark" value="{{ $software->softwareDetails->vidurl }}" placeholder="Software Trailer" name="swvid" style="width: 96%; color: #d6d6d6; border: none" id="swvid">
            <label for="text" class="text-info mt-1">Insert software Trailer (with URL)</label>
        </div>
        <br>
        <div class="mb-5 d-flex">
            <a class="btn btn-light ms-4" href="/managesw">Cancel</a>
            <button type="submit" class="btn-secondary btn ms-2" style="width: 8%">Save</button>
        </div>
    </form>
@endsection
