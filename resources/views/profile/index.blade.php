@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        @if(empty(Auth::user()->profile->avatar))
            <img src="{{asset('avatar/man.jpg')}}" width="100" style="width: 100%;"/>
        @else   
            <img src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" style="width: 100%; height: 50%;"/>
            <!-- <img src="/uploads/avatar/{{ Auth::user()->profile->avatar }}"  width="100" style="width: 100%;"> -->


        @endif
            <br><br>

            <form action="{{route('avatar')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
            <div class="card-header">Update Profile picture</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="avatar">
                    <br><button type="submit" class="btn btn-success">Update</button>
                    @if($errors->has('avatar'))
                        <div class="error" style="color: red;">{{$errors->first('avatar')}}</div>
                    @endif
                </div>
            </div>
            </form>
            
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Update Your Profile</div>
                <form action="{{route('profile.create')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control" value="{{Auth::user()->profile->address}}"/>
                        @if($errors->has('address'))
                            <div class="error" style="color: red;">{{$errors->first('address')}}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Phone number</label>
                        <input type="text" name="phone_number" class="form-control" value="{{Auth::user()->profile->phone_number}}"/>
                        @if($errors->has('phone_number'))
                            <div class="error" style="color: red;">{{$errors->first('phone_number')}}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Experience</label>
                        <textarea type="text" name="experience" class="form-control">{{Auth::user()->profile->experience}}</textarea>
                        @if($errors->has('experience'))
                            <div class="error" style="color: red;">{{$errors->first('experience')}}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Qualification</label>
                        <textarea type="text" name="bio" class="form-control">{{Auth::user()->profile->bio}}</textarea>
                        @if($errors->has('bio'))
                            <div class="error" style="color: red;">{{$errors->first('bio')}}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
                @endif
            </div>
        </div>
        </form>
        <div class="col-md-4">
            <div class="card">
            <div class="card-header">Your Information</div>
                <div class="card-body">
                    
                    <p>Profile: <a href="{{route('user.aprofile')}}">Click</a></p>
                    <p>Change Password: <a href="{{route('seeker.change')}}">Click</a></p>
                    <p>Applications: <a href="{{route('all.applications')}}">Click</a></p>
                    <p>Applications Bin: <a href="{{route('bin.applications')}}">Click</a></p>
                </div>
            </div>
            <form action="{{route('cover.letter')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
            <div class="card-header">Update Coverletter</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="cover_letter">
                    <br><button type="submit" class="btn btn-success">Update</button>
                    @if($errors->has('cover_letter'))
                        <div class="error" style="color: red;">{{$errors->first('cover_letter')}}</div>
                    @endif
                </div>
            </div>
            </form>
            
            <form action="{{route('resume')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
            <div class="card-header">Update Resume</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="resume">
                    <br><button type="submit" class="btn btn-success">Update</button>
                    @if($errors->has('resume'))
                        <div class="error" style="color: red;">{{$errors->first('resume')}}</div>
                    @endif
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
</div>

<!-- 
    Mahmudul Hasan Mozumdar
    Id. 161-115-019
    Md. Abu. Salek Khan
    Id. 161-115-009
    -->
@endsection
