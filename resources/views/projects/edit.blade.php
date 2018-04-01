@extends('layouts.app')
@section('content') 

<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
    <h1> update project</h1>

    <div class="row col-md-12 col-lg-12 col-sm-12" style="background: white ;margin: 10px ">

        <form method="post" action="{{route('projects.update',[$project->id]) }}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label for="project-name">Name<span class="requierd">*</span></label>
                <input placeholder="Enter Name"
                       id="project-name"
                       required
                       name="name"
                       spellcheck="false"
                       class="form-control"
                       value="{{$project->name}}" /> 
            </div>
            <div class="form-group">
                <label for="project-content">Description</label>
                <textarea placeholder="Enter Description"
                          style="resize: vertical"
                          id="project-content"
                          name="description"
                          rows="5"
                          spellcheck="false"
                          class="form-control autosize-target text-left col-lg-offset-3 col-md-offset-3">
                    {{$project->description}}" </textarea> 
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="submit"/>
            </div>
        </form>
    </div>
</div>
<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
    <div class="sidebar-module"style="padding-top: 6px">
        <h4>Actions</h4>
        <ol class="list-unstyled">
            <li><a href="/projects/{{$project->id}}">Back to The project</a></li>
            <li><a href="/projects/">Back to all projects</a></li>
        </ol>
    </div>
</div>
@endsection