<?php

namespace App\Http\Controllers;
use App\PerubahanStatus;
use App\Agent;
use App\Status;
use App\StatusApprove;
use App\User;
use Illuminate\Http\Request;
use Auth;

class PerubahanStatusController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * if role = agent then query where created by = Agent
     * else query all resource where created by user on the same site
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "BA Perubahan Status";
        if(Auth::user()->role_id == 1){
          $data = PerubahanStatus::all();
        }
        elseif(Auth::user()->role_id == 2){
          $data = PerubahanStatus::where('created_by', Auth::user()->id)->get();
        }else{
          $site = Auth::user()->site_id;
          $userSite = User::where('site_id', $site)->get();
          $userSite = $userSite->toArray();
          $arraySite = [];
          foreach ($userSite as $user ) {
            array_push($arraySite, $user['id']);
          }
          $data = PerubahanStatus::wherein('created_by', $arraySite)->get();
        }
        //$data = PerubahanStatus::all();
        $data->transform(function($d) {
          //readable nama status
          $d->approveName = StatusApprove::find($d->approve)->status;
          return $d;
        });
        return view('pages.perubahanstatus.index')->withData($data)->withTitle($title);
    }
    public function report()
    {
        //asyUtm
        $title = "BA Perubahan Status";
        //$data = PerubahanStatus::all();
        return view('pages.report.perubahanstatusServerside')->withTitle($title);
    }
    public function approvePage()
    {
        //asyUtm
        $title = "BA Perubahan Status";
        if(Auth::user()->role_id == 1){
          $data = PerubahanStatus::all();
        }else{
          $site = Auth::user()->site_id;
          $userSite = User::where('site_id', $site)->get();
          $userSite = $userSite->toArray();
          $arraySite = [];
          foreach ($userSite as $user ) {
            array_push($arraySite, $user['id']);
          }
          $data = PerubahanStatus::wherein('created_by', $arraySite)->get();
        }
        $data->transform(function($d) {
          //readable nama status
          $d->approveName = StatusApprove::find($d->approve)->status;
          //rule button approve
          /*
          enabled : current status < user role, beda 1 level
          */
          $roleUser = Auth::user()->role_id;
          if($roleUser - $d->approve == 1){
            $d->buttonApprove = "";
          }else{
            $d->buttonApprove = "disabled";
          }
          return $d;
        });
        return view('pages.approve.perubahanstatus')->withData($data)->withTitle($title);
    }

    public function grab(Request $request)
    {
        $columns = array(
                            0 =>'id',
                            1 =>'agent',
                            2=> 'request_id',
                            3=> 'costumer',
                            4=> 'no_kartu',
                            5=> 'no_costumer',
                            6=> 'no_rekening',
                            7=> 'product',
                            8=> 'category',
                            9=> 'status',
                            10=> 'transaction_time',
                            11=> 'created_at',
                            12=> 'owner',
                            13=> 'approval',
                            14=> 'id',
                        );

        $totalData = PerubahanStatus::count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        //dd($request->input);
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {
            $dataBeritaAcara = PerubahanStatus::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value');

            $dataBeritaAcara =  PerubahanStatus::where('id','LIKE',"%{$search}%")
                            ->orWhere('agent', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = PerubahanStatus::where('id','LIKE',"%{$search}%")
                             ->orWhere('agent', 'LIKE',"%{$search}%")
                             ->count();
        }

        $data = array();
        if(!empty($dataBeritaAcara))
        {
            foreach ($dataBeritaAcara as $beritaAcara)
            {
                $delete =  route('perubahanstatus.destroy', $beritaAcara->id);

                $nestedData['id'] = $beritaAcara->id;
                $nestedData['agent'] = $beritaAcara->agent;
                $nestedData['request_id'] = $beritaAcara->request_id;
                $nestedData['costumer'] = $beritaAcara->costumer;
                $nestedData['no_kartu'] = $beritaAcara->no_kartu;
                $nestedData['no_costumer'] = $beritaAcara->no_costumer;
                $nestedData['no_rekening'] = $beritaAcara->no_rekening;
                $nestedData['product'] = $beritaAcara->product;
                $nestedData['category'] = $beritaAcara->category;
                $nestedData['status'] = $beritaAcara->status;
                $nestedData['transaction_time'] = $beritaAcara->transaction_time;
                $createdAt = $beritaAcara->created_at->toDateTimeString();
                $date = explode(" ", $createdAt);
                $date2 = explode("-", $date[0]);
                //$nestedData['created_at'] = $beritaAcara->created_at->toDateTimeString();
                $nestedData['created_at'] = $date2[2]."/".$date2[1]."/".$date2[0];
                $nestedData['owner'] = $beritaAcara->owner;
                $nestedData['approval'] = $beritaAcara->approve;
                $nestedData['options'] = "&emsp;<a href='{$delete}' title='EDIT' ><span class='glyphicon glyphicon-edit'></span></a>";

                $data[] = $nestedData;

            }
        }

        $json_data = array(
                    "draw"            => intval($request->input('draw')),
                    "recordsTotal"    => intval($totalData),
                    "recordsFiltered" => intval($totalFiltered),
                    "data"            => $data
                    );

        echo json_encode($json_data);
    }
    public function filterByDate(Request $request)
    {
        $columns = array(
                            0 =>'id',
                            1 =>'agent',
                            2=> 'request_id',
                            3=> 'costumer',
                            4=> 'no_kartu',
                            5=> 'no_costumer',
                            6=> 'no_rekening',
                            7=> 'product',
                            8=> 'category',
                            9=> 'status',
                            10=> 'transaction_time',
                            11=> 'created_at',
                            12=> 'owner',
                            13=> 'approval',
                            14=> 'id',
                        );

        $totalData = PerubahanStatus::count();

        $totalFiltered = $totalData;
        if(empty($request->input('search.value')))
        {
            $dataBeritaAcara = PerubahanStatus::get();
        }
        else {
            $search = $request->input('search.value');

            $dataBeritaAcara =  PerubahanStatus::where('id','LIKE',"%{$search}%")
                            ->orWhere('agent', 'LIKE',"%{$search}%")
                            ->get();

            $totalFiltered = PerubahanStatus::where('id','LIKE',"%{$search}%")
                             ->orWhere('agent', 'LIKE',"%{$search}%")
                             ->count();
        }

        $data = array();
        if(!empty($dataBeritaAcara))
        {
            foreach ($dataBeritaAcara as $beritaAcara)
            {
                $delete =  route('perubahanstatus.destroy', $beritaAcara->id);

                $nestedData['id'] = $beritaAcara->id;
                $nestedData['agent'] = $beritaAcara->agent;
                $nestedData['request_id'] = $beritaAcara->request_id;
                $nestedData['costumer'] = $beritaAcara->costumer;
                $nestedData['no_kartu'] = $beritaAcara->no_kartu;
                $nestedData['no_costumer'] = $beritaAcara->no_costumer;
                $nestedData['no_rekening'] = $beritaAcara->no_rekening;
                $nestedData['product'] = $beritaAcara->product;
                $nestedData['category'] = $beritaAcara->category;
                $nestedData['status'] = $beritaAcara->status;
                $nestedData['transaction_time'] = $beritaAcara->transaction_time;
                $createdAt = $beritaAcara->created_at->toDateTimeString();
                $date = explode(" ", $createdAt);
                $date2 = explode("-", $date[0]);
                //$nestedData['created_at'] = $beritaAcara->created_at->toDateTimeString();
                $nestedData['created_at'] = $date2[2]."/".$date2[1]."/".$date2[0];
                $nestedData['owner'] = $beritaAcara->owner;
                $nestedData['approval'] = $beritaAcara->approve;
                $nestedData['options'] = "&emsp;<a href='{$delete}' title='EDIT' ><span class='glyphicon glyphicon-edit'></span></a>";

                $data[] = $nestedData;

            }
        }

        $json_data = array(
                    "draw"            => intval($request->input('draw')),
                    "recordsTotal"    => intval($totalData),
                    "recordsFiltered" => intval($totalFiltered),
                    "data"            => $data
                    );

        echo json_encode($json_data);
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
        $dataProduct = PerubahanStatus::latest()->get()->unique('product');
        $dataCategory = PerubahanStatus::latest()->get()->unique('category');
        $dataStatus = Status::all();
        //$dataStatus = BeritaAcara::latest()->get()->unique('status');
        //dd($dataCategory);
        return view('pages.perubahanStatus.create')
                ->withDataAgent($dataAgent)
                ->withDataCategory($dataCategory)
                ->withDataProduct($dataProduct)
                ->withDataStatus($dataStatus)
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
        'request_id' => 'required',
        'agent'=> 'required',
        'costumer'=> 'required',
        //'no_rekening'=> 'required',
        'no_kartu'=> 'required',
        //'no_costumer'=> 'required',
        'product'=> 'required',
        'category'=> 'required',
        'status'=> 'required',
        'transaction_date'=> 'required',
        'transaction_time'=> 'required',
        //'created_on'=> 'required',
        'owner'=> 'required',
      ]);
      $rawDate = $request->get('transaction_date');
      $time = $request->get('transaction_time');
      $splitDate = explode("-", $rawDate);
      $date = $splitDate[2]."/".$splitDate[1]."/".$splitDate[0];
      $trxFinal = $date." ".$time;

      $beritaacara = new PerubahanStatus([
        'request_id' => $request->get('request_id'),
        'agent'=> $request->get('agent'),
        'costumer'=> $request->get('costumer'),
        'no_rekening'=> $request->get('no_rekening'),
        'no_kartu'=> $request->get('no_kartu'),
        'no_costumer'=> $request->get('no_costumer'),
        'product'=> $request->get('product'),
        'category'=> $request->get('category'),
        'status'=> $request->get('status'),
        'transaction_time'=> $trxFinal,
        //init approve status 2 -> sumbitted
        'approve'=> 2,
        'owner'=> $request->get('owner'),
        'created_by'=> Auth::user()->id
      ]);
      $beritaacara->save();
      return redirect('/perubahanstatus')->with('success', 'Berita Acara berhasil disimpan');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function setApproveSingleID(Request $request, $id)
     {
       /*
       admin = 3
       OM = 4
       Kaur = 5
       */
       $status = PerubahanStatus::where('id', $id)->first();
       $status->approve = Auth::user()->role_id;
       $status->updated_by = Auth::user()->id;
       $status->save();
       return redirect('approvePerubahanstatus')->with('success', 'Berita acara berhasil di approve.');
       //echo json_encode($id." kontol");
     }
    public function setApprove(Request $request, $id)
    {
      /*
      admin = 3
      OM = 4
      Kaur = 5
      */
      $status = PerubahanStatus::where('id', $id)->first();
      $status->approve = Auth::user()->role_id;
      $status->updated_by = Auth::user()->id;
      $status->save();
      //return redirect('approvePerubahanstatus')->with('success', 'Berita acara berhasil di approve.');

      echo json_encode("200 OK");

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
