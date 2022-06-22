<table class="table table-hover">
	<tr>
		<th>ID</th>
		<th>User</th>
		<th>Mapel</th>
		<th>Status</th>
	</tr>
	<tr>
		<td> {{$trans->id}} </td>
		<td> {{$trans->user->name}} </td>
		<td> {{$trans->user->mapel->mapel_name}} </td>
		<td> {{$trans->status}} </td>
	</tr>
</table>