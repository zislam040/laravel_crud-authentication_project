@extends('header')
@section('content')

<div class="container">
        <h2>Create new student</h2>
        <form class="form-horizontal" action="{{route('update',$student->id)}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
            <input type="name" class="form-control" name="name" id="name" value="{{$student->name}}" placeholder="Enter Name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="registration_id">Registration:</label>
            <div class="col-sm-10">
            <input type="number" class="form-control" name="registration_id" id="registration_id" value="{{$student->registration_id}}" placeholder="Enter registration_id">
            </div>
        </div>

        
        <div class="form-group">
            <label class="control-label col-sm-2" for="department_name">Department:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control"  name="department_name" id="department_name"  value="{{$student->department_name}}" placeholder="Enter department_name">
            </div>
        </div>

        
        <div class="form-group">
            <label class="control-label col-sm-2" for="info">Information:</label>
            <div class="col-sm-10">
            <textarea type="text" class="form-control" rows="10" name="info" id="info">{{$student->info}}</textarea>
            </div>
        </div>

        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Registration</button>
            </div>
        </div>



</form>
 </div>
@endsection

