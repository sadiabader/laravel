<?php

namespace App\Http\Controllers;
use App\Models\FormModel;
use Illuminate\Http\Request;

class Form extends Controller
{
    public function register(){
        return view('registration');
    }

public function register_data(Request $request){
    // print_r($request->all());
    // return view('registration');

$request->validate([
     'name' => 'required',
     'email' => 'required |email',
     'pass' => 'required'
]);

$data = new FormModel();
$data->name = $request['name'];
$data->email = $request['email'];
$data->password =$request['pass'];
$data->save();
// return redirect('/register');
return redirect('/register');

public function user_view(){
    $records = FormModel::all();
    // eco '<pre>';
    // print_r($records);
    // echo '</pre>';

 $userdata = compact('records');


    return view('user-view')->with($userdata);
}




}

}
