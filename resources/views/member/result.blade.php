@extends('layouts.app')

@section('content')
    <b>Đáp án :</b><br>
    @foreach($results as $result)
        {{ $result->title_question }} : {{ $result->content_answer }} <br>
    @endforeach
    <b>Đáp án của bạn :</b><br>
    
    @foreach($questions as $question)
        <a href="javascript:detailQuestion({{$question->exam_id}},{{$question->question_id}})" ><i data-toggle="modal" data-target="#detailQuestion">{{ $question->title_question }} :</i></a> 
        <?php $i=0; ?>
        @foreach($resultOfYous as $resultOfYou)
            @if($question->question_id == $resultOfYou->question_id)
                @if($i!=0)
                    và
                @endif
                {{ $resultOfYou->content_answer }} 
                <?php $i++; ?>
            @endif
        @endforeach
        <br>
    @endforeach
    <?php
        $diem=0;
    ?>    
    
            @foreach($questions as $question) 
                <?php $dem=0; ?>
            	@foreach($answers as $answer) 
                    @if( $answer->answer != $answer->user_answer &&  $question->question_id == $answer->question_id)
                        <?php $dem++; ?>
                    @endif
                @endforeach 
                @if($dem==0)
                    <?php $diem++; ?>
                @endif
            @endforeach
    <b>Tổng điểm của bạn {{$diem}} / {{count($questions)}}</b>

    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="detailQuestion" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Nội dung chi tiết</h4>
            </div>
            <div class="modal-body">
              <p id="detail"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
        </div>
    </div>
    <script type="text/javascript">
        function detailQuestion(exam_id,question_id) {
            $.ajax({
                url: '{{route("detailQuestion")}}',
                type: 'GET',
                data: {exam_id: exam_id,question_id: question_id},
            })
            .done(function(data) {
                $("#detail").html(data);
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

