@extends('admin.app')
@section('page_content')
  @if(isset($rowExam))
    <form action="{{route('exam.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >tựa đề thi :</label>
        <input type="text" class="form-control" id="title_exam" required="true" name="title_exam" value="{{$rowExam->title_exam}}">
      </div>
      <div class="form-group">
        <label >lĩnh vực :</label>
        <select class="form-control" required="true" onchange="chon_level(this.value)" name="field_id">
          <option value="">chọn lĩnh vực</option>
          @foreach($listFields as $listField)
            <option value="{{$listField->id}}" <?php if($listField->id == $rowLevel->field_id) echo "selected"; ?>>
              {{$listField->name}}
            </option>
          @endforeach
        </select>
      </div>
      <div id="list_level" class="form-group">
        <label >cấp độ :</label>
        <select class="form-control" required="true" name="level_id">
          <option value="">chọn cấp độ</option>
          @foreach($listLevels as $listLevels)
            <option value="{{$listLevels->id}}" <?php if($listLevels->id == $rowExam->level_id) echo "selected"; ?> >
              {{$listLevels->title_level}}
            </option>
          @endforeach
        </select>
      </div>
      <input type="hidden" name="exam_id" value="{{$rowExam->id}}">
      <button type="submit" name="send_form_exam_edit" class="btn btn-default">Submit</button>
    </form>
  @else
    <form action="{{route('exam.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >tựa đề thi :</label>
        <input type="text" class="form-control" id="title_exam" required="true" name="title_exam">
      </div>
      <div class="form-group">
        <label >lĩnh vực :</label>
        <select class="form-control" required="true" onchange="chon_level(this.value)" name="field_id">
          <option value="">chọn lĩnh vực</option>
          @foreach($listFields as $listField)
            <option value="{{$listField->id}}">
              {{$listField->name}}
            </option>
          @endforeach
        </select>
      </div>
      <div id="list_level" class="form-group">
      </div>
      <button type="submit" name="send_form_exam" class="btn btn-default">Submit</button>
    </form>
  @endif
<script type="text/javascript">
  function chon_level(field_id) {
    $.ajax({
      url: '{{route("select_level")}}',
      type: 'GET',
      data: {field_id: field_id},
    })
    .done(function(data) {
      $( "#list_level" ).html(data);
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    
  }
</script>
@endsection