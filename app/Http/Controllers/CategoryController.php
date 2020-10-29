<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Category $category )  {


        $posts = $category->posts->take(10);
        $latestpost = Post::latest()->take(5)->get();
        $tags= Tag::InRandomOrder()->has('posts')->limit(13)->get();
        return view('category.index', [ 'posts' => $posts,
        'tags'   => $tags,
        'latestpost' => $latestpost,
                  'category'  => $category
        
        ]);

    }
    public function create() {

$category= Category::all();

        return view('category.create',['categories'=>$category]);
    }


    public function store() {

        request()->validate([
            'name' => 'required'
        ]);
      
        $category = new Category();
        $category->name = request('name');
         
        $category->save(); 



return redirect('/categories/create')->with('message2', 'You have successfully created a Category');


    }

    public function show(Category $category) {

        return view('category.show', ['category' => $category]);
    }

    public function destroy(Category $category) {

        $category->delete();
    
          return redirect('/categories/create')->with('message' , 'You have deleted the selected category successfully');
    
    }
}
