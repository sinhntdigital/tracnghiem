@extends('layouts.app')

@section('content')
<link href="{{ asset('public/css/member/quiz.css') }}"  rel="stylesheet" type="text/css" />
<?php  $timeTN = strtotime($exam->end_doing) - strtotime('now') ; ?>
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
                                {!! $question->title_question !!} : {!! $question->content_question !!}
                            </b>
                        </div>
                        <div class=" col-md-12">
                            @foreach($answers as $answer)
                                @if($question->question_id==$answer->question_id)
                                    <div class="element_quiz col-md-5 content_quiz" >
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

<div style="margin:0 550px 0 550px ;font-size: 30px;font-weight: bold;border-style: solid;min-width: 150px;text-align: center;">
    <span id="h">Giờ</span> :
    <span id="m">Phút</span> :
    <span id="s">Giây</span>
</div>
 <script language="javascript">
    start();
    var h = null; // Giờ
    var m = null; // Phút
    var s = null; // Giây
    
    var timeout = null; // Timeout
    
    function start()
    {
        /*BƯỚC 1: LẤY GIÁ TRỊ BAN ĐẦU*/
        if (h === null)
        {
            h = parseInt({{$timeTN/3600}}); 
            m = parseInt({{$timeTN%3600/60}});
            s = parseInt({{$timeTN%3600%60}});
        }

        /*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
        // Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
        //  - giảm số phút xuống 1 đơn vị
        //  - thiết lập số giây lại 59
        if (s === -1){
            m -= 1;
            s = 59;
        }

        // Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
        //  - giảm số giờ xuống 1 đơn vị
        //  - thiết lập số phút lại 59
        if (m === -1){
            h -= 1;
            m = 59;
        }

        // Nếu số giờ = -1 tức là đã hết giờ, lúc này:
        //  - Dừng chương trình
        if (h == -1){
            clearTimeout(timeout);
            alert('Hết giờ');
            window.location="{{route('result',$examId)}}";
            return false;
        }

        /*BƯỚC 1: HIỂN THỊ ĐỒNG HỒ*/
        document.getElementById('h').innerText = h;
        document.getElementById('m').innerText = m;
        document.getElementById('s').innerText = s;

        /*BƯỚC 1: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
        timeout = setTimeout(function(){
            s--;
            start();
        }, 1000);
    }
    
    function stop(){
        clearTimeout(timeout);
    }

</script>
<!-- noback and no forward browser -->
<script type="text/javascript">
    window.history.forward();
    function noBack()
    {
        window.history.forward();
    }

    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>

@endsection
