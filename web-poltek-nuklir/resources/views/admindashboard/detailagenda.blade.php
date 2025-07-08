@extends('admindashboard.mainlte')
@section('adminpage')
                    <div class="card">
                                <div class="card-header">
                                    <strong>Agenda Details</strong>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('admin.updateagenda', $datas[0]->uid) }}"> 
                                    <button type="button" class="btn btn-success"><i class="fa fa-magic"></i>&nbsp; Update</button>
                                    </a>
                                </div>
                            </div>
                    <div class="card">
                            <img class="card-img-top" src="{{ $datas[0]->link_img}}" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title mb-3">Judul Kegiatan {{ $datas[0]->name }}</h3>
                                <h4 class="card-title mb-3">Tanggal Mulai kegiatan {{ $datas[0]->startdate_event }}</h4>
                                <h4 class="card-title mb-3">Tanggal Akhir kegiatan {{ $datas[0]->enddate_event }}</h4>
                                <h4 class="card-title mb-3">Waktu Kegiatan {{ $datas[0]->time }}</h4>
                                <h4 class="card-title mb-3">tempat Kegiatan {{ $datas[0]->location }}</h4>
                                <h4 class="card-title mb-3">by {{ $datas[0]->id_user }}</h4>
                                <p class="card-text">{!! $datas[0]->description !!}</p>
                            </div>
                        </div>
@endSection