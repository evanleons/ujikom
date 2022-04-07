<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class TravelController extends Controller
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
            'method' => 'POST',
            'title' => 'Create Travel',
            'route'=>route('travel.store')
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
            'jam' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'suhu' => 'required',
            // 'catatan' => 'nullable'
        ]);

        $travel = new Travel();
        $travel -> user_id = $request-> user_id;
        $travel -> jam = $request-> jam;
        $travel -> tanggal = $request->tanggal;
        $travel -> lokasi = $request-> lokasi;
        $travel -> suhu = $request-> suhu;
        // $travel -> catatan = $request-> catatan;
        $travel -> save();
        return redirect('/list-travel')->with('message', 'Data berhasil disimpan');
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
            'travels' => Travel::find($id)->first(),
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
        $travel = Travel::find($id);
        $travel -> user_id = $request -> user_id;
        $travel -> jam = $request -> jam;
        $travel -> tanggal = $request -> tanggal;
        $travel -> lokasi = $request -> lokasi;
        $travel -> suhu = $request -> suhu;
        // $travel -> catatan = $request ->catatan;

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
     $destroy =Travel::find($id);
     $destroy->delete();
     return redirect('/list-travel');
    }
}
