@extends('admin.app')
@section('page_content')
  <form action="{{route('admin.store')}}" method="POST">
    <input type="hidden" name="_token" value="XPgZ7JDUrAPsRmLjDpjYDeSqS6JXkkC1ohGKWbar">
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email" required="true" name="email">
    </div>
    <div class="form-group">
      <label >name:</label>
      <input type="text" class="form-control" id="name" required="true" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" required="true" name="password">
    </div>
    <div class="form-group">
      <label >authorities:</label>
      <select class="form-control" required="true" name = "auth_id">
        <option value="">chọn quyền user</option>
        @foreach($listUsers as $listUser)
        <option value="{{$listUser->id}}">
            {{$listUser->role_name}}
        </option>
        @endforeach
      </select>
    </div>
    <button type="submit" name="send_form_user" class="btn btn-default">Submit</button>
  </form>
@endsection