@extends('admin.app')
@section('page_content')
  @if(isset($userEdits))
    <form action="{{route('listRole.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >name role:</label>
        <input type="text" class="form-control" id="name" required="true" name="name">
      </div>
      <button type="submit" name="send_form_role" class="btn btn-default">Submit</button>
    </form>
  @else
    <form action="{{route('listRole.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >role name :</label>
        <input type="text" class="form-control" id="name" required="true" name="name">
      </div>
      <button type="submit" name="send_form_role" class="btn btn-default">Submit</button>
    </form>
  @endif

@endsection