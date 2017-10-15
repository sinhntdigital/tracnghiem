@extends('admin.app')
@section('page_content')
<a href="" class="btn btn-info" style="float: right;margin-bottom: 20px;">Thêm câu hỏi</a>
<table class="table table-striped">
	<thead>
		<tr>
			<th>stt</th>
			<th>tiêu đề câu hỏi</th>
			<th>nội dung câu hỏi</th>
			<th>tổng đáp án</th>
			<th></th>
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
					{{$listQuestion->content_question}}
				</td>
				<td>
					{{$listQuestion->total_ans}}
				</td>
				<td><a href="">thêm đáp án</a></td>
			</tr>
			<?php $i++; ?>
		@endforeach
	</tbody>
</table>
@endsection