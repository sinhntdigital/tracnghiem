@extends('layouts.app')

@section('content')
    <b>Đáp án :</b><br>
    @foreach($results as $result)
        {{ $result->title_question }} : {{ $result->content_answer }} <br>
    @endforeach
    <b>Đáp án của bạn :</b><br>
    
    @foreach($questions as $question)
        {{ $question->title_question }} : 
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
@endsection

