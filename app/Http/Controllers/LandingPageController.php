<?php

namespace App\Http\Controllers;

use App\mentor;
use App\pelatihan;
use App\pengumuman;
use App\pertanyaan_umum;
use App\Mail\FormContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal_pelatihan = [];
		$jadwal_pelatihan_tgl = [];
        foreach (pelatihan::jadwal_pelatihan()->get() as $val) {
			$d = date_create($val->waktu_pelatihan);
            $date = date_format($d, 'Y-m-d');
			if (!array_key_exists($date, $jadwal_pelatihan)) {
				$jadwal_pelatihan[$date] = [];
				$jadwal_pelatihan_tgl[] = $date;
			}
			$jadwal_pelatihan[$date][] = $val->toArray();
        }
        $data = [
            'mentor' => mentor::orderBy("id", "desc")->take(6)->get(),
            'jadwal_pelatihan' => $jadwal_pelatihan,
            'jadwal_pelatihan_tgl' => $jadwal_pelatihan_tgl,
            'pengumuman' => pengumuman::pengumuman()->get(),
            'pertanyaan_umum' => pertanyaan_umum::get(),
            'social_media' => self::socialMedia()
        ];
        return view('landing_page.index', $data);
    }

    private static function socialMedia()
    {
        $data = [
            'twitter', 'facebook', 'instagram'
        ];

        return $data;
    }

    public function listMentor()
    {
        $data = [
            'mentor' => mentor::orderBy("id", "desc")->get(),
            'social_media' => self::socialMedia()
        ];
        return view('landing_page.list_mentor', $data);
    }

    public function detailMentor($user)
    {
        $detail_mentor = mentor::where('nama', '=', $user)->first();
        $data = [
            'detail_mentor' => $detail_mentor,
            'jadwal_pelatihan' => pelatihan::jadwal_pelatihan_mentor()->where('mentor.id', '=', $detail_mentor->id)->get(),
            'social_media' => self::socialMedia()
        ];
        return view('landing_page.detail_mentor', $data);
    }

    public function formContact(Request $request)
    {
        $to = 'hello@mocoacademy.id';
        Mail::to($to)->send(new FormContact($request));
        // Mail::send('emails.form_contact', [
        //     'pesan' => $request->pesan,
        //     'nama' => $request->nama
        // ], function ($message) use ($request) {
        //     $message->subject($request->judul_pesan);
        //     $message->from($request->email, $request->nama);
        //     $message->to('hello@mocoacademy.id');
        // });
        return 'OK';
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
