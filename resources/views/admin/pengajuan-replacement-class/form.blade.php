<div class="form-group {{ $errors->has('nama_lengkap') ? 'has-error' : ''}}">
    <label for="nama_lengkap" class="control-label">{{ 'Nama Lengkap' }}</label>
    <input class="form-control" name="nama_lengkap" type="text" id="nama_lengkap" value="{{ isset($pengajuanreplacementclass->nama_lengkap) ? $pengajuanreplacementclass->nama_lengkap : ''}}" >
    {!! $errors->first('nama_lengkap', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_mata_kuliah') ? 'has-error' : ''}}">
    <label for="nama_mata_kuliah" class="control-label">{{ 'Nama Mata Kuliah' }}</label>
    <input class="form-control" name="nama_mata_kuliah" type="text" id="nama_mata_kuliah" value="{{ isset($pengajuanreplacementclass->nama_mata_kuliah) ? $pengajuanreplacementclass->nama_mata_kuliah : ''}}" >
    {!! $errors->first('nama_mata_kuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kelas') ? 'has-error' : ''}}">
    <label for="kelas" class="control-label">{{ 'Kelas' }}</label>
    <input class="form-control" name="kelas" type="text" id="kelas" value="{{ isset($pengajuanreplacementclass->kelas) ? $pengajuanreplacementclass->kelas : ''}}" >
    {!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jadwal_tanggal_yang_akan_direplace') ? 'has-error' : ''}}">
    <label for="jadwal_tanggal_yang_akan_direplace" class="control-label">{{ 'Jadwal Tanggal Yang Akan Direplace' }}</label>
    <input class="form-control" name="jadwal_tanggal_yang_akan_direplace" type="date" id="jadwal_tanggal_yang_akan_direplace" value="{{ isset($pengajuanreplacementclass->jadwal_tanggal_yang_akan_direplace) ? $pengajuanreplacementclass->jadwal_tanggal_yang_akan_direplace : ''}}" >
    {!! $errors->first('jadwal_tanggal_yang_akan_direplace', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jadwal_jam_kuliah') ? 'has-error' : ''}}">
    <label for="jadwal_jam_kuliah" class="control-label">{{ 'Jadwal Jam Kuliah' }}</label>
    <input class="form-control" name="jadwal_jam_kuliah" type="time" id="jadwal_jam_kuliah" value="{{ isset($pengajuanreplacementclass->jadwal_jam_kuliah) ? $pengajuanreplacementclass->jadwal_jam_kuliah : ''}}" >
    {!! $errors->first('jadwal_jam_kuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggal_replacement_date') ? 'has-error' : ''}}">
    <label for="tanggal_replacement_date" class="control-label">{{ 'Tanggal Replacement Date' }}</label>
    <input class="form-control" name="tanggal_replacement_date" type="date" id="tanggal_replacement_date" value="{{ isset($pengajuanreplacementclass->tanggal_replacement_date) ? $pengajuanreplacementclass->tanggal_replacement_date : ''}}" >
    {!! $errors->first('tanggal_replacement_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jam_replacement') ? 'has-error' : ''}}">
    <label for="jam_replacement" class="control-label">{{ 'Jam Replacement' }}</label>
    <input class="form-control" name="jam_replacement" type="time" id="jam_replacement" value="{{ isset($pengajuanreplacementclass->jam_replacement) ? $pengajuanreplacementclass->jam_replacement : ''}}" >
    {!! $errors->first('jam_replacement', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alasan_melakukan_replacement_class') ? 'has-error' : ''}}">
    <label for="alasan_melakukan_replacement_class" class="control-label">{{ 'Alasan Melakukan Replacement Class' }}</label>
    <input class="form-control" name="alasan_melakukan_replacement_class" type="text" id="alasan_melakukan_replacement_class" value="{{ isset($pengajuanreplacementclass->alasan_melakukan_replacement_class) ? $pengajuanreplacementclass->alasan_melakukan_replacement_class : ''}}" >
    {!! $errors->first('alasan_melakukan_replacement_class', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
