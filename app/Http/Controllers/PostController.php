<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Blogger;

class PostController extends Controller
{
    //Admin  methods for post
    public function getPostDashboard(){
        $posts = Post::all();
        return view('admin.blog.posts',['posts'=> $posts]);
    }

    public function getCreatePost(){
        return view('admin.blog.create');
    }

    public function postCreatePost(Request $request){
            $rules= ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
            $this->validate($request,[
                'title' => 'required|max:100',
                'author' => 'required',
                'body' =>'required',
                'description' => 'required'
            ],$rules);
            $post = new Post();
            $post->title = $request['title'];
            $post->author = $request['author'];
            $post->body = $request['body'];
            $post->author_description = $request['description'];

            if($file = $request->hasfile('file')) {
                $file = $request->file('file');
                $post->picture = time().$file->getClientOriginalName();
                $file->move('img/uploads/admin/posts',$post->picture);
            }
            if($file = $request->hasfile('author_picture')) {
                $file = $request->file('author_picture');
                $post->author_picture = time().$file->getClientOriginalName();
                $file->move('img/uploads/admin/authors',$post->author_picture);
            }
            $post->save();
            return redirect()->route('post.index')->with(['success' => 'Post Successfully Created']);
    }

    public function getModifyPost($post_id){
        $post = Post::findOrFail($post_id);
        return view('admin.blog.modify',['post'=>$post]);
    }
    public  function postModifyPost(Request $request){
        $rules= ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
        $this->validate($request,[
            'title' => 'required|max:100',
            'author' => 'required',
            'body' =>'required',
            'description' => 'required'
        ],$rules);
        $post = Post::find($request['post_id']);
        $post->title = $request['title'];
        $post->author = $request['author'];
        $post->body = $request['body'];
        $post->author_description = $request['description'];
        if($file = $request->hasfile('file')) {
            $file = $request->file('file');
            $post->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/posts',$post->picture);
        }
        if($file = $request->hasfile('author_picture')) {
            $file = $request->file('author_picture');
            $post->author_picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/authors',$post->author_picture);
        }
        $post->update();
        return redirect()->route('post.index')->with(['success' => 'Post Successfully Created']);
    }

    public function getDeletePost($post_id){
         $post = Post::findOrfail($post_id);
        $post->delete();
        return redirect()->route('post.index')->with(['success' => 'Post Successfully Deleted']);

    }

    public function getBlogDashboard(){
        $posts = Post::all();
        foreach($posts as $post){
            $post->body = $this->shortenText($post->body,10);
        }
        return view('frontend.blog.dasboard',['posts' => $posts]);
    }
    public function getBlogSingle($post_id){
        $post = Post::findOrfail($post_id);
        return view ('frontend.blog.single',['post' => $post]);
    }
    public function getSingleBlogger($blogger_id){
        $blogger = Blogger::find($blogger_id);
       $posts  = Blogger::find($blogger_id)->post;
      return view('frontend.blog.single-blogger',['posts'=>$posts,'blogger' => $blogger]);
    }
    private function shortenText($text,$words_count){
        if(str_word_count($text,0) > $words_count){
            $words =  str_word_count($text,2);
            $pos = array_keys($words);
            $text = substr($text,0,$pos[$words_count]).'...';
        }
        return $text;
    }
}
