@extends('layouts.app')

@section('content')
    <h2 class="ms-4 mb-4" style="font-weight: bold; color: #d6d6d6">Transaction Receipt</h2>
    <div class="rounded m-4" style="width: 95%; background-color: #3C3C3C">
        <br>
        <strong><span class="ms-4" style="color: #d6d6d6">Transaction ID: {{ $header->id }}</span></strong>
        <br>
        <strong><span class="ms-4" style="color: #d6d6d6">Purchased Date: {{ $header->created_at }}</span></strong>
        <br>
        @foreach($header->transDetail as $head)
            <div style="width: 90%" class="d-flex">
                <br>
                <div class="mt-4 mb-4">
                    <img src="{{ $head->softwares->softwareDetails->imgurl }}" width="250" class="ms-4" alt="...">
                </div>
                <div>
                    <br><br>
                    <span class="ms-4" style="font-weight: bold; font-size: 20px; color: #d6d6d6">{{ $head->softwares->title }}</span>
                    <br>
                    <span class="ms-4" style="font-weight: bold; font-size: 15px; color: #d6d6d6">Rp. {{ $head->softwares->softwareDetails->price }}</span>
                    <br><br>
                </div>
            </div>
        @endforeach
        <div class="ms-4">
            <span style="font-size: 24px; color: #d6d6d6">Total Price: </span>
            <strong><span style="font-weight: bold; font-size: 24px" class="text-info">Rp. {{ $header->total }}</span></strong>
            <br><br>
        </div>
    </div>
@endsection
