<?php
namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NewsController extends Controller
{
   public function getAdminNews(){
         $news = News::all();
       return view('admin.news.index',['news'=> $news]);
   }

    public  function  getAdminNewsCreate(){
        return view('admin.news.create');
    }

    public function  getAdminNewsEdit($news_id){
        $new = News::findOrfail($news_id);
        return view('admin.news.edit',['new' => $new]);
    }

    public function postNewsCreate(Request $request){
        $rules= ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'author' => 'required'
        ],$rules);
        $news = new News();
        $news->title = $request['title'];
        $news->body = $request['body'];
        $news->author = $request['author'];
        if($file = $request->hasfile('file')) {
            $file = $request->file('file');
            $news->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/news',$news->picture);
        }
        $news->save();
        return redirect()->route('admin.news');
    }

    public function postNewsEdit(Request $request){
        $rules= ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'author' => 'required'
        ],$rules);
        $news = News::find($request['news_id']);
        $news->title = $request['title'];
        $news->body = $request['body'];
        $news->author = $request['author'];
        if($file = $request->hasfile('file')) {
            $file = $request->file('file');
            $news->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/news',$news->picture);
        }
        $news->update();
        return redirect()->route('admin.news');
    }

    public function getNewsDelete($news_id){
        $new  = News::findOrfail($news_id);
        $new->delete();
        return redirect()->back();
    }

    public function getNewsFrontend(){
        $news = News::all();
        return view('frontend.news.news',['news' => $news]);
    }

}