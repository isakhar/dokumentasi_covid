@extends('backend.layouts.master')
@section('title','Input Data')

@push('css')
  <!-- custom css here -->
  <style type="text/css">
    
    /*.wizard > .content {
      background: #ffffff;
      display: block;
      margin: 0.5em;
      min-height: 24em;
      overflow: auto;*//*hidden*/
      /*position: relative;
      width: auto;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      border: 1px solid #f3f3f3;
    }*/

    .wizard.vertical > .steps {
      display: inline;
      float: left;
      width: 20%;
    }

    .wizard.vertical > .content {
      display: inline;
      float: left;
      margin: 0;
      width: 80%;
    }

    .wizard.vertical > .actions {
      display: inline;
      float: right;
      margin: 0;
      width: 100%;
    }

    .wizard > .steps .number {
      font-size: 0.875rem;
      display: none;
    }

    .wizard > .content > .body {
      float: left;
      position: inherit;/*absolute*/
      width: 100%;/*95%*/
      height: 95%;
      padding: 2.5%;
    }

    td.p5 {
      padding: 5px;
    }

    .mb0 {
      margin-bottom: 0;
    }

    .m0 {
      margin: 0;
    }

    .form-check .form-check-label.fs-cus {
      font-size: 0.7rem;
    } 

    .wizard > .content > .body input.border-none {
      border: none;
    }

    .textarea-cus {
      border: none; 
      width: 100%; 
      padding: 5px;
    }

    .alert {
      font-size: 0.875rem;
      line-height: 1.25rem;
    }

  </style>
@endpush

@section('content')
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    @include('backend.partials.navbar')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <h1 class="display-4" style="text-align: center;">SISTEM INFORMASI KEPERAWATAN</h1>
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  <form action="#"><!-- id="example-vertical-wizard"-->
                    <div class="pixel-loader" id="div_loading" style="z-index: 99999; display: none;"></div>
                    <div id="wizard">
                      <h3>PENGKAJIAN & DIGANOSIS KEPERAWATAN</h3>
                      <section id="section1">
                        <!-- <h3>Account</h3> -->
                        <div class="row">
                          <div class="col-sm-3 grid-margin stretch-card">
                          </div>
                          <div class="col-sm-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body" style="border: 1px solid #000000;">
                                <!-- <form class="forms-sample"> -->
                                  <div class="form-group row">
                                    <label for="nama_pasien" class="col-sm-3 col-form-label">Nama Pasien : </label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="nama_pasien" placeholder="Nama Pasien" required="">
                                      <input type="hidden" class="form-control" id="id_pengkajian" value="30">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="no_rm" class="col-sm-3 col-form-label">No. RM : </label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="no_rm" placeholder="No. RM">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Usia : </label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="usia" placeholder="Usia">
                                    </div>
                                  </div>
                                  <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                  <button class="btn btn-light">Cancel</button> -->
                                <!-- </form> -->
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3 grid-margin stretch-card">
                            <img class="img-md rounded" style="width: 100%;" src="{{asset('assets/images/logo-rssa.png')}}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body" style="border: 1px solid #000000;">
                                  <div class="form-group row">
                                    <label for="tanggal_pengkajian" class="col-sm-3 col-form-label">Tanggal Pengkajian</label>
                                    <div class="col-sm-9">
                                      <!-- <div id="datepicker-popup" class="input-group date datepicker"> -->
                                        <input type="date" class="form-control" id="tanggal_pengkajian">
                                        <!-- <span class="input-group-addon input-group-append border-left">
                                          <span class="mdi mdi-calendar input-group-text"></span>
                                        </span>
                                      </div> -->
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="sumber_data" class="col-sm-3 col-form-label">Sumber Data</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sumber_data" id="radio_sumber_data1" value="1" checked>
                                          Pasien
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sumber_data" id="radio_sumber_data2" value="2">
                                          Keluarga
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sumber_data" id="radio_sumber_data3" value="3">
                                          Lainnya
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="riwayat_keluhan_pasien" class="col-sm-3 col-form-label">Riwayat Keluhan Pasien</label>
                                    <div class="col-sm-9">
                                      <textarea class="form-control" id="riwayat_keluhan_pasien" rows="3" placeholder="Riwayat Keluhan Pasien"></textarea>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body" style="border: 1px solid #000000;">
                                  <h5>Tanda-tanda Vital</h5>
                                  <div class="form-group row">
                                    <div class="col">
                                      <label>TD:</label>
                                      <div class="col-sm-12" style="padding: 0;">
                                        <input style="display: inline; padding: 0.875rem 0.575rem;" class="form-control col-sm-5" id="td_sistole" onchange="changeTD(this.value, 1)" />
                                        /
                                        <input style="display: inline; padding: 0.875rem 0.575rem;" class="form-control col-sm-5" id="td_diastole" onchange="changeTD(this.value, 2)" />
                                      </div>
                                    </div>
                                    <div class="col col-sm-4">
                                      <label>S:</label>
                                      <input class="form-control" id="suhu" />
                                    </div>
                                    <div class="col col-sm-4">
                                      <label>SPO2:</label>
                                      <input class="form-control" id="spo2" />
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col">
                                      <label>N:</label>
                                      <input class="form-control" id="nadi" onchange="changeN(this.value)" />
                                    </div>
                                    <div class="col">
                                      <label>RR:</label>
                                      <input class="form-control" id="rr" onchange="changeRR(this.value)" />
                                    </div>
                                    <div class="col">
                                      <label>GCS:</label>
                                      <input class="form-control" id="gcs" />
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr/>
                        <h4>KELUHAN UTAMA</h4>
                        <div class="row">
                          <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body" style="border: 1px solid #000000;">
                                <!-- <form class="forms-sample"> -->
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Batuk</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_batuk" id="radio_batuk1" value="1" onchange="change_keluhan_utama('radio_batuk',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_batuk" id="radio_batuk2" value="2" onchange="change_keluhan_utama('radio_batuk',this.value)" checked>
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RR>30x/menit</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_rr_30" id="radio_rr_301" value="1" onchange="change_keluhan_utama('radio_rr_30',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_rr_30" id="radio_rr_302" value="2" onchange="change_keluhan_utama('radio_rr_30',this.value)" checked>
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Sputum</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sputum" id="radio_sputum1" value="1" onchange="change_keluhan_utama('radio_sputum',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sputum" id="radio_sputum2" value="2" onchange="change_keluhan_utama('radio_sputum',this.value)" checked>
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Sesak</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sesak" id="radio_sesak1" value="1" onchange="change_keluhan_utama('radio_sesak',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sesak" id="radio_sesak2" value="2" onchange="change_keluhan_utama('radio_sesak',this.value)" checked>
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Wheezing</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_wheezing" id="radio_wheezing1" value="1" onchange="change_keluhan_utama('radio_wheezing',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_wheezing" id="radio_wheezing2" value="2" onchange="change_keluhan_utama('radio_wheezing',this.value)" checked>
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Ronchi Kering</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_ronchi" id="radio_ronchi1" value="1" onchange="change_keluhan_utama('radio_ronchi',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_ronchi" id="radio_ronchi2" value="2" onchange="change_keluhan_utama('radio_ronchi',this.value)" checked>
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                  <button class="btn btn-light">Cancel</button> -->
                                <!-- </form> -->
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body" style="border: 1px solid #000000;">
                                <!-- <form class="forms-sample"> -->
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gelisah</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_gelisah" id="radio_gelisah1" value="1" onchange="change_keluhan_utama('radio_gelisah',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_gelisah" id="radio_gelisah2" value="2" onchange="change_keluhan_utama('radio_gelisah',this.value)" checked>
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tegang</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_tegang" id="radio_tegang1" value="1" onchange="change_keluhan_utama('radio_tegang',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_tegang" id="radio_tegang2" value="2" onchange="change_keluhan_utama('radio_tegang',this.value)" checked>
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Merasa Bingung</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_bingung" id="radio_bingung1" value="1" onchange="change_keluhan_utama('radio_bingung',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_bingung" id="radio_bingung2" value="2" onchange="change_keluhan_utama('radio_bingung',this.value)" checked>
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Merasa Khawatir</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_khawatir" id="radio_khawatir1" value="1" onchange="change_keluhan_utama('radio_khawatir',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_khawatir" id="radio_khawatir2" value="2" onchange="change_keluhan_utama('radio_khawatir',this.value)" checked>
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">RR</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_rr" id="radio_rr1" value="1" onchange="change_keluhan_utama('radio_rr',this.value)">
                                          Meningkat
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_rr" id="radio_rr2" value="2" onchange="change_keluhan_utama('radio_rr',this.value)" checked>
                                          Normal
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_rr" id="radio_rr3" value="3" onchange="change_keluhan_utama('radio_rr',this.value)">
                                          Menurun
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">HR</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_nadi" id="radio_nadi1" value="1" onchange="change_keluhan_utama('radio_nadi',this.value)">
                                          Meningkat
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_nadi" id="radio_nadi2" value="2" onchange="change_keluhan_utama('radio_nadi',this.value)" checked>
                                          Normal
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_nadi" id="radio_nadi3" value="3" onchange="change_keluhan_utama('radio_nadi',this.value)">
                                          Menurun
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">TD</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_td" id="radio_td1" value="1" onchange="change_keluhan_utama('radio_td',this.value)">
                                          Meningkat
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_td" id="radio_td2" value="2" onchange="change_keluhan_utama('radio_td',this.value)" checked>
                                          Normal
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_td" id="radio_td3" value="3" onchange="change_keluhan_utama('radio_td',this.value)">
                                          Menurun
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Anoreksia</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_anoreksia" id="radio_anoreksia1" value="1" onchange="change_keluhan_utama('radio_anoreksia',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_anoreksia" id="radio_anoreksia2" value="2" onchange="change_keluhan_utama('radio_anoreksia',this.value)" checked>
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                  <button class="btn btn-light">Cancel</button> -->
                                <!-- </form> -->
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body" style="border: 1px solid #000000;">
                                <!-- <form class="forms-sample"> -->
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kemampuan Mandi</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_mandi" id="radio_kem_mandi1" value="1" onchange="change_keluhan_utama('radio_kem_mandi',this.value)">
                                          Rendah
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_mandi" id="radio_kem_mandi2" value="2" onchange="change_keluhan_utama('radio_kem_mandi',this.value)">
                                          Sedang
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_mandi" id="radio_kem_mandi3" value="3" onchange="change_keluhan_utama('radio_kem_mandi',this.value)" checked>
                                          Tinggi
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kemampuan Berpakaian</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_berpakaian" id="radio_kem_berpakaian1" value="1" onchange="change_keluhan_utama('radio_kem_berpakaian',this.value)">
                                          Rendah
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_berpakaian" id="radio_kem_berpakaian2" value="2" onchange="change_keluhan_utama('radio_kem_berpakaian',this.value)">
                                          Sedang
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_berpakaian" id="radio_kem_berpakaian3" value="3" onchange="change_keluhan_utama('radio_kem_berpakaian',this.value)" checked>
                                          Tinggi
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Kemampuan Berhias Diri</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_berhias_diri" id="radio_kem_berhias_diri1" value="1" onchange="change_keluhan_utama('radio_kem_berhias_diri',this.value)">
                                          Rendah
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_berhias_diri" id="radio_kem_berhias_diri2" value="2" onchange="change_keluhan_utama('radio_kem_berhias_diri',this.value)">
                                          Sedang
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_berhias_diri" id="radio_kem_berhias_diri3" value="3" onchange="change_keluhan_utama('radio_kem_berhias_diri',this.value)" checked>
                                          Tinggi
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Kemampuan ke toilet</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_ke_toilet" id="radio_kem_ke_toilet1" value="1" onchange="change_keluhan_utama('radio_kem_ke_toilet',this.value)">
                                          Rendah
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_ke_toilet" id="radio_kem_ke_toilet2" value="2" onchange="change_keluhan_utama('radio_kem_ke_toilet',this.value)">
                                          Sedang
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_ke_toilet" id="radio_kem_ke_toilet3" value="3" onchange="change_keluhan_utama('radio_kem_ke_toilet',this.value)" checked>
                                          Tinggi
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Kemampuan Makan</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_makan" id="radio_kem_makan1" value="1" onchange="change_keluhan_utama('radio_kem_makan',this.value)">
                                          Rendah
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_makan" id="radio_kem_makan2" value="2" onchange="change_keluhan_utama('radio_kem_makan',this.value)">
                                          Sedang
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_makan" id="radio_kem_makan3" value="3" onchange="change_keluhan_utama('radio_kem_makan',this.value)" checked>
                                          Tinggi
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Minat melakukan perawatan diri</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_perawatan_diri" id="radio_perawatan_diri1" value="1" onchange="change_keluhan_utama('radio_perawatan_diri',this.value)">
                                          Rendah
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_perawatan_diri" id="radio_perawatan_diri2" value="2" onchange="change_keluhan_utama('radio_perawatan_diri',this.value)">
                                          Sedang
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_perawatan_diri" id="radio_perawatan_diri3" value="3" onchange="change_keluhan_utama('radio_perawatan_diri',this.value)" checked>
                                          Tinggi
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                  <button class="btn btn-light">Cancel</button> -->
                                <!-- </form> -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr/>
                        <h4>PEMERIKSAAN FISIK</h4>
                        <div class="row">
                          <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body" style="border: 1px solid #000000;">
                                <!-- <form class="forms-sample"> -->
                                  <div class="form-group row">
                                    <label for="riwayat_perawatan_sebelumnya" class="col-sm-3 col-form-label">Riwayat Perawatan Sebelumnya </label>
                                    <div class="col-sm-9">
                                      <textarea class="form-control" id="riwayat_perawatan_sebelumnya" rows="3" placeholder="Riwayat Perawatan Sebelumnya"></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group row" style="margin-bottom: 0;">
                                    <label for="no_rm" class="col-sm-3 col-form-label">Riwayat Penyakit Keluarga</label>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_riwayat_penyakit_keluarga" id="radio_riwayat_penyakit_keluarga1" value="1">
                                          Ya
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_riwayat_penyakit_keluarga" id="radio_riwayat_penyakit_keluarga2" value="2" checked>
                                          Tidak
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row" id="div_sebutkan_rpk" style="display: none;">
                                    <label for="sebutkan_riwayat_penyakit_keluarga" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="sebutkan_riwayat_penyakit_keluarga" placeholder="Sebutkan Riwayat Penyakit Keluarga">
                                    </div>
                                  </div>
                                  <div class="form-group row" style="margin-bottom: 0;">
                                    <label for="usia" class="col-sm-3 col-form-label">Riwayat Alergi </label>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_riwayat_alergi" id="radio_riwayat_alergi1" value="1">
                                          Ya
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_riwayat_alergi" id="radio_riwayat_alergi2" value="2" checked>
                                          Tidak
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row" id="div_sebutkan_reaksi_ra" style="display: none;">
                                    <label for="sebutkan_riwayat_alergi" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9" style="margin-bottom: 10px;">
                                      <input type="text" class="form-control" id="sebutkan_riwayat_alergi" placeholder="Sebutkan Riwayat Alergi">
                                    </div>
                                    <label for="reaksi_riwayat_alergi" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="reaksi_riwayat_alergi" placeholder="Reaksi Riwayat Alergi">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Status Psikologi Sosial </label>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_psikologi_sosial" id="radio_psikologi_sosial1" value="1" checked>
                                          Tenang
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_psikologi_sosial" id="radio_psikologi_sosial2" value="2">
                                          Cemas
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_psikologi_sosial" id="radio_psikologi_sosial3" value="3">
                                          Takut
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_psikologi_sosial" id="radio_psikologi_sosial4" value="4">
                                          Marah
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-2">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_psikologi_sosial" id="radio_psikologi_sosial5" value="5">
                                          Sedih dll
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row" style="margin-bottom: 0;">
                                    <label for="usia" class="col-sm-3 col-form-label">Sistem Pendukung Yang Ada </label>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sistem_pendukung" id="radio_sistem_pendukung1" value="1" checked>
                                          Suami
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sistem_pendukung" id="radio_sistem_pendukung2" value="2">
                                          Istri
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sistem_pendukung" id="radio_sistem_pendukung3" value="3">
                                          Anak
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-1" style="padding-left: 5px;">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sistem_pendukung" id="radio_sistem_pendukung4" value="4">
                                          Saudara
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sistem_pendukung" id="radio_sistem_pendukung5" value="5">
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sistem_pendukung" id="radio_sistem_pendukung6" value="6">
                                          Dll
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row" id="div_sebutkan_spya" style="display: none;">
                                    <label for="sebutkan_sistem_pendukung" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="sebutkan_sistem_pendukung" placeholder="Sebutkan Sistem Pendukung Yang Ada">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Ekonomi (Masalah Biaya RS)</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_ekonomi" id="radio_ekonomi1" value="1" checked>
                                          Ditanggung (Asuransi)
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_ekonomi" id="radio_ekonomi2" value="2">
                                          Tidak
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Spiritual (Kegiatan Menjalankan Ibadah Pasien)</label>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_spiritual" id="radio_spiritual1" value="1" checked>
                                          Aktif
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-1">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_spiritual" id="radio_spiritual2" value="2">
                                          Tidak
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                  <button class="btn btn-light">Cancel</button> -->
                                <!-- </form> -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <h4>Diagnosis Keperawatan : </h4>
                          </div>
                          <div class="col-lg-12" id="div_a1_tidak_ada">
                            <h5><i>Tidak Ada Diagnosis</i></h5>
                          </div>
                          <div class="col-lg-5" id="div_a1_bersihan_jalan" style="display: none;">
                            <div class="alert alert-warning" role="alert">
                              Diagnosis: Bersihan Jalan Nafas Tidak efektif
                            </div>
                          </div>
                          <div class="col-lg-3" id="div_a1_ansietas" style="display: none;">
                            <div class="alert alert-warning" role="alert">
                              Diagnosis: Ansietas
                            </div>
                          </div>
                          <div class="col-lg-4" id="div_a1_perawatan_diri" style="display: none;">
                            <div class="alert alert-warning" role="alert">
                              Diagnosis: Defisit Perawatan Diri
                            </div>
                          </div>
                        </div>
                      </section>
                      <h3>RENCANA INTERVENSI</h3>
                      <section id="section2">
                        <!-- <h3>RENCANA INTERVENSI</h3> -->
                        <div class="col-lg-12 row grid-margin stretch-card" style="padding: 0px;" id="div_accordion">
                          
                        </div>
                      </section>
                      <h3>IMPLEMENTASI DAN EVALUASI</h3>
                      <section id="section3">
                        <h4>KELUHAN UTAMA</h4>
                        <div class="row">
                          <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body" style="border: 1px solid #000000;">
                                <!-- <form class="forms-sample"> -->
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Batuk</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="hidden" class="form-control" id="id_intervensi" value="1">
                                          <input type="radio" class="form-check-input" name="radio_batuk_int" id="radio_batuk_int1" value="1" onchange="change_keluhan_utama_int('radio_batuk_int',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_batuk_int" id="radio_batuk_int2" value="2" onchange="change_keluhan_utama_int('radio_batuk_int',this.value)">
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RR>30x/menit</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_rr_30_int" id="radio_rr_30_int1" value="1" onchange="change_keluhan_utama_int('radio_rr_30_int',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_rr_30_int" id="radio_rr_30_int2" value="2" onchange="change_keluhan_utama_int('radio_rr_30_int',this.value)">
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Sputum</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sputum_int" id="radio_sputum_int1" value="1" onchange="change_keluhan_utama_int('radio_sputum_int',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sputum_int" id="radio_sputum_int2" value="2" onchange="change_keluhan_utama_int('radio_sputum_int',this.value)">
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Sesak</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sesak_int" id="radio_sesak_int1" value="1" onchange="change_keluhan_utama_int('radio_sesak_int',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sesak_int" id="radio_sesak_int2" value="2" onchange="change_keluhan_utama_int('radio_sesak_int',this.value)">
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Wheezing</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_wheezing_int" id="radio_wheezing_int1" value="1" onchange="change_keluhan_utama_int('radio_wheezing_int',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_wheezing_int" id="radio_wheezing_int2" value="2" onchange="change_keluhan_utama_int('radio_wheezing_int',this.value)">
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Ronchi Kering</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_ronchi_int" id="radio_ronchi_int1" value="1" onchange="change_keluhan_utama_int('radio_ronchi_int',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_ronchi_int" id="radio_ronchi_int2" value="2" onchange="change_keluhan_utama_int('radio_ronchi_int',this.value)">
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                  <button class="btn btn-light">Cancel</button> -->
                                <!-- </form> -->
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body" style="border: 1px solid #000000;">
                                <!-- <form class="forms-sample"> -->
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gelisah</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_gelisah_int" id="radio_gelisah_int1" value="1" onchange="change_keluhan_utama_int('radio_gelisah_int',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_gelisah_int" id="radio_gelisah_int2" value="2" onchange="change_keluhan_utama_int('radio_gelisah_int',this.value)">
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tegang</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_tegang_int" id="radio_tegang_int1" value="1" onchange="change_keluhan_utama_int('radio_tegang_int',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_tegang_int" id="radio_tegang_int2" value="2" onchange="change_keluhan_utama_int('radio_tegang_int',this.value)">
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Merasa Bingung</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_bingung_int" id="radio_bingung_int1" value="1" onchange="change_keluhan_utama_int('radio_bingung_int',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_bingung_int" id="radio_bingung_int2" value="2" onchange="change_keluhan_utama_int('radio_bingung_int',this.value)">
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Merasa Khawatir</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_khawatir_int" id="radio_khawatir_int1" value="1" onchange="change_keluhan_utama_int('radio_khawatir_int',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_khawatir_int" id="radio_khawatir_int2" value="2" onchange="change_keluhan_utama_int('radio_khawatir_int',this.value)">
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">RR</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_rr_int" id="radio_rr_int1" value="1" onchange="change_keluhan_utama_int('radio_rr_int',this.value)">
                                          Meningkat
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_rr_int" id="radio_rr_int2" value="2" onchange="change_keluhan_utama_int('radio_rr_int',this.value)">
                                          Normal
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_rr_int" id="radio_rr_int3" value="3" onchange="change_keluhan_utama_int('radio_rr_int',this.value)">
                                          Menurun
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">HR</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_nadi_int" id="radio_nadi_int1" value="1" onchange="change_keluhan_utama_int('radio_nadi_int',this.value)">
                                          Meningkat
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_nadi_int" id="radio_nadi_int2" value="2" onchange="change_keluhan_utama_int('radio_nadi_int',this.value)">
                                          Normal
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_nadi_int" id="radio_nadi_int3" value="3" onchange="change_keluhan_utama_int('radio_nadi_int',this.value)">
                                          Menurun
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">TD</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_td_int" id="radio_td_int1" value="1" onchange="change_keluhan_utama_int('radio_td_int',this.value)">
                                          Meningkat
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_td_int" id="radio_td_int2" value="2" onchange="change_keluhan_utama_int('radio_td_int',this.value)">
                                          Normal
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_td_int" id="radio_td_int3" value="3" onchange="change_keluhan_utama_int('radio_td_int',this.value)">
                                          Menurun
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Anoreksia</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_anoreksia_int" id="radio_anoreksia_int1" value="1" onchange="change_keluhan_utama_int('radio_anoreksia_int',this.value)">
                                          Ada
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_anoreksia_int" id="radio_anoreksia_int2" value="2" onchange="change_keluhan_utama_int('radio_anoreksia_int',this.value)">
                                          Tidak Ada
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                  <button class="btn btn-light">Cancel</button> -->
                                <!-- </form> -->
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body" style="border: 1px solid #000000;">
                                <!-- <form class="forms-sample"> -->
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kemampuan Mandi</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_mandi_int" id="radio_kem_mandi_int1" value="1" onchange="change_keluhan_utama_int('radio_kem_mandi_int',this.value)">
                                          Rendah
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_mandi_int" id="radio_kem_mandi_int2" value="2" onchange="change_keluhan_utama_int('radio_kem_mandi_int',this.value)">
                                          Sedang
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_mandi_int" id="radio_kem_mandi_int3" value="3" onchange="change_keluhan_utama_int('radio_kem_mandi_int',this.value)">
                                          Tinggi
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kemampuan Berpakaian</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_berpakaian_int" id="radio_kem_berpakaian_int1" value="1" onchange="change_keluhan_utama_int('radio_kem_berpakaian_int',this.value)">
                                          Rendah
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_berpakaian_int" id="radio_kem_berpakaian_int2" value="2" onchange="change_keluhan_utama_int('radio_kem_berpakaian_int',this.value)">
                                          Sedang
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_berpakaian_int" id="radio_kem_berpakaian_int3" value="3" onchange="change_keluhan_utama_int('radio_kem_berpakaian_int',this.value)">
                                          Tinggi
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Kemampuan Berhias Diri</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_berhias_diri_int" id="radio_kem_berhias_diri_int1" value="1" onchange="change_keluhan_utama_int('radio_kem_berhias_diri_int',this.value)">
                                          Rendah
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_berhias_diri_int" id="radio_kem_berhias_diri_int2" value="2" onchange="change_keluhan_utama_int('radio_kem_berhias_diri_int',this.value)">
                                          Sedang
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_berhias_diri_int" id="radio_kem_berhias_diri_int3" value="3" onchange="change_keluhan_utama_int('radio_kem_berhias_diri_int',this.value)">
                                          Tinggi
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Kemampuan ke toilet</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_ke_toilet_int" id="radio_kem_ke_toilet_int1" value="1" onchange="change_keluhan_utama_int('radio_kem_ke_toilet_int',this.value)">
                                          Rendah
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_ke_toilet_int" id="radio_kem_ke_toilet_int2" value="2" onchange="change_keluhan_utama_int('radio_kem_ke_toilet_int',this.value)">
                                          Sedang
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_ke_toilet_int" id="radio_kem_ke_toilet_int3" value="3" onchange="change_keluhan_utama_int('radio_kem_ke_toilet_int',this.value)">
                                          Tinggi
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Kemampuan Makan</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_makan_int" id="radio_kem_makan_int1" value="1" onchange="change_keluhan_utama_int('radio_kem_makan_int',this.value)">
                                          Rendah
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_makan_int" id="radio_kem_makan_int2" value="2" onchange="change_keluhan_utama_int('radio_kem_makan_int',this.value)">
                                          Sedang
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_kem_makan_int" id="radio_kem_makan_int3" value="3" onchange="change_keluhan_utama_int('radio_kem_makan_int',this.value)">
                                          Tinggi
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Minat melakukan perawatan diri</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_perawatan_diri_int" id="radio_perawatan_diri_int1" value="1" onchange="change_keluhan_utama_int('radio_perawatan_diri_int',this.value)">
                                          Rendah
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_perawatan_diri_int" id="radio_perawatan_diri_int2" value="2" onchange="change_keluhan_utama_int('radio_perawatan_diri_int',this.value)">
                                          Sedang
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_perawatan_diri_int" id="radio_perawatan_diri_int3" value="3" onchange="change_keluhan_utama_int('radio_perawatan_diri_int',this.value)">
                                          Tinggi
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                  <button class="btn btn-light">Cancel</button> -->
                                <!-- </form> -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12 grid-margin stretch-card" style="padding: 0px;">
                          <button type="button" class="btn btn-info mr-2" id="btn_simpan" onclick="simpan_step3()">Simpan</button>
                          <span id="notif_simpan"></span>
                        </div>
                        <hr/>
                        <div class="col-lg-12 row grid-margin stretch-card" style="padding: 0px;" id="div_evaluasi">
                          <div class="col-lg-12 alert alert-fill-success" role="alert" id="div_alert_bersihan_jalan0" style="display: none;">
                            <i class="fa fa-check-circle"></i>
                            Diagnosis: Bersihan Jalan Nafas Tidak Efektif Teratasi
                          </div>
                          <div class="col-lg-12 alert alert-fill-info" role="alert" id="div_alert_bersihan_jalan1" style="display: none;">
                            <i class="fa fa-info-circle"></i>
                            Diagnosis: Bersihan Jalan Nafas Tidak Efektif Teratasi Sebagian
                          </div>

                          <div class="col-lg-12 alert alert-fill-success" role="alert" id="div_alert_ansietas0" style="display: none;">
                            <i class="fa fa-check-circle"></i>
                            Masalah : Ansietas Teratasi
                          </div>
                          <div class="col-lg-12 alert alert-fill-info" role="alert" id="div_alert_ansietas1" style="display: none;">
                            <i class="fa fa-info-circle"></i>
                            Masalah : Ansietas Teratasi Sebagian
                          </div>

                          <div class="col-lg-12 alert alert-fill-success" role="alert" id="div_alert_perawatan_diri0" style="display: none;">
                            <i class="fa fa-check-circle"></i>
                            Masalah: Defisit Perawatan Diri Teratasi
                          </div>
                          <div class="col-lg-12 alert alert-fill-info" role="alert" id="div_alert_perawatan_diri1" style="display: none;">
                            <i class="fa fa-info-circle"></i>
                            Masalah: Defisit Perawatan Diri Teratasi Sebagian
                          </div>
                        </div>
                        <button type="button" class="btn btn-sm btn-primary mr-2" onclick="unduhPDF()">
                          Unduh PDF
                        </button>
                      </section>
                      <h3>DISCHARGE PLANNING</h3>
                      <section id="section4">
                        <h3>DISCHARGE PLANNING</h3>
                        <!-- <div class="col-lg-12 row grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body"> -->
                              <!-- <h4 class="card-title">Bordered table</h4>
                              <p class="card-description">
                                Add class <code>.table-bordered</code>
                              </p> -->
                              <div class="row">
                                <div class="col-sm-2 grid-margin stretch-card">
                                </div>
                                <div class="col-md-8 grid-margin stretch-card" style="margin-left: auto; margin-right: 0;">
                                  <div class="card">
                                    <div class="card-body" style="border: 1px solid #000000;">
                                      <!-- <form class="forms-sample"> -->
                                        <div class="form-group row">
                                          <label class="col-sm-3 col-form-label">Kesesuaian Perilaku</label>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="hidden" class="form-control" id="id_discharge_planning" value="3">
                                                <input type="radio" class="form-check-input" name="radio_kesesuaian_perilaku" id="radio_radio_kesesuaian_perilaku1" value="1" onchange="change_defisit_pengetahuan('radio_kesesuaian_perilaku',this.value)">
                                                Rendah
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_kesesuaian_perilaku" id="radio_radio_kesesuaian_perilaku2" value="2" onchange="change_defisit_pengetahuan('radio_kesesuaian_perilaku',this.value)">
                                                Sedang
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_kesesuaian_perilaku" id="radio_kesesuaian_perilaku3" value="3" onchange="change_defisit_pengetahuan('radio_kesesuaian_perilaku',this.value)" checked>
                                                Tinggi
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label class="col-sm-3 col-form-label">Persepsi terhadap masalah</label>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_persepsi_terhadap_masalah" id="radio_persepsi_terhadap_masalah1" value="1" onchange="change_defisit_pengetahuan('radio_persepsi_terhadap_masalah',this.value)">
                                                Rendah
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_persepsi_terhadap_masalah" id="radio_persepsi_terhadap_masalah2" value="2" onchange="change_defisit_pengetahuan('radio_persepsi_terhadap_masalah',this.value)">
                                                Sedang
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_persepsi_terhadap_masalah" id="radio_persepsi_terhadap_masalah3" value="3" onchange="change_defisit_pengetahuan('radio_persepsi_terhadap_masalah',this.value)" checked>
                                                Tinggi
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label for="usia" class="col-sm-3 col-form-label">Ketepatan pemeriksaan</label>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_ketepatan_pemeriksaan" id="radio_ketepatan_pemeriksaan1" value="1" onchange="change_defisit_pengetahuan('radio_ketepatan_pemeriksaan',this.value)">
                                                Rendah
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_ketepatan_pemeriksaan" id="radio_ketepatan_pemeriksaan2" value="2" onchange="change_defisit_pengetahuan('radio_ketepatan_pemeriksaan',this.value)">
                                                Sedang
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_ketepatan_pemeriksaan" id="radio_ketepatan_pemeriksaan3" value="3" onchange="change_defisit_pengetahuan('radio_ketepatan_pemeriksaan',this.value)" checked>
                                                Tinggi
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label for="usia" class="col-sm-3 col-form-label">Perubahan perilaku</label>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_perubahan_perilaku" id="radio_perubahan_perilaku1" value="1" onchange="change_defisit_pengetahuan('radio_perubahan_perilaku',this.value)">
                                                Rendah
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_perubahan_perilaku" id="radio_perubahan_perilaku2" value="2" onchange="change_defisit_pengetahuan('radio_perubahan_perilaku',this.value)">
                                                Sedang
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_perubahan_perilaku" id="radio_perubahan_perilaku3" value="3" onchange="change_defisit_pengetahuan('radio_perubahan_perilaku',this.value)" checked>
                                                Tinggi
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label for="usia" class="col-sm-3 col-form-label">Masalah yang dihadapi</label>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_masalah_yang_dihadapi" id="radio_masalah_yang_dihadapi1" value="1" onchange="change_defisit_pengetahuan('radio_masalah_yang_dihadapi',this.value)">
                                                Rendah
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_masalah_yang_dihadapi" id="radio_masalah_yang_dihadapi2" value="2" onchange="change_defisit_pengetahuan('radio_masalah_yang_dihadapi',this.value)">
                                                Sedang
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio_masalah_yang_dihadapi" id="radio_masalah_yang_dihadapi3" value="3" onchange="change_defisit_pengetahuan('radio_masalah_yang_dihadapi',this.value)" checked>
                                                Tinggi
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button> -->
                                      <!-- </form> -->
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-2 grid-margin stretch-card">
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-md-12 grid-margin stretch-card" style="margin-right: 0;">
                                  <div class="table-responsive">
                                    <table class="table table-bordered" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th rowspan=3>Fase</th>
                                          <th rowspan=3 colspan="2">Kegiatan</th>
                                          <th colspan=4>Pelaksanaan</th>
                                        </tr>
                                        <tr>
                                          <th colspan=3>Dilakukan</th>
                                          <th rowspan=2 class="width5">Tidak Dilakukan</th>
                                        </tr>
                                        <tr>
                                          <th>Tanggal</th>
                                          <th>Jam</th>
                                          <th>Evaluasi</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td rowspan="13" style="transform: rotate(-90deg); text-align: center;">Tahap 1 <br/><br/> Pasien Masuk</td>
                                          <td>1</td>
                                          <td>Pengkajian fisik dan psikososial</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_1"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_1"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_1" id="radio_dp_11" value="1" onclick="click_radio('1')">
                                                  Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_1" id="radio_dp_12" value="2" onclick="click_radio('1')">
                                                  Kurang Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_1" id="radio_dp_13" value="3" onclick="click_radio('1')">
                                                  Tidak Lengkap
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <!-- <input type="text" class="" id="tidak_dilakukan1" placeholder="alasan" style="border: none;"> -->
                                            <textarea id="tidak_dilakukan_1" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('1')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td>Pengkajian Status fungsional</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_2"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_2"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_2" id="radio_dp_21" value="1" onclick="click_radio('2')">
                                                  Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_2" id="radio_dp_22" value="2" onclick="click_radio('2')">
                                                  Kurang Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_2" id="radio_dp_23" value="3" onclick="click_radio('2')">
                                                  Tidak Lengkap
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_2" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('2')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td rowspan="8">3</td>
                                          <td colspan="5">Pengkajian Kebutuhan Pendidikan kesehatan</td>
                                        </tr>
                                        <tr>
                                          <td>a. Proses penyakit</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_3"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_3"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_3" id="radio_dp_31" value="1" onclick="click_radio('3')">
                                                  Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_3" id="radio_dp_32" value="2" onclick="click_radio('3')">
                                                  Kurang Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_3" id="radio_dp_33" value="3" onclick="click_radio('3')">
                                                  Tidak Lengkap
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_3" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('3')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>b. Obat- obatan</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_4"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_4"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_4" id="radio_dp_41" value="1" onclick="click_radio('4')">
                                                  Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_4" id="radio_dp_42" value="2" onclick="click_radio('4')">
                                                  Kurang Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_4" id="radio_dp_43" value="3" onclick="click_radio('4')">
                                                  Tidak Lengkap
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_4" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('4')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>c. Prosedur , cara perawatan </td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_5"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_5"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_5" id="radio_dp_51" value="1" onclick="click_radio('5')">
                                                  Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_5" id="radio_dp_52" value="2" onclick="click_radio('5')">
                                                  Kurang Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_5" id="radio_dp_53" value="3" onclick="click_radio('5')">
                                                  Tidak Lengkap
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_5" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('5')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>d. Pencegahan factor resiko </td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_6"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_6"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_6" id="radio_dp_61" value="1" onclick="click_radio('6')">
                                                  Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_6" id="radio_dp_62" value="2" onclick="click_radio('6')">
                                                  Kurang Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_6" id="radio_dp_63" value="3" onclick="click_radio('6')">
                                                  Tidak Lengkap
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_6" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('6')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>e. Lingkungan yang perlu dipersiapkan</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_7"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_7"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_7" id="radio_dp_71" value="1" onclick="click_radio('7')">
                                                  Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_7" id="radio_dp_72" value="2" onclick="click_radio('7')">
                                                  Kurang Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_7" id="radio_dp_73" value="3" onclick="click_radio('7')">
                                                  Tidak Lengkap
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_7" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('7')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>f. Rencana tindak lanjut</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_8"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_8"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_8" id="radio_dp_81" value="1" onclick="click_radio('8')">
                                                  Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_8" id="radio_dp_82" value="2" onclick="click_radio('8')">
                                                  Kurang Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_8" id="radio_dp_83" value="3" onclick="click_radio('8')">
                                                  Tidak Lengkap
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_8" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('8')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>g. Support sistem</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_9"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_9"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_9" id="radio_dp_91" value="1" onclick="click_radio('9')">
                                                  Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_9" id="radio_dp_92" value="2" onclick="click_radio('9')">
                                                  Kurang Lengkap
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_9" id="radio_dp_93" value="3" onclick="click_radio('9')">
                                                  Tidak Lengkap
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_9" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('9')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td rowspan="3">4</td>
                                          <td colspan="5">Pemahaman pasien/ keluarga terhadap penjelasan dari:</td>
                                        </tr>
                                        <tr>
                                          <td>a. Fisioterapi</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_10"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_10"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_10" id="radio_dp_101" value="1" onclick="click_radio('10')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_10" id="radio_dp_102" value="2" onclick="click_radio('10')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_10" id="radio_dp_103" value="3" onclick="click_radio('10')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_10" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('10')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>b. Ahli gizi</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_11"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_11"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_11" id="radio_dp_111" value="1" onclick="click_radio('11')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_11" id="radio_dp_112" value="2" onclick="click_radio('11')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_11" id="radio_dp_113" value="3" onclick="click_radio('11')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_11" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('11')"></textarea>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td rowspan="12" style="transform: rotate(-90deg); text-align: center;">Tahap II <br/><br/> Fase Diagnostik</td>
                                          <td rowspan="4">5</td>
                                          <td colspan="5">Penkes tentang proses penyakit</td>
                                        </tr>
                                        <tr>
                                          <td>a. Pengertian, penyebab tanda dan gejala</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_12"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_12"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_12" id="radio_dp_121" value="1" onclick="click_radio('12')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_12" id="radio_dp_122" value="2" onclick="click_radio('12')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_12" id="radio_dp_123" value="3" onclick="click_radio('12')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_12" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('12')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>b. Faktor resiko</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_13"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_13"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_13" id="radio_dp_131" value="1" onclick="click_radio('13')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_13" id="radio_dp_132" value="2" onclick="click_radio('13')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_13" id="radio_dp_133" value="3" onclick="click_radio('13')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_13" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('13')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>c. Komplikasi</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_14"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_14"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_14" id="radio_dp_141" value="1" onclick="click_radio('14')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_14" id="radio_dp_142" value="2" onclick="click_radio('14')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_14" id="radio_dp_143" value="3" onclick="click_radio('14')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_14" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('14')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>6</td>
                                          <td>Penkes tentang obat- obatan</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_15"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_15"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_15" id="radio_dp_151" value="1" onclick="click_radio('15')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_15" id="radio_dp_152" value="2" onclick="click_radio('15')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_15" id="radio_dp_153" value="3" onclick="click_radio('15')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_15" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('15')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>7</td>
                                          <td>Penkes tentang penatalaksanaan</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_16"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_16"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_16" id="radio_dp_161" value="1" onclick="click_radio('16')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_16" id="radio_dp_162" value="2" onclick="click_radio('16')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_16" id="radio_dp_163" value="3" onclick="click_radio('16')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_16" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('16')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>8</td>
                                          <td>Penkes tentang pemeriksaan diagnostik</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_17"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_17"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_17" id="radio_dp_171" value="1" onclick="click_radio('17')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_17" id="radio_dp_172" value="2" onclick="click_radio('17')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_17" id="radio_dp_173" value="3" onclick="click_radio('17')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_17" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('17')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>9</td>
                                          <td>Penkes tentang tehabilitasi</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_18"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_18"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_18" id="radio_dp_181" value="1" onclick="click_radio('18')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_18" id="radio_dp_182" value="2" onclick="click_radio('18')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_18" id="radio_dp_183" value="3" onclick="click_radio('18')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_18" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('18')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td rowspan="4">10</td>
                                          <td>a. Kemampuan perawatan diri dan hygiene personal</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_19"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_19"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_19" id="radio_dp_191" value="1" onclick="click_radio('19')">
                                                  Mampu
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_19" id="radio_dp_192" value="2" onclick="click_radio('19')">
                                                  Kurang Mampu
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_19" id="radio_dp_193" value="3" onclick="click_radio('19')">
                                                  Tidak Mampu
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_19" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('19')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>b. Kemampuan Perubahan posisi</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_20"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_20"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_20" id="radio_dp_201" value="1" onclick="click_radio('20')">
                                                  Mampu
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_20" id="radio_dp_202" value="2" onclick="click_radio('20')">
                                                  Kurang Mampu
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_20" id="radio_dp_203" value="3" onclick="click_radio('20')">
                                                  Tidak Mampu
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_20" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('20')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>c. Kemampuan Pencegahan jatuh</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_21"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_21"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_21" id="radio_dp_211" value="1" onclick="click_radio('21')">
                                                  Mampu
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_21" id="radio_dp_212" value="2" onclick="click_radio('21')">
                                                  Kurang Mampu
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_21" id="radio_dp_213" value="3" onclick="click_radio('21')">
                                                  Tidak Mampu
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_21" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('21')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>d. Pencegahan aspirasi, latihan ROM dan teknik relaksasi</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_22"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_22"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_22" id="radio_dp_221" value="1" onclick="click_radio('22')">
                                                  Mampu
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_22" id="radio_dp_222" value="2" onclick="click_radio('22')">
                                                  Kurang Mampu
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_22" id="radio_dp_223" value="3" onclick="click_radio('22')">
                                                  Tidak Mampu
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_22" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('22')"></textarea>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td rowspan="9" style="transform: rotate(-90deg); text-align: center;">Tahap III <br/><br/> Fase Stabilisasi</td>
                                          <td rowspan="5">11</td>
                                          <td colspan="5">Penkes tentang modifikasi gaya hidup</td>
                                        </tr>
                                        <tr>
                                          <td>a. Pengaturan diet/ ( sesuai factor sesuai)</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_23"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_23"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_23" id="radio_dp_231" value="1" onclick="click_radio('23')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_23" id="radio_dp_232" value="2" onclick="click_radio('23')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_23" id="radio_dp_233" value="3" onclick="click_radio('23')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_23" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('23')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>b. Aktifitas fisik</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_24"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_24"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_24" id="radio_dp_241" value="1" onclick="click_radio('24')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_24" id="radio_dp_242" value="2" onclick="click_radio('24')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_24" id="radio_dp_243" value="3" onclick="click_radio('24')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_24" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('24')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>c. Merokok</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_25"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_25"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_25" id="radio_dp_251" value="1" onclick="click_radio('25')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_25" id="radio_dp_252" value="2" onclick="click_radio('25')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_25" id="radio_dp_253" value="3" onclick="click_radio('25')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_25" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('25')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>d. Penggunaan alcohol dan obat- obatan</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_26"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_26"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_26" id="radio_dp_261" value="1" onclick="click_radio('26')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_26" id="radio_dp_262" value="2" onclick="click_radio('26')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_26" id="radio_dp_263" value="3" onclick="click_radio('26')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_26" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('26')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>12</td>
                                          <td>Diskusi tentang modifikasi lingkungan pasien setelah pulang dari rumah sakit</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_27"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_27"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_27" id="radio_dp_271" value="1" onclick="click_radio('27')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_27" id="radio_dp_272" value="2" onclick="click_radio('27')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_27" id="radio_dp_273" value="3" onclick="click_radio('27')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_27" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('27')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td rowspan="3">13</td>
                                          <td colspan="5">Diskusi tentang rencana perawatan lanjutan pasien</td>
                                        </tr>
                                        <tr>
                                          <td>a. Bantuan ADL</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_28"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_28"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_28" id="radio_dp_281" value="1" onclick="click_radio('28')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_28" id="radio_dp_282" value="2" onclick="click_radio('28')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_28" id="radio_dp_283" value="3" onclick="click_radio('28')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_28" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('28')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>b. Jadwal kontrol</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_29"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_29"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_29" id="radio_dp_291" value="1" onclick="click_radio('29')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_29" id="radio_dp_292" value="2" onclick="click_radio('29')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_29" id="radio_dp_293" value="3" onclick="click_radio('29')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_29" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('29')"></textarea>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td rowspan="2" style="transform: rotate(-90deg); text-align: center;">Tahap IV <br/><br/> Fase Dischanger</td>
                                          <td>14</td>
                                          <td>Diskusi tentang pengawasan pada pasien setelah pulang tentang obat, diet, aktifitas dan peningkatan status fungsional</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_30"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_30"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_30" id="radio_dp_301" value="1" onclick="click_radio('30')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_30" id="radio_dp_302" value="2" onclick="click_radio('30')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_30" id="radio_dp_303" value="3" onclick="click_radio('30')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_30" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('30')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>15</td>
                                          <td>Diskusi tentang Support sistem keluarga, finansial dan alat transportasi yang akan digunakan pasien</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_dp_31"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_dp_31"></td>
                                          <td class="p5">
                                            <div class="form-group mb0">
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_31" id="radio_dp_311" value="1" onclick="click_radio('31')">
                                                  Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_31" id="radio_dp_312" value="2" onclick="click_radio('31')">
                                                  Kurang Paham
                                                </label>
                                              </div>
                                              <div class="form-check m0">
                                                <label class="form-check-label fs-cus">
                                                  <input type="radio" class="form-check-input" name="radio_dp_31" id="radio_dp_313" value="3" onclick="click_radio('31')">
                                                  Tidak Paham
                                                </label>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="p5">
                                            <textarea id="tidak_dilakukan_31" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style="" onchange="click_textarea('31')"></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td colspan="5"><b>Jumlah Skor : </b><span id="jumlah_skor">0</span></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <p>Catatan : a skor = 2, b skor = 1, c skore = 0</p>
                                    <br>
                                    <div class="row" style="padding: 0px;">
                                      <div class="col-lg-12">
                                        <h4>Diagnosis Keperawatan : </h4>
                                      </div>
                                      <div class="col-lg-12" id="div_a4_tidak_ada" style="display: none;">
                                        <h5><i>Tidak Ada Diagnosis</i></h5>
                                      </div>

                                      <div class="col-lg-4" role="alert" id="div_alert_bersihan_jalan0_4" style="display: none;">
                                        <div class="alert alert-fill-success">
                                          <i class="fa fa-check-circle"></i>
                                          Diagnosis: Bersihan Jalan Nafas Tidak Efektif Teratasi
                                        </div>
                                      </div>
                                      <div class="col-lg-4" role="alert" id="div_alert_bersihan_jalan1_4" style="display: none;">
                                        <div class="alert alert-fill-info">
                                          <i class="fa fa-info-circle"></i>
                                          Diagnosis: Bersihan Jalan Nafas Tidak Efektif Teratasi Sebagian
                                        </div>
                                      </div>

                                      <div class="col-lg-4" role="alert" id="div_alert_ansietas0_4" style="display: none;">
                                        <div class="alert alert-fill-success">
                                          <i class="fa fa-check-circle"></i>
                                          Masalah : Ansietas Teratasi
                                        </div>
                                      </div>
                                      <div class="col-lg-4" role="alert" id="div_alert_ansietas1_4" style="display: none;">
                                        <div class="alert alert-fill-info">
                                          <i class="fa fa-info-circle"></i>
                                          Masalah : Ansietas Teratasi Sebagian
                                        </div>
                                      </div>

                                      <div class="col-lg-4" role="alert" id="div_alert_perawatan_diri0_4" style="display: none;">
                                        <div class="alert alert-fill-success">
                                          <i class="fa fa-check-circle"></i>
                                          Masalah: Defisit Perawatan Diri Teratasi
                                        </div>
                                      </div>
                                      <div class="col-lg-4" role="alert" id="div_alert_perawatan_diri1_4" style="display: none;">
                                        <div class="alert alert-fill-info">
                                          <i class="fa fa-info-circle"></i>
                                          Masalah: Defisit Perawatan Diri Teratasi Sebagian
                                        </div>
                                      </div>
                                      <div class="col-lg-4" role="alert" id="div_alert_defisit_pengetahuan1_4" style="display: none;">
                                        <div class="alert alert-fill-info">
                                          <i class="fa fa-info-circle"></i>
                                          Diagnosis: Defisit pengetahuan
                                        </div>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th rowspan=3></th>
                                          <th rowspan=3>Catatan Pulang</th>
                                          <th colspan=3>Pelaksanaan</th>
                                          <th rowspan=3>Keterangan</th>
                                        </tr>
                                        <tr>
                                          <th colspan=2>Sudah diberikan</th>
                                          <th>Belum diberikasn</th>
                                        </tr>
                                        <tr>
                                          <th>Tanggal</th>
                                          <th>Jam</th>
                                          <th>Alasan</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td>Resep obat- obatan pulang</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_cp_1"></td>
                                          <td class="p5">
                                            <!-- <input type="time" name="time" id="time"/> -->
                                            <input type="time" class="border-none" id="waktu_cp_1"></td>
                                          <td class="p5">
                                            <textarea id="belum_diberikan_1" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style=""></textarea>
                                          </td>
                                          <td class="p5">
                                            <textarea id="keterangan_1" class="form-control-sm textarea-cus" placeholder="keterangan" rows="4" style=""></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td>Surat kontrol</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_cp_2"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_cp_2"></td>
                                          <td class="p5">
                                            <textarea id="belum_diberikan_2" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style=""></textarea>
                                          </td>
                                          <td class="p5">
                                            <textarea id="keterangan_2" class="form-control-sm textarea-cus" placeholder="keterangan" rows="4" style=""></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>3</td>
                                          <td>Rujukan rehabilitasi</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_cp_3"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_cp_3"></td>
                                          <td class="p5">
                                            <textarea id="belum_diberikan_3" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style=""></textarea>
                                          </td>
                                          <td class="p5">
                                            <textarea id="keterangan_3" class="form-control-sm textarea-cus" placeholder="keterangan" rows="4" style=""></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>4</td>
                                          <td>Leaflet informasi kesehatan</td>
                                          <td class="p5"><input type="date" class="border-none" id="tanggal_cp_4"></td>
                                          <td class="p5"><input type="time" class="border-none" id="waktu_cp_4"></td>
                                          <td class="p5">
                                            <textarea id="belum_diberikan_4" class="form-control-sm textarea-cus" placeholder="alasan" rows="4" style=""></textarea>
                                          </td>
                                          <td class="p5">
                                            <textarea id="keterangan_4" class="form-control-sm textarea-cus" placeholder="keterangan" rows="4" style=""></textarea>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td rowspan="4" colspan="3" style="font-weight: bold;">Discharger planner/ Perawat :
                                            <br/><br/><br/>
                                          <input type="text" class="border-none" id="discharge_planner" placeholder="(Nama dan tanda tangan)"></td>
                                          <td rowspan="4" colspan="3" style="font-weight: bold;">Pasien / Keluarga :
                                          <br/><br/><br/>
                                          <input type="text" class="border-none" id="pasien_keluarga" placeholder="(Nama dan tanda tangan)"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              <!-- </div>
                          </div>
                        </div> -->
                      </section>
                    </div>
                  </form>
                </div>
              </div>

              <div id="wizard2" style="display: none;">
                  <h1>Choose</h1>
                  <div>
                      <select id="choose">
                          <option value="0" selected="selected">default</option>
                          <option value="1">extraordinary</option>
                      </select>
                      <div class="row">
                          <div class="col-sm-6 grid-margin stretch-card" style="margin-left: auto; margin-right: 0;">
                            <div class="card">
                              <div class="card-body" style="border: 1px solid #000000;">
                                <!-- <form class="forms-sample"> -->
                                  <div class="form-group row">
                                    <label for="nama_pasien2" class="col-sm-3 col-form-label">Nama Pasien : </label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="nama_pasien2" placeholder="Nama Pasien" required="">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="no_rm2" class="col-sm-3 col-form-label">No. RM : </label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="no_rm2" placeholder="No. RM">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="usia2" class="col-sm-3 col-form-label">Usia : </label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="usia2" placeholder="Usia">
                                    </div>
                                  </div>
                                  <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                  <button class="btn btn-light">Cancel</button> -->
                                <!-- </form> -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body" style="border: 1px solid #000000;">
                                  <div class="form-group row">
                                    <label for="tanggal_pengkajian2" class="col-sm-3 col-form-label">Tanggal Pengkajian</label>
                                    <div class="col-sm-9">
                                      <!-- <div id="datepicker-popup" class="input-group date datepicker"> -->
                                        <input type="date" class="form-control" id="tanggal_pengkajian2">
                                        <!-- <span class="input-group-addon input-group-append border-left">
                                          <span class="mdi mdi-calendar input-group-text"></span>
                                        </span>
                                      </div> -->
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="sumber_data" class="col-sm-3 col-form-label">Sumber Data</label>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sumber_data2" id="radio_sumber_data1" value="1" checked>
                                          Pasien
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sumber_data2" id="radio_sumber_data2" value="2">
                                          Keluarga
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="radio_sumber_data2" id="radio_sumber_data3" value="3">
                                          Lainnya
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="riwayat_keluhan_pasien2" class="col-sm-3 col-form-label">Riwayat Keluhan Pasien</label>
                                    <div class="col-sm-9">
                                      <textarea class="form-control" id="riwayat_keluhan_pasien2" rows="3" placeholder="Riwayat Keluhan Pasien"></textarea>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body" style="border: 1px solid #000000;">
                                  <h5>Tanda-tanda Vital</h5>
                                  <div class="form-group row">
                                    <div class="col">
                                      <label>TD:</label>
                                      <div class="col-sm-12" style="padding: 0;">
                                        <input style="display: inline; padding: 0.875rem 0.575rem;" class="form-control col-sm-5" id="td_sistole2" type="text" onchange="changeTD(this.value, 1)" />
                                        /
                                        <input style="display: inline; padding: 0.875rem 0.575rem;" class="form-control col-sm-5" id="td_diastole2" type="text" onchange="changeTD(this.value, 2)" />
                                      </div>
                                    </div>
                                    <div class="col col-sm-4">
                                      <label>S:</label>
                                      <input class="form-control" id="suhu2" type="text"/>
                                    </div>
                                    <div class="col col-sm-4">
                                      <label>SPO2:</label>
                                      <input class="form-control" id="spo22" type="text"/>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col">
                                      <label>N:</label>
                                      <input class="form-control" id="nadi2" type="text" onchange="changeN(this.value)" />
                                    </div>
                                    <div class="col">
                                      <label>RR:</label>
                                      <input class="form-control" id="rr2" type="text" onchange="changeRR(this.value)" />
                                    </div>
                                    <div class="col">
                                      <label>GCS:</label>
                                      <input class="form-control" id="gcs2" type="text" />
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <h1>Result 1</h1>
                  <div></div><!-- data-mode="async" data-url="/rest/service/0"-->
              </div>

            </div>
          </div>
        </div>

        <!-- content-wrapper ends -->

        <!-- partial:../../partials/_footer.html -->
        @include('backend.partials.footer')
        <!-- partial -->

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
@endsection

@push('js')
  <!-- Custom js for this page-->
  <script src="{{asset('assets/js/data-table.js')}}"></script>
  <script src="{{asset('assets/js/modal-demo.js')}}"></script>
  <!-- End custom js for this page-->

  <script type="text/javascript">

    var a1_diag_bersihan_jalan = 0;
    var a1_diag_ansietas = 0;
    var a1_diag_perawatan_diri = 0;

    var a3_diag_bersihan_jalan = 2;
    var a3_diag_ansietas = 2;
    var a3_diag_perawatan_diri = 2;

    var a4_diag_defisit_pengetahuan = 0;

    var get_data_step_three = [];
    var jumlah_skor = 0;

    $(document).ready(function () {
      
      var now = new Date();
 
      var day = ("0" + now.getDate()).slice(-2);
      var month = ("0" + (now.getMonth() + 1)).slice(-2);

      var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

      var hours = now.getHours();
      var minutes = now.getMinutes();
      var fix_hours = hours;
      var fix_minutes = minutes;
      if(hours < 10){
        fix_hours = "0"+hours;
      }

      if(minutes < 10){
        fix_minutes = "0"+minutes;
      }

      $("#nama_pasien").val("Agus");
      $("#no_rm").val("12345");
      $("#usia").val("28");
      $("#tanggal_pengkajian").val(today);
      $("input[name=radio_sumber_data][value='2']").prop("checked",true);
      $("#riwayat_keluhan_pasien").val("Riwayat Keluhan Pasien");
      $("#td_sistole").val("150");
      changeTD("150",1);
      $("#td_diastole").val("100");
      changeTD("100",2);
      $("#suhu").val("37");
      $("#spo2").val("160");
      $("#nadi").val("70");
      changeN("70");
      $("#rr").val("22");
      changeRR("22");
      $("#gcs").val("40");
      $("input[name=radio_batuk][value='1']").prop("checked",true);
      $("input[name=radio_sesak][value='1']").prop("checked",true);
      $("input[name=radio_tegang][value='1']").prop("checked",true);
      $("input[name=radio_kem_mandi][value='1']").prop("checked",true);
      $("input[name=radio_kem_berhias_diri][value='2']").prop("checked",true);
      $("#riwayat_perawatan_sebelumnya").val("Tidak ada...");

      for(var a=1;a<32;a++){

        $('#tanggal_dp_'+a).val(today);
        console.log(fix_hours+":"+fix_minutes);
        $('#waktu_dp_'+a).val(fix_hours+":"+fix_minutes);
        if(a < 22){
          $("input[name=radio_dp_"+a+"][value='1']").prop("checked",true);
        }else{
          $('#tidak_dilakukan_'+a).val('Tidak Dilakukan '+a);
        }

      }

      for(var a=1;a<5;a++){

        $('#tanggal_cp_'+a).val(today);
        $('#waktu_cp_'+a).val(fix_hours+":"+fix_minutes);
        if(a < 3){
          $('#belum_diberikan_'+a).val('Belum Diberikan '+a);
        }else{
          $('#keterangan_'+a).val('Keterangan '+a);
        }

      }


      $("#time").inputmask("h:s",{ "placeholder": "hh/mm" });

    });

    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    var id_pengkajian = 0;
    var id_intervensi = 0;
    var id_discharge_planning = 0;

    var wizard = $("#wizard").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      stepsOrientation: "vertical",
      onFinished: function(event, currentIndex) {
        // alert("Submitted!");

        var tam_radio_dp_1 = 0;
        var tam_radio_dp_2 = 0;
        if($('input[name="radio_dp_1"]:checked').val()){
          tam_radio_dp_1 = $('input[name="radio_dp_1"]:checked').val();
        }

        if($('input[name="radio_dp_2"]:checked').val()){
          tam_radio_dp_2 = $('input[name="radio_dp_2"]:checked').val();
        }

        var tam_push_all = [];
        var tam_push_1 = [];
        var tam_push_2 = [];

        tam_push_1.push($('#tanggal_dp_1').val());
        tam_push_1.push($('#waktu_dp_1').val());
        tam_push_1.push(tam_radio_dp_1);
        tam_push_1.push($('#tidak_dilakukan_1').val());

        tam_push_2.push($('#tanggal_dp_2').val());
        tam_push_2.push($('#waktu_dp_2').val());
        tam_push_2.push(tam_radio_dp_2);
        tam_push_2.push($('#tidak_dilakukan_2').val());

        tam_push_all.push(tam_push_1.join('##'));
        tam_push_all.push(tam_push_2.join('##'));

        var tam_push_all_first = [];
        var tam_push_all_second = [];
        var tam_push_all_third = [];
        var tam_push_all_fourth = [];
        for(var a=1;a<11;a++){

          var tam_push = [];
          var data_tanggal = "empty";
          var data_waktu = "empty";
          var data_radio = "0";
          var data_tidak_dilakukan = "empty";

          if($('#tanggal_dp_'+a).val() != ""){
            data_tanggal = $('#tanggal_dp_'+a).val();
          }

          if($('#waktu_dp_'+a).val() != ""){
            data_waktu = $('#waktu_dp_'+a).val();
          }

          if($('input[name="radio_dp_'+a+'"]:checked').val()){
            data_radio = $('input[name="radio_dp_'+a+'"]:checked').val();
          }

          if($('#tidak_dilakukan_'+a).val() != ""){
            data_tidak_dilakukan = $('#tidak_dilakukan_'+a).val();
          }

          tam_push.push(data_tanggal);
          tam_push.push(data_waktu);
          tam_push.push(data_radio);
          tam_push.push(data_tidak_dilakukan);
          tam_push_all_first.push(tam_push.join('##'));
        }

        for(var a=11;a<21;a++){

          var tam_push = [];
          var data_tanggal = "empty";
          var data_waktu = "empty";
          var data_radio = "0";
          var data_tidak_dilakukan = "empty";

          if($('#tanggal_dp_'+a).val() != ""){
            data_tanggal = $('#tanggal_dp_'+a).val();
          }

          if($('#waktu_dp_'+a).val() != ""){
            data_waktu = $('#waktu_dp_'+a).val();
          }

          if($('input[name="radio_dp_'+a+'"]:checked').val()){
            data_radio = $('input[name="radio_dp_'+a+'"]:checked').val();
          }

          if($('#tidak_dilakukan_'+a).val() != ""){
            data_tidak_dilakukan = $('#tidak_dilakukan_'+a).val();
          }

          tam_push.push(data_tanggal);
          tam_push.push(data_waktu);
          tam_push.push(data_radio);
          tam_push.push(data_tidak_dilakukan);
          tam_push_all_second.push(tam_push.join('##'));
        }

        for(var a=21;a<32;a++){

          var tam_push = [];
          var data_tanggal = "empty";
          var data_waktu = "empty";
          var data_radio = "0";
          var data_tidak_dilakukan = "empty";

          if($('#tanggal_dp_'+a).val() != ""){
            data_tanggal = $('#tanggal_dp_'+a).val();
          }

          if($('#waktu_dp_'+a).val() != ""){
            data_waktu = $('#waktu_dp_'+a).val();
          }

          if($('input[name="radio_dp_'+a+'"]:checked').val()){
            data_radio = $('input[name="radio_dp_'+a+'"]:checked').val();
          }

          if($('#tidak_dilakukan_'+a).val() != ""){
            data_tidak_dilakukan = $('#tidak_dilakukan_'+a).val();
          }

          tam_push.push(data_tanggal);
          tam_push.push(data_waktu);
          tam_push.push(data_radio);
          tam_push.push(data_tidak_dilakukan);
          tam_push_all_third.push(tam_push.join('##'));
        }

        for(var a=1;a<5;a++){
          var tam_push = [];
          var data_tanggal = "empty";
          var data_waktu = "empty";
          var data_belum_diberikan = "empty";
          var data_keterangan = "empty";

          if($('#tanggal_cp_'+a).val() != ""){
            data_tanggal = $('#tanggal_cp_'+a).val();
          }

          if($('#waktu_cp_'+a).val() != ""){
            data_waktu = $('#waktu_cp_'+a).val();
          }

          if($('#belum_diberikan_'+a).val() != ""){
            data_belum_diberikan = $('#belum_diberikan_'+a).val();
          }

          if($('#keterangan_'+a).val() != ""){
            data_keterangan = $('#keterangan_'+a).val();
          }

          tam_push.push(data_tanggal);
          tam_push.push(data_waktu);
          tam_push.push(data_belum_diberikan);
          tam_push.push(data_keterangan);
          tam_push_all_fourth.push(tam_push.join('##'));
        }

        //insert step 4
        $.ajax({ url:"{!! route('insert-step-four') !!}",
            async: false,
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { 
                "id_pengkajian" : id_pengkajian,
                "id_discharge_planning" : $("#id_discharge_planning").val(),
                "kesesuaian_perilaku" : $('input[name="radio_kesesuaian_perilaku"]:checked').val(),
                "persepsi_terhadap_masalah" : $('input[name="radio_persepsi_terhadap_masalah"]:checked').val(),
                "ketepatan_pemeriksaan" : $('input[name="radio_ketepatan_pemeriksaan"]:checked').val(),
                "perubahan_perilaku" : $('input[name="radio_perubahan_perilaku"]:checked').val(),
                "masalah_yang_dihadapi" : $('input[name="radio_masalah_yang_dihadapi"]:checked').val(),
                // "tanggal_dp_1" : $('#tanggal_dp_1').val(),
                // "waktu_dp_1" : $('#waktu_dp_1').val(),
                // "radio_dp_1" : tam_radio_dp_1,
                // "tidak_dilakukan_1" : $('#tidak_dilakukan_1').val(),
                // "tanggal_dp_2" : $('#tanggal_dp_2').val(),
                // "waktu_dp_2" : $('#waktu_dp_2').val(),
                // "radio_dp_2" : tam_radio_dp_2,
                // "tidak_dilakukan_2" : $('#tidak_dilakukan_2').val(),
                "tam_push_all_first": tam_push_all_first.join('-#-'),
                "tam_push_all_second": tam_push_all_second.join('-#-'),
                "tam_push_all_third": tam_push_all_third.join('-#-'),
                "tam_push_all_fourth": tam_push_all_fourth.join('-#-'),
                "total_skor": jumlah_skor,
                "pasien_keluarga": $("#pasien_keluarga").val(),
                "discharge_planner": $("#discharge_planner").val(),
                _token : $('meta[name="csrf-token"]').attr('content'), 
                // "_token": "{{ csrf_token() }}" 
            },
            type: 'POST',
            success: function(output) {
                //Gets the options object (object passed to the steps() function)
                console.log(output);
                id_discharge_planning = output.id_discharge_planning;
                $("#id_discharge_planning").val(id_discharge_planning);
                showToastPosition('mid-center');
                // var options = wizard.data("options");
                // var bodyTag = options["bodyTag"];
                // wizard.children(".content").children(bodyTag).eq(newIndex).html(output);
            },
            error:function(data){
              console.log(data);
            }
        });

      },
      errorPlacement: function errorPlacement(error, element) {
        element.before(error);
      },
      onStepChanging: function (event, currentIndex, newIndex) { 
        // console.log(event);
        // console.log(currentIndex);
        // console.log(newIndex);
        if (currentIndex === 0)
        {
          $("#div_loading").show();
          $("#wizard").hide();
          //insert step 1
          $.ajax({ url:"{!! route('insert-step-one') !!}",
              async: false,
              data: { 
                  "id_pengkajian" : $("#id_pengkajian").val(),
                  "nama_pasien" : $("#nama_pasien").val(),
                  "no_rm" : $("#no_rm").val(),
                  "usia" : $("#usia").val(),
                  "tanggal_pengkajian" : $("#tanggal_pengkajian").val(),
                  "sumber_data" : $('input[name="radio_sumber_data"]:checked').val(),
                  "riwayat_keluhan_pasien" : $("#riwayat_keluhan_pasien").val(),
                  "td_sistole" : $("#td_sistole").val(),
                  "td_diastole" : $("#td_diastole").val(),
                  "suhu" : $("#suhu").val(),
                  "spo2" : $("#spo2").val(),
                  "nadi" : $('#nadi').val(),
                  "rr" : $("#rr").val(),
                  "gcs" : $("#gcs").val(),
                  "batuk" : $('input[name="radio_batuk"]:checked').val(),
                  "rr30" : $('input[name="radio_rr_30"]:checked').val(),
                  "sputum" : $('input[name="radio_sputum"]:checked').val(),
                  "sesak" : $('input[name="radio_sesak"]:checked').val(),
                  "wheezing" : $('input[name="radio_wheezing"]:checked').val(),
                  "ronchi_kering" : $('input[name="radio_ronchi"]:checked').val(),
                  "gelisah" : $('input[name="radio_gelisah"]:checked').val(),
                  "tegang" : $('input[name="radio_tegang"]:checked').val(),
                  "bingung" : $('input[name="radio_bingung"]:checked').val(),
                  "khawatir" : $('input[name="radio_khawatir"]:checked').val(),
                  "rr_radio" : $('input[name="radio_rr"]:checked').val(),
                  "nadi_radio" : $('input[name="radio_nadi"]:checked').val(),
                  "td_radio" : $('input[name="radio_td"]:checked').val(),
                  "anoreksia" : $('input[name="radio_anoreksia"]:checked').val(),
                  "kemampuan_mandi" : $('input[name="radio_kem_mandi"]:checked').val(),
                  "kemampuan_berpakaian" : $('input[name="radio_kem_berpakaian"]:checked').val(),
                  "kemampuan_berhias_diri" : $('input[name="radio_kem_berhias_diri"]:checked').val(),
                  "kemampuan_ke_toilet" : $('input[name="radio_kem_ke_toilet"]:checked').val(),
                  "kemampuan_makan" : $('input[name="radio_kem_makan"]:checked').val(),
                  "minat_perawatan_diri" : $('input[name="radio_perawatan_diri"]:checked').val(),
                  "riwayat_perawatan_sebelumnya" : $('#riwayat_perawatan_sebelumnya').val(),
                  "riwayat_penyakit_keluarga" : $('input[name="radio_riwayat_penyakit_keluarga"]:checked').val(),
                  "sebutkan_riwayat_penyakit_keluarga" : $('#sebutkan_riwayat_penyakit_keluarga').val(),
                  "riwayat_alergi" : $('input[name="radio_riwayat_alergi"]:checked').val(),
                  "sebutkan_riwayat_alergi" : $('#sebutkan_riwayat_alergi').val(),
                  "reaksi_riwayat_alergi" : $('#reaksi_riwayat_alergi').val(),
                  "status_psikologi_sosial" : $('input[name="radio_psikologi_sosial"]:checked').val(),
                  "sistem_pendukung" : $('input[name="radio_sistem_pendukung"]:checked').val(),
                  "sebutkan_sistem_pendukung" : $('#sebutkan_sistem_pendukung').val(),
                  "ekonomi" : $('input[name="radio_ekonomi"]:checked').val(),
                  "spiritual" : $('input[name="radio_spiritual"]:checked').val(),
                  "_token": "{{ csrf_token() }}" 
              },
              type: 'POST',
              success: function(output) {
                  //Gets the options object (object passed to the steps() function)
                  console.log(output);
                  id_pengkajian = output.id_pengkajian;
                  $("#id_pengkajian").val(id_pengkajian);
                  $("#pasien_keluarga").val($("#nama_pasien").val());
                  // var options = wizard.data("options");
                  // var bodyTag = options["bodyTag"];
                  // wizard.children(".content").children(bodyTag).eq(newIndex).html(output);
              },
              error:function(data){
                console.log(data);
              }
          });
        }else if (currentIndex === 1)
        {
          $("#div_loading").show();
          $("#wizard").hide();
        }else if (currentIndex === 3)
        {
          $("#div_loading").show();
          $("#wizard").hide();
        }

        return true; 
      },
      onStepChanged: function (event, currentIndex, priorIndex) { 
          // console.log("onStepChanged");
          // console.log(event);
          // console.log(currentIndex);
          // console.log(priorIndex);
        if(currentIndex === 1){
            $("#wizard").show();
            $.ajax({ 
                url:"{!! route('get-data-step-one') !!}",
                async: false,
                data: { 
                  "id_pengkajian": id_pengkajian,
                  "_token": "{{ csrf_token() }}" 
                },
                type: 'GET',
                success: function(output) {
                  //Gets the options object (object passed to the steps() function)
                  console.log(output);
                  load_data_intervensi(output.data_intervensi);
                  $("#div_loading").hide();
                  // var options = wizard2.data("options");
                  // var bodyTag = options["bodyTag"];
                  // wizard2.children(".content").children(bodyTag).eq(newIndex).html(output);
                }
            }); 
        }else if(currentIndex === 2){
            $("#wizard").show();
            $.ajax({ 
                url:"{!! route('get-data-step-three') !!}",
                async: false,
                data: { 
                  "id_pengkajian" : id_pengkajian,
                  // "id_intervensi": id_intervensi,
                  "_token": "{{ csrf_token() }}" 
                },
                type: 'GET',
                success: function(output) {
                  //Gets the options object (object passed to the steps() function)
                  // console.log(output);
                  var tam_hasil = output.data_intervensi;
                  var html = "";

                  get_data_step_three = tam_hasil;

                  $("input[name=radio_batuk_int][value='"+tam_hasil.batuk+"']").prop("checked",true);
                  $("input[name=radio_rr_30_int][value='"+tam_hasil.rr30+"']").prop("checked",true);
                  $("input[name=radio_sputum_int][value='"+tam_hasil.sputum+"']").prop("checked",true);
                  $("input[name=radio_sesak_int][value='"+tam_hasil.sesak+"']").prop("checked",true);
                  $("input[name=radio_wheezing_int][value='"+tam_hasil.wheezing+"']").prop("checked",true);
                  $("input[name=radio_ronchi_int][value='"+tam_hasil.ronchi_kering+"']").prop("checked",true);

                  $("input[name=radio_gelisah_int][value='"+tam_hasil.gelisah+"']").prop("checked",true);
                  $("input[name=radio_tegang_int][value='"+tam_hasil.tegang+"']").prop("checked",true);
                  $("input[name=radio_bingung_int][value='"+tam_hasil.merasa_bingung+"']").prop("checked",true);
                  $("input[name=radio_khawatir_int][value='"+tam_hasil.merasa_khawatir+"']").prop("checked",true);
                  $("input[name=radio_rr_int][value='"+tam_hasil.rr_radio+"']").prop("checked",true);
                  $("input[name=radio_nadi_int][value='"+tam_hasil.nadi_radio+"']").prop("checked",true);
                  $("input[name=radio_td_int][value='"+tam_hasil.td_radio+"']").prop("checked",true);
                  $("input[name=radio_anoreksia_int][value='"+tam_hasil.anoreksia+"']").prop("checked",true);

                  $("input[name=radio_kem_mandi_int][value='"+tam_hasil.kemampuan_mandi+"']").prop("checked",true);
                  $("input[name=radio_kem_berpakaian_int][value='"+tam_hasil.kemampuan_berpakaian+"']").prop("checked",true);
                  $("input[name=radio_kem_berhias_diri_int][value='"+tam_hasil.kemampuan_berhias_diri+"']").prop("checked",true);
                  $("input[name=radio_kem_ke_toilet_int][value='"+tam_hasil.kemampuan_ke_toilet+"']").prop("checked",true);
                  $("input[name=radio_kem_makan_int][value='"+tam_hasil.kemampuan_makan+"']").prop("checked",true);
                  $("input[name=radio_perawatan_diri_int][value='"+tam_hasil.minat_perawatan_diri+"']").prop("checked",true);

                  if(tam_hasil.diagnosis_bersihan_jalan == 0){
                    $("#div_alert_bersihan_jalan0").show();
                    $("#div_alert_bersihan_jalan1").hide();

                    //untuk step 4
                    $("#div_alert_bersihan_jalan0_4").show();
                    $("#div_alert_bersihan_jalan1_4").hide();
                    // html += '<div class="col-lg-12 alert alert-fill-success" role="alert">\
                    //           <i class="fa fa-check-circle"></i>\
                    //           Diagnosis: Bersihan Jalan Nafas Tidak Efektif Teratasi\
                    //         </div>';
                  }else if(tam_hasil.diagnosis_bersihan_jalan == 1){
                    $("#div_alert_bersihan_jalan1").show();
                    $("#div_alert_bersihan_jalan0").hide();

                    //untuk step 4
                    $("#div_alert_bersihan_jalan1_4").show();
                    $("#div_alert_bersihan_jalan0_4").hide();
                    // html += '<div class="col-lg-12 alert alert-fill-info" role="alert">\
                    //           <i class="fa fa-info-circle"></i>\
                    //           Diagnosis: Bersihan Jalan Nafas Tidak Efektif Teratasi Sebagian\
                    //         </div>';
                  }

                  if(tam_hasil.diagnosis_ansietas == 0){
                    $("#div_alert_ansietas0").show();
                    $("#div_alert_ansietas1").hide();

                    //untuk step 4
                    $("#div_alert_ansietas0_4").show();
                    $("#div_alert_ansietas1_4").hide();
                    // html += '<div class="col-lg-12 alert alert-fill-success" role="alert">\
                    //           <i class="fa fa-check-circle"></i>\
                    //           Masalah : Ansietas Teratasi\
                    //         </div>';
                  }else if(tam_hasil.diagnosis_ansietas == 1){
                    $("#div_alert_ansietas1").show();
                    $("#div_alert_ansietas0").hide();

                    //untuk step 4
                    $("#div_alert_ansietas1_4").show();
                    $("#div_alert_ansietas0_4").hide();
                    // html += '<div class="col-lg-12 alert alert-fill-info" role="alert">\
                    //           <i class="fa fa-info-circle"></i>\
                    //           Masalah : Ansietas Teratasi Sebagian\
                    //         </div>';
                  }

                  if(tam_hasil.diagnosis_perawatan_diri == 0){
                    $("#div_alert_perawatan_diri0").show();
                    $("#div_alert_perawatan_diri1").hide();

                    //untuk step 4
                    $("#div_alert_perawatan_diri0_4").show();
                    $("#div_alert_perawatan_diri1_4").hide();
                    // html += '<div class="col-lg-12 alert alert-fill-success" role="alert">\
                    //           <i class="fa fa-check-circle"></i>\
                    //           Masalah: Defisit Perawatan Diri Teratasi \
                    //         </div>';
                  }else if(tam_hasil.diagnosis_perawatan_diri == 1){
                    $("#div_alert_perawatan_diri1").show();
                    $("#div_alert_perawatan_diri0").hide();

                    //untuk step 4
                    $("#div_alert_perawatan_diri1_4").show();
                    $("#div_alert_perawatan_diri0_4").hide();
                    // html += '<div class="col-lg-12 alert alert-fill-info" role="alert">\
                    //           <i class="fa fa-info-circle"></i>\
                    //           Masalah: Defisit Perawatan Diri Teratasi Sebagian\
                    //         </div>';
                  }
                  $("#div_loading").hide();
                  // $("#div_evaluasi").html(html);

                  // load_data_intervensi(output.data_intervensi);
                  // var options = wizard2.data("options");
                  // var bodyTag = options["bodyTag"];
                  // wizard2.children(".content").children(bodyTag).eq(newIndex).html(output);
                }
            }); 
        }else if(currentIndex === 3){
            $("#wizard").show();
            $("#div_loading").hide();
        }

      },
      saveState: true
    });
    
    var data_id_pengkajian = 0;
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex)
        {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            alert("Submitted!");
        }
    });

    var wizard2 = $("#wizard2").steps({
        onStepChanging: function(event, currentIndex, newIndex)
        {
          // var move = false;
            if (currentIndex === 0)
            {
                if ($("#choose > option:selected").val() === "1")
                {

                    // wizard2.steps("remove", 1);
                    // move = false;
                    $.ajax({ url:"{!! route('add') !!}",
                      async: false,
                      data: { 
                          "choose" : $("#choose > option:selected").val(),
                          "nama_pasien" : $("#nama_pasien2").val(),
                          "no_rm" : $("#no_rm2").val(),
                          "usia" : $("#usia2").val(),
                          "tanggal_pengkajian" : $("#tanggal_pengkajian2").val(),
                          "sumber_data" : $('input[name="radio_sumber_data2"]:checked').val(),
                          "riwayat_keluhan_pasien" : $("#riwayat_keluhan_pasien2").val(),
                          "td_sistole" : $("#td_sistole2").val(),
                          "td_diastole" : $("#td_diastole2").val(),
                          "suhu" : $("#suhu2").val(),
                          "spo2" : $("#spo22").val(),
                          "nadi" : $('#nadi2').val(),
                          "rr" : $("#rr2").val(),
                          "gcs" : $("#gcs2").val(),
                          "_token": "{{ csrf_token() }}" 
                        },
                       type: 'POST',
                       success: function(output) {
                              //Gets the options object (object passed to the steps() function)
                              console.log(output);
                              data_id_pengkajian = output.choose;
                              // move = output.d;
                              // return true;
                              // var options = wizard2.data("options");
                              // var bodyTag = options["bodyTag"];
                              // console.log(bodyTag);
                              // console.log(newIndex);
                              // console.log(wizard2.children(".content").children(bodyTag));
                              // wizard2.children(".content").children(bodyTag).eq(newIndex).html(output);
                            }
                  });

                    // In this case you could also use add instead of insert
                    // wizard2.steps("insert", 1, {
                    //     title: "Result 2",
                    //     contentMode: "async",
                    //     contentUrl: "{!! route('hasil') !!}"
                    // });

                    // wizard2.steps("next");

                }
            }
            return true;
            // return move;
        },
        onStepChanged: function (event, currentIndex, priorIndex) { 
            if(currentIndex === 1){
                $.ajax({ url:"{!! route('hasil') !!}",
                    async: false,
                    data: { 
                      "data_id_pengkajian": data_id_pengkajian,
                      "_token": "{{ csrf_token() }}" 
                    },
                    type: 'GET',
                    success: function(output) {
                            //Gets the options object (object passed to the steps() function)
                            console.log(output);
                            // var options = wizard2.data("options");
                            // var bodyTag = options["bodyTag"];
                            // wizard2.children(".content").children(bodyTag).eq(newIndex).html(output);
                          }
                }); 
            }
            // console.log("onStepChanged");
            // console.log(event);
            // console.log(currentIndex);
            // console.log(priorIndex);
        }
    });

    function changeTD(val, jenis){
      //jenis 1 sistole, 2 diastole
      val = parseInt(val);
      var hasil = 2;
      var sis = 2;
      var dias = 2;
      if(jenis == "1"){
        if(val > 140){
          sis = 1;
        }else if(val >= 90 && val <= 140){
          sis = 2;
        }else{
          sis = 3
        }
      }else if(jenis == "2"){
        if(val > 90){
          dias = 1;
        }else if(val >= 60 && val <= 90){
          dias = 2;
        }else{
          dias = 3
        }
      }

      //acuannya yang diastole
      hasil = dias;
      console.log(jenis+" - "+hasil);
      $("input[name=radio_td][value=" + hasil + "]").prop('checked', true);

    }

    function changeN(val){
      val = parseInt(val);
      var hasil = 2;
      if(val > 100){
        hasil = 1;
      }else if(val >= 60 && val <= 100){
        hasil = 2;
      }else{
        hasil = 3
      }

      $("input[name=radio_nadi][value=" + hasil + "]").prop('checked', true);

    }

    function changeRR(val){
      val = parseInt(val);
      var hasil = 2;
      var hasil30 = 2;
      if(val > 20){
        hasil = 1;
      }else if(val >= 12 && val <= 20){
        hasil = 2;
      }else{
        hasil = 3
      }

      if(val > 30){
        hasil30 = 1;
      }

      $("input[name=radio_rr][value=" + hasil + "]").prop('checked', true);
      $("input[name=radio_rr_30][value=" + hasil30 + "]").prop('checked', true);

    }

    $("input[name=radio_riwayat_penyakit_keluarga]").click(function(){
        var radioValue = $("input[name='radio_riwayat_penyakit_keluarga']:checked").val();
        if(radioValue == "1"){
          $("#div_sebutkan_rpk").show();
        }else{
          $("#div_sebutkan_rpk").hide();
        }
    });

    $("input[name=radio_riwayat_alergi]").click(function(){
        var radioValue = $("input[name='radio_riwayat_alergi']:checked").val();
        if(radioValue == "1"){
          $("#div_sebutkan_reaksi_ra").show();
        }else{
          $("#div_sebutkan_reaksi_ra").hide();
        }
    });

    $("input[name=radio_sistem_pendukung]").click(function(){
        var radioValue = $("input[name='radio_sistem_pendukung']:checked").val();
        if(radioValue == "6"){
          $("#div_sebutkan_spya").show();
        }else{
          $("#div_sebutkan_spya").hide();
        }
    });

    function change_keluhan_utama(name_radio, val){
      // console.log(name_radio+"---"+val);
      var arr_radio_1 = ["radio_batuk","radio_rr_30","radio_sputum","radio_sesak","radio_wheezing","radio_ronchi"];
      var arr_radio_2 = ["radio_gelisah","radio_tegang","radio_bingung","radio_khawatir","radio_rr","radio_nadi","radio_td","radio_anoreksia"];
      var arr_radio_3 = ["radio_kem_mandi","radio_kem_berpakaian","radio_kem_berhias_diri","radio_kem_ke_toilet","radio_kem_makan","radio_perawatan_diri"];

      // var tam_radio = $("input[name='"+name_radio+"']:checked").val();
      if(name_radio == "radio_batuk" || name_radio == "radio_rr_30" || name_radio == "radio_sputum" || name_radio == "radio_sesak" || name_radio == "radio_wheezing" || name_radio == "radio_ronchi"){
        if(val == "1"){
          a1_diag_bersihan_jalan = 1;
        }else if(val == "2"){
          var tam_radio1_kosong = 0;
          for(var a=0;a<arr_radio_1.length;a++){

            var tam_radio1_val = $("input[name='"+arr_radio_1[a]+"']:checked").val();
            if(tam_radio1_val == "1"){
              tam_radio1_kosong = 1;
            }

          }

          a1_diag_bersihan_jalan = tam_radio1_kosong;

        }
      }

      if(name_radio == "radio_gelisah" || name_radio == "radio_tegang" || name_radio == "radio_bingung" || name_radio == "radio_khawatir" || name_radio == "radio_rr" || name_radio == "radio_nadi" || name_radio == "radio_td" || name_radio == "radio_anoreksia"){
        if(val == "1"){
          a1_diag_ansietas = 1;
        }else if(val == "2"){
          var tam_radio2_kosong = 0;
          for(var a=0;a<arr_radio_2.length;a++){

            var tam_radio2_val = $("input[name='"+arr_radio_2[a]+"']:checked").val();
            if(tam_radio2_val == "1"){
              tam_radio2_kosong = 1;
            }

          }

          a1_diag_ansietas = tam_radio2_kosong;
        }
      }

      if(name_radio == "radio_kem_mandi" || name_radio == "radio_kem_berpakaian" || name_radio == "radio_kem_berhias_diri" || name_radio == "radio_kem_ke_toilet" || name_radio == "radio_kem_makan" || name_radio == "radio_perawatan_diri"){
        if(val == "1" || val == "2"){
          a1_diag_perawatan_diri = 1;
        }else if(val == "3"){
          var tam_radio3_kosong = 0;
          for(var a=0;a<arr_radio_3.length;a++){

            var tam_radio3_val = $("input[name='"+arr_radio_3[a]+"']:checked").val();
            if(tam_radio3_val == "1" || tam_radio3_val == "2"){
              tam_radio3_kosong = 1;
            }

          }

          a1_diag_perawatan_diri = tam_radio3_kosong;
        }
      }

      if(a1_diag_bersihan_jalan == 1){
        $("#div_a1_bersihan_jalan").show();
      }else{
        $("#div_a1_bersihan_jalan").hide();
      }

      if(a1_diag_ansietas == 1){
        $("#div_a1_ansietas").show();
      }else{
        $("#div_a1_ansietas").hide();
      }

      if(a1_diag_perawatan_diri == 1){
        $("#div_a1_perawatan_diri").show();
      }else{
        $("#div_a1_perawatan_diri").hide();
      }

      if(a1_diag_bersihan_jalan == 0 && a1_diag_ansietas == 0 && a1_diag_perawatan_diri == 0){
        $("#div_a1_tidak_ada").show();
      }else{
        $("#div_a1_tidak_ada").hide();
      }

    }

    function change_keluhan_utama_int(name_radio, val){

      var arr_radio_1 = ["radio_batuk_int","radio_rr_30_int","radio_sputum_int","radio_sesak_int","radio_wheezing_int","radio_ronchi_int"];
      var arr_radio_2 = ["radio_gelisah_int","radio_tegang_int","radio_bingung_int","radio_khawatir_int","radio_rr_int","radio_nadi_int","radio_td_int","radio_anoreksia_int"];
      var arr_radio_3 = ["radio_kem_mandi_int","radio_kem_berpakaian_int","radio_kem_berhias_diri_int","radio_kem_ke_toilet_int","radio_kem_makan_int","radio_perawatan_diri_int"];

      var diagnosis_bersihan_jalan_awal = "";
      var diagnosis_ansietas_awal = "";
      var diagnosis_perawatan_diri_awal = "";

      if(get_data_step_three != []){

        diagnosis_bersihan_jalan_awal = get_data_step_three.diagnosis_bersihan_jalan;
        diagnosis_ansietas_awal = get_data_step_three.diagnosis_ansietas;
        diagnosis_perawatan_diri_awal = get_data_step_three.diagnosis_perawatan_diri;

        a3_diag_bersihan_jalan = diagnosis_bersihan_jalan_awal;
        a3_diag_ansietas = diagnosis_ansietas_awal;
        a3_diag_perawatan_diri = diagnosis_perawatan_diri_awal;

      }

      // var tam_radio = $("input[name='"+name_radio+"']:checked").val();
      if(name_radio == "radio_batuk_int" || name_radio == "radio_rr_30_int" || name_radio == "radio_sputum_int" || name_radio == "radio_sesak_int" || name_radio == "radio_wheezing_int" || name_radio == "radio_ronchi_int"){
        if(diagnosis_bersihan_jalan_awal != "2"){

          if(val == "1"){
            a3_diag_bersihan_jalan = 1;
          }else if(val == "2"){
            var tam_radio1_kosong = 0;
            for(var a=0;a<arr_radio_1.length;a++){

              var tam_radio1_val = $("input[name='"+arr_radio_1[a]+"']:checked").val();
              if(tam_radio1_val == "1"){
                tam_radio1_kosong = 1;
              }

            }

            a3_diag_bersihan_jalan = tam_radio1_kosong;

          }

        }
      }

      if(name_radio == "radio_gelisah_int" || name_radio == "radio_tegang_int" || name_radio == "radio_bingung_int" || name_radio == "radio_khawatir_int" || name_radio == "radio_rr_int" || name_radio == "radio_nadi_int" || name_radio == "radio_td_int" || name_radio == "radio_anoreksia_int"){
        if(diagnosis_ansietas_awal != "2"){

          if(val == "1"){
            a3_diag_ansietas = 1;
          }else if(val == "2"){
            var tam_radio2_kosong = 0;
            for(var a=0;a<arr_radio_2.length;a++){

              var tam_radio2_val = $("input[name='"+arr_radio_2[a]+"']:checked").val();
              if(tam_radio2_val == "1"){
                tam_radio2_kosong = 1;
              }

            }

            a3_diag_ansietas = tam_radio2_kosong;
          }

        }
      }

      if(name_radio == "radio_kem_mandi_int" || name_radio == "radio_kem_berpakaian_int" || name_radio == "radio_kem_berhias_diri_int" || name_radio == "radio_kem_ke_toilet_int" || name_radio == "radio_kem_makan_int" || name_radio == "radio_perawatan_diri_int"){
        if(diagnosis_perawatan_diri_awal != "2"){

          if(val == "1" || val == "2"){
            a3_diag_perawatan_diri = 1;
          }else if(val == "3"){
            var tam_radio3_kosong = 0;
            for(var a=0;a<arr_radio_3.length;a++){

              var tam_radio3_val = $("input[name='"+arr_radio_3[a]+"']:checked").val();
              if(tam_radio3_val == "1" || tam_radio3_val == "2"){
                tam_radio3_kosong = 1;
              }

            }

            a3_diag_perawatan_diri = tam_radio3_kosong;
          }

        }
      }

      if(a3_diag_bersihan_jalan == 0){
        $("#div_alert_bersihan_jalan0").show();
        $("#div_alert_bersihan_jalan1").hide();

        //untuk step 4
        $("#div_alert_bersihan_jalan0_4").show();
        $("#div_alert_bersihan_jalan1_4").hide();
      }else if(a3_diag_bersihan_jalan == 1){
        $("#div_alert_bersihan_jalan1").show();
        $("#div_alert_bersihan_jalan0").hide();
        
        //untuk step 4
        $("#div_alert_bersihan_jalan1_4").show();
        $("#div_alert_bersihan_jalan0_4").hide();
      }

      if(a3_diag_ansietas == 0){
        $("#div_alert_ansietas0").show();
        $("#div_alert_ansietas1").hide();

        //untuk step 4
        $("#div_alert_ansietas0_4").show();
        $("#div_alert_ansietas1_4").hide();
      }else if(a3_diag_ansietas == 1){
        $("#div_alert_ansietas1").show();
        $("#div_alert_ansietas0").hide();
        
        //untuk step 4
        $("#div_alert_ansietas1_4").show();
        $("#div_alert_ansietas0_4").hide();
      }

      if(a3_diag_perawatan_diri == 0){
        $("#div_alert_perawatan_diri0").show();
        $("#div_alert_perawatan_diri1").hide();
        
        //untuk step 4
        $("#div_alert_perawatan_diri0_4").show();
        $("#div_alert_perawatan_diri1_4").hide();
      }else if(a3_diag_perawatan_diri == 1){
        $("#div_alert_perawatan_diri1").show();
        $("#div_alert_perawatan_diri0").hide();
        
        //untuk step 4
        $("#div_alert_perawatan_diri1_4").show();
        $("#div_alert_perawatan_diri0_4").hide();
      }

    }

    function change_defisit_pengetahuan(name_radio, val){

      var arr_radio_1 = ["radio_kesesuaian_perilaku","radio_persepsi_terhadap_masalah","radio_ketepatan_pemeriksaan","radio_perubahan_perilaku","radio_masalah_yang_dihadapi"];

      if(name_radio == "radio_kesesuaian_perilaku" || name_radio == "radio_persepsi_terhadap_masalah" || name_radio == "radio_ketepatan_pemeriksaan" || name_radio == "radio_perubahan_perilaku" || name_radio == "radio_masalah_yang_dihadapi"){
        if(val == "1" || val == "2"){
          a4_diag_defisit_pengetahuan = 1;
        }else if(val == "3"){
          var tam_radio3_kosong = 0;
          for(var a=0;a<arr_radio_3.length;a++){

            var tam_radio3_val = $("input[name='"+arr_radio_3[a]+"']:checked").val();
            if(tam_radio3_val == "1" || tam_radio3_val == "2"){
              tam_radio3_kosong = 1;
            }

          }

          a4_diag_defisit_pengetahuan = tam_radio3_kosong;
        }
      }

      if(a4_diag_defisit_pengetahuan == 1){
        $("#div_alert_defisit_pengetahuan1_4").show();
      }else{
        $("#div_alert_defisit_pengetahuan1_4").hide();
      }

      if(a3_diag_bersihan_jalan == 2 && a3_diag_ansietas == 2 && a3_diag_perawatan_diri == 0 && a4_diag_defisit_pengetahuan == 0){
        $("#div_a4_tidak_ada").show();
      }else{
        $("#div_a4_tidak_ada").hide();
      }
    }

    function click_radio(val){

      $('#tidak_dilakukan_'+val).val('');
      var tam_radio = $("input[name='radio_dp_"+val+"']:checked").val();
      var value_js = 0;
      if(tam_radio == "1"){
        value_js = 2;
      }else if(tam_radio == "2"){
        value_js = 1;
      }else if(tam_radio == "3"){
        value_js = 0;
      }

      jumlah_skor += value_js;
      console.log("click_radio "+val+" --- "+jumlah_skor);
      $("#jumlah_skor").text(jumlah_skor);

    }

    function click_textarea(val){

      var tam_radio = $("input[name='radio_dp_"+val+"']:checked").val();
      var value_js = 0;
      if(tam_radio){

        if(tam_radio == "1"){
          value_js = 2;
        }else if(tam_radio == "2"){
          value_js = 1;
        }else if(tam_radio == "3"){
          value_js = 0;
        }

      }

      jumlah_skor = jumlah_skor - value_js;
      console.log("click_textarea "+val+" --- "+jumlah_skor);
      $("#jumlah_skor").text(jumlah_skor);

      $("input[name='radio_dp_"+val+"']:checked").each(function(){
        $(this).prop('checked', false);
      });

    }

    function load_data_intervensi(data_intervensi){

      var data_html = "";

      var tam_id_diagnosis = 0;
      var tam_id_kel = 0;
      var tam_id_jenint = 0;
      for(var a=0;a<data_intervensi.length;a++){

        var data_tampil = "";
        var text_judul = "";

        var text_nama_kel = "";

        var text_jenis_intervensi = "";

        var tam_id_intervensi = 0;
        var text_penjelasan = "";

        var data_tambahan = "";

        var id_keluhan = data_intervensi[a].id_keluhan;
        var nama_keluhan = data_intervensi[a].nama_keluhan;
        var id_diagnosis = data_intervensi[a].id_diagnosis;
        var nama_diagnosis = data_intervensi[a].nama_diagnosis;
        var id_jenis_intervensi = data_intervensi[a].id_jenis_intervensi;
        var nama_jenis_intervensi = data_intervensi[a].nama_jenis_intervensi;
        var id_intervensi = data_intervensi[a].id_intervensi;
        var penjelasan = data_intervensi[a].penjelasan;

        // console.log(id_keluhan+"---"+id_diagnosis+"---"+nama_diagnosis+"---"+id_jenis_intervensi+"---"+nama_jenis_intervensi+"---"+penjelasan);

        /*if(a == 0){
          tam_id_diagnosis = id_diagnosis;
          text_judul = "<h3>"+nama_diagnosis+"</h3>";

          tam_id_kel = id_keluhan;
          text_nama_kel = "<h4>"+nama_keluhan+"</h4>";

          tam_id_jenint = id_jenis_intervensi;
          text_jenis_intervensi = "<h5>"+nama_jenis_intervensi+"</h5>";

          tam_id_intervensi = id_intervensi;
          text_penjelasan = "<h6>"+penjelasan+"</h6>";

          data_html += "<div class='row col-lg-12'>"+text_judul+"</div>";
          data_html += "<div class='row col-lg-12' style='padding-left: 10px;'>"+text_nama_kel+"</div>";
          data_html += "<div class='row col-lg-12' style='padding-left: 20px;'>"+text_jenis_intervensi+"</div>";
          data_html += "<div class='row col-lg-12' style='padding-left: 30px;'>"+text_penjelasan+"</div>";
        }

        if((a+1) <= (data_intervensi.length-1)){
          // console.log(tam_id_diagnosis+" --- "+data_intervensi[a+1].id_diagnosis);
          if(tam_id_diagnosis != data_intervensi[a+1].id_diagnosis){
            tam_id_diagnosis = data_intervensi[a+1].id_diagnosis;
            text_judul += "<h3>"+data_intervensi[a+1].nama_diagnosis+"</h3>";
            data_html += "<div class='row col-lg-12'>"+text_judul+"</div>";
          }

          if(tam_id_diagnosis == data_intervensi[a+1].id_diagnosis){

            if(tam_id_kel != data_intervensi[a+1].id_keluhan){
              tam_id_kel = data_intervensi[a+1].id_keluhan;
              text_nama_kel = "<h4>"+data_intervensi[a+1].nama_keluhan+"</h4>";
              data_html += "<div class='row col-lg-12' style='padding-left: 10px;'>"+text_nama_kel+"</div>";
            }

            if(tam_id_kel == data_intervensi[a+1].id_keluhan){

              if(tam_id_jenint != data_intervensi[a+1].id_jenis_intervensi){
                tam_id_jenint = data_intervensi[a+1].id_jenis_intervensi;
                text_jenis_intervensi = "<h5>"+data_intervensi[a+1].nama_jenis_intervensi+"</h5>";
                data_html += "<div class='row col-lg-12' style='padding-left: 20px;'>"+text_jenis_intervensi+"</div>";
              }

              text_penjelasan = "<h6>"+data_intervensi[a+1].penjelasan+"</h6>";
              data_html += "<div class='row col-lg-12' style='padding-left: 30px;'>"+text_penjelasan+"</div>";

            }

          }

        }*/

        if(a == 0){
          tam_id_diagnosis = id_diagnosis;
          text_judul = "<h3>"+nama_diagnosis+"</h3>";

          tam_id_kel = id_keluhan;
          text_nama_kel = "<h4>"+nama_keluhan+"</h4>";

          tam_id_jenint = id_jenis_intervensi;
          text_jenis_intervensi = nama_jenis_intervensi;

          tam_id_intervensi = id_intervensi;
          text_penjelasan = penjelasan;

          data_html += "<div class='row col-lg-12'>"+text_judul+"</div>";
          data_html += "<div class='col-lg-12' style='padding-left: 15px;'>"+text_nama_kel+"</div>";
          data_html += "<div class='col-lg-4'>\
                          <div class='accordion accordion-filled' id='accordion-"+a+"' role='tablist'>\
                            <div class='card'>\
                              <div class='card-header' role='tab' id='heading-"+a+"'>\
                                <h5 class='mb-0'>\
                                  <a data-toggle='collapse' href='#collapse-"+a+"' aria-expanded='false' aria-controls='collapse-"+a+"'>"+text_jenis_intervensi+"</a>\
                                </h5>\
                              </div>\
                              <div id='collapse-"+a+"' class='collapse' role='tabpanel' aria-labelledby='heading-"+a+"' data-parent='#accordion-3'>\
                            <div class='card-body'>\
                              <ul class=''>\
                                <li>"+text_penjelasan+"</li>";
          // data_html += "<div class='row col-lg-12' style='padding-left: 30px;'>"+text_penjelasan+"</div>";
        }

        if(a > 0){
          if(a < (data_intervensi.length-1)){
            // console.log(tam_id_diagnosis+" --- "+data_intervensi[a+1].id_diagnosis);
            if(tam_id_diagnosis != data_intervensi[a].id_diagnosis){
              data_html += "</ul>\
                              </div>\
                                </div>\
                                  </div>\
                                    </div>\
                                    </div>";
              tam_id_diagnosis = data_intervensi[a].id_diagnosis;
              text_judul += "<h3>"+data_intervensi[a].nama_diagnosis+"</h3>";
              data_html += "<div class='row col-lg-12'>"+text_judul+"</div>";
            }

            if(tam_id_diagnosis == data_intervensi[a].id_diagnosis){

              if(tam_id_kel != data_intervensi[a].id_keluhan){
                data_html += "</ul>\
                              </div>\
                                </div>\
                                  </div>\
                                    </div>\
                                    </div>";
                tam_id_kel = data_intervensi[a].id_keluhan;
                text_nama_kel = "<h4>"+data_intervensi[a].nama_keluhan+"</h4>";
                data_html += "<div class='col-lg-12' style='padding-left: 15px;'>"+text_nama_kel+"</div>";
              }

              if(tam_id_kel == data_intervensi[a].id_keluhan){

                if(tam_id_jenint != data_intervensi[a].id_jenis_intervensi){
                  data_html += "</ul>\
                              </div>\
                                </div>\
                                  </div>\
                                    </div>\
                                    </div>";
                  tam_id_jenint = data_intervensi[a].id_jenis_intervensi;
                  text_jenis_intervensi = data_intervensi[a].nama_jenis_intervensi;
                  data_html += "<div class='col-lg-4'>\
                            <div class='accordion accordion-filled' id='accordion-"+a+"' role='tablist'>\
                              <div class='card'>\
                                <div class='card-header' role='tab' id='heading-"+a+"'>\
                                  <h5 class='mb-0'>\
                                    <a data-toggle='collapse' href='#collapse-"+a+"' aria-expanded='false' aria-controls='collapse-"+a+"'>"+text_jenis_intervensi+"</a>\
                                  </h5>\
                                </div>\
                                <div id='collapse-"+a+"' class='collapse' role='tabpanel' aria-labelledby='heading-"+a+"' data-parent='#accordion-3'>\
                              <div class='card-body'>\
                                <ul class=''>";

                }

                text_penjelasan = data_intervensi[a].penjelasan;
                data_html += "<li>"+text_penjelasan+"</li>";

              }

            }

          }
        }

        if(a == (data_intervensi.length-1)){
          data_html += "</ul>\
                              </div>\
                                </div>\
                                  </div>\
                                    </div>\
                                    </div>";
        }

        // console.log((a+1)+" --- "+(data_intervensi.length-1));

      }

      // console.log(data_html);

      // <div class="accordion accordion-filled" id="accordion-7" role="tablist">
      //   <div class="card">
      //     <div class="card-header" role="tab" id="heading-7">
      //       <h5 class="mb-0">
      //         <a data-toggle="collapse" href="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
      //           Can I transfer the money from the wallet to my bank account?
      //         </a>
      //       </h5>
      //     </div>
      //     <div id="collapse-7" class="collapse" role="tabpanel" aria-labelledby="heading-7" data-parent="#accordion-3">
      //       <div class="card-body">
      //         You can at any time reclaim your money to your bank account that you have registered with us. If there are no registered account, then you can add an account in the ‘Register Bank Account’ page.
      //       </div>
      //     </div>
      //   </div>
      // </div>

      // <ul class="list-arrow">
      //   <li>Lorem ipsum dolor sit amet</li>
      //   <li>Consectetur adipiscing elit</li>
      //   <li>Integer molestie lorem at massa</li>
      //   <li>Facilisis in pretium nisl aliquet</li>
      //   <li>Nulla volutpat aliquam velit></li>
      // </ul>

      $("#div_accordion").html(data_html);

      // var html = '<div class="col-lg-6">
      //               <div class="card">
      //                 <div class="card-body">
      //                   <h4 class="card-title">Filled accordions</h4>
      //                   <p class="card-description">Use class <code>.accordion-filled</code> for Basic Accordion</p>
      //                   <div class="accordion accordion-filled" id="accordion-7" role="tablist">
      //                     <div class="card">
      //                       <div class="card-header" role="tab" id="heading-7">
      //                         <h5 class="mb-0">
      //                           <a data-toggle="collapse" href="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
      //                             Can I transfer the money from the wallet to my bank account?
      //                           </a>
      //                         </h5>
      //                       </div>
      //                       <div id="collapse-7" class="collapse" role="tabpanel" aria-labelledby="heading-7" data-parent="#accordion-3">
      //                         <div class="card-body">
      //                           You can at any time reclaim your money to your bank account that you have registered with us. If there are no registered account, then you can add an account in the ‘Register Bank Account’ page.
      //                         </div>
      //                       </div>
      //                     </div>
      //                     <div class="card">
      //                       <div class="card-header" role="tab" id="heading-8">
      //                         <h5 class="mb-0">
      //                           <a class="collapsed" data-toggle="collapse" href="#collapse-8" aria-expanded="true" aria-controls="collapse-8">
      //                             I forgot my account password. What should I do?
      //                           </a>
      //                         </h5>
      //                       </div>
      //                       <div id="collapse-8" class="collapse show" role="tabpanel" aria-labelledby="heading-8" data-parent="#accordion-3">
      //                         <div class="card-body">
      //                           <ol class="pl-3">
      //                             <li>Click on the ‘forgot password’ link.</li>
      //                             <li>Enter your email address registered with us</li>
      //                             <li>Click on the link sent you in the email</li>
      //                             <li>Reset your password</li>
      //                           </ol>
      //                         </div>
      //                       </div>
      //                     </div>
      //                     <div class="card">
      //                       <div class="card-header" role="tab" id="heading-9">
      //                         <h5 class="mb-0">
      //                           <a class="collapsed" data-toggle="collapse" href="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
      //                             What should I do if I need any assistance using my account
      //                           </a>
      //                         </h5>
      //                       </div>
      //                       <div id="collapse-9" class="collapse" role="tabpanel" aria-labelledby="heading-9" data-parent="#accordion-3">
      //                         <div class="card-body">
      //                           If you need any assistance while using your account, you can contact our customer support via email at support@abc.com. Or you can live chat with our support team. Our support team is available 24*7
      //                         </div>
      //                       </div>
      //                     </div>
      //                   </div>
      //                 </div>
      //               </div>
      //             </div>';

    }

    function simpan_step3(){

      $("#notif_simpan").html("");
      $("#btn_simpan").text("loading...");
      $("#btn_simpan").prop("disabled", true);

      //insert step 2
      $.ajax({ url:"{!! route('insert-step-three') !!}",
          async: false,
          data: { 
              "id_pengkajian" : id_pengkajian,
              "id_intervensi" : $("#id_intervensi").val(),
              "batuk" : $('input[name="radio_batuk_int"]:checked').val(),
              "rr30" : $('input[name="radio_rr_30_int"]:checked').val(),
              "sputum" : $('input[name="radio_sputum_int"]:checked').val(),
              "sesak" : $('input[name="radio_sesak_int"]:checked').val(),
              "wheezing" : $('input[name="radio_wheezing_int"]:checked').val(),
              "ronchi_kering" : $('input[name="radio_ronchi_int"]:checked').val(),
              "gelisah" : $('input[name="radio_gelisah_int"]:checked').val(),
              "tegang" : $('input[name="radio_tegang_int"]:checked').val(),
              "bingung" : $('input[name="radio_bingung_int"]:checked').val(),
              "khawatir" : $('input[name="radio_khawatir_int"]:checked').val(),
              "rr_radio" : $('input[name="radio_rr_int"]:checked').val(),
              "nadi_radio" : $('input[name="radio_nadi_int"]:checked').val(),
              "td_radio" : $('input[name="radio_td_int"]:checked').val(),
              "anoreksia" : $('input[name="radio_anoreksia_int"]:checked').val(),
              "kemampuan_mandi" : $('input[name="radio_kem_mandi_int"]:checked').val(),
              "kemampuan_berpakaian" : $('input[name="radio_kem_berpakaian_int"]:checked').val(),
              "kemampuan_berhias_diri" : $('input[name="radio_kem_berhias_diri_int"]:checked').val(),
              "kemampuan_ke_toilet" : $('input[name="radio_kem_ke_toilet_int"]:checked').val(),
              "kemampuan_makan" : $('input[name="radio_kem_makan_int"]:checked').val(),
              "minat_perawatan_diri" : $('input[name="radio_perawatan_diri_int"]:checked').val(),
              "_token": "{{ csrf_token() }}" 
          },
          type: 'POST',
          success: function(output) {
              //Gets the options object (object passed to the steps() function)
              // console.log(output);

              $("#notif_simpan").html("Data berhasil disimpan");
              $("#notif_simpan").fadeOut(2000, function (){
                  $("#btn_simpan").prop("disabled",false);
                  $("#btn_simpan").text("Simpan");

                  id_intervensi = output.id_intervensi;
                  $("#id_intervensi").val(id_intervensi);

              });
              // var options = wizard.data("options");
              // var bodyTag = options["bodyTag"];
              // wizard.children(".content").children(bodyTag).eq(newIndex).html(output);
          },
          error:function(data){
            // console.log(data);
            $("#btn_simpan").prop("disabled",false);
            $("#btn_simpan").text("Simpan");
          }
      });

    }

    function unduhPDF(){

      window.location.href = "<?= route('implementasi-evaluasi-unduh') ?>?id_pengkajian="+id_pengkajian;

    }

    showToastPosition = function(position) {
      'use strict';
      resetToastPosition();
      $.toast({
        heading: 'Notif',
        text: 'Data berhasil diproses dan disimpan.',
        position: String(position),
        icon: 'info',
        stack: false,
        loaderBg: '#f96868'
      })
      window.location.href = "{{ route('history') }}";
    }

    resetToastPosition = function() {
      $('.jq-toast-wrap').removeClass('bottom-left bottom-right top-left top-right mid-center'); // to remove previous position class
      $(".jq-toast-wrap").css({
        "top": "",
        "left": "",
        "bottom": "",
        "right": ""
      }); //to remove previous position style
    }
    // ajax update
    // $('#form').submit(function(e){
    //   e.preventDefault();

    //   $.ajax({
    //      type:'POST',
    //      // url:"{ route('abaikan-duplikasi-insert') !!}",
    //      data:{'id_provinsi':$("#id_provinsi").val(), 
    //             'id_satker':$("#id_satker").val(), 
    //             'kode_satker':$('#id_satker').find(":selected").data("kode"), 
    //             'tahun':$("#tahun").val(),
    //             'revisi':$("#revisi").val(),
    //             'id_data_uploaded':$('#tahun').find(":selected").data("id"),
    //             "_token": "{{ csrf_token() }}" 
    //           },
    //      success:function(data){
    //         $("#notif_insert").html(data.msg);
    //         $("#form").trigger("reset");
    //         HistoryAbaikanDuplikasiDatatable();
    //      },
    //      error:function(data){
    //       alert('insert failed');
    //      }
    //   });
    //  });

    // $.ajax({
    //    type:'POST',
    //    // url:"{ route('update-ruas-ditangani') !!}",
    //    data:{'kode_satker':$('#kode_satker_pemetaan').find(":selected").data("kode"), 
    //           'satker_ppk_id':$("#select_nama_ppk").val(),
    //           // 'data_linkid':arr_data_link.join(","), 
    //           // 'data_uncheck_linkid':arr_data_uncheck_link.join(","), 
    //           "_token": "{{ csrf_token() }}" 
    //         },
    //    success:function(data){
    //       $("#notif_konfirmasi").html("Data akan diproses");
    //       $("#notif_konfirmasi").fadeOut(2000, function (){
    //           $("#btn_save_konfirmasi").prop("disabled",false);
    //           $("#btn_save_konfirmasi").text("Simpan");
    //           $('#createModal').modal('hide');
    //       });
    //       $("#notif_update").html(data.msg);
    //       $("#btn_save").prop("disabled",false);
    //       $("#btn_save").text("Simpan");
    //       // selectSatker(data_provinsi[0].id_provinsi, 1);
    //       // location.reload();
    //    },
    //    error:function(data){
    //     alert('update failed');
    //    }
    // });

  </script>
@endpush
