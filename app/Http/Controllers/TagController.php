<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
   
public function index(Tag $tag )  {


    $posts = $tag->posts->take(10);
    $latestpost = Post::latest()->take(5)->get();
    $tags= Tag::InRandomOrder()->has('posts')->limit(15)->get();
    return view('tag.index', [ 'posts' => $posts,
    'tags'   => $tags,
    'latestpost' => $latestpost,
    'tag'  => $tag
    
    ]);

}



public function create() {

    $tags= Tag::all();

    return view('tag.create', ['tags' =>$tags ]);
}

public function store() {

request()->validate([
    'name' => 'required'
]);

$tag = new Tag();
$tag->name = request('name');
$tag->save();

return redirect(route('tag.create'))->with('message2', 'You Have successfully created a tag');

}

public function show(Tag $tag){

return view('tag.show', ['tag'=>$tag]);

}
public function destroy(Tag $tag) {

    $tag->delete();

      return redirect('/tags/create')->with('message' , 'You have deleted the selected tag successfully');

}

}
