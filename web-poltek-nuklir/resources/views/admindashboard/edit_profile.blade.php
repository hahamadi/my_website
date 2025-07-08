@extends('admindashboard.mainlte')
@section('adminpage')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Edit Profile</div>
                        <img class="align-self-center rounded-circle mr-3" id="imageProfile" style="width:150px; height:150px;" alt="" src="{{ asset('upload/admin_images/'.$adminData->profile_image) }}">
                        <div class="card-body card-block">
                            <form method="POST" class="" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="username" name="username" placeholder="{{$adminData->name}}" class="form-control" value="{{$adminData->name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="email" id="email" name="email" placeholder="{{$adminData->email}}" class="form-control" value="{{$adminData->email}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input type="text" id="password" name="password" placeholder="Password" class="form-control" value="{{$adminData->profile_image}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-upload"></i></div><label>Image Upload</label>
                                        <input type="file" id="file-input-imageProfile" name="profile_image" class="form-control-file">
                                    </div>
                                </div>
                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#file-input-imageProfile').change(function(e){
                let reader = new FileReader()
                reader.onload = function(e){
                    $('#Show-imageProfile').attr('src', e.target.result)
                }
                reader.readAsDataURL(e.target.files['0'])
            })
        })
    </script>
@endSection