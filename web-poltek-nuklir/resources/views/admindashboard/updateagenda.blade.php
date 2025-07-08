@extends('admindashboard.mainlte')
@section('adminpage')
<div class="card">
                            <div class="card-header">
                                <strong>Update Agenda {{ $datas[0]->uid }}</strong> Poltek Nuklir
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ route('store.updateagenda') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="name-agenda" class=" form-control-label">Nama Kegiatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="name-agenda" name="name_agenda" placeholder="Nama Kegiatan" class="form-control" value="{{ $datas[0]->name }}"><input type="hidden" id="custId" name="uid_agenda" value="{{ $datas[0]->uid }}"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="desc-agenda" class=" form-control-label">Deskripsi Kegiatan</label></div>
                                        <div class="col-12 col-md-9"><textarea name="desc_agenda" id="editor" rows="9" class="form-control">{{ $datas[0]->description }}</textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="date-agenda-start" class=" form-control-label">Tanggal Kegiatan Mulai</label></div>
                                        <div class="col-12 col-md-9"><input type="date"  id="date-agenda-start" name="date_start_agenda" class="form-control" value="{{ $datas[0]->startdate_event }}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="date-agenda-end" class=" form-control-label">Tanggal Kegiatan Akhir</label></div>
                                        <div class="col-12 col-md-9"><input type="date"  id="date-agenda-end" name="date_end_agenda" class="form-control" value="{{ $datas[0]->enddate_event }}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="time-agenda" class=" form-control-label">Waktu Kegiatan</label></div>
                                        <div class="col-12 col-md-9"><input type="time"  id="time-agenda" name="time_agenda" class="form-control" value="{{ $datas[0]->time }}"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="link-img-agenda" class=" form-control-label">Link Image Agenda</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="link-img-agenda" name="link_img_agenda" placeholder="link image" class="form-control" value="{{ $datas[0]->link_img }}"></div>
                                    </div>
                                    <div class="card">
                                        <img id="Show-imageNews" class="card-img-top" src="{{ $datas[0]->link_img }}" alt="Image news">
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="loc-agenda" class=" form-control-label">Tempat Kegiatan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="loc-agenda" name="loc_agenda" placeholder="lokasi kegiatan" class="form-control" value="{{ $datas[0]->location }}"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="alias-agenda" class=" form-control-label">Alias</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="alias-agenda" name="alias_agenda" class="form-control" value="{{$dataUser->id}}"></div>
                                    </div>
                                    <div class="form-actions form-group">
                                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                        <button type="reset" class="btn btn-danger btn-sm">reset</button>
                            
                                    </div>
                                </form>
                            </div>
                            
                        </div>

<script src="https://cdn.tiny.cloud/1/your-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
        tinymce.init({
   selector: '#editor',
   plugins: "a11ychecker advcode advlist advtable anchor autocorrect autolink autoresize autosave casechange charmap checklist code codesample directionality editimage emoticons export footnotes formatpainter fullscreen help image importcss inlinecss insertdatetime link linkchecker lists media mediaembed mentions mergetags nonbreaking pagebreak pageembed permanentpen powerpaste preview quickbars save searchreplace table tableofcontents template tinycomments tinydrive tinymcespellchecker typography visualblocks visualchars wordcount",
   toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright alignjustify | indent outdent | wordcount',
        });
        $(document).ready(function(){
            $('#link-img-agenda').change(function(){
                let reader = document.getElementById("link-img-agenda").value;
                document.getElementById("Show-imageNews").src = reader;
            })
        })
</script>
@endSection