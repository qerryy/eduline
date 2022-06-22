<a href="{{ $url_show }}" class="btn-show" title="Detail : {{ $jadwal->hari }}">
	<i class="icon-eye-open text-primary" ></i>
</a> | 

<a href="{{ $url_edit }}" class="" title="Edit {{ $jadwal->hari }}">
	<i class="icon-pencil text-inverse"></i>
</a> | 

<a href="{{ $url_destroy }}" class="btn-delete" title="<br>'{{ $jadwal->hari }}' ">
	<i class="icon-trash text-danger"></i>
</a>