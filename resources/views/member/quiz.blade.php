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
                                        <input type="checkbox" name="gender" <?php if($answer->user_answer==1) echo 'checked';?> value="{{$answer->content_answer_id}}" onclick="sendAnswer(this.value)" > 
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
<div style="text-align: center">
    {!! $questions->render() !!}
</div>
<script type="text/javascript">
    function sendAnswer(contentA_id) {
        $.ajax({
            url: '{{route("updateAnswer")}}',
            type: 'GET',
            data: {contentA_id: contentA_id},
        })
        .done(function(data) {
            console.log(data);
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
