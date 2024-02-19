<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Province;
use App\Models\Town;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Listado de distribuidores activos.
        $index = Company::where('companies.status', 1)->paginate(50);

        return view('companies.index', compact('index'));
    }

    public function deleted(Request $request)
    {
        //Listado de distribuidores desactivos.
        $index = Company::where('companies.status', 2)->paginate(50);

        return view('companies.deleted', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::where('status', 1)->get();
        $towns = Town::where('status', 1)->get();

        return view('companies.create', compact('provinces','towns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar los datos del formulario
        $data = request()->validate([
            'name' => 'required|min:2|max:125',
            'cif' => 'required|min:2|max:20',
            'image' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        $image = '';
        //Si el usuario sube una imagen
        if ($request->file) {
            //Asignar la imagen
            //$file = $request->file('file');
            //$image = Storage::disk('local')->put('upload-companies', $file);
            $file = $request->file('file');
            $nombre_img =  date("d-m-y-H-i-s").'-'.$file->getClientOriginalName();
            $image = Storage::putFileAs('upload-companies', $file, $nombre_img);
        }

        //Crear el registro
        $company = Company::create([
            'name' => $request->name,
            'business_name' => $request->business_name,
            'cif' => $request->cif,
            'address' => $request->address,
            'zip' => $request->zip,
            'id_province' => $request->id_province,
            'id_town' => $request->id_town,
            'email' => $request->email,
            'tel' => $request->tel,
            'catalogs' => $request->catalogs,
            'image' => $image,
            'status' => 1,
        ]);

        $user = User::create([
            'id_company' => $company->id,
            'name' => $request->name,
            'dni' => $request->cif,
            'email' => $request->email,
            'tel' => $request->tel,
            'image' => $image,
            'status' => 1,
            'dob' => now(),
            'password' => Hash::make('ayeUser23*')
        ]);

        // Asignación del rol
        $user->assignRole(2);

        //Redireccionar
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $provinces = Province::where('status', 1)->get();
        $towns = Town::where('status', 1)->get();

        return view('companies.edit', compact('provinces','towns','company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //Validar los datos del formulario
        $data = request()->validate([
            'name' => 'required|min:2|max:125',
            'cif' => 'required|min:2|max:20',
            'image' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        //Actualizar los datos
        $image = "";

        //Si el usuario sube una imagen
        if ($request->file) {
            //Asignar la imagen
            $file = $request->file('file');
            $image = Storage::disk('local')->put('upload-companies', $file);
            $company->image = $image;
        }

        //Modificar datos del usuario
        $user = User::where('email',$company->email)->first();
        if($user){
            $user->name = $request->name;
            $user->dni = $request->cif;
            $user->email = $request->email;
            $user->tel = $request->tel;
            if ($image) { $user->image = $image;/*Asignar la imagen*/  }
            $user->save();
        }

        //Actualizar el registro
        $company->name = $request->name;
        $company->business_name = $request->business_name;
        $company->cif = $request->cif;
        $company->address = $request->address;
        $company->zip = $request->zip;
        $company->id_province = $request->id_province;
        $company->id_town = $request->id_town;
        $company->email = $request->email;
        $company->tel = $request->tel;
        $company->catalogs = $request->catalogs;
        $company->save();

        //Redireccionar
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //Dar de baja
        $company->status = 2;
        $company->deleted_at = date('Y-m-d H:i:s');
        $company->save();

        //Redireccionar
        return redirect()->route('company.index');
    }

    /**
     * Active the specified resource into storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function active(Company $company)
    {
        //Activar
        $company->status = 1;
        $company->deleted_at = null;
        $company->save();

        return redirect()->route('company.index');
    }
}
