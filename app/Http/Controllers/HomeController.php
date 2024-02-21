<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use App\Models\Customer;
use App\Models\Distributor;
use App\Models\Log;
use App\Models\Product;
use App\Models\SaleItem;
use App\Models\Town;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = $request->user();
        if($user){
            if (view()->exists($request->path())) {

                $distributors = 0;
                $customers = 0;
                $buys = 0;
                $logs = Log::where('module','<>','Login')->take(10)->orderBy('created_at','DESC')->get();

                return view($request->path(),compact('user','distributors','customers','buys','logs'));
            }
        }else{
            $towns = Town::where('status', 1)->orderBy('name','ASC')->get();
            $alert = '';
            return view('welcome', compact('towns','alert'));
        }

    }

    public function root(Request $request)
    {
        $user = $request->user();
        if($user){
            //Crear registro en log
            $module = "Login";
            $action = "El usuario ".$user->name." ".$user->first_name." ha accedido a la plataforma a traves de la pantalla de login con su usuario y contraseña";
            Log::addLog($user->id,$module,$action);

            //Obtengo el rol del usuario
            $rol = $user->getUserRole($user->id);
            
            switch ($rol)
            {
                case '1':
                    //admin
                    $distributors = 0;
                    $customers = 0;
                    $buys = 0;
                    $logs = Log::where('module','<>','Login')->take(10)->orderBy('created_at','DESC')->get();
        
                    return view('dashboard1', compact('user','distributors','customers','buys','logs'));
                    break;

                case '2':                
                    //Empresa
                    $distributors = 0;
                    $customers = 0;
                    $buys = 0;
                    $logs = Log::where('module','<>','Login')->take(10)->orderBy('created_at','DESC')->get();
        
                    return view('dashboard2', compact('user','distributors','customers','buys','logs'));
                    break;

                case '4':                
                    //Comercial
                    $distributors = 0;
                    $customers = 0;
                    $buys = 0;
                    $logs = Log::where('module','<>','Login')->take(10)->orderBy('created_at','DESC')->get();

                    return view('dashboard3', compact('user','distributors','customers','buys','logs'));
                    break;
            }
        }else{
            $towns = Town::where('status', 1)->orderBy('name','ASC')->get();
            $alert = '';
            return view('welcome', compact('towns','alert'));
        }

    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'dob' => ['required', 'date', 'before:today'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->dob = date('Y-m-d', strtotime($request->get('dob')));

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
            $user->avatar = '/images/' . $avatarName;
        }

        $user->update();
        if ($user) {
            Session::flash('message', 'User Details Updated successfully!');
            Session::flash('alert-class', 'alert-success');
            return response()->json([
                'isSuccess' => true,
                'Message' => "User Details Updated successfully!"
            ], 200); // Status code here
        } else {
            Session::flash('message', 'Something went wrong!');
            Session::flash('alert-class', 'alert-danger');
            return response()->json([
                'isSuccess' => true,
                'Message' => "Something went wrong!"
            ], 200); // Status code here
        }
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json([
                'isSuccess' => false,
                'Message' => "Your Current password does not matches with the password you provided. Please try again."
            ], 200); // Status code
        } else {
            $user = User::find($id);
            $user->password = Hash::make($request->get('password'));
            $user->update();
            if ($user) {
                Session::flash('message', 'Password updated successfully!');
                Session::flash('alert-class', 'alert-success');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Password updated successfully!"
                ], 200); // Status code here
            } else {
                Session::flash('message', 'Something went wrong!');
                Session::flash('alert-class', 'alert-danger');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Something went wrong!"
                ], 200); // Status code here
            }
        }
    }

}
