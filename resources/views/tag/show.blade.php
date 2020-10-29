@extends('master')


@section('allcss')

<link rel="stylesheet" href="/css/all.css">
@endsection
@section('carousel')
<link rel="stylesheet" href="/css/owl.carousel.min.css">
@endsection
@section('owl')
<link rel="stylesheet" href="/css/owl.theme.default.min.css">

@endsection
@section('aos')

<link rel="stylesheet" href="/css/aos.css">
@endsection
@section('style')

<link rel="stylesheet" href="/css/Style.css">
@endsection
@section('categoryortagcreate')

@section('content')



<div style="margin: 120px;">
<h3>{{$tag->name}}</h3>
</div>
@auth
<form action="/tags/{{$tag->id}}" method="post">
@method('delete')
<button type="submit" style="color:Red; font-size:30px; padding-right:30px;">Delete</button>
@csrf
</form>
@endauth
@endsection
