@extends('layouts.app')

@section('content')
    <h2 class="ms-4 mb-3" style="font-weight: bold; color: #d6d6d6">Software Details</h2>
    <div class="d-flex">
        <div class="ms-4">
            <iframe src="{{ $software->softwareDetails->vidurl }}" class="ratio-16x9 rounded" frameborder="0" width="800" height="520" allowfullscreen></iframe>
        </div>
        <div class="ms-4" style="width: 33%; color: #9f9f9f">
            <img src="{{ $software->softwareDetails->imgurl }}" style="width: 30rem" class="rounded" alt="...">
            <h3 class="mt-3" style="font-weight: bold; color: #d6d6d6">{{ $software->title }}</h3>
            <p>{{ $software->softwareDetails->shortdesc }}</p>
            <span class="mt-2"><strong>Software Category :</strong> {{ $software->categories->category }}</span><br>
            <span><strong>Release Date :</strong> {{ $software->softwareDetails->releasedate }}</span><br>
            <span><strong>Developer :</strong> {{ $software->softwareDetails->developer }}</span><br>
            <span><strong>Version :</strong> {{ $software->softwareDetails->versionnumber }}</span><br>
        </div>
    </div>
    <div class="ms-4 mt-4 rounded shadow-lg d-flex bg-dark" style="width: 95%">
        @if(Auth::check())
            @if(Auth::user()->role == 1)
                @php
                    $cart = App\Models\Cart::where('users_id', Auth::user()->id)->get();
                    $countCart = 0
                @endphp
                @foreach($cart as $crt)
                    @if($crt->softwares->id == $software->id)
                        @php
                            $countCart++;
                        @endphp
                    @endif
                @endforeach
                @if($countCart > 0)
                    <div style="width: 80%">
                        <br>
                        <span class="ms-4" style="font-weight: bold; font-size: 22px; color: #d6d6d6">Buy {{ $software->title }}</span>
                        <br><br>
                    </div>
                    <div>
                        <a href="#" class="btn btn-secondary shadow-lg ps-3 pe-3 pt-3 pb-3 disabled" style="margin-top: 5%; font-weight: bold; color: #d6d6d6">ALREADY IN YOUR CART</a>
                    </div>
                @else
                    @php
                        $header = App\Models\TransactionHeader::where('users_id', auth()->user()->id)->get();
                        $countBought = 0
                    @endphp
                    @foreach($header as $hdr)
                        @foreach($hdr->transDetail as $head)
                            @if($head->softwares->id == $software->id)
                                @php
                                    $countBought++
                                @endphp
                            @endif
                        @endforeach
                    @endforeach
                    @if($countBought == 0)
                        <div style="width: 80%">
                            <br>
                            <span class="ms-4" style="font-weight: bold; font-size: 22px; color: #d6d6d6">Buy {{ $software->title }}</span>
                            <br><br>
                        </div>
                        <div>
                            <a href="/cart/{{ $software->id }}" class="btn btn-secondary shadow-lg ps-3 pe-3 pt-3 pb-3" style="margin-top: 5%; font-weight: bold; color: #d6d6d6">Rp. {{ $software->softwareDetails->price }}   |   ADD TO CART</a>
                        </div>
                    @endif
                @endif
            @endif
        @else
            <div style="width: 80%">
                <br>
                <span class="ms-4" style="font-weight: bold; font-size: 22px; color: #d6d6d6">Login to Buy {{ $software->title }}</span>
                <br><br>
            </div>
        @endif
    </div>
    <div class="mb-5">
        <h4 class="ms-4 mt-4" style="font-weight: bold; color: #d6d6d6">ABOUT THIS SOFTWARE</h4>
        <hr size="8" class="ms-4" style="width:95%; color: #535353">
        <p class="ms-4" style="width: 95%; color: #d6d6d6">{{ $software->softwareDetails->description }}</p>
    </div>
@endsection
