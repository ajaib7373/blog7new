
@extends('master')

@section('boot')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

@endsection



@section('content')

<main>

        <section class="container">
            <div class="site-content">
           
            <div class="posts">
            @foreach($featured as $post) 
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="{{ asset('storage/' . $post->image1)}}" class="img" alt="blog1">
                                
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;{{$post->created_at->diffForHumans()}}</span>
                                <!-- <span>2 Commets</span> -->
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="/posts/{{$post->slug}}">{{$post->title}}</a>
                            <p>
                                {{$post->intro}}
                            </p>
 <a href="/posts/{{$post->slug}}">   <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button> </a>
                        </div>
                       
                    </div>
                    @endforeach
                    <hr>          
        
                    <div class="pagination flex-row">
                    {{ $featured->links()  }}
                   
                </div>
                         
                     
                    
                        
                </div>
               

                <aside class="sidebar">
                    <div class="category">
                        <h2>Category</h2>
                        <ul class="category-list">
                            @foreach($categorys as $category)
                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                <a href="/posts/categories/{{$category->name}}">{{$category->name}}</a>
                                <span>{{$category->posts->count()}}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
               
                   
                    <div class="popular-post">
                    
                        <h2>Latest Post</h2>
                        @foreach($posts as $post)
                        <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="{{ asset('storage/' . $post->image1)}}" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;{{$post->created_at->diffForHumans()}}
                                        </span>
                                   
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="/posts/{{$post->slug}}">{{$post->title}}</a>
                            </div>
                        </div>
                @endforeach
                        <!-- <h2>Newsletter</h2>
                        <div class="form-element">
                            <input type="text" class="input-element" placeholder="Email">
                            <button class="btn form-btn">Subscribe</button>
                        </div> -->
                    </div>
                   
                    <div class="popular-tags">
                        <h2>Main Tags</h2>
                       
                        <div class="tags flex-row">
                        @foreach ($tags as $tag)
                            <span class="tag" data-aos="flip-up" data-aos-delay="100"><a href="/posts/tags/{{$tag->name}}">{{$tag->name}}</a></span>
                            @endforeach
                        </div>
                       
                    </div>
                </aside>
            </div>
        </section>
        <!-- -----------x---------- Site Content -------------x------------>

    </main>


@endsection