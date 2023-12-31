<!DOCTYPE html>
<head>
    <title>SURAT KETERANGAN KELAHIRAN | {{$skl->nik}}</title>
    <style>
        table tr td {
            font-size: 13px;
        }

        table tr .text {
            text-align: right;
            font-size: 13px;
        }

        table tr .text2 {
            text-align: center;

        }

        .satu{
            margin-left: 50px;
        }
        hr{
            width: 650px;
            margin-top:-1px;
        }

        .dua{
            margin-left:20px;
        }

        .dua hr{
           border-top: 4px double black;
        }

        img{
            margin-left: -30px;
        }

        .hrsatu{
            margin-left:230px;
            margin-top:-3px;
            width:255px
        }

        .tiga{
            margin-top:10px;
        }
        .nosurat{
            margin-top:-12px;
        }

        .empat p {
            font-size: 17px;
            margin-left: 20px;
            text-align: justify;
            margin-right: 20px;
            line-height: 1.5;
        }

        .lima{
            margin-left: 80px;
        }
        .lima tr .template {
            font-size: 17px;
            padding-right: 18px;
            padding-top:10px;
            /* margin-right: 10px; */
        }
        .lima tr td {
            font-size: 17px;
            padding-right: 3px;
            padding-top:10px;
        }
         P{
             font-size: 16px;
             font-family: Arial;
         }

         .enam{
             margin-top: 5px;
             margin-left: 5px;
         }

         .tujuh{
            margin-left: 450px;
            margin-top: -30px;
         }

         .namadesa{
             margin-left: 20px;
             margin-top:50px;
         }
         .delapan hr{
             width: 115px;
             margin-left: 470px;
             margin-top:-23px;
         }
    </style>
</head>

<body>
    <center>
        <table class="satu">
            <tr >
                <td><img src="{{ public_path('template/img/kop_surat.jpg') }}" style="width: 97%; height:auto"></td>
            </tr>
        </table>
        <table class="tiga">
            <tr>
                <td width="538">
                    <center>
                        <font size="3"><b>SURAT KETERANGAN KELAHIRAN </b></font><br>
                        <hr class="hrsatu">
                    </center>
                </td>
            </tr>
        </table>
        <table class="nosurat">
            <tr>
                <td width="537">
                    <center>
                        <font size="2">Nomor : {{$skl->nomor_surat}}</font>
                    </center>
                </td>
            </tr>
        </table>

        <table class="empat">
            <tr>
                <td>
                    <p> Yang Bertanda Tangan di bawah ini Lurah Sentolo, Kapanewon Sentolo, Kabupaten Kulon Progo menerangkan dengan sebenernya bahwa :
                </p>
                </td>
            </tr>
        </table>
        <table  class="lima">
            <tr>
                <td class="template">Nama</td>
                <td>:</td>
                <td>{{$skl->nama}}</td>
            </tr>
            <tr>
                <td class="template">Status Hubungan</td>
                <td>:</td>
                <td>{{$skl->status_hubungan}}</td>
            </tr>
            <tr>
                <td class="template">Kelurahan</td>
                <td>:</td>
                <td>{{$skl->kalurahan}}</td>
            </tr>
            <tr>
                <td class="template">Kecamatan</td>
                <td>:</td>
                <td>{{$skl->kecamatan}}</td>
            </tr>
            <tr>
                <td class="template">Kabupaten</td>
                <td>:</td>
                <td>{{$skl->kabupaten}}</td>
            </tr>
            <tr>
                <td class="template">Provinsi</td>
                <td>:</td>
                <td>{{$skl->provinsi}}</td>
            </tr>
            <tr>
                <td class="template">Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td>{{$skl->tempat_lahir}} / {{date('d-m-Y',strtotime($skl->tanggal_lahir))}}  </td>
            </tr>
            <tr>
                <td class="template">Agama</td>
                <td>:</td>
                <td>{{$skl->agama}}</td>
            </tr>
            <table class="enam">
                <tr>
                    <td>
                        <p>
                        Pihak yang di terangkan di atas adalah benar anak kandung dari :
                        </p>
                    </td>
                </tr>
            </table>
            <tr>
                <td class="template">Nama Ayah</td>
                <td>:</td>
                <td>{{$skl->nama_ayah}}</td>
            </tr>
            <tr>
                <td class="template">NIK</td>
                <td>:</td>
                <td>{{$skl->nik_ayah}}</td>
            </tr>
            <tr>
                <td class="template">Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td>{{$skl->tempat_lahir_ayah}} / {{date('d-m-Y',strtotime($skl->tanggal_lahir_ayah))}}  </td>
            </tr>
            <tr>
                <td class="template">Agama</td>
                <td>:</td>
                <td>{{$skl->agama_ayah}}</td>
            </tr>
            <tr>
                <td class="template">Pekerjaan</td>
                <td>:</td>
                <td>{{$skl->pekerjaan_ayah}}</td>
            </tr>
            <tr>
                <td class="template" style="vertical-align: top;">Alamat</td>
                <td style="vertical-align: top;">:</td>
                <td style="max-width: 400px; word-wrap: break-word;">{{ $skl->alamat_ayah }}</td>
            </tr>
            <tr>
                <td class="template">Nama Ibu</td>
                <td>:</td>
                <td>{{$skl->nama_ibu}}</td>
            </tr>
            <tr>
                <td class="template">NIK</td>
                <td>:</td>
                <td>{{$skl->nik_ibu}}</td>
            </tr>
            <tr>
                <td class="template">Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td>{{$skl->tempat_lahir_ibu}} / {{date('d-m-Y',strtotime($skl->tanggal_lahir_ibu))}}  </td>
            </tr>
            <tr>
                <td class="template">Agama</td>
                <td>:</td>
                <td>{{$skl->agama_ibu}}</td>
            </tr>
            <tr>
                <td class="template">Pekerjaan</td>
                <td>:</td>
                <td>{{$skl->pekerjaan_ibu}}</td>
            </tr>
            <tr>
                <td class="template" style="vertical-align: top;">Alamat</td>
                <td style="vertical-align: top;">:</td>
                <td style="max-width: 400px; word-wrap: break-word;">{{ $skl->alamat_ibu }}</td>
            </tr>
                <td>
                    <p>
                        &#160; &#160; &#160; &#160; Pihak pihak yang diterangkan diatas benar benar adalah penduduk Desa Sentolo yang belum memiliki akta kelahiran.
                        Demikian surat keterangan ini kami buat, untuk dapat dipergunakan yang bersangkutan untuk pembuatan dam penerbitan akta kelahiran.
                    </p>
                </td>
            </tr>
        </table>

        <table class="tujuh">
            <tr>
                <p>Sentolo, {{ \Carbon\Carbon::parse($skl['created_at'])->translatedFormat('j F Y') }}</p>
            </tr>
        </table>
        <table  class="delapan">
            <tr>
                <td> <p>&#160; &#160; &#160; &#160; &#160; &#160; Lurah Sentolo</p>  <br>  <p class="namadesa">&#160; &#160; &#160; &#160; &#160; <b>(TEGUH) </b></p></td>
            </tr>
        </table>
    </center>
</body>
</html>
