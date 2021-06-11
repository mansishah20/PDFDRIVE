<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserMaster;
use App\Category;
use App\Book;

use Redirect;
use Auth;
use Input;
use IlluminateSupportFacadesValidator;
use IlluminateFoundationBusDispatchesJobs;
use IlluminateRoutingController as BaseController;
use IlluminateFoundationValidationValidatesRequests;
use IlluminateFoundationAuthAccessAuthorizesRequests;
use IlluminateFoundationAuthAccessAuthorizesResources;
use IlluminateHtmlHtmlServiceProvider;

class UserMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usermaster= UserMaster::all();  
		return view('usermaster.index', compact('usermaster'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("usermaster.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new UserMaster();  
        $user->uname = $request->get('uname');  
        $user->uemail= $request->get('uemail');
        $user->upassword= $request->get('upassword');
        $user->utype= "User";   
        $user->save();
		
		return ("New Account Created");
    }

    /*public function logincheck(Request $request)
    {
        $varuemail = $request->get('uemail');
        $varupassword = $request->get('upassword');

        $user= usermaster::find($varuemail);
        return $user;
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
        $varuemail = $request->post('uemail');
        $varupassword = $request->post('upassword');
        $user = DB::select("select uemail,uname from user_masters where utype='User' AND uemail='$varuemail' AND upassword='$varupassword'");
        if($user==NULL)
        {
           return redirect('/home/login');

        }
        else{
            $request->session()->put('uname',$user[0]->uname);
            return redirect('/home');
        }
       
    }

    public function logout(Request $request){
        $request->session()->forget('uname');
        return redirect('/home');

    }
    public function show(Request $request)
    {
        /*$varuemail = $request->get('uemail');
        $varupassword = $request->get('upassword');
        $user = DB::select('select uemail,upassword from user_masters where utype="User"');
        //
       // $user= UserMaster::all(uemail);
   return $user;
        $user= UserMaster::all();
        if($varuemail == $user)
        {
            return "Successfully";  
        }
        else{
            return "Unsuccessfully";
        }
        
        //$user = DB::select('select uemail,upassword from user_masters where utype="User"');
        

        $rules = array(
            'uemail' => 'required|email', // make sure the email is an actual email
            'upassword' => 'required|min:8'
            );
            //$validator = Validator::make(Input::all() , $rules);

            // if the validator fails, redirect back to the form

           /* if ($validator->fails())
                {
                return Redirect::to('home.signin')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('upassword')); // send back the input (not the password) so that we can repopulate the form
                }
            else
            { 
                    $userdata = array(
                    'email' => $request->get('uemail') ,
                    'password' => $request->get('upassword')
                    );
                   // return $userdata;
                    $user = DB::select('select email,password from users');
                    return $user;
                    if($userdata == $user[0])
                    {
                        alert("successfully");
                    }
                // attempt to do the login
                   // return Auth::attempt($userdata);
                /*if (Auth::attempt($userdata))
                    {
                        return ("validate successfully");
                    // validation successful
                    // do whatever you want on success

                    }
                  else
                    {

                    // validation not successful, send back to form

                    return ("validate Unsuccessfully");
                    }*/
           // }
            
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= usermaster::find($id);  
		return view('usermaster.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user= usermaster::find($id); 
        $user->uname = $request->get('uname');  
        $user->uemail= $request->get('uemail');
        $user->upassword= $request->get('upassword');
        $user->utype= $request->get('utype'); 
        $user->save();
		return ("User Record Edited");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =usermaster::find($id); 
		$user->delete();
       return (" User Record Deleted");
    }

    public function doLogout()
	{
		Auth::logout();
		return Redirect::to('home.signin'); // redirection to login screen
    }        
    
    
}
