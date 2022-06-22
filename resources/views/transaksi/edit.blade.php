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
        <h3 class="panel-title">Edit Transaksi</h3>
      </div>
      <div class="panel-body">
            <form action="{{ route('transaksi.update', $trans['id']) }}" method="POST">
            @csrf
            @method('PUT')

                <div class="form-group">
                    <label for="" class="control-label">Invoice Number</label>
                    <input type="text" value="{{ old('invoice_number') ? old('invoice_number') : $trans['invoice_number'] }}" class="form-control {{$errors->first('invoice_number')? "is-invalid": ""}}" id="invoice_number">
                    <div class="invalid-feedback">
                        {{$errors->first('invoice_number')}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="user_id" class="control-label">User</label>
                    <select name="user_id" id="user_id" class="form-control {{$errors->first('user_id') ? "is-invalid": ""}}">
                            @foreach ($user as $us)
                                <option value="{{$us->id}}" {{$trans->user_id==$us->id ? "selected":''}}>
                                    {{$us->name}}
                                </option>
                            @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="" class="control-label">Status</label>
                    <select name="status" id="status" class="form-control {{$errors->first('status') ? "is-invalid": ""}}">
                        <option value="SUBMIT" {{old('status', $trans->status)=="SUBMIT"? 'selected':''}}>SUBMIT</option>
                        <option value="PROCESS" {{old('status', $trans->status)=="PROCESS"? 'selected':''}}>PROCESS</option>
                        <option value="FINISH" {{old('status', $trans->status)=="FINISH"? 'selected':''}}>FINISH</option>
                        <option value="CANCEL" {{old('status', $trans->status)=="CANCEL"? 'selected':''}}>CANCEL</option>
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
