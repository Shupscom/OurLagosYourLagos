<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Place;



class PlaceController extends Controller
{
//Admin methods for places
    public function getAdminPlace(){
        $places  = Place::all();
        return view('admin.places.place',['places' => $places]);
    }
    public function getCreatePlace(){

        return view('admin.places.create_place');
    }

    public function postCreatePlace(Request $request){
        $rules= ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
        $this->validate($request,[
            'placename' => 'required|max:30',
            'location' => 'required',
            'description' => 'required',
            'categories' => 'required'
        ],$rules);
        $place = new Place();
        $place->placename = $request['placename'];
        $place->location = $request['location'];
        $place->description = $request['description'];
        $place->categories = $request['categories'];

        if($file = $request->hasfile('file')) {
            $file = $request->file('file');
            $place->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/posts',$place->picture);
        }

        $place->save();
        return redirect()->route('admin.place')->with(['success' => 'Post Successfully Created']);

    }
   public function getModifyPlace($place_id){
       $place = Place::findOrfail($place_id);
       return view('admin.places.modify_place',['place'=> $place]);

   }
    public function getDeletePlace($place_id){
        $place = Place::findOrfail($place_id);
        $place->delete();
        return redirect()->route('admin.place')->with(['success' => 'Succesfully Deleted']);
    }

    public function postEditPlace(Request $request){
        $rules= ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
        $this->validate($request,[
            'placename' => 'required|max:30',
            'location' => 'required',
            'description' => 'required',
            'categories' => 'required'
        ],$rules);
        $place = Place::find($request['place_id']);
        $place->placename = $request['placename'];
        $place->location = $request['location'];
        $place->description = $request['description'];
        $place->categories = $request['categories'];

        if($file = $request->hasfile('file')) {
            $file = $request->file('file');
            $place->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/posts',$place->picture);
        }

        $place->update();
        return redirect()->route('admin.place')->with(['success' => 'Post Successfully Created']);
    }

            // Frontend methods
    public function getFrontendPlaces(Request $request){
        $criteria = $request['search'];
        if($criteria) {
            $places = Place::where('categories', $criteria)->paginate(2);
        }else {
            $places = Place::all();
        }

        return view('frontend.places',['places'=> $places]);
    }
}