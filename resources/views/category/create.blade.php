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

<style>

* {
  box-sizing: border-box;
}

input[type=text] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  margin-bottom: 20px;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-bottom: 30px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* .container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
} */

.col-25 {
  float: left;
  width: 25%;
  margin-top: 26px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>



@endsection


@section('content')

@if(session()->has('message'))
<div style="padding-left: 135px;">
<h1 style="color: red;">{{session()->get('message')}}</h1>
</div>
@endif
@if(session()->has('message2'))
<div style="padding-left: 135px;">
<h1 style="color: blue;">{{session()->get('message2')}}</h1>
</div>
@endif
<div style="padding-left: 135px;">
<h2>Create a Category</h2>
<p>.</p>

</div>


<div class="container">
  <form action="{{route('category.store')}}"  method="POST" >
      @csrf
  <div class="row">
    <div class="col-25">
      <label for="fname">Category Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="name" placeholder="Category name..">
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
@foreach( $categories as  $category)
  
  <a href="/categories/{{$category->id}}" style="color: blue;"><li style="list-style-type: none; font-size: larger; margin-bottom: 30px;
    text-decoration: underline;" >{{$category->name}}</li></a>
 
  @endforeach
</div>

@endsection