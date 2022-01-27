<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class main extends Controller
{
    public function add()
    {
        return view('add');
    }
    public function insert(Request $req)
    {
        $validatedData = $req->validate([
            'email' => 'required',
            'name' => 'required',
            'age' => 'required|integer|between:1,80',
        ], [
            'email.required' => 'Email is required',
            'name.required' => 'Name is required',
            'age.required' => 'Age is required',
        ]);
        if ($validatedData) {
            $email = $req->email;
            $name = $req->name;
            $age = $req->age;
            DB::table('details')->insert([
                'name' => $req->name,
                'email' => $req->email,
                'age' => $req->age
            ]);
            return redirect('show');
            }
    }
    public function show()
    {
        $users = DB::table('details')->get();
        return view('show', compact('users'));
    }
    public function edit($id)
    {
        $user = DB::table('details')->where('id', $id)->first();
        return view('edit', compact('user'));
    }
    public function update(Request $req)
    {
        $validatedData = $req->validate([
            'email' => 'required',
            'name' => 'required',
            'age' => 'required|integer|between:1,80',
        ], [
            'email.required' => 'Email is required',
            'name.required' => 'Name is required',
            'age.required' => 'Age is required',
        ]);
        if ($validatedData) {
            $email = $req->email;
            $name = $req->name;
            $age = $req->age;
           
        DB::table('details')->where('id', $req->id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'age' => $req->age
        ]);
        return redirect('show');
    }
    }
    public function delete($id)
    {
        DB::table('details')->where('id', $id)->delete();
        return redirect('show');
    }
}
