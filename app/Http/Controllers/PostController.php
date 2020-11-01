<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Mews\Purifier\Facades\Purifier;

class PostController extends Controller
{

   // public function __construct()
   // {
   //     $this->middleware('auth')->except('index','show');
   // }


   public function index() {

      $featured = Post::where('featured', 1)->paginate(5);
      $category= Category::with('posts')->has('posts')->take(8)->get();
      $tags= Tag::InRandomOrder()->has('posts')->limit(15)->get();
      $posts = Post::latest()->take(7)->get();
return view('post.index', [
   'posts' => $posts,
   'categorys' => $category,
   'tags' => $tags,
   'featured' =>$featured
]);

   }

   public function show(Post $post) {

      $tags= Tag::InRandomOrder()->has('posts')->limit(10)->get();

      $posts = Post::latest()->take(3)->get();
      return view('post.show', ['post' => $post, 'posts' => $posts, 'tags'=>$tags]);

   }

public function create() {

   $user=User::all();
   $category = Category::all();
   $tags = Tag::all();

return view('post.create', ['users' => $user,
'categorys' => $category,
'tags' => $tags,

]);

}

public function store() {

    $data= post::create($this->validateRequest());
    $data->tags()->attach(request('tags'));

    $this->storeimage($data);


    return back()->with('message', 'The Post is created succesfully');

}

public function edit(Post $post) {

   
   $user=User::all();
   $category = Category::all();
   $tags = Tag::all();

   return view('post.edit', [ 'post'=>$post,
   'users' => $user,
   'categorys' => $category,
   'tags' => $tags,
   ]);

}

public function update (Post $post) {

   $post->update($this->validateRequest());
   $this->storeimage($post);

   return redirect(route('post.show', $post->slug));
}

public function destroy (Post $post) {

   $post->delete();




}



private function validateRequest() {

    $validateddata =  request()->validate([
    
       'title' => 'required',
       'slug'  => 'required',
       'intro' => 'required',
       'category_id' => 'required',
       'user_id' => 'required',
       'featured' => 'required',
       'photo' => 'nullable',  
    Purifier::clean('body1')  => 'required',
      Purifier::clean('body2')  => 'sometimes',
      Purifier::clean('body3')  => 'sometimes',
     Purifier::clean( 'body4')  => 'sometimes',
      Purifier::clean('body5')  => 'sometimes',
       'image1' => 'sometimes|file|image|max:5000',
       'image2' => 'sometimes|file|image|max:5000',
       'image3' => 'sometimes|file|image|max:5000',
       'image4' => 'sometimes|file|image|max:5000',
       'image5' => 'sometimes|file|image|max:5000'
    
    ]);
    
   


    return $validateddata;        
    
    }

    public function storeimage($post) {

        if (request()->has('image1' )) {
         
              $post->update([
           'image1' => request()->image1->store('upload1', 'public'),
           ]);

           
           $image1 = Image::make(public_path('storage/' . $post->image1))->fit(800, 450);
           $image1->save();
        }
     
     if (request()->has('image2' )) {
     
        $post->update([
           'image2' => request()->image2->store('upload2', 'public'),
           ]);
     
           $image2 = Image::make(public_path('storage/' . $post->image2))->fit(800, 450);
           $image2->save();
     }
     if (request()->has('image3' )) {
     
        $post->update([
           'image3' => request()->image3->store('upload3', 'public'),
           ]);
           $image3 = Image::make(public_path('storage/' . $post->image3))->fit(800, 450);
           $image3->save();
     }
     
     if (request()->has('image4' )) {
     
        $post->update([
           'image4' => request()->image4->store('upload4', 'public'),
           ]);
           $image4 = Image::make(public_path('storage/' . $post->image4))->fit(800, 450);
           $image4->save();
     }
     if (request()->has('image5' )) {
     
        $post->update([
           'image5' => request()->image5->store('upload5', 'public'),
           ]);
           $image5 = Image::make(public_path('storage/' . $post->image5))->fit(800, 450);
           $image5->save();
     }
     
     }
}
