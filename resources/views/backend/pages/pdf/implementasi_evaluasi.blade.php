<html>
<head>
  <title>Implementasi dan Evaluasi</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  @include('backend.pages.pdf.style')
</head>
<body>
  <style type="text/css">

    /*.tabel_1 {
      width: 100%;
      border-spacing: 0;
      border-collapse: collapse;
    }*/


    /*table tr td,
    table tr th{
      font-size: 9pt;
    }*/

  </style>

    <div class="main">
      <p class="text-center"><b><u>IMPLEMENTASI DAN EVALUASI</u></b></p>
      <p>
        <table class="tabel_1">
          <tr>
            <td>Diagnosa Keperawatan : Bersihan Jalan Nafas Tidak Efektif</td>
            <td>Tanggal : <?= date('d-m-Y')?></td>
          </tr>
        </table>
      </p>
    </div>

    <?php 

      $data_tampil = "";

      $data_html = "";

      $tam_id_diagnosis = 0;
      $tam_id_kel = 0;
      $tam_id_jenint = 0;

      for($a=0;$a<count($data_intervensi);$a++){

          $data_tampil = "";
          $text_judul = "";

          $text_nama_kel = "";

          $text_jenis_intervensi = "";

          $tam_id_intervensi = 0;
          $text_penjelasan = "";

          $data_tambahan = "";
          $tambah_koma = "";

          $id_keluhan = $data_intervensi[$a]->id_keluhan;
          $nama_keluhan = $data_intervensi[$a]->nama_keluhan;
          $id_diagnosis = $data_intervensi[$a]->id_diagnosis;
          $nama_diagnosis = $data_intervensi[$a]->nama_diagnosis;
          $id_jenis_intervensi = $data_intervensi[$a]->id_jenis_intervensi;
          $nama_jenis_intervensi = $data_intervensi[$a]->nama_jenis_intervensi;
          $id_intervensi = $data_intervensi[$a]->id_intervensi;
          $penjelasan = $data_intervensi[$a]->penjelasan;

          // console.log(id_keluhan+"---"+id_diagnosis+"---"+nama_diagnosis+"---"+id_jenis_intervensi+"---"+nama_jenis_intervensi+"---"+penjelasan);

          if($a == 0){
            $tam_id_diagnosis = $id_diagnosis;
            $text_judul = "<p class='p-judul'>".$nama_diagnosis."</p>";

            $tam_id_kel = $id_keluhan;
            $text_nama_kel = "<p class='p-keluhan'>".$nama_keluhan."</p>";

            $tam_id_jenint = $id_jenis_intervensi;
            $text_jenis_intervensi = "<p><span class='span-jenis-intervensi'>".$nama_jenis_intervensi."</span>";

            $tam_id_intervensi = $id_intervensi;
            $text_penjelasan = $penjelasan;

            if($a < (count($data_intervensi)-1)){
              if($tam_id_jenint != $data_intervensi[$a+1]->id_jenis_intervensi){
                $data_koma = "";
              }else{
                $data_koma = ", ";
              }
            }

            $data_html .= "<div class='row' style='padding-left: 5px;'>".$text_judul;
            $data_html .= "<div style='padding-left: 15px;'>".$text_nama_kel."</div>";
            $data_html .= "<div style='padding-left: 25px;'>".$text_jenis_intervensi." : ".$text_penjelasan.$data_koma;
            // data_html += "<div class='row col-lg-12' style='padding-left: 30px;'>"+text_penjelasan+"</div>";

          }

          if($a > 0){
            if($a < (count($data_intervensi)-1)){
              // console.log(tam_id_diagnosis+" --- "+data_intervensi[a+1].id_diagnosis);
              if($tam_id_diagnosis != $data_intervensi[$a]->id_diagnosis){
                $data_html .= "</p></div></div>";
                $tam_id_diagnosis = $data_intervensi[$a]->id_diagnosis;
                $text_judul .= "<p class='p-judul'>".$data_intervensi[$a]->nama_diagnosis."</p>";
                $data_html .= "<div class='row' style='padding-left: 5px; margin-top: 20px;'>".$text_judul;
              }

              if($tam_id_diagnosis == $data_intervensi[$a]->id_diagnosis){

                if($tam_id_kel != $data_intervensi[$a]->id_keluhan){
                  // $text_penjelasan = substr($text_penjelasan, 0, strlen($text_penjelasan)-1);
                  $data_html .= "</p></div></div>";
                  $tam_id_kel = $data_intervensi[$a]->id_keluhan;
                  $text_nama_kel = "<p class='p-keluhan'>".$data_intervensi[$a]->nama_keluhan."</p>";
                  $data_html .= "<div style='padding-left: 15px;'>".$text_nama_kel."</div>";
                }

                if($tam_id_kel == $data_intervensi[$a]->id_keluhan){

                  if($tam_id_jenint != $data_intervensi[$a]->id_jenis_intervensi){
                    $data_html .= "</p></div></div>";
                    $tam_id_jenint = $data_intervensi[$a]->id_jenis_intervensi;
                    $text_jenis_intervensi = "<p><span class='span-jenis-intervensi'>".$data_intervensi[$a]->nama_jenis_intervensi."</span>";
                    $data_html .= "<div style='padding-left: 30px;'>".$text_jenis_intervensi." : ";

                  }

                  if($a < (count($data_intervensi)-1)){

                    if($tam_id_jenint != $data_intervensi[$a+1]->id_jenis_intervensi){
                      $data_koma = "";
                    }else{
                      $data_koma = ", ";
                    }

                  }


                  $text_penjelasan = $data_intervensi[$a]->penjelasan;
                  $data_html .= $text_penjelasan.$data_koma;

                }

              }

            }
          }

          if($a == (count($data_intervensi)-1)){
            $data_koma = "";
            $data_html .= "</p></div></div>";
          }

          // console.log((a+1)+" --- "+(data_intervensi.length-1));

        }

        // print_r($data_html);
        $data_tampil = '<div class="col-md-12 grid-margin"><div class="row">'.$data_html.'</div></div>';

    ?>
    <!--  -->

    <table class='table_2'>
      <thead>
        <tr>
          <th colspan="2">Shift Dinas</th>
        </tr>
        <tr>
          <th>Jam</th>
          <th>Implementasi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td><?= $data_html ?></td>
          <!-- <td>
            <div class="row">
              <div class="container">
                <= $data_html ?>
              </div>
            </div>
          </td> -->
        </tr>
        <tr>
          <td></td>
          <td>
            <div class='row' style='padding-left: 5px;'><p class='p-judul'>EVALUASI :</p><br/>
              <p><span class='span-jenis-intervensi'>S : </span><?= $data_evaluasi_s; ?></p>
              <p><span class='span-jenis-intervensi'>O : </span><?= $data_evaluasi_o; ?></p>
              <p><span class='span-jenis-intervensi'>A : </span><?= $data_evaluasi_a; ?></p>
              <p><span class='span-jenis-intervensi'>P : </span><?= $data_evaluasi_p; ?></p>
            </div>
          </td>
        </tr>
        <!-- php $i=1 @endphp
        foreach(data_notif as $dn)
        <tr>
          <td>{ $i++ }}</td>
          <td>{$dn->pok_id}}</td>
          <td>{$dn->notif}}</td>
        </tr>
        endforeach -->
      </tbody>
    </table>

</body>
</html>