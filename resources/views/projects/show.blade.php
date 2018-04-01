@extends('layouts.app')
@section('content') 

<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
    <div class="well well-lg">
        <h1>{{$project->name}}</h1>
        <p class="lead" > {{$project->description}}</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Visit Us Now !!</a></p>
    </div>


    <div class="row" style="background: white ;margin: 10px ">
        <a class="pull-right btn btn-default btn-sm" href="/projects/create">Add Project</a>
        
        <div class="row">
            <form method="post" action="{{route('comments.store') }}">
                {{csrf_field()}}

                <input type="hidden" name="commentable" value="Project">
                <input type="hidden" name="commentable_id" value="{{$project->id}}">

                <div class="form-group"><br/>
                    <label for="comment-content">comments</label>
                    <textarea placeholder="Enter comment"
                              style="resize: vertical"
                              id="comment-content"
                              name="body"
                              rows="5"
                              spellcheck="false"
                              class="form-control autosize-target text-left col-lg-offset-3 col-md-offset-3">
                    </textarea> 
                </div>
                <div class="form-group">
                    <label for="comment-content">URL</label>
                    <textarea placeholder="Enter URL"
                              style="resize: vertical"
                              id="comment-content"
                              name="url"
                              rows="3"
                              spellcheck="false"
                              class="form-control autosize-target text-left col-lg-offset-3 col-md-offset-3">
                    </textarea> 
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="submit"/>
                </div>
            </form>
        </div>






    </div>
</div>
<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
    <div class="sidebar-module"style="padding-top: 6px">
        <h4>Actions</h4>
        <ol class="list-unstyled">
            <li><a href="/projects/{{$project->id}}/edit">Edit</a></li>

            <br/>

            @if($project->user_id == Auth::user()->id)
            <li>
                <a   
                    href="#"
                    onclick="
                            var result = confirm('Are you sure you wish to delete this project?');
                            if (result) {
                                event.preventDefault();
                                document.getElementById('delete-form').submit();
                            }
                    "
                    >
                    Delete
                </a>
                <form id="delete-form" action="{{ route('projects.destroy',[$project->id]) }}" 
                      method="POST" style="display: none;">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
                </form>
            </li>
            @endif

            <li><a href="/projects/">Back</a></li>
        </ol>
    </div>
</div>
@endsection