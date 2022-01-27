@include('includes.head')
@include('includes.foot')
<div class="container col-8 bg-dark mt-5 pt-3" >
    <div class="mb-5">
        <a href="add" class="btn btn-success float-right">Add User</a>
    </div>
    <table class="table text-light">
        <thead>
        <tr class="text-dark">
            <th class="h4 text-warning" scope="col">Name</th>
            <th class="h4 text-warning" scope="col">Email</th>
            <th class="h4 text-warning" scope="col">Age</th>
            <th class="h4 text-warning" scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $i)
            <tr>
                <td class="h6 text-light" scope="col">{{$i->name}}</td>
                <td class="h6 text-light" scope="col">{{$i->email}}</td>
                <td class="h6 text-light" scope="col">{{$i->age}}</td>
                <td><a href="delete/{{$i->id}}"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/30/000000/external-delete-user-interface-wanicon-flat-wanicon.png"/></a>
                <a href="edit/{{$i->id}}"><img src="https://img.icons8.com/fluency/30/000000/edit.png"/></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>