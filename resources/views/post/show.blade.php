@extends('master')

@section('title')

{{$post->title}} 

@endsection

@section('content')


@auth
<button style="color:yellow;"><a href="/posts/{{$post->slug}}/edit" style="margin: 10px;padding:20px;" >Edit</a></button>
@endauth
<main>

        <section class="container">
            <div class="site-content">
      <div class="posts">
            <div class="post-title">
            <a style="font-family: var(--Anton);font-size: 1.5rem;" >{{$post->intro}}</a>
            
            </div>

      <div class="post-info flex-row">
 <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;{{$post->created_at->diffForHumans()}} </span>
                
    </div> 
    
    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
       @if ($post->image1)    
      <div class="post-image"> 
             <div>
                 <img src="{{ asset('storage/' . $post->image1)}}" class="img" alt="Image1">
                    <p>{{$post->photo}}</p>
              </div>
          </div> 
     @endif   

     @if ($post->body1)
         <div class="post-title">
          <a href="#"></a>
            <p>
            {!!$post->body1!!} 
          </p>
         </div>
          @endif   
         @if ($post->image2)    
      <div class="post-image"> 
             <div>
                 <img src="{{ asset('storage/' . $post->image2)}}" class="img" alt="Image2">
              </div>
          </div> 
     @endif  
      </div>
      @if ($post->body2)
      <div class="post-title">
          <a href="#"></a>
            <p>
            {!!$post->body2!!} 
          </p>
         </div>
      @endif
      @if ($post->image3)    
      <div class="post-image"> 
             <div>
                 <img src="{{ asset('storage/' . $post->image3)}}" class="img" alt="Image3">
              </div>
          </div> 
     @endif   
     @if ($post->body3)
      <div class="post-title">
      <a href="#"></a>
            <p>
            {!!$post->body3!!} 
          </p>
         </div>
      @endif            
      @if ($post->image4)    
      <div class="post-image"> 
             <div>
                 <img src="{{ asset('storage/' . $post->image4)}}" class="img" alt="blog1">
              </div>
          </div> 
     @endif     
     @if ($post->body4)
      <div class="post-title">
            <p>
            {!!$post->body4!!} 
          </p>
         </div>
      @endif   
      @if ($post->image5)    
      <div class="post-image5"> 
             <div>
                 <img src="{{ asset('storage/' . $post->image5)}}" class="img" alt="blog1">
              </div>
          </div> 
     @endif
     @if ($post->body5)
      <div class="post-title">
            <p>
            {!!$post->body5!!} 
          </p>
         </div>
      @endif     
</div>
  

                <aside class="sidebar">
                  
                <div class="popular-post">
                    
                    <h2>Latest Posts</h2>
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
                
                        
                    </div>
                   
                    <div class="popular-tags">
                        <h2>Main Tags</h2>
                       
                        <div class="tags flex-row">
                        @foreach ($tags as $tag)
                           <span class="tag" data-aos="flip-up" data-aos-delay="100">  <a href="/posts/tags/{{$tag->name}}">{{$tag->name}}</a></span>
                            @endforeach
                        </div>
                       
                    </div>
                </aside>
            </div>
          
@auth
<form action="/posts/{{$post->slug}}" method="post">
@method('delete')

<button style="color: red;" type="submit" margin: 10px;padding:20px;>Delete</button>
@csrf
</form>
@endauth
        </section>
        <!-- -----------x---------- Site Content -------------x------------>

    </main>

@endsection