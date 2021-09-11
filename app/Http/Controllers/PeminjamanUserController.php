<?php

namespace App\Http\Controllers;
use App\PeminjamanUser;
use App\Agent;
use App\Status;
use Illuminate\Http\Request;
use Auth;

class PeminjamanUserController extends Controller
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
    public function index()
    {
        //asyUtm
        $title = "BA Peminjaman User";
        $data = PeminjamanUser::all();
        return view('pages.peminjamanUser.index')->withData($data)->withTitle($title);
    }
    public function report()
    {
        //asyUtm
        $title = "BA Peminjaman User";
        $data = PeminjamanUser::all();
        return view('pages.report.peminjamanuser')->withData($data)->withTitle($title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Input Berita Acara";
        $dataAgent = Agent::all();
        $dataProduct = PeminjamanUser::latest()->get()->unique('product');
        $dataCategory = PeminjamanUser::latest()->get()->unique('category');
        $dataStatus = Status::all();
        //$dataStatus = BeritaAcara::latest()->get()->unique('status');
        //dd($dataCategory);
        return view('pages.PeminjamanUser.create')
                ->withDataAgent($dataAgent)
                ->withTitle($title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'nama_peminjam' => 'required',
        'userid'=> 'required',
        'aplikasi'=> 'required',
        'pemilik_user'=> 'required',
        'reason'=> 'required',
      ]);

      $beritaacara = new PeminjamanUser([
        'nama_peminjam' => $request->get('nama_peminjam'),
        'userid'=> $request->get('userid'),
        'owner_userid'=> $request->get('pemilik_user'),
        'aplikasi'=> $request->get('aplikasi'),
        'reason'=> $request->get('reason'),
        'created_by'=> Auth::user()->name,
      ]);
      $beritaacara->save();
      return redirect('/peminjamanuser')->with('success', 'Berita Acara berhasil disimpan');
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
      $data = PerubahanStatus::find($id);
      $data->delete();
      return redirect('/perubahanstatus')->with('success', 'Berita acara berhasil dihapus');
    }
}
