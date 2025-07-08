@extends('admindashboard.mainlte')
@section('adminpage')

                            <div class="card">
                                <div class="card-header">
                                    <strong>News</strong>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('admin.addnews') }}">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp; Add News</button>
                                    </a>
                                </div>
                            </div>
<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>uid</th>
                <th>writer</th>
                <th>date</th>
                <th>title</th>
                <th>highlight</th>
                <th>alias</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->uid}}</td>
                <td>{{$data->writer}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->highlight}}</td>
                <td>{{$data->alias}}</td>
                
                <td>
                    <a href="{{ route('admin.detailnews',$data->uid) }}"><button type="button" class="btn btn-outline-primary"><i class="fa fa-file-text-o"></i></button><a>
                
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#mediumModal_{{$data->uid}}"><i class="fa fa-minus-square"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @foreach($datas as $data)
    <div class="modal fade" id="mediumModal_{{$data->uid}}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Delete Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Apakah benar data berita {{$data->uid}}, penulis {{$data->writer}}, tanggal {{$data->date}} dengan judul {{$data->title}}
                                akan dihapus dari database?   
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <a href="{{ route('admin.deletenews',$data->uid) }}">
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>
<script>
    new DataTable('#example', {
    responsive: true
});
</script>
@endSection