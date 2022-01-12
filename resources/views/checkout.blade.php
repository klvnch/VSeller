@extends('layouts.app')

@section('content')
    <h2 class="ms-4 mb-4" style="font-weight: bold; color: #d6d6d6">Transaction Information</h2>
    @if(session()->has('invalid'))
        <center><div class="bg-danger text-light mb-2 rounded" style="width: 70%">
            <span style="font-size: 20px" class="">{{ session('invalid') }}</span><br>
        </div></center>
    @endif
    <form action="/trans/{{ $total }}" method="POST">
        @csrf
        <div class="form-group ms-4">
            <label for="cardname" class="mb-2" style="font-weight: bold; color: #d6d6d6">Card Name</label>
            <input type="text" class="form-control bg-dark" placeholder="Card Name (min 6 chars)" name="cardname" style="width: 98%; border: none; color: #d6d6d6" id="cardname">
        </div>
        <div class="form-group ms-4 mt-4">
            <label for="cardname" class="mb-2" style="font-weight: bold; color: #d6d6d6">Card Number</label>
            <input type="text" class="form-control bg-dark" placeholder="0000 0000 0000 0000" name="cardnumber" style="width: 98%; border: none; color: #d6d6d6" id="cardnumber">
            <label for="cardname" class="mt-1" style="color: #cf6679">VISA or Master Card</label>
        </div>
        </div>
            <div class="ms-4">
                <label for="cardname" class="mb-2 col-8" style="font-weight: bold; color: #d6d6d6">Expired Date</label>
                <label for="cardname" class="mb-2 col-2" style="font-weight: bold; margin-left: 5.5%; color: #d6d6d6">CVC / CVV</label>
            </div>
            <div class="form-group ms-4 d-flex" style="width: 98%;">
                <div class="col-4 me-4">
                    <input type="tel" class="form-control bg-dark" placeholder="MM" name="datemonth" id="datemonth" style="border: none; color: #d6d6d6">
                </div>
                <div class="col-4 me-5">
                    <input type="tel" class="form-control bg-dark" placeholder="YYYY" name="dateyear" style="width: 108%; border: none; color: #d6d6d6" id="dateyear">
                </div>
                <div class="col-3 ms-2">
                    <input type="tel" class="form-control bg-dark" placeholder="3 or 4 digit number" name="cvc" style="width: 102%; border: none; color: #d6d6d6" id="cvc">
                </div>
            </div>
            <div class="ms-4 mt-4">
                <label for="cardname" class="mb-2 col-8" style="font-weight: bold; color: #d6d6d6">Country</label>
                <label for="cardname" class="mb-2 col-2" style="font-weight: bold; margin-left: 5.5%; color: #d6d6d6">ZIP</label>
            </div>
            <div class="form-group ms-4 d-flex" style="width: 98%">
                <div class="col-8">
                    <input type="text" class="form-control bg-dark" placeholder="Country" name="country" style="width: 107%; border: none; color: #d6d6d6" id="country">
                </div>
                <div class="col-3">
                    <input type="tel" class="form-control bg-dark" style="margin-left: 24%; width: 102%; border: none; color: #d6d6d6" placeholder="ZIP" name="zip" id="zip">
                </div>
            </div>
        </div>
        <div class="m-4">
            <div class="d-flex mb-5">
                <div style="width: 85%">
                    <span style="font-size: 24px; color: #d6d6d6">Total Price: </span>
                    <strong><span style="font-weight: bold; font-size: 24px" class="text-info">Rp. {{ $total }}</span></strong>
                </div>
                <div class="nav-item ms-2 me-3" style="font-weight: bold">
                    <a class="btn btn-light" href="/cartlist">Cancel</a>
                </div>
                <div class="nav-item" style="font-weight: bold">
                    <button type="submit" class="btn-secondary btn">Checkout</button>
                </div>
            </div>
        </div>
    </form>
@endsection
