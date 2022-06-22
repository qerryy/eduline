{!! Form::model($jadwal, [
    'route' => $jadwal->exists ? ['jadwal.update', $jadwal->id] : 'jadwal.store',
    'method' => $jadwal->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">Hari</label>
        {!! Form::text('hari', null, ['class' => 'form-control', 'id' => 'hari']) !!}
    </div>

    <div class="form-group">
        <label for="keterangan" class="control-label">Keterangan</label>
        {!! Form::textarea('keterangan', null, ['class' => 'form-control', 'id' => 'keterangan', 'rows'=>'4']) !!}
    </div>

    <div class="form-group">
        <label for="mapel_id" class="control-label">Mapel</label>
        <select name="mapel_id" id="mapel_id" class="form-control {{$errors->first('mapel_id') ? "is-invalid": ""}}">
            <option value="">Select Mapel</option>
                @foreach ($mapels as $c)
                    <option {{old('mapel_name', $c->mapel)==$c->id ? "selected":''}} value="{{$c->id}}">
                        {{$c->mapel_name}}
                    </option>
                @endforeach
        </select>
    </div>

{!! Form::close() !!}