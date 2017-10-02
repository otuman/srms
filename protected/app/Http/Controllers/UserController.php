<?php

namespace App\Http\Controllers;

use Request as DataRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use Validator;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Auth;


class UserController extends Controller{


     /**
      * Create a new controller instance.
      *
      * @return void
      */
     public function __construct()
     {
         $this->middleware('auth');
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'user_type' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
           'first_name' => $request->first_name,
           'last_name' =>$request->last_name,
           'email' =>$request->email,
           'password'=>bcrypt($request->password),
           'status'=> false,
           'type'=> $request->user_type,
           'activation_key'=>'',
           'last_login'=>Carbon::now(),
        ]);
        if ($request->ajax()) {
            return response()->json([
                  'success' => true,
                  'message' => "User was created successifully"
                ]);
          }
       return redirect()->route('users');

    }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function editProfile(){
        $user = Auth::user();
        return view('pages.users.profile', compact('user'));
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
       $user = User::find($id);
       if(DataRequest::ajax()){

        $response = response()->json([
               'id' => $user->id,
               'first_name' => $user->first_name,
               'last_name' => $user->last_name,
               'email' => $user->email,
               'type' => $user->type,
               'status' => $user->status
             ]);
         return $response;
       }
       return view('pages.users.edit', compact('user'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $user = User::find($id);

       if(DataRequest::ajax()){

        $response = response()->json([
               'id' => $user->id,
               'first_name' => $user->first_name,
               'last_name' => $user->last_name,
               'email' => $user->email,
               'type' => $user->type,
               'status' => $user->status
             ]);
         return $response;
       }
       return view('pages.users.show', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->save();

        if ($request->ajax()) {
        return response()->json([
                'sucess' => true,
              ]);
        }
     return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
          $user = User::find($id);
          $user->delete();
    }
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUsersData(){
       $users = User::query();
        return Datatables::of($users)
               ->addColumn('action', function ($user) {
                  return '<a href="javascript:void(0)" onclick="editRow('.$user->id.')" class="btn btn-xs btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                         <a href="javascript:void(0)" data-id="row-' . $user->id . '" onclick="removeRow('.$user->id.')" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> delete</a>';
                })
             ->make(true);
    }

}
