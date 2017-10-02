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
                        $questions=\App\User::join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id','=','role_user.role_id')->join('exams','exams.user_id','=','users.id')->join('questions','exams.id','=','questions.exam_id')->join('content_answers','content_answers.question_id','=','questions.id')->where('role_user.user_id',Auth::user()->id)->groupBy('questions.id')->paginate(1);

                        $answers=\App\User::join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id','=','role_user.role_id')->join('exams','exams.user_id','=','users.id')->join('questions','exams.id','=','questions.exam_id')->join('content_answers','content_answers.question_id','=','questions.id')->where('role_user.user_id',Auth::user()->id)->get();
                        
                      dump($questions);
                    ?>
                

                        @foreach ($questions as $question)
            
                       <B>{{ $question->title_question }}</B><br>
                            {{ $question->content_question }}<br>
                            @foreach ($answers as $answer)
                               @if($question->question_id == $answer->question_id) 
                                    {{$answer->content_answer}}
                                @endif
                            @endforeach
                               

                        @endforeach

                  
                    
                </div>
            </div>
        </div>
    </div>
</div>
{!! $questions->render() !!}
@endsection
