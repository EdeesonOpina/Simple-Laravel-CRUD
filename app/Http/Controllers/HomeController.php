<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use Validator;

use App\Human;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function showDashboard(){

        return view('dashboard');

    }

    public function showManageHumans(){

        $humans = Human::paginate(10);

        return view('manage_humans')->with('humans',$humans);

    }

    public function showManageAddHuman(){

        return view('add_human');

    }

    public function doAddHuman(Request $request){

        $rules = [
        'firstname'=>'required',
        'lastname'=>'required',
        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){

            return back()->withErrors($validator);

        }else{

            $human = new Human;

            $human->firstname = $request->input('firstname');
            $human->lastname = $request->input('lastname');
            $human->save();

            $request->session()->flash('success','Great! Human added.');

            return redirect('manage-humans');

        }

    }

    public function showEditHuman($id){

        $human = Human::find($id);

        return view('edit_human')->with('human',$human);

    }

    public function doEditHuman(Request $request){

        $rules = [
        'firstname'=>'required',
        'lastname'=>'required',
        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){

            return back()->withErrors($validator);

        }else{

            DB::table('humans')->where('id',$request->input('human_id'))->update([
                'firstname'=>$request->input('firstname'),
                'lastname'=>$request->input('lastname'),
            ]);

            $request->session()->flash('success','Great! Human updated.');

            return redirect('manage-humans');

        }

    }

    public function doDeleteHuman(Request $request,$id){

        $human = Human::find($id);

        $human->delete();

        $request->session()->flash('success','Great! Human deleted.');

        return back();

    }

    public function showViewHuman($id){

        $human = Human::find($id);

        return view('view_human')->with('human',$human);

    }

}
