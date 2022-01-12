@extends('layouts.app')

@section('content')
    <h2 class="ms-4 mb-4" style="font-weight: bold; color: #d6d6d6">Transaction History</h2>
    <div class="rounded m-4" style="width: 95%; background-color: #3C3C3C">
        @php
            $count = 0;
            $countitem = 0;
        @endphp
        @foreach($header as $hdr)
            <br>
            <strong><span class="ms-4" style="color: #d6d6d6">Transaction ID: {{ $hdr->id }}</span></strong>
            <br>
            <strong><span class="ms-4" style="color: #d6d6d6">Purchased Date: {{ $hdr->created_at }}</span></strong>
            <br>
            @foreach($hdr->transDetail as $head)
                <div class="d-inline-flex">
                    <div class="col mt-4 mb-4">
                        <img src="{{ $head->softwares->softwareDetails->imgurl }}" width="250" class="ms-4 rounded" alt="...">
                    </div>
                </div>
                @php
                    $countitem++;
                @endphp
            @endforeach
            @if($hdr->totalitem - $countitem > 0)
                @if($hdr->totalitem == 1)
                    <br>
                    <strong><span class="ms-4" style="color: #d6d6d6">The game from this purchase is not found! The game is probably removed or changed!</span></strong>
                    <br><br>
                @else
                    <br>
                    <strong><span class="ms-4 mt-4" style="color: #d6d6d6">{{ $hdr->totalitem - $countitem }} Games from this purchase are not found! The games are probably removed or changed!</span></strong>
                    <br><br>
                @endif
            @endif
            <div class="ms-4">
                <span style="font-size: 24px; color: #d6d6d6">Total Price: </span>
                <strong><span class="text-info" style="font-weight: bold; font-size: 24px;">Rp. {{ $hdr->total }}</span></strong>
                <br><br>
            </div>
            @php
                $count++;
            @endphp
        @endforeach
    </div>
    @if($count == 0)
        <center><h4 class="ms-4 mt-5" style="font-weight: bold; color: #d6d6d6">Your Transaction History is Empty</h4></center>
    @endif
@endsection
