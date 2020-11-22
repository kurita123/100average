@extends('layouts.top')

@section('title','お得な商品発見')

@section('content')
<div class="container">
    <form action="postcomplete" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group">
            <label>商品名</label><br>
            <div class="text-danger">
                @if ($errors->has('name'))
                    @foreach($errors->get('name') as $message)
                        {{ $message }}<br>
                    @endforeach
                @endif
            </div>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label>コメント</label><br>
            <div class="text-danger">
                @if ($errors->has('comment'))
                    @foreach($errors->get('comment') as $message)
                        {{ $message }}<br>
                    @endforeach
                @endif
            </div>
            <input type="text" name="comment" value="{{ old('comment') }}" class="form-control">
        </div>
        
        <div class="form-group">
            <div class="text-danger">
                @if ($errors->has('img'))
                    @foreach($errors->get('img') as $message)
                        {{ $message }}<br>
                    @endforeach
                @endif
            </div>
            <input type="file" name="img"><br>
        </div>
        <input type="submit" value="投稿" class= 'btn-lg btn-primary'>
    </form>
</div>
@endsection

@include('layouts.footer')
