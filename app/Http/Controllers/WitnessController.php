<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Witness;
use App\WitnessComment;

class WitnessController extends Controller{

       public function getWitnessFrontend(){
           $witness = Witness::where('is_verify',1)->get();
           return view('frontend.witness.witness',['witness' => $witness]);
       }

       public function getWitnesssSingleFrontend($witness_id){
            $witness = Witness::find($witness_id);
            return view('frontend.witness.witness-single',['witness'=> $witness]);
       }

    public function  postWitnessFrontend(Request $request){
        $rules= ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
        $this->validate($request,[
            'topic' => 'required',
            'reporter' => 'required',
            'details' => 'required'
        ],$rules);
        $witness = new Witness();
        $witness->topic = $request['topic'];
        $witness->reporter_name = $request['reporter'];
        $witness->details = $request['details'];
        if($file = $request->hasfile('file')) {
            $file = $request->file('file');
            $witness->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/witness',$witness->picture);
        }
        $witness->save();
        return redirect()->back();
        //return response()->json($witness);
    }

    public function getAdminWitness(){
        $witness = Witness::all();
        return view('admin.i-witness',['witness' => $witness]);
    }

    public function getVerify($witness_id){
      $witness = Witness::findOrfail($witness_id);
        $witness->is_verify = 1;
        $witness->update();
        return redirect()->back();
    }
    public function getWitnessDelete($witness_id){
        $witness = Witness::findOrfail($witness_id);
        $witness->delete();
        return redirect()->back();
    }
}