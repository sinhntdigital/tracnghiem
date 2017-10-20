@extends('admin.app')
@section('page_content')
<script src="{{ asset('public/assets/global/plugins/ckeditor/ckeditor.js') }}"></script>
  @if(isset($question))
   <form action="{{route('question.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >tiêu đề câu hỏi :</label>
        <input type="text" class="form-control" id="title_question" required="true" name="title_question" required="true" value="{{$question->title_question}}">
      </div>
      <div class="form-group">
        <label >nội dung câu hỏi :</label>

        <textarea cols="80" class="form-control" id="content_question" required="true" name="content_question" rows="10">{{$question->content_question}}</textarea>
      </div>
      <input type="hidden" name="question_id" value="{{$question->id}}">
      <input type="hidden" name="exam_id" value="{{$question->exam_id}}">
      <button type="submit" name="send_form_question_edit" class="btn btn-default">Submit</button>
    </form>
  @else
    <form action="{{route('question.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >tiêu đề câu hỏi :</label>
        <input type="text" class="form-control" id="title_question" required="true" name="title_question" required="true">
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