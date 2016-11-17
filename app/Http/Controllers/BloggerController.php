<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blogger;
use App\Post;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;



class BloggerController extends Controller
{
    public function getAdminBlogger()
    {
        $bloggers = Blogger::all();
        return view('admin.blogger',['bloggers'=> $bloggers]);
    }

    public function postNewBlogger(Request $request){
        $rules= ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required|unique:bloggers',
            'password' => 'required'
        ],$rules);
        $confirmation_code = str_random(30);
        $blogger = new Blogger();
        $blogger->fullname = $request['name'];
        $blogger->email = $request['email'];
        $blogger->username = $request['username'];
        $blogger->password = bcrypt($request['password']);
        $blogger->confirmation_code = $confirmation_code;
        if($file = $request->hasfile('file')) {
            $file = $request->file('file');
            $blogger->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/blogger',$blogger->picture);
        }
        $blogger->save();
        $data = array(
            'email' => $request['email'],
            'confirmation_code' => $confirmation_code,
            'username' => $request['username']
        );
       // Auth()->guard('bloggers')->login($blogger);
        Mail::send('emails.confirm',$data,function($message) use ($data){
            $message->to('olasupokazeem@gmail.com');
            $message->subject('Verify your email address');
        });
//            Flash::message('Thanks for signin up,Please check your mail');
             return redirect()->back();
//        return redirect()->route('blogger.index');
    }

    public function getConfirmation($confirmation_code){
        if(! $confirmation_code){
            //throw new InvalidConfirmationCodeException;
        }
        $blogger = Blogger::where('confirmation_code',$confirmation_code)->first();
        if(! $blogger){

        }
        $blogger->confirmed = 1;
        $blogger->confirmation_code = null;
        $blogger->save();
        return redirect()->route('blogger.login');
    }

    public function getBloggerDelete($blogger_id){
        $blogger = Blogger::find($blogger_id);
        $blogger->delete();
        return redirect()->back();
    }
    // Method for frontend Blogger
    public function postBloggerLogin(Request $request){
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required'
        ]);
        if (!Auth()->guard('bloggers')->attempt(['username' => $request['username'], 'password' => $request['password']])) {
            return redirect()->back()->with(['fail' => 'An error occured']);
        }
        else {
            return redirect()->route('blogger.index');
        }
    }
    public function getBloggerLogout(){
        Auth()->guard('bloggers')->logout();
        return redirect()->route('blogger.login');
    }


    public function getBloggerPosts(){
        $user = Auth()->guard('bloggers')->user()->id;
        $posts = Blogger::find($user)->post;
       // $posts = Post::where('blogger_id',$user)->get();
        //dd($blogger);
       // dd($posts);

      return view ('frontend.blog.blogger.bpost',['posts'=>$posts]);
    }

    public function getBloggerCreate(){
        return view('frontend.blog.blogger.bcreate');
    }

    public function getBloggerModify($post_id){
        $post = Post::find($post_id);
        return view('frontend.blog.blogger.bmodify',['post'=> $post]);
    }
    public function getBloggerPostDelete($post_id){
        $post = Post::find($post_id);
        $post->delete();
        return redirect()->route('blogger.posts');
    }
    public function postBloggerCreate(Request $request){
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
        $post->author_picture = $request['picture'];
        $post->blogger_id = $request['blogger_id'];
        if($file = $request->hasfile('file')) {
            $file = $request->file('file');
            $post->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/posts',$post->picture);
        }

        $post->save();
        return redirect()->route('blogger.posts');
    }

    public function postBloggerModify(Request $request){
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
        $post->author_picture = $request['picture'];
        $post->blogger_id = $request['blogger_id'];
        if($file = $request->hasfile('file')) {
            $file = $request->file('file');
            $post->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/posts',$post->picture);
        }
        $post->update();
        return redirect()->route('blogger.posts');
    }




}
