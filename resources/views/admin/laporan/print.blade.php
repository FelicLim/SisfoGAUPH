<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Pengajuan Replacement Class {{ $replace->id }}</title>

    <style>
        body{
            padding: 15px;
        }

        p{
            font-size: 16px;
            margin-top: -10px;
            margin-left: 10px;
        }

        td{
            font-size: 16px;
        }
        
        table{
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <img src="{{ url('/kop.jpg') }}" alt="Kop">
    <p style="margin-top: 10px">Hal: Permohonan pengganti waktu kuliah, kuliah tambahan dan perubahan jadwal kelas</p>
    <br>
    <p>Kepada Yth.</p>
    <p>Kaprodi Sistem Informasi (Kampus Kota Medan)</p>
    <p>Fakultas Ilmu Komputer</p>
    <p>Universitas Pelita Harapan Medan <i>Campus</i></p>
    <br>
    <p>Dengan ini memberitahukan bahwa</p>

    <table>
        <tr>
            <td>Nama Dosen</td>
            <td>&emsp;&emsp;&emsp;: {{ $replace->nama_lengkap }}</td>
        </tr>

        <tr>
            <td>Mata Kuliah</td>
            <td>&emsp;&emsp;&emsp;: {{ $replace->nama_mata_kuliah }}</td>
        </tr>

        <tr>
            <td>Prodi</td>
            <td>&emsp;&emsp;&emsp;: Sistem Informasi</td>
        </tr>

        <tr>
            <td>Kelas</td>
            <td>&emsp;&emsp;&emsp;: {{ $replace->kelas }}</td>
        </tr>

        <tr>
            <td>Semester</td>
            <td>&emsp;&emsp;&emsp;: Ganjil</td>
        </tr>

        <tr>
            <td>Tahun Akademik</td>
            <td>&emsp;&emsp;&emsp;: 2022/2023</td>
        </tr>

        <tr>
            <td>Bermasuk untuk</td>
            <td>&emsp;&emsp;&emsp;: Mengganti jadwal kelas</td>
        </tr>
        
    </table>
    <br>
    <p style="font-size: 14px">&nbsp; Syarat: Dosen bertanggung-jawab memastikan semua mahasiswa dapat menghadiri kelas pengganti</p>
    <table>
        <tr>
            <td>Yang semula pada</td>
            <td>&emsp;&emsp;&emsp;: Tanggal</td>
            <td>&emsp;&emsp;: {{ date('d M Y', strtotime($replace->jadwal_tanggal_yang_akan_direplace)) }}</td>
        </tr>

        <tr>
            <td></td>
            <td>&emsp;&emsp;&emsp;&nbsp; Waktu</td>
            <td>&emsp;&emsp;: {{ $replace->jadwal_jam_kuliah }}</td>
        </tr>

        <tr>
            <td>Menjadi</td>
            <td>&emsp;&emsp;&emsp;: Tanggal</td>
            <td>&emsp;&emsp;: {{ date('d M Y', strtotime($replace->tanggal_replacement))}}</td>
        </tr>

        <tr>
            <td></td>
            <td>&emsp;&emsp;&emsp;&nbsp; Waktu</td>
            <td>&emsp;&emsp;: {{$replace->jam_replacement}}</td>
        </tr>
    </table>

    <br>
    <img src="{{ url('/foot.jpg') }}" alt="Foot">
</body>
</html>