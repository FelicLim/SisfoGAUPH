<div class="form-group {{ $errors->has('location_id') ? 'has-error' : ''}}">
    <label for="location_id" class="control-label">{{ 'Location Id' }}</label>
    <input class="form-control" name="location_id" type="text" id="location_id" value="{{ isset($room->location_id) ? $room->location_id : ''}}" >
    {!! $errors->first('location_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('room_number') ? 'has-error' : ''}}">
    <label for="room_number" class="control-label">{{ 'Room Number' }}</label>
    <input class="form-control" name="room_number" type="number" id="room_number" value="{{ isset($room->room_number) ? $room->room_number : ''}}" >
    {!! $errors->first('room_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('start') ? 'has-error' : ''}}">
    <label for="start" class="control-label">{{ 'Start' }}</label>
    <input class="form-control" name="start" type="date" id="start" value="{{ isset($room->start) ? $room->start : ''}}" >
    {!! $errors->first('start', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('end') ? 'has-error' : ''}}">
    <label for="end" class="control-label">{{ 'End' }}</label>
    <input class="form-control" name="end" type="date" id="end" value="{{ isset($room->end) ? $room->end : ''}}" >
    {!! $errors->first('end', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
