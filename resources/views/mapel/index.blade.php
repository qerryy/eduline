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
    </style>
@endsection 

@section('content')

<div class="container">
  <div class="panel panel-default" style="background-color: rgba(250,250,250,.8);">
      <div class="panel-heading">
        <h3 class="panel-title">Data Mata Pelajaran
            <a href="{{ route('mapel.create') }}" class="btn btn-success pull-right modal-show" style="margin-top: -7px;" title="Create Mapel"><i class="icon-plus"></i> Create</a>
        </h3>
      </div>
      <div class="panel-body">
            <table id="datatable" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mata Pelajaran</th>
                        <th>Harga</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
      </div>
  </div>
</div>

@endsection

@push('scripts')
    <script>
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.mapel') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'mapel_name', name: 'mapel_name'},
                {data: 'total_price', name: 'total_price'},
                {data: 'action', name: 'action'}
            ]
        });
    </script>
@endpush