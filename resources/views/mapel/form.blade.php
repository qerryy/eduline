{!! Form::model($mapels, [
    'route' => $mapels->exists ? ['mapel.update', $mapels->id] : 'mapel.store',
    'method' => $mapels->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">Nama Mata Pelajaran</label>
        {!! Form::text('mapel_name', null, ['class' => 'form-control', 'id' => 'mapel_name']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Harga</label>
        {!! Form::number('total_price', null, ['class' => 'form-control', 'id' => 'total_price']) !!}
    </div>

{!! Form::close() !!}