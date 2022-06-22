<a href="{{ $url_show }}" class="btn-show" title="Detail : {{ $trans->invoice_number }}">
	<i class="icon-eye-open text-primary" ></i>
</a> | 

<a href="{{ $url_edit }}" class="" title="Edit {{ $trans->invoice_number }}">
	<i class="icon-pencil text-inverse"></i>
</a> | 

<a href="{{ $url_destroy }}" class="btn-delete" title="<br>'{{ $trans->invoice_number }}' ">
	<i class="icon-trash text-danger"></i>
</a>