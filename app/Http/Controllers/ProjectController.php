<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Project::all();
        // dd($data);
        return view('admin.project.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create', [
        
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Project::create($request->all());
        if ($request->hasFile('photo')) {
            $request->file('photo')->move('photo/', $request->file('photo')->getClientOriginalName());
            $data->photo = $request->file('photo')->getClientOriginalName();
            $data->save();
        }
        return redirect('/project')->with('success', 'Task Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Project::all();
        // dump($data);
        return  view('home', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Project::find($id);
        // if ($request->hasFile('photo')) {
        //     $temp = $request->file('photo')->getClientOriginalName();
        //     $request->move('photo/', $request->file('photo')->getClientOriginalName());
        //     $data->photo = $temp;
        //     $data->save();
        // }
        return view('admin.project.edit', compact('data'));
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
        $ubah = Project::findorfail($id);
        $awal = $ubah->photo;

        $data = [
            'title' => $request['title'],
            'photo' => $request->file('photo')->getClientOriginalName(),
            'prosesor' => $request['prosesor'],
            'ram' => $request['ram'],
            'psu' => $request['psu'],
            'cooling' => $request['cooling'],
            'fan' => $request['fan'],
            'vga' => $request['vga'],
            'casing' => $request['casing'],
            'price' => $request['price']
        ];

        $request->photo->move(public_path().'/photo', $request->file('photo')->getClientOriginalName());
        $ubah->update($data);
        // if ($request->hasFile('photo')) {
        //     $request->file('photo')->move('photo/', $request->file('photo')->getClientOriginalName());
        //     $data->photo = $request->file('photo')->getClientOriginalName();
        //     $data->save();
        // }
        // $data->update($request->all());

        return redirect('/project')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Project::find($id);
        $data->delete();
        return redirect('/project')->with('success', 'Data Berhasil Di Hapus');
    }
}
