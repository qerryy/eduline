<a href="{{ $url_show }}" class="btn-show" title="Detail : {{ $model->username }}">
	<i class="icon-eye-open text-primary" ></i>
</a> | 

<a href="{{ $url_edit }}" class="modal-show edit" title="Edit {{ $model->username }}">
	<i class="icon-pencil text-inverse"></i>
</a> | 

<a href="{{ $url_destroy }}" class="btn-delete" title="<br>'{{ $model->username }}' ">
	<i class="icon-trash text-danger"></i>
</a>