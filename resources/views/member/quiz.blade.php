@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="question">
                    <b> noi dung question</b>
                </div>
                <div class="select_queston">
                    @foreach($questions as $question)
                        <div class="head_quiz col-md-12">
                            <b>
                                {{$question->title_question}} : {{$question->content_question}}
                            </b>
                        </div>
                        <div class="content_quiz col-md-12">
                            @foreach($answers as $answer)
                                @if($question->question_id==$answer->question_id)
                                    <div class="element_quiz col-md-6">
                                        <input type="radio" name="gender" value="{{$answer->content_answer_id}}"> 
                                        {{$answer->content_answer}}
                                    </div>
                                @endif
                        @endforeach
                        </div>
                       
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
{!! $questions->render() !!}
@endsection
