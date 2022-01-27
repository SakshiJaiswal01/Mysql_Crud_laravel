@include('includes.head')
@include('includes.style')
@include('includes.foot')
@if(Session::has('success'))
<div class="alert alert-success">{{Session::get('success')}}</div>
@endif
@if(Session::has('error'))
<div class="text-danger">{{Session::get('error')}}</div>
@endif
<form action="insert" class="bg-dark container col-6 mt-5" method="post">
   @csrf
   <h1 class="text-center mt-3 text-success">Add User</h1>
   <div class="form-group mt-1 row">
        <div class="col-1"><img class="ml-3 mt-1" src="https://img.icons8.com/color/30/000000/user.png"/></div>
        <div class="col-11">
            <input type="text" class="form-control" name="name" placeholder="Enter Name">
            @if($errors->has('name'))
            <label class="mt-1  text-danger">{{$errors->first('name')}}</label>
            @endif
        </div>
   </div>
   <div class="form-group row">
        <div class="col-1"><img class="ml-3 mt-1" src="https://img.icons8.com/office/30/000000/gmail-login.png"/></div>
        <div class="col-11">
            <input class="form-control" type="email" name="email" placeholder="Enter Email">
            @if($errors->has('email'))
            <label class="mt-1  text-danger">{{$errors->first('email')}}</label>
            @endif
        </div>
   </div>
   <div class="form-group row">
        <div class="col-1"><img class="ml-3 mt-1" src="https://img.icons8.com/color/30/000000/age.png"/></div>
        <div class="col-11">
            <input class="form-control" type="Number" name="age" placeholder="Enter Age">
            @if($errors->has('age'))
            <label class="mt-1  text-danger">{{$errors->first('age')}}</label>
            @endif
        </div>
   </div>
   <input class="btn btn-success ml-5 mb-4" type="submit" name="submit" value="ADD User">
</form>
