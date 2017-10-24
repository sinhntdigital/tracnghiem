@extends('admin.app')
@section('page_content')
  <a href="{{route('level.index')}}" class="btn btn-info" style="float: right;margin-bottom: 20px;">Quay lại</a>
  @if(isset($listLevel))
    <form action="{{route('level.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >Cấp độ :</label>
        <input type="text" class="form-control" id="title_level" required="true" name="title_level" value="{{$listLevel->title_level}}">
      </div>
       <div class="form-group">
        <label >chọn lĩnh vực :</label>
        <select class="form-control" name="field_id">
          @foreach($listFields as $listField)
            <option value="{{$listField->id}}" <?php if($listField->id == $listLevel->field_id) echo 'selected'; ?> >{{$listField->name}}</option>
          @endforeach
        </select>
        <input type="hidden" name="level_id" value="{{$listLevel->id}}">
      </div>
      <button type="submit" name="send_form_level_edit" class="btn btn-default">Submit</button>
    </form>
  @else
    <form action="{{route('level.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >Cấp độ :</label>
        <input type="text" class="form-control" id="title_level" required="true" name="title_level">
      </div>
       <div class="form-group">
        <label >chọn lĩnh vực :</label>
        <select class="form-control" name="field_id">
          @foreach($listFields as $listField)
            <option value="{{$listField->id}}">{{$listField->name}}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" name="send_form_level" class="btn btn-default">Submit</button>
    </form>
  @endif

@endsection