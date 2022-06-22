{!! Form::model($model, [
    'route' => $model->exists ? ['user.update', $model->id] : 'user.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">Username</label>
        {!! Form::text('username', null, ['class' => 'form-control', 'id' => 'username']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">E-Mail</label>
        {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
    </div>

{!! Form::close() !!}