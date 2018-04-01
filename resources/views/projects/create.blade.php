@extends('layouts.app')
@section('content') 

<div class="col-md-9 col-lg-9 col-sm-9 pull-left" style="background: white">
    <h1> Create New project</h1>

    <div class="row col-md-12 col-lg-12 col-sm-12" style="background: white ;margin: 10px ">

        <form method="post" action="{{route('projects.store') }}">
            {{csrf_field()}}

            <div class="form-group">
                <label for="project-name">Name<span class="requierd">*</span></label>
                <input placeholder="Enter Name"
                       id="project-name"
                       required
                       name="name"
                       spellcheck="false"
                       class="form-control" /> 

                <input type="hidden" name="company_id" value="{{$company_id}}" /> 

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
                </textarea> 
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
            <li><a href="/projects/">show my projects</a></li>
        </ol>
    </div>
</div>
@endsection