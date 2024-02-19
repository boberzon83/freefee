<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\ClienteConsulta;
use App\Models\ClienteConsultaComentario;
use App\Models\ClienteFactura;
use App\Models\ClienteUser;
use App\Models\User;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:user.index')->only('index');
        $this->middleware('can:user.disabled')->only('disabled');
        $this->middleware('can:user.create')->only('create');
        $this->middleware('can:user.store')->only('store');
        $this->middleware('can:user.show')->only('show');
        $this->middleware('can:user.edit')->only('edit');
        $this->middleware('can:user.update')->only('update');
        $this->middleware('can:user.destroy')->only('destroy');
        $this->middleware('can:user.active')->only('active');
    }

    public function index(Request $request)
    {
        //Obtengo el rol del usuario
        $user = $request->user();
        $role = $user->getUserRole($user->id);

        //Controlar en caso de ser perfil distinto al administrador.
        $index = User::where('users.status', '1')->paginate(50);

        return view('users.index', compact('index','role'));
    }

    public function deleted(Request $request)
    {
        //Obtengo el rol del usuario
        $user = $request->user();
        $role = $user->getUserRole($user->id);
        
        //Controlar en caso de ser perfil distinto al administrador.
        $index = User::where('users.status', '2')->paginate(50);

        return view('users.deleted', compact('index','role'));
    }

    public function create(Request $request)
    {
        //Obtener roles
        $roles =  Role::all();

        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        //Validar los datos del formulario
        $data = request()->validate([
            'name' => 'required|min:2|max:120',
            'roles' => 'required',
            'email' => 'required',
            'pass' => 'required',
            'image' => 'mimes:jpg,jpeg,bmp,png'
        ]);

        $image = "";
        //Si el usuario sube una imagen
        if($request->file){
            //Asignar la imagen
            $file = $request->file('file');
            $image = Storage::disk('local')->put('upload-users', $file);
        }

        //Crear el registro en users
        $user = User::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dni' => $request->dni,
            'email' => $request->email,
            'tel' => $request->tel,
            'image' => $image,
            'status' => 1,
            'dob' => now(),
            'password' => Hash::make($request->pass)
        ]);

        // Asignación del rol
        $user->assignRole($request->roles);

        //Redireccionar
        return redirect()->route('user.index');
    }

    public function show(Request $request, User $user)
    {

    }

    public function profile(Request $request, User $user)
    {
        
        return view('users.profile', compact('user'));
    }

    public function update_profile(Request $request, User $user)
    {
        //Validar los datos del formulario
        $data = request()->validate([
            'name' => 'required|min:2|max:120',
            'email' => 'required',
            'avatar' => 'mimes:jpg,jpeg,bmp,png'
        ]);

        //Si el usuario sube una imagen
        if($request->avatar){
            //Asignar la imagen
            $file = $request->file('avatar');
            $image = Storage::disk('local')->put('upload-users', $file);
            $user->image = $image;
        }

        if($request->pass){
            //Asignar la contraseña
            $password = Hash::make($request->pass);
            $user->password = $password;
        }

        //Actualizar el registro en usuarios
        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save();

        //Redireccionar
        return redirect()->route('user.profile', compact('user'));
    }


    public function edit(Request $request, User $user)
    {
        //Obtener roles
        $roles =  Role::all();

        return view('users.edit', compact('user','roles'));
    }

    public function update(Request $request, User $user)
    {
        //Validar los datos del formulario
        $data = request()->validate([
            'name' => 'required|min:2|max:120',
            'roles' => 'required',
            'email' => 'required',
            'image' => 'mimes:jpg,jpeg,bmp,png'
        ]);

        //Si el usuario sube una imagen
        if($request->file){
            //Asignar la imagen
            $file = $request->file('file');
            $image = Storage::disk('local')->put('upload-users', $file);
            $user->image = $image;
        }

        if($request->pass){
            //Asignar la contraseña
            $password = Hash::make($request->pass);
            $user->password = $password;
        }

        //Actualizar el registro en usuarios
        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->dni = $request->dni;
        $user->email = $request->email;
        $user->tel = $request->tel;
        $user->save();

        // Asignación del rol Borrando los demas que tiene asignados.
        $user->syncRoles($request->roles);

        //Redireccionar
        return redirect()->route('user.index');
    }

    public function destroy(User $user)
    {
        //Dar de baja usuario
        $user->status = 2;
        $user->deleted_at=date('Y-m-d H:i:s');
        $user->save();

        //Redireccionar
        return redirect()->route('user.index');
    }

    public function active(User $user)
    {
        //Activar usuario
        $user->status=1;
        $user->deleted_at=null;
        $user->save();

        return redirect()->route('user.index');
    }
}
