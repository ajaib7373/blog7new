
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


@section('content')

<main>

<section class="container">
            <div class="site-content">
           
            <div class="posts">
            <div class="post-title">
                    <a style=" font-family: var(--Anton);
    font-size: 1.5rem;" > Showing posts with the tag "{{$tag->name}}"  </a>
                </div>
            @foreach($posts as $post) 
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
                           <a href="/posts/{{$post->slug}}"><button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button></a> 
                        </div>
                       
                    </div>
                    @endforeach
                    <hr>          
        
                  
                         
                     
                    
                        
                </div>
               

                <aside class="sidebar">
                   
               
                   
                    <div class="popular-post">
                    
                        <h2>Latest Post</h2>
                        @foreach($latestpost as $post)
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
                                <a href="/posts/{{$post->slug}}">{{$post->intro}}</a>
                            </div>
                        </div>
                @endforeach
                       
                    </div>
                   
                    <div class="popular-tags">
                        <h2>Main Tags</h2>
                       
                        <div class="tags flex-row">
                        @foreach ($tags as $tag)
                     <a  href="/posts/tags/{{$tag->name}}"> <span class="tag" data-aos="flip-up" data-aos-delay="100">{{$tag->name}}</span></a>      
                            @endforeach
                        </div>
                       
                    </div>
                </aside>
            </div>
        </section>
</main>


@endsection