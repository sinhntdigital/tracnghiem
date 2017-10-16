@extends('admin.app')
@section('page_content')
  @if(isset($question))
   <form action="{{route('question.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >tiêu đề câu hỏi :</label>
        <input type="text" class="form-control" id="title_question" required="true" name="title_question" required="true" value="{{$question->title_question}}">
      </div>
      <div class="form-group">
        <label >nội dung câu hỏi :</label>
        <input type="text" class="form-control" id="content_question" required="true" name="content_question" required="true" value="{{$question->content_question}}">
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
        <input type="text" class="form-control" id="content_question" required="true" name="content_question" required="true">
      </div>
      <input type="hidden" name="exam_id" value="{{$_GET['exam_id']}}">
      <button type="submit" name="send_form_question" class="btn btn-default">Submit</button>
    </form>
  @endif
@endsection