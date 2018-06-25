@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.bootstrap.min.css')}}">


{{-- <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center">View Users</h1>
    </div>
    <!-- /.col-lg-12 -->
</div> --}}


<div class="adduser_btn"><button onclick="location.href='/users/create'" class="btn"></button>ADD USER</div>

<table id="tlbuser" style="width:100%" class="table table-striped">
    <thead>
        <tr>
            <th>
                First Name
            </th> 
            <th>
                Last Name
            </th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>
                {{$user->firstname}}
            </td>
            <td>
                {{$user->lastname}}
            </td>
            <td>
                <a href="/users/show/{{$user->id}}" class="btn btn-primary">Show</a> &nbsp;|&nbsp;
                <a class="btn btn-info"  data-userid="{{$user->id}}" data-toggle="modal" data-mycontactnum="{{$user->contactnum}}" data-mylastname="{{$user->lastname}}"data-myemail="{{$user->email}}" data-target="#edit">Edit</a>
                &nbsp;|&nbsp;
                <a class="btn btn-danger" data-userid="{{$user->id}}" data-toggle="modal" data-target="#delete"> Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit User</h4>
            </div>
            <form action="{{route('users.update', 'home')}}"  method="post">
                {{method_field('patch')}}
                {{csrf_field()}}
                <div class="modal-body">
                    <input type="hidden" name="user" id="userid" value="">
                    @include('users.edit1')
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
        </div>
        <form action="{{route('users.destroy','home')}}" method="post">
                {{method_field('delete')}}
                {{csrf_field()}}
            <div class="modal-body">
                  <p class="text-center">
                      Are you sure you want to delete this?
                  </p>
              <input type="hidden" name="userid" id="userid" value="">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
              <button type="submit" class="btn btn-warning">Yes, Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>



<script>

  $('#delete').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) 
          var userid = button.data('userid') 
          var modal = $(this)
          modal.find('.modal-body #userid').val(userid);
    })


   $('#edit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      
      var lname = button.data('mylastname') 
      var email = button.data('myemail') 
      var cnum = button.data('mycontactnum') 
      
      var userid = button.data('userid') 
      var modal = $(this)
      modal.find('.modal-body #email').val(email);
      
      modal.find('.modal-body #lastname').val(lname);
      modal.find('.modal-body #contactnum').val(cnum);
    
      modal.find('.modal-body #userid').val(userid);
})

    
      
  
  </script>
  @endsection