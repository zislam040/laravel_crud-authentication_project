@extends('header')
@section('content')

<div class="container">
        <h2>Create new student</h2>
        <form class="form-horizontal" action="{{route('store')}}" method="post" form data-parsley-validate>
        {{ csrf_field() }}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
            <input type="name" class="form-control" name="name" id="name" placeholder="Enter Name" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="registration_id">Registration:</label>
            <div class="col-sm-10">
            <input type="number" class="form-control" name="registration_id" id="registration_id" placeholder="Enter registration_id" required>
            </div>
        </div>

        
        <div class="form-group">
            <label class="control-label col-sm-2" for="department_name">Department:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control"  name="department_name" id="department_name" placeholder="Enter department_name" required>
            </div>
        </div>

        
        <div class="form-group">
            <label class="control-label col-sm-2" for="info">Information:</label>
            <div class="col-sm-10">
            <textarea type="text" class="form-control" rows="10" name="info" id="info" placeholder="Enter info"></textarea>
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

