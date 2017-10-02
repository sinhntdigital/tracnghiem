@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="question">
                    <b> noi dung question</b>
                </div>
                <div class="select_queston">
                    <?php 
                         $questions=\App\User::join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id','=','role_user.role_id')->join('exams','users.id','=','exams.user_id')->leftjoin('questions','exams.id','=','questions.exam_id')->join('content_answers','questions.id','=','content_answers.question_id')->where('role_user.user_id',Auth::user()->id)->where('exam_id','=',$id)->groupBy('question_id')->paginate(1);
                         $answers=\App\User::join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id','=','role_user.role_id')->join('exams','users.id','=','exams.user_id')->leftjoin('questions','exams.id','=','questions.exam_id')->join('content_answers','questions.id','=','content_answers.question_id')->where('role_user.user_id',Auth::user()->id)->where('exam_id','=',$id)->get();
                        dump($answers);
                    ?>
                    @foreach($questions as $question)
                        {{$question->content_question}}
                        <br>
                        @foreach($answers as $answer)
                            @if($question->question_id==$answer->question_id)
                                {{$answer->content_answer}}
                            @endif
                            <br>
                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
{!! $questions->render() !!}
@endsection
