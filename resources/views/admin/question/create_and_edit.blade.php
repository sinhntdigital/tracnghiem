@extends('admin.app')
@section('page_content')
<script src="{{ asset('public/assets/global/plugins/ckeditor/ckeditor.js') }}"></script>
  @if(isset($question))
    <a href="{{route('exam.show',$question->exam_id)}}" class="btn btn-info" >Quay lại</a>
    <form action="{{route('question.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >tiêu đề câu hỏi :</label>
        <input type="text" class="form-control" id="title_question" required="true" name="title_question" required="true" value="{{$question->title_question}}">
      </div>
      <div class="form-group">
      <div class="form-group">
        <label>Chọn avartar</label>
        <a href="{{ asset("public/filemanager/dialog.php") }}?type=1&field_id=f_image" class="thumbnail resfile-btn"><img class="f_image_preview" style="width:100%;height:300px;" src="{{ old('f_image', isset($data) ? $data['avatar'] : null) }}" alt="1920 x 500"></a>
        <div class="input-group">
            <input type="hidden" class="form-control" id="f_image" name="avatar" value="{{ old('avatar', isset($data) ? $data['avatar'] : null) }}">
            <span class="input-group-btn">
                <a href="{{ asset("public/filemanager/dialog.php") }}?type=1&field_id=f_image" class="btn blue resfile-btn" title="Call Dialog Select File">Choose From Server</a>
                <a class="btn red remove-image" kr-dest="f_image" title="Remove Image Path">Remove</a>
            </span>
        </div>
      </div>
        <label >nội dung câu hỏi :</label>

        <textarea cols="80" class="form-control" id="content_question" required="true" name="content_question" rows="10">{{$question->content_question}}</textarea>
      </div>
      <input type="hidden" name="question_id" value="{{$question->id}}">
      <input type="hidden" name="exam_id" value="{{$question->exam_id}}">
      <button type="submit" name="send_form_question_edit" class="btn btn-default">Submit</button>
    </form>
  @else
    <a href="{{route('exam.show',$_GET['exam_id'])}}" class="btn btn-info" >Quay lại</a>
    <form action="{{route('question.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >tiêu đề câu hỏi :</label>
        <input type="text" class="form-control" id="title_question" required="true" name="title_question" required="true">
      </div>
      <div class="form-group">
        <label>Chọn avartar</label>
        <a href="{{ asset("public/filemanager/dialog.php") }}?type=1&field_id=f_image" class="thumbnail resfile-btn"><img class="f_image_preview" style="width:100%;height:300px;" src="{{ old('f_image', isset($data) ? $data['avatar'] : null) }}" alt="1920 x 500"></a>
        <div class="input-group">
            <input type="hidden" class="form-control" id="f_image" name="avatar" value="{{ old('avatar', isset($data) ? $data['avatar'] : null) }}">
            <span class="input-group-btn">
                <a href="{{ asset("public/filemanager/dialog.php") }}?type=1&field_id=f_image" class="btn blue resfile-btn" title="Call Dialog Select File">Choose From Server</a>
                <a class="btn red remove-image" kr-dest="f_image" title="Remove Image Path">Remove</a>
            </span>
        </div>
      </div>
      <div class="form-group">
        <label >nội dung câu hỏi :</label>
        <textarea cols="80" class="form-control" id="content_question" required="true" name="content_question" rows="10"></textarea>
      </div>
     
      <input type="hidden" name="exam_id" value="{{$_GET['exam_id']}}">
      <button type="submit" name="send_form_question" class="btn btn-default">Submit</button>
    </form>
  @endif
  <script>
    CKEDITOR.replace('content_question');
  </script>
@endsection