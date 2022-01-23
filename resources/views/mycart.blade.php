@extends('layouts.app')

@section('content')
    <h2 class="ms-4 mb-4" style="font-weight: bold; color: #d6d6d6">Shopping Cart</h2>
    @php ($count = 0)
    @php ($total = 0)
    @foreach($cart as $crt)
        <div class="ms-4 d-flex" style="width: 95%; background-color: #3C3C3C">
            <div style="width: 90%" class="d-flex">
                <br>
                <div class="mt-4 mb-4">
                    <img src="{{ $crt->softwares->softwareDetails->imgurl }}" width="250" class="ms-4" alt="...">
                </div>
                <div>
                    <br><br>
                    <span class="ms-4" style="font-weight: bold; font-size: 20px; color: #d6d6d6">{{ $crt->softwares->title }} <span class="badge bg-dark rounded-pill" style="color: #d6d6d6">{{ $crt->softwares->categories->category }}</span></span>
                    <br>
                    <span class="ms-4" style="font-weight: bold; font-size: 15px; color: #d6d6d6">Rp. {{ $crt->softwares->softwareDetails->price }}</span>
                    <br><br>
                </div>
            </div>
            <div>
                <a href="/delete/{{ $crt->softwares->id }}" class="btn btn-danger ps-3 pe-3 pt-3 pb-3" style="margin-top: 65%; font-weight: bold">Delete</a>
            </div>
        </div>
        @php ($count++)
        @php ($total = $total + $crt->softwares->softwareDetails->price)
    @endforeach
    @if($count == 0)
        <center><h4 class="ms-4 mt-5" style="font-weight: bold; color: #d6d6d6">Your Shopping Cart is Empty</h4></center>
    @else
        <div class="ms-4" style="width: 95%; background-color: #3C3C3C">
            <div style="width: 80%">
                <br>
                <strong><span class="ms-4 mt-4" style="font-size: 20px; color: #d6d6d6">Total Price: </span></strong>
                <strong><span class="ms-4 mt-4 text-info" style="font-size: 20px;">Rp. {{ $total }}</span></strong>
                <br><br>
            </div>
            <div>
                <a href="/checkout/{{ $total }}" class="btn btn-secondary ps-3 pe-3 pt-2 pb-2 ms-4" style="font-weight: bold;">Checkout</a>
            </div>
            <br><br>
        </div>
        <br><br><br>
    @endif
@endsection
