@extends('admin.app')
@section('page_content')
  @if(isset($contentAnswer))
    <form action="{{route('answer.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label >nội dung đáp án :</label>
        <input type="text" class="form-control" id="content_answer" required="true" name="content_answer" required="true" value="{{$contentAnswer->content_answer}}">
      </div>
      <div class="form-group">
        <label >giá trị đáp án :</label>
        <select class="form-control" name="answer">
          <option value="0" <?php if($contentAnswer->answer == 0) echo "selected"; ?> >
            sai
          </option>
          <option value="1" <?php if($contentAnswer->answer == 1) echo "selected"; ?>>
            đúng
          </option >
        </select>
      </div>
      <input type="hidden" name="answer_id" value="{{$contentAnswer->id}}">
      <input type="hidden" name="question_id" value="{{$contentAnswer->question_id}}">
      <button type="submit" name="send_form_answer_edit" class="btn btn-default">Submit</button>
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