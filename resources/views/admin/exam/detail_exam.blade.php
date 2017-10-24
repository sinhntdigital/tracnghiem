@extends('admin.app')
@section('page_content')
<a href="{{route('exam.index')}}" class="btn btn-info" >Quay lại</a>
<a href="{{route('question.create','exam_id='.$listQuestions[0]->exam_id)}}" class="btn btn-info" style="float: right;margin-bottom: 20px;">Thêm câu hỏi</a>
<table class="table table-striped">
	<thead>
		<tr>
			<th>stt</th>
			<th>tiêu đề câu hỏi</th>
			<th>nội dung câu hỏi</th>
			<th>tổng đáp án</th>
			<th>Chi tiết</th>
			<th>Thêm đáp án</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1; ?>
		@foreach($listQuestions as $listQuestion)
			<tr>
				<td>
					{{$i}}
				</td>
				<td>
					{{$listQuestion->title_question}}
				</td>
				<td>
					{!!$listQuestion->content_question!!}
				</td>
				<td>
					{{$listQuestion->total_ans}}
				</td>
				<td>
					@if($listQuestion->total_ans>0)
					<a href="{{route('addAnswer',$listQuestion->qid)}}">chi tiết</a>
					@endif
				</td>
				<td><a href="{{route('answer.create','question_id='.$listQuestion->qid)}}">thêm đáp án</a></td>
				<td><a href="{{route('question.edit',$listQuestion->qid)}}">sửa</a></td>
			</tr>
			<?php $i++; ?>
		@endforeach
	</tbody>
</table>
@endsection