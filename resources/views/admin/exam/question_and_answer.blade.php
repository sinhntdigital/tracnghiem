@extends('admin.app')
@section('page_content')
<a href="{{route('exam.show',\App\Question::where('id',$contentAnswers[0]->question_id)->first()->exam_id)}}" class="btn btn-info">Quay lại</a>
<a href="{{route('answer.create','question_id='.$contentAnswers[0]->question_id)}}" class="btn btn-info" style="float: right;margin-bottom: 20px;">Thêm đáp án</a>
<h3>nội dung câu hỏi : {!! $question->content_question !!}</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th>stt</th>
      <th>nội dung đáp án</th>
      <th>giá tri đáp án</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    @foreach($contentAnswers as $contentAnswer)
      <tr>
        <td>
          {{$i}}
        </td>
        <td>
          {{$contentAnswer->content_answer}}
        </td>
        <td>
          <?php echo  ($contentAnswer->answer==1) ? 'đúng' : 'sai'; ?>
        </td>
        <td><a href="{{route('answer.edit',$contentAnswer->id)}}">sửa</a></td>
      </tr>
      <?php $i++; ?>
    @endforeach
  </tbody>
</table>
@endsection