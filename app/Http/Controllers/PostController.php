<?php
namespace App\Http\Controllers;
use App\Post;
use App\Like;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
            $posts=Post::where('title','sahil')->get();
            return view('posts.index',['posts' => $posts]);       
    }
    public function save(Request $request){
            $post=new Post();
            $post -> title = $request -> get('title');
            $post -> comment = $request -> get('comment');           
            $post->save();  
            return redirect('/posts')->with('message', 'Post added Successfully');
    }
    public function delete($id){
        $post=Post::find($id);
        $post->delete();
        return redirect('/posts')->with('message','Post delete Successfully'.$id);
    }
}
