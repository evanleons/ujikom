<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'title' => 'Travel List',
            'travels' => Travel::all(),
        ];
        return view('travel.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Create Travel'
        ];
        return view('travel.editor', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'tanggal' => 'required',
            'jam' => 'required',
            'lokasi' => 'required',
            'suhu' => 'required',
        ]);

        $travel = new Perjalanan();
        $travel -> tanggal = $request->tanggal;
        $travel -> jam = $request-> jam;
        $travel -> lokasi = $request-> lokasi;
        $travel -> suhu = $request-> suhu;
        $travel -> save();
        return redirect('/list-perjalanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Catatan',
            'travels' => Perjalanan::find($id)->first(),
        ];
        return view('travel.editor', $data);
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
        $travel = Perjalanan::find($id);
        $travel -> tanggal = $request -> tanggal;
        $travel -> jam = $request -> jam;
        $travel -> lokasi = $request -> lokasi;
        $travel -> suhu = $request -> suhu;

        $travel -> update ();
        return redirect('/list-travel');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $destroy = Perjalanan::find($id);
     $destroy->delete();
     return redirect('list-travel');
    }
}
