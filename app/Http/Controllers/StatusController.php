<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use App\User;
use Input;
use Session;
use Excel;
use Auth;

class StatusController extends Controller
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
      $title = "Data Status";
      $data = Status::all();
      $data->transform(function($d) {
          $split = explode(" ", $d->created_at);
          $tanggal = explode("-", $split[0]);
          $d->tanggal = $tanggal[2]."/".$tanggal[1]."/".$tanggal[0];
          $d->created_by = User::find($d->created_by)->name;
          return $d;
      });
      return view('pages.status.index')->withData($data)->withTitle($title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $title = "Tambah Status";
      return view('pages.status.create')->withTitle($title);
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
        'status' => 'required',
      ]);
      $status = new Status([
        'status' => $request->get('status'),
        'created_by' => Auth::user()->id,
      ]);
      $status->save();
      return redirect('/status')->with('success', 'Status berhasil disimpan');
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
      $data = Status::find($id);
      $data->delete();
      return redirect('/status')->with('success', 'Status berhasil dihapus');
    }
    /*
    public function importExcel(Request $request)
    {
        if($request->hasFile('import_file')){
            Excel::load($request->file('import_file')->getRealPath(), function ($reader) {
				$data = $reader->toArray();
				//print_r($data[0]);
				for($i=0; $i<sizeof($data[0]);$i++){
					$agent = new Agent([
                      'nama' => $data[0][$i]['nama'],
                      'nama_crm'=> $data[0][$i]['nama_crm'],
                      //'created_by'=> Auth::user()->id,
                      //'created_at'=> Carbon::now()->timestamp,
                    ]);
                    if(!empty($agent)) {
                        $agent->save();
                    }
				}
				/*
                foreach ($reader->toArray() as $key => $row) {
					//print_r($row[$key]['nama']);
                    $data['nama'] = $row[$key]['nama'];
                    $data['nama_crm'] = $row[$key]['nama_crm'];
					echo $key;

                    $agent = new Agent([
                      'nama' => $row[$key]['nama'],
                      'nama_crm'=> $row[$key]['nama_crm'],
                      //'created_by'=> Auth::user()->id,
                      //'created_at'=> Carbon::now()->timestamp,
                    ]);
                    if(!empty($agent)) {
                        $agent->save();
                    }
                }

            });
        }

        return redirect('/agent')->with('success', 'Agent berhasil disimpan');
    }
    */
}
