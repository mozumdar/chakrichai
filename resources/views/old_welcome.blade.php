@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-10">
    <h1>Recent Jobs</h1>
        <div class="table">
                <table>
                    <thead>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)
                    <tr>
                        <td><img src="{{asset('uploads/logo')}}/{{$job->company->logo}}" width="80"></td>
                        <td>Position:{{$job->position}}<br><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;{{$job->type}}</td>
                        <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Address:{{$job->address}}</td>
                        <td><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;Date:{{$job->created_at->diffForHumans()}}</td>
                        <td><a href="{{route('jobs.show',[$job->id,$job->slug])}}">
                        <button class="btn btn-success btn-sm">
                        Apply
                        </button></a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>    

        <div>
            <a href="{{route('alljobs')}}">  <button class="btn btn-primary btn-lg" style="width: 100%;">Browse all jobs</button></a>
        </div>
        <br><br>
            <h1>Featured Companies</h1>
    </div>

    <div class="container">
    <div class="row">

        @foreach($companies as $company)
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
            @if($company->logo)
                <img src="{{asset('uploads/logo')}}/{{$company->logo}}" width="60%">
            @else
                <img src="{{asset('uploads/logo/man.jpg')}}" width="60%">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{$company->cname}}</h5>
                <p class="card-text">{{str_limit($company->description,20)}}</p>
                <a href="{{route('company.index',[$company->id,$company->slug])}}" class="btn btn-primary">visit compant</a>
            </div>
            </div>
        </div>
        @endforeach

    </div>
    </div>

    <!-- 
    Mahmudul Hasan Mozumdar
    Id. 161-115-019
    Md. Abu. Salek Khan
    Id. 161-115-009
    -->
</div>

@endsection
<style>
.fa{
    color: #4183D7;
}
</style>
