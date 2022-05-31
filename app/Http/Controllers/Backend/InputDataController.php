<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use PDF;

class InputDataController extends Controller
{
    
	public function index()
    {
    	return view('backend.pages.input_data.index');
    }

    public function insert_step_one(Request $request)
    {
    	$msg = "";
    	$id_pengkajian = $request->id_pengkajian;
    	$nama_pasien = $request->nama_pasien;
    	$no_rm = $request->no_rm;
    	$usia = $request->usia;
    	$tanggal_pengkajian = $request->tanggal_pengkajian;
    	$sumber_data = $request->sumber_data;
    	$riwayat_keluhan_pasien = $request->riwayat_keluhan_pasien;
    	$td_sistole = $request->td_sistole;
    	$td_diastole = $request->td_diastole;
    	$suhu = $request->suhu;
    	$spo2 = $request->spo2;
    	$nadi = $request->nadi;
    	$rr = $request->rr;
    	$gcs = $request->gcs;
    	$batuk = $request->batuk;
    	$rr30 = $request->rr30;
    	$sputum = $request->sputum;
    	$sesak = $request->sesak;
    	$wheezing = $request->wheezing;
    	$ronchi_kering = $request->ronchi_kering;
    	$gelisah = $request->gelisah;
    	$tegang = $request->tegang;
    	$bingung = $request->bingung;
    	$khawatir = $request->khawatir;
    	$rr_radio = $request->rr_radio;
    	$nadi_radio = $request->nadi_radio;
    	$td_radio = $request->td_radio;
    	$anoreksia = $request->anoreksia;
    	$kemampuan_mandi = $request->kemampuan_mandi;
    	$kemampuan_berpakaian = $request->kemampuan_berpakaian;
    	$kemampuan_berhias_diri = $request->kemampuan_berhias_diri;
    	$kemampuan_ke_toilet = $request->kemampuan_ke_toilet;
    	$kemampuan_makan = $request->kemampuan_makan;
    	$minat_perawatan_diri = $request->minat_perawatan_diri;
    	$riwayat_perawatan_sebelumnya = $request->riwayat_perawatan_sebelumnya;
    	$riwayat_penyakit_keluarga = $request->riwayat_penyakit_keluarga;
    	$sebutkan_riwayat_penyakit_keluarga = $request->sebutkan_riwayat_penyakit_keluarga;
    	$riwayat_alergi = $request->riwayat_alergi;
    	$sebutkan_riwayat_alergi = $request->sebutkan_riwayat_alergi;
    	$reaksi_riwayat_alergi = $request->reaksi_riwayat_alergi;
    	$status_psikologi_sosial = $request->status_psikologi_sosial;
    	$sistem_pendukung = $request->sistem_pendukung;
    	$sebutkan_sistem_pendukung = $request->sebutkan_sistem_pendukung;
    	$ekonomi = $request->ekonomi;
    	$spiritual = $request->spiritual;

    	$get_id_pengkajian = $id_pengkajian;

    	if($id_pengkajian == ""){

    		$get_id_pengkajian = DB::table('t_pengkajian')->insertGetId(
                    [
                    	'nama_pasien' => $nama_pasien, 
	                    'no_rm' => $no_rm, 
	                    'usia' => $usia, 
	                    'tanggal_pengkajian' => $tanggal_pengkajian, 
	                    'sumber_data' => $sumber_data,
	                    'riwayat_keluhan_pasien' => $riwayat_keluhan_pasien, 
	                    'td_sistole' => $td_sistole, 
	                    'td_diastole' => $td_diastole, 
	                    'suhu' => $suhu, 
	                    'spo2' => $spo2,
	                    'nadi' => $nadi, 
	                    'rr' => $rr, 
	                    'gcs' => $gcs, 
	                    'batuk' => $batuk, 
	                    'rr30' => $rr30, 
	                    'sputum' => $sputum,
	                    'sesak' => $sesak, 
	                    'wheezing' => $wheezing, 
	                    'ronchi_kering' => $ronchi_kering, 
	                    'gelisah' => $gelisah, 
	                    'tegang' => $tegang,
	                    'merasa_bingung' => $bingung, 
	                    'merasa_khawatir' => $khawatir, 
	                    'rr_radio' => $rr_radio, 
	                    'nadi_radio' => $nadi_radio, 
	                    'td_radio' => $td_radio,
	                    'anoreksia' => $anoreksia, 
	                    'kemampuan_mandi' => $kemampuan_mandi, 
	                    'kemampuan_berpakaian' => $kemampuan_berpakaian, 
	                    'kemampuan_berhias_diri' => $kemampuan_berhias_diri, 
	                    'kemampuan_ke_toilet' => $kemampuan_ke_toilet,
	                    'kemampuan_makan' => $kemampuan_makan, 
	                    'minat_perawatan_diri' => $minat_perawatan_diri, 
	                    'riwayat_perawatan_sebelumnya' => $riwayat_perawatan_sebelumnya, 
	                    'riwayat_penyakit_keluarga' => $riwayat_penyakit_keluarga, 
	                    'detail_riwayat_penyakit_keluarga' => $sebutkan_riwayat_penyakit_keluarga,
	                    'riwayat_alergi' => $riwayat_alergi, 
	                    'detail_riwayat_alergi' => $sebutkan_riwayat_alergi, 
	                    'reaksi_riwayat_alergi' => $reaksi_riwayat_alergi, 
	                    'status_psikologi_sosial' => $status_psikologi_sosial, 
	                    'sistem_pendukung_yang_ada' => $sistem_pendukung,
	                    'detail_sistem_pendukung' => $sebutkan_sistem_pendukung, 
	                    'ekonomi' => $ekonomi, 
	                    'spiritual' => $spiritual,
	                	'created_by' => "1"
	                ]
                );

    	}else{

    		DB::table('t_pengkajian')->where('id', $id_pengkajian)->update([
    			'nama_pasien' => $nama_pasien, 
                'no_rm' => $no_rm, 
                'usia' => $usia, 
                'tanggal_pengkajian' => $tanggal_pengkajian, 
                'sumber_data' => $sumber_data,
                'riwayat_keluhan_pasien' => $riwayat_keluhan_pasien, 
                'td_sistole' => $td_sistole, 
                'td_diastole' => $td_diastole, 
                'suhu' => $suhu, 
                'spo2' => $spo2,
                'nadi' => $nadi, 
                'rr' => $rr, 
                'gcs' => $gcs, 
                'batuk' => $batuk, 
                'rr30' => $rr30, 
                'sputum' => $sputum,
                'sesak' => $sesak, 
                'wheezing' => $wheezing, 
                'ronchi_kering' => $ronchi_kering, 
                'gelisah' => $gelisah, 
                'tegang' => $tegang,
                'merasa_bingung' => $bingung, 
                'merasa_khawatir' => $khawatir, 
                'rr_radio' => $rr_radio, 
                'nadi_radio' => $nadi_radio, 
                'td_radio' => $td_radio,
                'anoreksia' => $anoreksia, 
                'kemampuan_mandi' => $kemampuan_mandi, 
                'kemampuan_berpakaian' => $kemampuan_berpakaian, 
                'kemampuan_berhias_diri' => $kemampuan_berhias_diri, 
                'kemampuan_ke_toilet' => $kemampuan_ke_toilet,
                'kemampuan_makan' => $kemampuan_makan, 
                'minat_perawatan_diri' => $minat_perawatan_diri, 
                'riwayat_perawatan_sebelumnya' => $riwayat_perawatan_sebelumnya, 
                'riwayat_penyakit_keluarga' => $riwayat_penyakit_keluarga, 
                'detail_riwayat_penyakit_keluarga' => $sebutkan_riwayat_penyakit_keluarga,
                'riwayat_alergi' => $riwayat_alergi, 
                'detail_riwayat_alergi' => $sebutkan_riwayat_alergi, 
                'reaksi_riwayat_alergi' => $reaksi_riwayat_alergi, 
                'status_psikologi_sosial' => $status_psikologi_sosial, 
                'sistem_pendukung_yang_ada' => $sistem_pendukung,
                'detail_sistem_pendukung' => $sebutkan_sistem_pendukung, 
                'ekonomi' => $ekonomi, 
                'spiritual' => $spiritual,
    		]);

    	}

    	$list_diagnosis = "";

    	if($batuk == "1"){
    		$list_diagnosis .= "1,";
    	}

    	if($rr30 == "1"){
    		$list_diagnosis .= "2,";
    	}

    	if($sputum == "1"){
    		$list_diagnosis .= "3,";
    	}

    	if($sesak == "1"){
    		$list_diagnosis .= "4,";
    	}

    	if($wheezing == "1"){
    		$list_diagnosis .= "5,";
    	}

    	if($ronchi_kering == "1"){
    		$list_diagnosis .= "6,";
    	}

    	if($gelisah == "1"){
    		$list_diagnosis .= "18,";
    	}

    	if($tegang == "1"){
    		$list_diagnosis .= "17,";
    	}

    	if($bingung == "1"){
    		$list_diagnosis .= "14,";
    	}

    	if($khawatir == "1"){
    		$list_diagnosis .= "13,";
    	}

    	if($rr_radio == "1"){
    		$list_diagnosis .= "20,";
    	}

    	if($nadi_radio == "1"){
    		$list_diagnosis .= "15,";
    	}

    	if($td_radio == "1"){
    		$list_diagnosis .= "16,";
    	}

    	if($anoreksia == "1"){
    		$list_diagnosis .= "19,";
    	}

    	if($kemampuan_mandi == "1" || $kemampuan_mandi == "2"){
    		$list_diagnosis .= "7,";
    	}

    	if($kemampuan_berpakaian == "1" || $kemampuan_berpakaian == "2"){
    		$list_diagnosis .= "8,";
    	}

    	if($kemampuan_berhias_diri == "1" || $kemampuan_berhias_diri == "2"){
    		$list_diagnosis .= "9,";
    	}

    	if($kemampuan_ke_toilet == "1" || $kemampuan_ke_toilet == "2"){
    		$list_diagnosis .= "10,";
    	}

    	if($kemampuan_makan == "1" || $kemampuan_makan == "2"){
    		$list_diagnosis .= "11,";
    	}

    	if($minat_perawatan_diri == "1" || $minat_perawatan_diri == "2"){
    		$list_diagnosis .= "12,";
    	}

    	if($list_diagnosis != ""){
    		$list_diagnosis = substr($list_diagnosis, 0, strlen($list_diagnosis)-1);
    	}

    	$diagnosis_bersihan_jalan = 2;
    	$diagnosis_ansietas = 2;
    	$diagnosis_perawatan_diri = 2;

    	if($batuk == "1" || $rr30 == "1" || $sputum == "1" || $sesak == "1" || $wheezing == "1" || $ronchi_kering == "1"){
    		$diagnosis_bersihan_jalan = 1;
    	}

    	if($khawatir == "1" || $bingung == "1" || $nadi_radio == "1" || $td_radio == "1" || $tegang == "1" || $gelisah == "1" || $anoreksia == "1" || $rr_radio == "1"){
    		$diagnosis_ansietas = 1;
    	}

    	if($kemampuan_mandi == "1" || $kemampuan_mandi == "2" || $kemampuan_berpakaian == "1" || $kemampuan_berpakaian == "2" || $kemampuan_berhias_diri == "1" || $kemampuan_berhias_diri == "2" || $kemampuan_ke_toilet == "1" || $kemampuan_ke_toilet == "2" || $kemampuan_makan == "1" || $kemampuan_makan == "2" || $minat_perawatan_diri == "1" || $minat_perawatan_diri == "2"){
    		$diagnosis_perawatan_diri = 1;
    	}

    	DB::table('t_pengkajian')->where('id', $get_id_pengkajian)->update([
			'list_diagnosis' => $list_diagnosis,
			'diagnosis_bersihan_jalan' => $diagnosis_bersihan_jalan,
			'diagnosis_ansietas' => $diagnosis_ansietas,
			'diagnosis_perawatan_diri' => $diagnosis_perawatan_diri
		]);

    	return response()->json(['msg'=>$msg, 'code'=>'1', 'id_pengkajian'=>$get_id_pengkajian]);
    }

    public function get_data_step_one(Request $request)
    {

    	$msg = "";

    	$id_pengkajian = $request->id_pengkajian;

    	$t_pengkajian = DB::table("t_pengkajian")->where("id",$id_pengkajian)->get()->first();

    	$data_intervensi = array();
        $data_t_intervensi = array();

    	if($t_pengkajian){

    		$list_diagnosis = $t_pengkajian->list_diagnosis;

	    	$arr_diagnosis = array();
	    	if($list_diagnosis != ""){
	    		$data_diagnosis = explode(",",$list_diagnosis);
	    		foreach($data_diagnosis as $dd){
	    			array_push($arr_diagnosis, $dd);
	    		}
	    	}

	    	if(!empty($arr_diagnosis)){
	    		sort($arr_diagnosis);
	    		$data_intervensi = DB::table("map_keluhan_intervensi")->select('map_keluhan_intervensi.id_keluhan', 'm_keluhan.nama_keluhan', 'm_keluhan.id_diagnosis', 'm_diagnosis.nama_diagnosis', 'map_keluhan_intervensi.id_intervensi', 'm_intervensi.id_jenis_intervensi', 'm_jenis_intervensi.nama_jenis_intervensi', 'm_intervensi.penjelasan')
		            ->leftJoin('m_keluhan', 'map_keluhan_intervensi.id_keluhan', '=', 'm_keluhan.id')
		            ->leftJoin('m_diagnosis', 'm_keluhan.id_diagnosis', '=', 'm_diagnosis.id')
		            ->leftJoin('m_intervensi', 'map_keluhan_intervensi.id_intervensi', '=', 'm_intervensi.id')
		            ->leftJoin('m_jenis_intervensi', 'm_intervensi.id_jenis_intervensi', '=', 'm_jenis_intervensi.id')
		            ->whereIn('map_keluhan_intervensi.id_keluhan', $arr_diagnosis)
		            ->orderBy('map_keluhan_intervensi.id_keluhan', 'ASC')
		            ->orderBy('m_keluhan.id_diagnosis', 'ASC')
		            ->orderBy('m_intervensi.id_jenis_intervensi', 'ASC')
		            ->orderBy('map_keluhan_intervensi.id_intervensi', 'ASC')
		            ->get();
	    	}

    	}



    	return response()->json(['msg'=>$msg, 'code'=>'1', 'data_intervensi'=>$data_intervensi]);

    }

    public function insert_step_three(Request $request)
    {
    	$msg = "";
    	$id_pengkajian = $request->id_pengkajian;
    	$id_intervensi = $request->id_intervensi;
    	$batuk = $request->batuk;
    	$rr30 = $request->rr30;
    	$sputum = $request->sputum;
    	$sesak = $request->sesak;
    	$wheezing = $request->wheezing;
    	$ronchi_kering = $request->ronchi_kering;
    	$gelisah = $request->gelisah;
    	$tegang = $request->tegang;
    	$bingung = $request->bingung;
    	$khawatir = $request->khawatir;
    	$rr_radio = $request->rr_radio;
    	$nadi_radio = $request->nadi_radio;
    	$td_radio = $request->td_radio;
    	$anoreksia = $request->anoreksia;
    	$kemampuan_mandi = $request->kemampuan_mandi;
    	$kemampuan_berpakaian = $request->kemampuan_berpakaian;
    	$kemampuan_berhias_diri = $request->kemampuan_berhias_diri;
    	$kemampuan_ke_toilet = $request->kemampuan_ke_toilet;
    	$kemampuan_makan = $request->kemampuan_makan;
    	$minat_perawatan_diri = $request->minat_perawatan_diri;

    	$t_pengkajian = DB::table("t_pengkajian")->where("id",$id_pengkajian)->get()->first();

    	$get_id_intervensi = $id_intervensi;

    	if($id_intervensi == ""){

    		$get_id_intervensi = DB::table('t_intervensi')->insertGetId(
                    [
                    	'id_pengkajian' => $id_pengkajian, 
                    	'nama_pasien' => $t_pengkajian->nama_pasien, 
	                    'no_rm' => $t_pengkajian->no_rm, 
	                    'usia' => $t_pengkajian->usia, 
	                    'tanggal_pengkajian' => $t_pengkajian->tanggal_pengkajian, 
	                    'sumber_data' => $t_pengkajian->sumber_data,
	                    'riwayat_keluhan_pasien' => $t_pengkajian->riwayat_keluhan_pasien, 
	                    'td_sistole' => $t_pengkajian->td_sistole, 
	                    'td_diastole' => $t_pengkajian->td_diastole, 
	                    'suhu' => $t_pengkajian->suhu, 
	                    'spo2' => $t_pengkajian->spo2,
	                    'nadi' => $t_pengkajian->nadi, 
	                    'rr' => $t_pengkajian->rr, 
	                    'gcs' => $t_pengkajian->gcs, 
	                    'batuk' => $batuk, 
	                    'rr30' => $rr30, 
	                    'sputum' => $sputum,
	                    'sesak' => $sesak, 
	                    'wheezing' => $wheezing, 
	                    'ronchi_kering' => $ronchi_kering, 
	                    'gelisah' => $gelisah, 
	                    'tegang' => $tegang,
	                    'merasa_bingung' => $bingung, 
	                    'merasa_khawatir' => $khawatir, 
	                    'rr_radio' => $rr_radio, 
	                    'nadi_radio' => $nadi_radio, 
	                    'td_radio' => $td_radio,
	                    'anoreksia' => $anoreksia, 
	                    'kemampuan_mandi' => $kemampuan_mandi, 
	                    'kemampuan_berpakaian' => $kemampuan_berpakaian, 
	                    'kemampuan_berhias_diri' => $kemampuan_berhias_diri, 
	                    'kemampuan_ke_toilet' => $kemampuan_ke_toilet,
	                    'kemampuan_makan' => $kemampuan_makan, 
	                    'minat_perawatan_diri' => $t_pengkajian->minat_perawatan_diri, 
	                    'riwayat_perawatan_sebelumnya' => $t_pengkajian->riwayat_perawatan_sebelumnya, 
	                    'riwayat_penyakit_keluarga' => $t_pengkajian->riwayat_penyakit_keluarga, 
	                    'detail_riwayat_penyakit_keluarga' => $t_pengkajian->detail_riwayat_penyakit_keluarga,
	                    'riwayat_alergi' => $t_pengkajian->riwayat_alergi, 
	                    'detail_riwayat_alergi' => $t_pengkajian->detail_riwayat_alergi, 
	                    'reaksi_riwayat_alergi' => $t_pengkajian->reaksi_riwayat_alergi, 
	                    'status_psikologi_sosial' => $t_pengkajian->status_psikologi_sosial, 
	                    'sistem_pendukung_yang_ada' => $t_pengkajian->sistem_pendukung_yang_ada,
	                    'detail_sistem_pendukung' => $t_pengkajian->detail_sistem_pendukung, 
	                    'ekonomi' => $t_pengkajian->ekonomi, 
	                    'spiritual' => $t_pengkajian->spiritual,
	                	'created_by' => "1"
	                ]
                );

    	}else{

    		DB::table('t_intervensi')->where('id', $id_intervensi)->update([
                'batuk' => $batuk, 
                'rr30' => $rr30, 
                'sputum' => $sputum,
                'sesak' => $sesak, 
                'wheezing' => $wheezing, 
                'ronchi_kering' => $ronchi_kering, 
                'gelisah' => $gelisah, 
                'tegang' => $tegang,
                'merasa_bingung' => $bingung, 
                'merasa_khawatir' => $khawatir, 
                'rr_radio' => $rr_radio, 
                'nadi_radio' => $nadi_radio, 
                'td_radio' => $td_radio,
                'anoreksia' => $anoreksia, 
                'kemampuan_mandi' => $kemampuan_mandi, 
                'kemampuan_berpakaian' => $kemampuan_berpakaian, 
                'kemampuan_berhias_diri' => $kemampuan_berhias_diri, 
                'kemampuan_ke_toilet' => $kemampuan_ke_toilet,
                'kemampuan_makan' => $kemampuan_makan, 
                'minat_perawatan_diri' => $minat_perawatan_diri, 
    		]);

    	}

    	$list_diagnosis = "";

    	if($batuk == "1"){
    		$list_diagnosis .= "1,";
    	}

    	if($rr30 == "1"){
    		$list_diagnosis .= "2,";
    	}

    	if($sputum == "1"){
    		$list_diagnosis .= "3,";
    	}

    	if($sesak == "1"){
    		$list_diagnosis .= "4,";
    	}

    	if($wheezing == "1"){
    		$list_diagnosis .= "5,";
    	}

    	if($ronchi_kering == "1"){
    		$list_diagnosis .= "6,";
    	}

    	if($gelisah == "1"){
    		$list_diagnosis .= "18,";
    	}

    	if($tegang == "1"){
    		$list_diagnosis .= "17,";
    	}

    	if($bingung == "1"){
    		$list_diagnosis .= "14,";
    	}

    	if($khawatir == "1"){
    		$list_diagnosis .= "13,";
    	}

    	if($rr_radio == "1"){
    		$list_diagnosis .= "20,";
    	}

    	if($nadi_radio == "1"){
    		$list_diagnosis .= "15,";
    	}

    	if($td_radio == "1"){
    		$list_diagnosis .= "16,";
    	}

    	if($anoreksia == "1"){
    		$list_diagnosis .= "19,";
    	}

    	if($kemampuan_mandi == "1" || $kemampuan_mandi == "2"){
    		$list_diagnosis .= "7,";
    	}

    	if($kemampuan_berpakaian == "1" || $kemampuan_berpakaian == "2"){
    		$list_diagnosis .= "8,";
    	}

    	if($kemampuan_berhias_diri == "1" || $kemampuan_berhias_diri == "2"){
    		$list_diagnosis .= "9,";
    	}

    	if($kemampuan_ke_toilet == "1" || $kemampuan_ke_toilet == "2"){
    		$list_diagnosis .= "10,";
    	}

    	if($kemampuan_makan == "1" || $kemampuan_makan == "2"){
    		$list_diagnosis .= "11,";
    	}

    	if($minat_perawatan_diri == "1" || $minat_perawatan_diri == "2"){
    		$list_diagnosis .= "12,";
    	}

    	if($list_diagnosis != ""){
    		$list_diagnosis = substr($list_diagnosis, 0, strlen($list_diagnosis)-1);
    	}

    	$diagnosis_bersihan_jalan = $t_pengkajian->diagnosis_bersihan_jalan;
    	$diagnosis_ansietas = $t_pengkajian->diagnosis_ansietas;
    	$diagnosis_perawatan_diri = $t_pengkajian->diagnosis_perawatan_diri;

    	if($diagnosis_bersihan_jalan != "2"){
            if($batuk == "2" && $rr30 == "2" && $sputum && "2" && $sesak == "2" && $wheezing == "2" && $ronchi_kering == "2"){
                $diagnosis_bersihan_jalan = 0;//teratasi
            }
        }

        if($diagnosis_ansietas != "2"){
            if($khawatir == "2" && $bingung == "2" && ($nadi_radio == "2" || $nadi_radio == "3") && ($td_radio == "2" || $td_radio == "3") && $tegang == "2" && $gelisah == "2" && $anoreksia == "2" && ($rr_radio == "2" || $rr_radio == "3")){
                $diagnosis_ansietas = 0;//teratasi
            }
        }

        if($diagnosis_perawatan_diri != "2"){
            if($kemampuan_mandi == "3" && $kemampuan_berpakaian == "3" && $kemampuan_berhias_diri == "3" && $kemampuan_ke_toilet == "3" && $kemampuan_makan == "3" && $minat_perawatan_diri == "3"){
                $diagnosis_perawatan_diri = 0;//teratasi
            }
        }

    	DB::table('t_intervensi')->where('id', $get_id_intervensi)->update([
			'list_diagnosis' => $list_diagnosis,
			'diagnosis_bersihan_jalan' => $diagnosis_bersihan_jalan,
			'diagnosis_ansietas' => $diagnosis_ansietas,
			'diagnosis_perawatan_diri' => $diagnosis_perawatan_diri
		]);

    	return response()->json(['msg'=>$msg, 'code'=>'1', 'id_intervensi'=>$get_id_intervensi]);
    }

    public function get_data_step_three(Request $request)
    {

    	$msg = "";

        $id_pengkajian = $request->id_pengkajian;
        // $id_intervensi = $request->id_intervensi;

        $t_pengkajian = DB::table("t_pengkajian")->where("id",$id_pengkajian)->get()->first();

        $data_t_intervensi = array();

        if($t_pengkajian){

            $data_t_intervensi = $t_pengkajian;

            $t_intervensi = DB::table("t_intervensi")->where("id_pengkajian",$id_pengkajian)->get();
            if($t_intervensi){

                $data_t_intervensi = $t_intervensi->first();

            }

        }

    	return response()->json(['msg'=>$msg, 'code'=>'1', 'data_intervensi'=>$data_t_intervensi]);

    }

    public function print_pdf_step_three(Request $request){

    	$id_pengkajian = $request->id_pengkajian;

    	$t_pengkajian = DB::table("t_pengkajian")->where("id",$id_pengkajian)->get()->first();

    	$data_intervensi = array();
        $data_t_intervensi = array();

    	if($t_pengkajian){

    		$list_diagnosis = $t_pengkajian->list_diagnosis;

	    	$arr_diagnosis = array();
	    	if($list_diagnosis != ""){
	    		$data_diagnosis = explode(",",$list_diagnosis);
	    		foreach($data_diagnosis as $dd){
	    			array_push($arr_diagnosis, $dd);
	    		}
	    	}

	    	if(!empty($arr_diagnosis)){
	    		sort($arr_diagnosis);
	    		$data_intervensi = DB::table("map_keluhan_intervensi")->select('map_keluhan_intervensi.id_keluhan', 'm_keluhan.nama_keluhan', 'm_keluhan.id_diagnosis', 'm_diagnosis.nama_diagnosis', 'map_keluhan_intervensi.id_intervensi', 'm_intervensi.id_jenis_intervensi', 'm_jenis_intervensi.nama_jenis_intervensi', 'm_intervensi.penjelasan')
		            ->leftJoin('m_keluhan', 'map_keluhan_intervensi.id_keluhan', '=', 'm_keluhan.id')
		            ->leftJoin('m_diagnosis', 'm_keluhan.id_diagnosis', '=', 'm_diagnosis.id')
		            ->leftJoin('m_intervensi', 'map_keluhan_intervensi.id_intervensi', '=', 'm_intervensi.id')
		            ->leftJoin('m_jenis_intervensi', 'm_intervensi.id_jenis_intervensi', '=', 'm_jenis_intervensi.id')
		            ->whereIn('map_keluhan_intervensi.id_keluhan', $arr_diagnosis)
		            ->orderBy('map_keluhan_intervensi.id_keluhan', 'ASC')
		            ->orderBy('m_keluhan.id_diagnosis', 'ASC')
		            ->orderBy('m_intervensi.id_jenis_intervensi', 'ASC')
		            ->orderBy('map_keluhan_intervensi.id_intervensi', 'ASC')
		            ->get();
	    	}

            $data_t_intervensi = $t_pengkajian;

            $t_intervensi = DB::table("t_intervensi")->where("id_pengkajian",$id_pengkajian)->get();
            if($t_intervensi){

                $data_t_intervensi = $t_intervensi->first();

            }

    	}

        $data_evaluasi_s = "";
        $data_evaluasi_o = "";
        $data_evaluasi_a = "";
        $data_evaluasi_p = "Intervensi dihentikan pasien di pulangkan";

        $tam_khawatir = $data_t_intervensi->merasa_khawatir;
        $tam_bingung = $data_t_intervensi->merasa_bingung;
        $tam_anoreksia = $data_t_intervensi->anoreksia;

        if($tam_khawatir == "1"){
            $data_evaluasi_s .= "Merasa khawatir ada, ";
        }

        if($tam_bingung == "1"){
            $data_evaluasi_s .= "Merasa bingung ada, ";
        }

        if($tam_anoreksia == "1"){
            $data_evaluasi_s .= "Anoreksia ada, ";
        }

        if($data_evaluasi_s != ""){
            $data_evaluasi_s = substr($data_evaluasi_s, 0, strlen($data_evaluasi_s)-2);
        }

        $tam_batuk = $data_t_intervensi->batuk;
        $tam_rr30 = $data_t_intervensi->rr30;
        $tam_sputum = $data_t_intervensi->sputum;
        $tam_sesak = $data_t_intervensi->sesak;
        $tam_wheezing = $data_t_intervensi->wheezing;
        $tam_ronchi_kering = $data_t_intervensi->ronchi_kering;
        $tam_gelisah = $data_t_intervensi->gelisah;
        $tam_tegang = $data_t_intervensi->tegang;
        $tam_rr_radio = $data_t_intervensi->rr_radio;
        $tam_nadi_radio = $data_t_intervensi->nadi_radio;
        $tam_td_radio = $data_t_intervensi->td_radio;
        $tam_kemampuan_mandi = $data_t_intervensi->kemampuan_mandi;
        $tam_kemampuan_berpakaian = $data_t_intervensi->kemampuan_berpakaian;
        $tam_kemampuan_berhias_diri = $data_t_intervensi->kemampuan_berhias_diri;
        $tam_kemampuan_ke_toilet = $data_t_intervensi->kemampuan_ke_toilet;
        $tam_kemampuan_makan = $data_t_intervensi->kemampuan_makan;
        $tam_minat_perawatan_diri = $data_t_intervensi->minat_perawatan_diri;

        if($tam_batuk == "1"){
            $data_evaluasi_o .= "Batuk ada, ";
        }

        if($tam_rr30 == "1"){
            $data_evaluasi_o .= "RR 30x/menit ada, ";
        }

        if($tam_sputum == "1"){
            $data_evaluasi_o .= "Sputum ada, ";
        }

        if($tam_sesak == "1"){
            $data_evaluasi_o .= "Sesak ada, ";
        }

        if($tam_wheezing == "1"){
            $data_evaluasi_o .= "Wheezing ada, ";
        }

        if($tam_ronchi_kering == "1"){
            $data_evaluasi_o .= "Ronchi kering ada, ";
        }

        if($tam_gelisah == "1"){
            $data_evaluasi_o .= "Gelisah ada, ";
        }

        if($tam_tegang == "1"){
            $data_evaluasi_o .= "Tegang ada, ";
        }

        if($tam_rr_radio == "1"){
            $data_evaluasi_o .= "RR meningkat, ";
        }

        if($tam_nadi_radio == "1"){
            $data_evaluasi_o .= "HR meningkat, ";
        }

        if($tam_td_radio == "1"){
            $data_evaluasi_o .= "TD meningkat, ";
        }

        if($tam_kemampuan_mandi == "1" || $tam_kemampuan_mandi == "2"){
            $tkm = "rendah";
            if($tam_kemampuan_mandi == "2"){
                $tkm = "sedang";
            }
            $data_evaluasi_o .= "Kemampuan mandi ".$tkm.", ";
        }

        if($tam_kemampuan_berpakaian == "1" || $tam_kemampuan_berpakaian == "2"){
            $tkb = "rendah";
            if($tam_kemampuan_berpakaian == "2"){
                $tkb = "sedang";
            }
            $data_evaluasi_o .= "Kemampuan berpakaian ".$tkb.", ";
        }

        if($tam_kemampuan_berhias_diri == "1" || $tam_kemampuan_berhias_diri == "2"){
            $tkbd = "rendah";
            if($tam_kemampuan_berhias_diri == "2"){
                $tkbd = "sedang";
            }
            $data_evaluasi_o .= "Kemampuan berhias diri ".$tkbd.", ";
        }

        if($tam_kemampuan_ke_toilet == "1" || $tam_kemampuan_ke_toilet == "2"){
            $tkkt = "rendah";
            if($tam_kemampuan_ke_toilet == "2"){
                $tkkt = "sedang";
            }
            $data_evaluasi_o .= "Kemampuan ke toilet ".$tkkt.", ";
        }

        if($tam_kemampuan_makan == "1" || $tam_kemampuan_makan == "2"){
            $tkm = "rendah";
            if($tam_kemampuan_makan == "2"){
                $tkm = "sedang";
            }
            $data_evaluasi_o .= "Kemampuan makan ".$tkm.", ";
        }

        if($tam_minat_perawatan_diri == "1" || $tam_minat_perawatan_diri == "2"){
            $tmpd = "rendah";
            if($tam_minat_perawatan_diri == "2"){
                $tmpd = "sedang";
            }
            $data_evaluasi_o .= "Minat perawatan diri ".$tmpd.", ";
        }

        if($data_evaluasi_o != ""){
            $data_evaluasi_o = substr($data_evaluasi_o, 0, strlen($data_evaluasi_o)-2);
        }

        $tam_diagnosis_bersihan_jalan = $data_t_intervensi->diagnosis_bersihan_jalan;
        $tam_diagnosis_ansietas = $data_t_intervensi->diagnosis_ansietas;
        $tam_diagnosis_perawatan_diri = $data_t_intervensi->diagnosis_perawatan_diri;

        if($tam_diagnosis_bersihan_jalan == "0"){
            $data_evaluasi_a .= "Diagnosis: Bersihan Jalan Nafas Tidak Efektif Teratasi, ";
        }else if($tam_diagnosis_bersihan_jalan == "1"){
            $data_evaluasi_a .= "Diagnosis: Bersihan Jalan Nafas Tidak Efektif Teratasi Sebagian, ";
        }

        if($tam_diagnosis_ansietas == "0"){
            $data_evaluasi_a .= "Masalah : Ansietas Teratasi, ";
        }else if($tam_diagnosis_ansietas == "1"){
            $data_evaluasi_a .= "Masalah : Ansietas Teratasi Sebagian, ";
        }

        if($tam_diagnosis_perawatan_diri == "0"){
            $data_evaluasi_a .= "Masalah: Defisit Perawatan Diri Teratasi, ";
        }else if($tam_diagnosis_perawatan_diri == "1"){
            $data_evaluasi_a .= "Masalah: Defisit Perawatan Diri Teratasi Sebagian, ";
        }

    	$view = "backend.pages.pdf.implementasi_evaluasi";

    	$data_all = array(

    		'data_intervensi'=>$data_intervensi,
            'data_t_intervensi'=>$data_t_intervensi,
            'data_evaluasi_s'=>$data_evaluasi_s,
            'data_evaluasi_o'=>$data_evaluasi_o,
            'data_evaluasi_a'=>$data_evaluasi_a,
            'data_evaluasi_p'=>$data_evaluasi_p,

    	);

    	//return view($view, $data_all);
    	
    	// print_r($data_all);
    	// return false;

        $path = "implementasi_dan_evaluasi_".time().".pdf";
        // $fullname = $path.'.pdf';
        
        $pdf = PDF::loadView($view, $data_all);

    	// $pdf = PDF::loadview($view,[]);
    	$pdf->setOptions(['isPhpEnabled' =>  true,'isRemoteEnabled' => true,'defaultFont' => 'arialce']);
     	$pdf->setPaper('A4', 'portrait');

     	return $pdf->download($path);
     	// return $pdf->stream();

    }

    public function insert_step_four(Request $request)
    {
    	$msg = "";
    	$id_pengkajian = $request->id_pengkajian;
    	$id_discharge_planning = $request->id_discharge_planning;
    	$kesesuaian_perilaku = $request->kesesuaian_perilaku;
    	$persepsi_terhadap_masalah = $request->persepsi_terhadap_masalah;
    	$ketepatan_pemeriksaan = $request->ketepatan_pemeriksaan;
    	$perubahan_perilaku = $request->perubahan_perilaku;
    	$masalah_yang_dihadapi = $request->masalah_yang_dihadapi;
    	// $tanggal_dp_1 = $request->tanggal_dp_1;
    	// $waktu_dp_1 = $request->waktu_dp_1;
    	// $radio_dp_1 = $request->radio_dp_1;
    	// $tidak_dilakukan_1 = $request->tidak_dilakukan_1;
    	// $tanggal_dp_2 = $request->tanggal_dp_2;
    	// $waktu_dp_2 = $request->waktu_dp_2;
    	// $radio_dp_2 = $request->radio_dp_2;
    	// $tidak_dilakukan_2 = $request->tidak_dilakukan_2;
    	$tam_push_all_first = $request->tam_push_all_first;
    	$tam_push_all_second = $request->tam_push_all_second;
    	$tam_push_all_third = $request->tam_push_all_third;
    	$tam_push_all_fourth = $request->tam_push_all_fourth;
        $total_skor = $request->total_skor;
        $pasien_keluarga = $request->pasien_keluarga;
        $discharge_planner = $request->discharge_planner;

    	// $t_pengkajian = DB::table("t_pengkajian")->where("id",$id_pengkajian)->get()->first();

    	$get_id_discharge_planning = $id_discharge_planning;

    	if($id_discharge_planning == ""){

    		$get_id_discharge_planning = DB::table('t_discharge_planning')->insertGetId(
                    [
                    	'id_pengkajian' => $id_pengkajian, 
                    	'kesesuaian_perilaku' => $kesesuaian_perilaku, 
	                    'persepsi_terhadap_masalah' => $persepsi_terhadap_masalah, 
	                    'ketepatan_pemeriksaan' => $ketepatan_pemeriksaan, 
	                    'perubahan_perilaku' => $perubahan_perilaku, 
	                    'masalah_yang_dihadapi' => $masalah_yang_dihadapi,
	                    'total_skor' => $total_skor,
                        'pasien' => $pasien_keluarga,
                        'perawat' => $discharge_planner
	                ]
                );

    	}else{

    		DB::table('t_discharge_planning')->where('id', $get_id_discharge_planning)->update([
                'kesesuaian_perilaku' => $kesesuaian_perilaku, 
	            'persepsi_terhadap_masalah' => $persepsi_terhadap_masalah, 
	            'ketepatan_pemeriksaan' => $ketepatan_pemeriksaan, 
	            'perubahan_perilaku' => $perubahan_perilaku, 
	            'masalah_yang_dihadapi' => $masalah_yang_dihadapi,
                'total_skor' => $total_skor,
                'pasien' => $pasien_keluarga,
                'perawat' => $discharge_planner
    		]);

    	}

    	// $detail_discharge_planning = DB::table("detail_discharge_planning")->where("id_pengkajian",$id_pengkajian)->where("id_discharge_planning",$get_id_discharge_planning)->get();

    	// if($detail_discharge_planning){

    	// }else{

    		$exp_tam_push_all_first = explode("-#-", $tam_push_all_first);
    		$arr_insert = [];
    		for($a=0;$a<count($exp_tam_push_all_first);$a++){
    			$id_detail = $a+1;
    			$tam_sem_push_all_first = explode("##", $exp_tam_push_all_first[$a]);
    			$data_push = [];
    			$data_push['id_pengkajian'] = $id_pengkajian;
    			$data_push['id_discharge_planning'] = $get_id_discharge_planning;
    			$data_push['id_detail'] = $id_detail;
    			$data_push['tanggal'] = ($tam_sem_push_all_first[0] == "empty") ? '0000-00-00' : $tam_sem_push_all_first[0];
    			$data_push['jam'] = ($tam_sem_push_all_first[1] == "empty") ? '00:00:00' : $tam_sem_push_all_first[1].":00";
    			$data_push['evaluasi'] = $tam_sem_push_all_first[2];
    			$data_push['alasan'] = ($tam_sem_push_all_first[3] == "empty") ? '' : $tam_sem_push_all_first[3];
    			array_push($arr_insert, $data_push);

    		}

    		$exp_tam_push_all_second = explode("-#-", $tam_push_all_second);
    		for($a=0;$a<count($exp_tam_push_all_second);$a++){
    			$id_detail = $a+11;
    			$tam_sem_push_all_second = explode("##", $exp_tam_push_all_second[$a]);
    			$data_push = [];
    			$data_push['id_pengkajian'] = $id_pengkajian;
    			$data_push['id_discharge_planning'] = $get_id_discharge_planning;
    			$data_push['id_detail'] = $id_detail;
    			$data_push['tanggal'] = ($tam_sem_push_all_second[0] == "empty") ? '0000-00-00' : $tam_sem_push_all_second[0];
    			$data_push['jam'] = ($tam_sem_push_all_second[1] == "empty") ? '00:00:00' : $tam_sem_push_all_second[1].":00";
    			$data_push['evaluasi'] = $tam_sem_push_all_second[2];
    			$data_push['alasan'] = ($tam_sem_push_all_second[3] == "empty") ? '' : $tam_sem_push_all_second[3];
    			array_push($arr_insert, $data_push);

    		}

    		$exp_tam_push_all_third = explode("-#-", $tam_push_all_third);
    		for($a=0;$a<count($exp_tam_push_all_third);$a++){
    			$id_detail = $a+21;
    			$tam_sem_push_all_third = explode("##", $exp_tam_push_all_third[$a]);
    			$data_push = [];
    			$data_push['id_pengkajian'] = $id_pengkajian;
    			$data_push['id_discharge_planning'] = $get_id_discharge_planning;
    			$data_push['id_detail'] = $id_detail;
    			$data_push['tanggal'] = ($tam_sem_push_all_third[0] == "empty") ? '0000-00-00' : $tam_sem_push_all_third[0];
    			$data_push['jam'] = ($tam_sem_push_all_third[1] == "empty") ? '00:00:00' : $tam_sem_push_all_third[1].":00";
    			$data_push['evaluasi'] = $tam_sem_push_all_third[2];
    			$data_push['alasan'] = ($tam_sem_push_all_third[3] == "empty") ? '' : $tam_sem_push_all_third[3];
    			array_push($arr_insert, $data_push);

    		}

    		DB::table('detail_discharge_planning')->insert($arr_insert);

    		$exp_tam_push_all_fourth = explode("-#-", $tam_push_all_fourth);
    		$arr_insert_cp = [];
    		for($a=0;$a<count($exp_tam_push_all_fourth);$a++){
    			$id_detail = $a+1;
    			$tam_sem_push_all_fourth = explode("##", $exp_tam_push_all_fourth[$a]);
    			$data_push = [];
    			$data_push['id_pengkajian'] = $id_pengkajian;
    			$data_push['id_discharge_planning'] = $get_id_discharge_planning;
    			$data_push['id_detail'] = $id_detail;
    			$data_push['tanggal'] = ($tam_sem_push_all_fourth[0] == "empty") ? '0000-00-00' : $tam_sem_push_all_fourth[0];
    			$data_push['jam'] = ($tam_sem_push_all_fourth[1] == "empty") ? '00:00:00' : $tam_sem_push_all_fourth[1].":00";
    			$data_push['alasan'] = ($tam_sem_push_all_fourth[2] == "empty") ? '' : $tam_sem_push_all_fourth[2];
    			$data_push['keterangan'] = ($tam_sem_push_all_fourth[3] == "empty") ? '' : $tam_sem_push_all_fourth[3];
    			array_push($arr_insert_cp, $data_push);

    		}

    		DB::table('detail_discharge_planning_cp')->insert($arr_insert_cp);

    	// }

    	return response()->json(['msg'=>$msg, 'code'=>'1', 'id_discharge_planning'=>$get_id_discharge_planning]);
    	//, 'tam_push_all_first'=>$tam_push_all_first, 'arr_insert'=>$arr_insert
    }

    public function add(Request $request)
    {
    	$msg = "insert";
    	$choose = $request->choose;
    	$nama_pasien = $request->nama_pasien;
    	$no_rm = $request->no_rm;
    	$usia = $request->usia;
    	$tanggal_pengkajian = $request->tanggal_pengkajian;
    	$sumber_data = $request->sumber_data;
    	$riwayat_keluhan_pasien = $request->riwayat_keluhan_pasien;
    	$td_sistole = $request->td_sistole;
    	$td_diastole = $request->td_diastole;
    	$suhu = $request->suhu;
    	$spo2 = $request->spo2;
    	$nadi = $request->nadi;
    	$rr = $request->rr;
    	$gcs = $request->gcs;

    	$t_pengkajian = DB::table('t_pengkajian')->insert(
                    [
                    	'nama_pasien' => $nama_pasien, 
	                    'no_rm' => $no_rm, 
	                    'usia' => $usia,
	                    'tanggal_pengkajian' => $tanggal_pengkajian, 
	                    'sumber_data' => $sumber_data,
	                    'riwayat_keluhan_pasien' => $riwayat_keluhan_pasien, 
	                    'td_sistole' => $td_sistole, 
	                    'td_diastole' => $td_diastole, 
	                    'suhu' => $suhu, 
	                    'spo2' => $spo2,
	                    'nadi' => $nadi, 
	                    'rr' => $rr, 
	                    'gcs' => $gcs
	                ]);

    	return response()->json(['msg'=>$msg, 'code'=>'1', "choose"=>$choose, "d"=>true]);

    }

    public function hasil(Request $request)
    {
    	$data_id_pengkajian = $request->data_id_pengkajian;
    	$msg = "hasilnya ini ".$data_id_pengkajian;
    	return response()->json(['msg'=>$msg, 'code'=>'22']);

    }

    public function pass_hash(){

        $pass = 'admin123';
        $hash_pass = Hash::make($pass);
        print_r($hash_pass);

    }

}
