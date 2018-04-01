@extends('layouts.app')
@section('content') 

<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
    <div class="jumbotron">
        <h1>{{$company->name}}</h1>
        <p class="lead" > {{$company->description}}</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Visit Us Now !!</a></p>
    </div>


    <div class="row" style="background: white ;margin: 10px ">
        <a class="pull-right btn btn-default btn-sm" href="/projects/create/{{$company->id}}">Add Project</a>
        @foreach($company -> Projects as $project)
        <div class="col-lg-4">
            <h2>{{ $project->name }}</h2>
            <p class="text-danger">{{$project->description}} </p>
            <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View Project &raquo;</a></p>
        </div>
        @endforeach
    </div>
</div>
<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
    <div class="sidebar-module"style="padding-top: 6px">
        <h4>Actions</h4>
        <ol class="list-unstyled">
            <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
            <li>

                <a   
                    href="#"
                    onclick="
                            var result = confirm('Are you sure you wish to delete this company?');
                            if (result) {
                                event.preventDefault();
                                document.getElementById('delete-form').submit();
                            }
                    "
                    >
                    Delete
                </a>

                <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}" 
                      method="POST" style="display: none;">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
                </form>








            </li>
            <li><a href="/companies/">Back</a></li>
        </ol>
    </div>
</div>
@endsection