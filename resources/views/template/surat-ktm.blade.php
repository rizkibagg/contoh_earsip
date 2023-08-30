<!DOCTYPE html>
<head>
    <title>SKTM | {{$sktm->nik}}</title>
    {{-- <link rel="icon" href="/public/template/assets/img/favicon.png" type="image/icon" > --}}
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
            margin-left:199px;
            margin-top:-3px;
            width:314px
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
        }

        .lima{
            margin-left: 80px;
        }

        .lima tr td {
            font-size: 17px;
            padding-right: 30px;
            padding-top:15px;
            margin-right: 20px;
        }
         P{
             font-size: 16px;
             font-family: Arial;
         }

         .enam{
             margin-top: 5px;
             margin-left: 450px;
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
                <td><img src="{{ public_path('template/assets/img/kulonprogo.png') }}" style="height: 100px"></td>
                <td>
                    <center>
                        <font size="5"><b>&#160; &#160; &#160; &#160; PEMERINTAH BALAI DESA SENTOLO</b></font><br>
                        <font size="5"><b>&#160; &#160; &#160; &#160; &#160; KECAMATAN SENTOLO</b></font><br> <br>
                        <font size="2"><b>&#160; &#160; &#160; &#160; Alamat : Siwalan, Sentolo Kidul, Sentolo, Kec. Sentolo, Kulon Progo</b></font><br>
                        <font size="1"><b>&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Telepon : xxxxxxxxxxxxx, Website : sentolo-kulonprogo.desa.id</b></font><br>
                    </center>
                </td>
            </tr>
        </table>
        <table class="dua">
            <tr>
                <td colspan="2" >
                    <hr>
                </td>
            </tr>
        </table>
        <table class="tiga">
            <tr>
                <td width="538">
                    <center>
                        <font size="3"><b>SURAT KETERANGAN KURANG MAMPU </b></font><br>
                        <hr class="hrsatu">
                    </center>
                </td>
            </tr>
        </table>
        <table class="nosurat">
            <tr>
                <td width="537">
                    <center>
                        <font size="2">Nomor : {{$sktm->nomor}}</font>
                    </center>
                </td>
            </tr>
        </table>

        <table class="empat">
            <tr>
                <td><P> &#160; &#160; &#160; &#160;  &#160; &#160; &#160;Yang Bertanda Tangan di bawah ini Kepala Desa Tompobulu Kecamatan
                    Bulupoddo <br> <br> Kabupaten Sinjai. menerangkan dengan sesungguhnya bahwa :</P></td>
            </tr>
        </table>
        <table  class="lima">
            <tr>
                <td> Nama</td>
                <td>:  {{$sktm->nama}}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td> : {{$sktm->nik}}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td> : {{$sktm->jenis_kelamin}}</td>
            </tr>
            <tr>
                <td>Tempat / Tanggal Lahir</td>
                <td> : {{$sktm->tempat}} / {{date('d-m-Y',strtotime($sktm->tanggal_lahir))}}  </td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td> : {{$sktm->kewarganegaraan}}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td> : {{$sktm->agama}}</td>
            </tr>
            <tr>
                <td>Status Perkawinan</td>
                <td> : {{$sktm->status_perkawinan}}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td> : {{$sktm->pekerjaan}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> : {{$sktm->alamat}}</td>
            </tr>
        </table>
        <table class="empat">
            <tr>
                <td>
                    <p>
                        <br>{{$sktm->deskripsi}}<br> <br>
                        &#160; &#160; &#160; &#160;  &#160; &#160; &#160; Demikian surat keterangan ini diberikan kepada yang bersangkutan untuk di pergunakan <br> <br> sebagaimana mestinya.
                    </p>
                </td>
            </tr>
        </table>

        <table class="enam">
            <tr>
                <p>Sentolo, {{ \Carbon\Carbon::parse($sktm['created_at'])->translatedFormat('j F Y') }}</p>
            </tr>
        </table>
        <table  class="tujuh">
            <tr>
                <td> <P>&#160; &#160; &#160; &#160; Lurah Sentolo</P>  <br>  <P class="namadesa">&#160; &#160; &#160; <b>(TEGUH) </b></P></td>
            </tr>
        </table>

        <table class="delapan">
            <tr>
                <td><hr></td>
            </tr>
        </table>
    </center>
</body>
</html>
