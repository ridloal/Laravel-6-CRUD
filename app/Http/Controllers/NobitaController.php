<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Route;
use App\Nobita;

class NobitaController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	$nobitas = Nobita::all();

    	return view('nobita.index', compact('nobitas'));
    }

    public function create()
    {
    	$nobita = new Nobita();

    	return view('nobita.create', compact('nobita'));
    }

    public function store()
    {

    	$data = $this->validatedData();

    	if (request()->input('hobby') != NULL) {
    		$data['hobby'] = json_encode(request()->input('hobby'));
    	}

    	if (request()->input('hobby_custom') != NULL) {
    		$data['hobby_custom'] = request()->input('hobby_custom');
    	}

    	$nobita = Nobita::create($data);

    	$this->storeImage($nobita);

    	return redirect('/nobita')->with('success','Data Successfully Added');
    }

    public function show(Nobita $nobita)
    {
    	return view('nobita.show', compact('nobita'));
    }

    public function edit(Nobita $nobita)
    {
    	return view('nobita.edit', compact('nobita'));
    }

    public function update(Nobita $nobita)
    {

    	$data = $this->validatedData();

    	if (request()->input('hobby') != NULL) {
    		$data['hobby'] = json_encode(request()->input('hobby'));
    	}

    	if (request()->input('hobby_custom') != NULL) {
    		$data['hobby_custom'] = request()->input('hobby_custom');
    	}

    	$nobita->update($data);
    	$this->storeImage($nobita);

    	return redirect('/nobita')->with('success','Data Successfully Updated');
    }

    public function destroy(Nobita $nobita)
    {
    	$nobita->delete();

    	return redirect('/nobita')->with('success','Data Successfully Deleted');
    }

    protected function validatedData(){

    	return request()->validate([
			'first_name'      => 'required|min:1|max:16',
			'last_name'       => 'required|min:1|max:16',
			'first_name_kana' => 'nullable|min:1|max:16',
			'last_name_kana'  => 'nullable|min:1|max:16',
			'username'        => 'required|min:6|max:16',
			'email'           => 'required|min:6|max:48|email:rfc,dns',
			'website'         => 'nullable|min:6|max:48|url',
			'picture'         => 'sometimes|file|image|max:2000'
    	]);
    	
    }

    private function storeImage($nobita){
    	if (request()->has('picture')) {
    		$nobita->update([
    			'picture' => request()->picture->store('uploads', 'public')
    		]);
    	}
    }
}

