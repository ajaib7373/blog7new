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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=file]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  /* background-color: #f2f2f2; */
  padding: 20px;
}
</style>

<script src="https://cdn.tiny.cloud/1/vex7vm9qjpv0z3y7kcjble3pbkc2osw2rg0qyzf0iwxe5v2p/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea',  plugins: 'link'
});</script>
@endsection

@section('content')


<h3>Create Post</h3>

<div class="container">
  <form action="/posts/{{$post->slug}}" method="POST" enctype="multipart/form-data" >
  @method('PUT')
    <label for="title">Title</label>
    <input type="text" id="fname" name="title" placeholder="title.." value="{{ old('title') ?? $post->title }}">
     <p style="color: red; font-size:20px ;">@error('title') {{$message}} @enderror</p>
    <label for="slug">Slug</label>
    <input type="text" id="fname" name="slug" placeholder="slug.." value="{{ old('slug') ?? $post->slug }}">
    <p style="color: red; font-size:20px ;">@error('slug') {{$message}} @enderror</p>

    <label for="slug">Intro</label>
    <input type="text" id="fname" name="intro" placeholder="the intro here.." value="{{ old('intro') ?? $post->intro }}">
    <p style="color: red; font-size:20px ;">@error('intro') {{$message}} @enderror</p>

    <label for="Body">Body 1</label>
    <textarea id="subject" name="body1" placeholder="body1.." style="height:200px" >{{ old('body1') ?? $post->body1 }}</textarea>
    <p style="color: red; font-size:20px ;">@error('body1') {{$message}} @enderror</p>

    <label for="image">Image 1</label>
    <input type="file" id="lname" name="image1"  value="{{ old('image1') ?? $post->image1 }}" > 
    <p style="color: red; font-size:20px ;">@error('image1') {{$message}} @enderror</p>

    <label for="Body">Body 2</label>
    <textarea id="subject" name="body2" placeholder="body2.." style="height:200px">{{ old('body2') ?? $post->body2 }}</textarea>
    <p style="color: red; font-size:20px ;">@error('body2') {{$message}} @enderror</p>

    <label for="image">Image 2</label>
    <input type="file" id="lname" name="image2"> 
    <p style="color: red; font-size:20px ;">@error('image2') {{$message}} @enderror</p>

    <label for="Body">Body 3</label>
    <textarea id="subject" name="body3" placeholder="body3.." style="height:200px">{{ old('body3') ?? $post->body3 }}</textarea>
    <p style="color: red; font-size:20px ;">@error('body3') {{$message}} @enderror</p>

    <label for="image">Image 3</label>
    <input type="file" id="lname" name="image3">
    <p style="color: red; font-size:20px ;">@error('image3') {{$message}} @enderror</p>

    <label for="Body">Body 4</label>
    <textarea id="subject" name="body4" placeholder="body4.." style="height:200px">{{ old('body4') ?? $post->body4  }}</textarea>
    <p style="color: red; font-size:20px ;">@error('body4') {{$message}} @enderror</p>

    <label for="image">Image 4</label>
    <input type="file" id="lname" name="image4">
    <p style="color: red; font-size:20px ;">@error('image4') {{$message}} @enderror</p>

    <label for="Body">Body 5</label>
    <textarea id="subject" name="body5" placeholder="body5.." style="height:200px">{{ old('body5') ?? $post->body5 }}</textarea>
    <p style="color: red; font-size:20px ;">@error('body5') {{$message}} @enderror</p>

    <label for="image">Image 5</label>
    <input type="file" id="lname" name="image5">
    <p style="color: red; font-size:20px ;">@error('image5') {{$message}} @enderror</p>

    <label for="user">Featured</label>
    <select id="featured_id" name="featured">
      <option value="" disabled>Select post status</option>
      <option value="0" >Not Featured</option>
      <option value="1" >Featured</option>

    </select>
   
    <label for="user">Category</label>
    <select id="category_id" name="category_id">
    @foreach ($categorys as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach

    </select>

    <label for="user">User</label>
    <select id="user_id" name="user_id">
    @foreach ($users as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
    </select>

    <label for="tags">Tag</label>
    <select id="tag" name="tags[]" multiple>
    @foreach ($tags as $tag)
      <option value="{{$tag->id}}">{{$tag->name}}</option>
      @endforeach
    </select>

  

    <input type="submit" value="Submit">
    @csrf
  </form>
</div>


@endsection