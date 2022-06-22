<a href="{{ $url_show }}" class="btn-show" title="Detail : {{ $mapels->mapel_name }}">
	<i class="icon-eye-open text-primary" ></i>
</a> | 

<a href="{{ $url_edit }}" class="modal-show edit" title="Edit {{ $mapels->mapel_name }}">
	<i class="icon-pencil text-inverse"></i>
</a> | 

<a href="{{ $url_destroy }}" class="btn-delete" title="<br>'{{ $mapels->mapel_name }}' ">
	<i class="icon-trash text-danger"></i>
</a>