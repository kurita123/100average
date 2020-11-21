@extends('layouts.top')

@section('title','お得な商品発見')

@section('content')

@foreach($user_name as $name)
    <p style="color:red; text-align:center; font-size:2em";>{{$name->name}}さんの投稿</p><br>
@endforeach

@foreach($product as $products)
    <p style="text-align:center; font-size:2em";>商品名：{{$products->name}}</p><br>
    <p style="text-align:center; font-size:2em";>コメント：{{$products->comment}}</p><br>
    <img src="{{ asset('/storage/img/'.$products->img)}}" alt="" class="inrecip"><br>
@endforeach
<div style="text-align:center;">
    <button class='btn btn-info' onclick="location.href='{{ route('home') }}'">ホームへ</button>
</div>
@endsection

@include('layouts.footer')
