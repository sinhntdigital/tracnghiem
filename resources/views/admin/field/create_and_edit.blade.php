@extends('admin.app')
@section('page_content')
  @if(isset($listFields))
    <form action="{{route('field.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >field name:</label>
        <input type="text" class="form-control" id="name" required="true" name="name" value="{{$listFields->name}}">
        <input type="hidden" name="field_id" value="{{$listFields->id}}">
      </div>
      <button type="submit" name="send_form_field_edit" class="btn btn-default">Submit</button>
    </form>
  @else
    <form action="{{route('field.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >field name :</label>
        <input type="text" class="form-control" id="name" required="true" name="name">
      </div>
      <button type="submit" name="send_form_field" class="btn btn-default">Submit</button>
    </form>
  @endif

@endsection