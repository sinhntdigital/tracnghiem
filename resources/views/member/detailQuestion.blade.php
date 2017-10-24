<b>{!! $details[0]->title_question !!} : {!! $details[0]->content_question !!} </b><br>
@foreach($details as $detail)
	{{$detail->content_answer}}<br>
@endforeach