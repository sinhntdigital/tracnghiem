@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="question">
                    <b>danh sách đề thi trắc nghiệm</b>
                </div>
                <div class="select_queston">
                   <table width="100%">
                       @foreach($listQuizs as $listQuiz)
                            <tr>
                                <td>{{$listQuiz->title_exam}}</td>
                                <td><a href="{{route('quiz',$listQuiz->id)}}" onclick="update_start_doing({{$listQuiz->id}})">Bắt đầu</a></td>
                                <td><a href="{{route('quiz',$listQuiz->id)}}">vào làm bài dang dở</a></td>
                                <td><a href="{{route('deleteExam',$listQuiz->exam_id)}}" onclick="return confirm('are you sure?')">xóa</a></td>
                            </tr>
                       @endforeach
                   </table>
                   <div>
                       Chọn thời gian làm bài <input type="number" name="" value=60 id="timeKT" > phút
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    function update_start_doing(sdoing) {
        timeKT = document.getElementById('timeKT').value
        $.ajax({
            async : false,
            url: '{{route("usd")}}',
            type: 'GET',
            data: {sd: sdoing,timeKT: timeKT},
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
