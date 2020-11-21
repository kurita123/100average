@extends('layouts.app')

@section('title','お得な商品発見')

@section('content')
<div class="container">
<div class="background">
<h1>100均で売っている意外な商品やオススメ商品共有しませんか？</h1>
</div>
    <div class="row">
        @foreach($post as $posts)
        <div class="col-xs-6 col-sm-6 col-md-4">
            <div class ="color">
                <p style="font-size:1.5em;">{!! nl2br(e(str_limit($posts->name,$limit = 26, $end ='...'))) !!}</p>
                <p>商品説明 : <p>{!! nl2br(e(str_limit($posts->comment,$limit = 40, $end ='...'))) !!}</p><br></p>
            </div>
            <img src="{{ asset('/storage/img/'.$posts->img)}}" alt="" class="inrecipe"><br><br>
            <div class ="color2">
                <form action="product" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$posts->id}}">
                    <input type="hidden" name="user_id" value="{{$posts->user_id}}">
                    <input type="submit" value="詳細" class= 'btn-lg btn-primary'><br>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@include('layouts.footer')