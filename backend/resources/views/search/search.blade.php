@extends('layouts.top')

@section('title','お得な商品発見')

@section('content')
<div style="text-align:center;">
    <p style="text-align:center; font-size:1.5em">{{$message}}</p></br>
</div>
@isset($result)
    @foreach($result as $results)
        <p style="text-align:center; font-size:2em">商品名：{{$results->name}}</p><br>
        <p style="text-align:center; font-size:2em">コメント：{{$results->comment}}</p><br>
        <img src="{{ asset('/storage/img/'.$results->img)}}" alt="" class="inrecip"><br>
    @endforeach
@endisset
<div style="text-align:center;">
    <button class='btn btn-info' onclick="location.href='{{ route('home') }}'">ホームへ</button>
</div>
@endsection

@include('layouts.footer')
