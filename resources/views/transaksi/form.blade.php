{!! Form::model($trans, [
    'route' => $trans->exists ? ['transaksi.update', $trans->id] : 'transaksi.store',
    'method' => $trans->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">Invoice Number</label>
        {!! Form::text('invoice_number', null, ['class' => 'form-control', 'id' => 'invoice_number']) !!}
    </div>

    <div class="form-group">
        <label for="user_id" class="control-label">User</label>
        <select name="user_id" id="user_id" class="form-control {{$errors->first('user_id') ? "is-invalid": ""}}">
            <option value="">Select User</option>
                @foreach ($user as $us)
                    <option {{old('name', $us->user)==$us->id ? "selected":''}} value="{{$us->id}}">
                        {{$us->name}}
                    </option>
                @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="" class="control-label">Status</label>
        <select name="status" id="status" class="form-control {{$errors->first('status') ? "is-invalid": ""}}">
            <option value="">Select Status</option>
            <option value="SUBMIT">SUBMIT</option>
            <option value="PROCESS">PROCESS</option>
            <option value="FINISH">FINISH</option>
            <option value="CANCEL">CANCEL</option>
        </select>
    </div>

{!! Form::close() !!}