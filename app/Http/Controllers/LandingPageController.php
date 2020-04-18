<?php

namespace App\Http\Controllers;

use App\mentor;
use App\pelatihan;
use App\pengumuman;
use App\pertanyaan_umum;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tmp1 = [];
        $tmp2 = [];
        foreach (pelatihan::jadwal_pelatihan()->get() as $val) {
            $d = date_create($val->waktu_pelatihan);
            $date = date_format($d, 'Y-m-d');

            $tmp1[] = $date;
        }
        foreach (pelatihan::jadwal_pelatihan()->get() as $val) {
            $tmp2[][] = $val->toArray();
        }
        $jadwal_pelatihan = array_combine($tmp1, $tmp2);
        // dd(pengumuman::pengumuman()->get());
        $data = [
            'mentor' => mentor::take(6)->get(),
            'jadwal_pelatihan' => $jadwal_pelatihan,
            'jadwal_pelatihan_tgl' => pelatihan::jadwal_pelatihan_tgl()->get(),
            'pengumuman' => pengumuman::pengumuman()->get(),
            'pertanyaan_umum' => pertanyaan_umum::get()
        ];
        // dd($data);
        return view('landing_page.index', $data);
    }

    public function listMentor()
    {
        $data = [
            'mentor' => mentor::all()
        ];
        return view('landing_page.list_mentor', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
