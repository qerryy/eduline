@extends('templates.app')

@section('title', 'Mapel')

@section('style')
    <style>
        body{
            background-image: url({{ asset('image/hero_1.jpg') }});
            background-size: 1400px 800px;
            background-repeat: no-repeat;
            min-height: 693px;
        }
        label{
            color: white;
        }
    </style>
@endsection 

@section('content')

<div class="container" style="width: 800px;">
  <div class="panel panel-default" style="background-color: rgba(100,100,100,.8);">
      <div class="panel-heading">
        <h3 class="panel-title">Edit Jadwal</h3>
      </div>
      <div class="panel-body">
            <form action="{{ route('jadwal.update', $jadwal['id']) }}" method="POST">
            @csrf
            @method('PUT')

                <div class="form-group">
                    <label for="" class="control-label">Hari</label>
                    <input type="text" value="{{ old('hari') ? old('hari') : $jadwal['hari'] }}" class="form-control {{$errors->first('hari')? "is-invalid": ""}}" id="hari">
                    <div class="invalid-feedback">
                        {{$errors->first('hari')}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="control-label">Keterangan</label>
                    <textarea class="form-control {{$errors->first('keterangan')? "is-invalid": ""}}" name="keterangan" id="keterangan" rows="4">
                        {{ $jadwal['keterangan'] }}
                    </textarea>
                    <div class="invalid-feedback">
                        {{$errors->first('keterangan')}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="mapel_id" class="control-label">Mapel</label>
                    <select name="mapel_id" id="mapel_id" class="form-control {{$errors->first('mapel_id') ? "is-invalid": ""}}">
                            @foreach ($mapel as $c)
                                <option {{$jadwal->mapel_id==$c->id ? "selected":''}} value="{{$c->id}}">
                                    {{$c->mapel_name}}
                                </option>
                            @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
      </div>
  </div>
</div>

@endsection
