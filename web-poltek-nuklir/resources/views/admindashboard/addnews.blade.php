@extends('admindashboard.mainlte')
@section('adminpage')
<div class="card">
                            <div class="card-header">
                                <strong>Add News</strong> Poltek Nuklir
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ route('store.addnews') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="writer-news" class=" form-control-label">Penulis Berita</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="writer-news" name="writer_news" placeholder="writer" class="form-control"><small class="form-text text-muted">Penulis berita</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="date-news" class=" form-control-label">Tanggal Berita</label></div>
                                        <div class="col-12 col-md-9"><input type="date"  id="date-news" name="date_news" class="form-control"><small class="form-text text-muted">Tanggal Berita Dibuat</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="title-news" class=" form-control-label">Judul Berita</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="title-news" name="title_news" placeholder="title" class="form-control"><small class="form-text text-muted">Judul berita</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="highlight-news" class=" form-control-label">Highlight Berita</label></div>
                                        <div class="col-12 col-md-9"><textarea name="highlight_news" id="highlight-news" rows="9" placeholder="Content..." class="form-control"></textarea><small class="form-text text-muted">Highlight berita secara umum</small></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="content-news" class=" form-control-label">Isi Berita</label></div>
                                        <div class="col-12 col-md-9"><textarea name="content_news" id="editor" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="link-img-news" class=" form-control-label">Link Image Berita</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="link-img-news" name="link_img_news" placeholder="link image" class="form-control"><small class="form-text text-muted">Link image berita yang dapat dimasukkan</small></div>
                                    </div>
                                    <div class="card">
                                        <img id="Show-imageNews" class="card-img-top" src="https://i.imgur.com/ue0AB6J.png" alt="Image news">
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="alias-news" class=" form-control-label">Alias</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="alias-news" name="alias_news" class="form-control"></div>
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
            $('#link-img-news').change(function(){
                let reader = document.getElementById("link-img-news").value;
                document.getElementById("Show-imageNews").src = reader;
            })
            $('#writer-news').change(function(){
                let reader = document.getElementById("writer-news").value;
                const textArr = reader.split(" ");
                let i = 0;
                let alias = "";
                while (i < textArr.length){
                    alias = alias + textArr[i][0];
                    i++;
                }
                document.getElementById("alias-news").value = alias;
            })
        })
</script>
@endSection