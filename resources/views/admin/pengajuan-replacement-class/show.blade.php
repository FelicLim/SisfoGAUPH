@extends('layouts.app')
@section('title','Pengajuan Replacement Class')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">pengajuanReplacementClass {{ $pengajuanreplacementclass->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/pengajuan-replacement-class') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/pengajuan-replacement-class/' . $pengajuanreplacementclass->id . '/edit') }}" title="Edit pengajuanReplacementClass"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/pengajuanreplacementclass' . '/' . $pengajuanreplacementclass->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete pengajuanReplacementClass" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <a href="{{ url('/admin/laporan/replacement/'.$pengajuanreplacementclass->id) }}" target="_blank"><button class="btn btn-secondary btn-sm"> Print</button></a>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pengajuanreplacementclass->id }}</td>
                                    </tr>

                                    <tr>
                                        <th> Nama Lengkap </th>
                                        <td> {{ $pengajuanreplacementclass->nama_lengkap }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Nama Mata Kuliah </th>
                                        <td> {{ $pengajuanreplacementclass->nama_mata_kuliah }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Kelas </th>
                                        <td> {{ $pengajuanreplacementclass->kelas }} </td>
                                    </tr>

                                    <tr>
                                        <th>Tanggal yang Direplace</th>
                                        <td> {{ date('d M Y', strtotime($pengajuanreplacementclass->jadwal_tanggal_yang_akan_direplace)) }}</td>
                                    </tr>

                                    <tr>
                                        <th>Jadwal Jam Kuliah</th>
                                        <td>{{ $pengajuanreplacementclass->jadwal_jam_kuliah }}</td>
                                    </tr>

                                    <tr>
                                        <th>Tanggal Replacement</th>
                                        <td>{{ date('d M Y', strtotime($pengajuanreplacementclass->tanggal_replacement)) }}</td>
                                    </tr>

                                    <tr>
                                        <th>Jam Replacement</th>
                                        <td>{{ $pengajuanreplacementclass->jam_replacement }}</td>
                                    </tr>

                                    <tr>
                                        <th>Alasan</th>
                                        <td>{{ $pengajuanreplacementclass->alasan_melakukan_replacement_class }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
