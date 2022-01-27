@include('includes.head')
@include('includes.style')
@include('includes.foot')
<form action="{{url('update')}}" class="bg-dark container col-6 mt-5" method="post">
   @csrf
   <h1 class="text-center mt-3 text-success">EDIT DATA</h1>
   <div class="form-group mt-1 row">
        <div class="col-1"><img class="ml-3 mt-1" src="https://img.icons8.com/color/30/000000/user.png"/></div>
        <div class="col-11">
            <input class="form-control" type="text" name="name" value="{{$user->name}}" placeholder="Enter Name">
        </div>
   </div>
   <div class="form-group row">
        <div class="col-1"><img class="ml-3 mt-1" src="https://img.icons8.com/office/30/000000/gmail-login.png"/></div>
        <div class="col-11">
            <input class="form-control" type="email" name="email" value="{{$user->email}}" placeholder="Enter email">
        </div>
   </div>
   <div class="form-group row">
        <div class="col-1"><img class="ml-3 mt-1" src="https://img.icons8.com/color/30/000000/age.png"/></div>
        <div class="col-11">
            <input class="form-control mb-2" type="Number" name="age" value="{{$user->age}}" placeholder="Enter age">
        </div>
   </div>
   <input class="btn btn-warning ml-5 mb-4" type="submit" name="submit" value="Edit Data">
   <input type="hidden" name="id" value="{{$user->id}}">
</form>