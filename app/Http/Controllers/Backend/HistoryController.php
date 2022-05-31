<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;

class HistoryController extends Controller
{
    public function index()
    {
        return view('backend.pages.history.index');
    }

    public function datatableHistory(Request $request){
        // if ($request->ajax()) {

            $data_pengkajian = DB::table('t_pengkajian')
            			->where('deleted','1')
            			->orderBy('id','desc');

            $datatables = DataTables::of($data_pengkajian);

            $list_data = $datatables
            		->addIndexColumn()
		            ->editColumn("nama_pasien", function ($data) {
		                return $data->nama_pasien;
		            })
		            ->editColumn("no_rm", function ($data) {
		                return $data->no_rm;
		            })
		            ->editColumn("usia", function ($data) {
		                return $data->usia;
		            })
		            ->editColumn("tanggal_pengkajian", function ($data) {
		            	$tam_tanggal_pengkajian = $data->tanggal_pengkajian;
		            	$exp_tp = explode("-", $tam_tanggal_pengkajian);
		                return ($data->tanggal_pengkajian != "0000-00-00") ? $exp_tp[2]."-".$exp_tp[1]."-".$exp_tp[0] : "-";
		            })
                    ->rawColumns(['action'])
                    ->addColumn('action', function($data){
                        // $edit_url = rout('role-edit',$data);
                        // $update_url = rout('role-update',$data);
                        // $mapping_url = rout('role-mapping',$data);
                        $button = '<div class="dropdown">
                                      <button type="button" class="btn btn-outline-info dropdown-toggle" id="dropdownMenuIconButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-settings"></i>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton3">
                                        <a class="dropdown-item editBtn" href="'.route('implementasi-evaluasi-unduh').'?id_pengkajian='.$data->id.'" title="Unduh PDF Implementasi dan Evaluasi">Unduh PDF</a>
                                        <div class="dropdown-divider"></div>
                                      </div>
                                    </div>';
                                  //   <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton3">
                                  //   <a class="dropdown-item" href="javascript:undefined" onclick="showDelete('.$data->id_role.',\''.str_replace(array('"', "'"), '', strip_tags($data->nama_role)).'\')">Hapus</a>
                                  //   <div class="dropdown-divider"></div>
                                  //   <a class="dropdown-item editBtn" href="'.route('role-mapping',['id_role' => $data->id_role ]).'">Mapping</a>
                                  //   <div class="dropdown-divider"></div>
                                  // </div>
                        return $button;
                    })
                    ->make(true);

            return $list_data;
        // }
    }

}
