@extends('admindashboard.mainlte')
@section('adminpage')
                    <div class="card">
                                <div class="card-header">
                                    <strong>News Details</strong>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('admin.updatenews', $datas[0]->uid) }}"> 
                                    <button type="button" class="btn btn-success"><i class="fa fa-magic"></i>&nbsp; Update</button>
                                    </a>
                                </div>
                            </div>
                    <div class="card">
                            <img class="card-img-top" src="{{ $datas[0]->image }}" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title mb-3">Judul Berita {{ $datas[0]->title }}</h3>
                                <h4 class="card-title mb-3">Tanggal berita {{ $datas[0]->date }}</h4>
                                <h4 class="card-title mb-3">Penulis berita oleh {{ $datas[0]->writer }}</h4>
                                <h4 class="card-title mb-3">Highlight berita {{ $datas[0]->highlight }}</h4>
                                <p class="card-text">{!! $datas[0]->containt !!}</p>
                            </div>
                        </div>
@endSection