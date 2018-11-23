<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\User;
use Session;

class BasicController extends Controller
{
    public function logout(Request $request){
      Session::flush();
      return redirect('table');
    }
    public function login(){
    	return view('login');
    }
    public function table(){
    	$obj = Todo::all();
        //$eobj = Todo::find($id);
    	return view('table',['data'=>$obj]);
        //return view('table', compact('obj','eobj'));
    }

    public function tableStore(Request $req){
    	$category = $req->category;
    	$deadline = $req->deadline;
    	$task     = $req->task;

    	$obj = new todo();
        $obj->category = $category;
        $obj->deadline  = $deadline;
        $obj->task     = $task;

        if($obj->save()){
           echo 'Successfully Inserted';
           return redirect('table');
       }
    }

    public function modal($id) {
      // echo 'ID in route is: '.$id;
      $eobj = Todo::find($id);
     // dd($obj);
      return view('modal', ['updata'=>$eobj]);
   }

   public function updateStore(Request $request, $id){
      $obj = Todo::find($id);
      $obj->category = $request->category;
      $obj->deadline = $request->deadline;
      $obj->task     = $request->task;

      if($obj->save()){
         //return Redirect::to('/create');
         return redirect('table');
        // echo 'Successfully Updated';
      }
   }

   public function loginStore(Request $request){
      $email    = $request->email;
      $password = $request->password;
      $user = User::where('email','=',$email)
                     ->where('password','=',$password)
                     ->first();
      if($user){
         Session::put('userid',$user->id);
         return redirect('table');
      }
      else {
         //Session::get('exception','Email and password not matched');
         //return redirect('login');
      }
   }

   public function signupStore(Request $req)
   {
      
      $password        = $req->password;
      $confirmpassword = $req->confirmpassword;
      if($password == $confirmpassword){
        $name = $req->name;
        $email = $req->email;
        $phone = $req->phone;
        $address = $req->address;
        $obj = new User();
        $obj->name      = $name;
        $obj->email     = $email;
        $obj->password  = $password;
        $obj->phone     = $phone;
        $obj->address   = $address;

        if($obj->save()){
           echo 'Successfully Inserted';
           return redirect('/');
       }
      }
      else {
        // redirect to previous page and show the error message
        // see how to pass data using 'with' in laravel
      }
    }
   
}
