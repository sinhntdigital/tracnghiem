@extends('home.app')

@section("page_content")
<link rel="stylesheet" type="text/css" href="{{ asset("public/css/pagehome/pagehome.css") }}"/>
<div class="clearfix"></div>
<div class="container" >
    <form action="{{route('home')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="search">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <select  name="field[]" id="single-append-radio" class="form-control select2-allow-clear select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" placeholder="nhập lĩnh vực">
                            @foreach($fields as $field)
                                <option value="{{$field->id}}">{{$field->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <select  class="form-control" name="level" required="true">
                            <option value="">chọn cấp độ</option>
                            @foreach($levels as $level)
                                <option value="{{$level->id}}">{{$level->title_level}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <input type="submit" name="search_exam" class="btn btn-warning" value="Tìm kiếm" />
                </div>
            </div>
        </div>
    </form>

    <div class="info">
        <div class="row info-header">
            <div class="col-sm-12">
                <h3>Tổng số đề thi là : {{count($exams)}}</h3>
            </div>
        </div>
        @foreach($exams as $exam)
            <div class="row info-content">
                
                <div class="col-sm-12">
                    <?php $dem=0; ?>
                    @foreach($userExams as $userExam)
                        @if($userExam->exam_id == $exam->id)
                            <?php $dem++; ?>
                        @endif
                    @endforeach
                    @if($dem==0)
                        {{$exam->title_exam}} :  <a href="{{route('addExam',$exam->id)}}">thêm vào danh sách thi</a>
                    @else
                        {{$exam->title_exam}} :  <a href="">Đã được thêm vào danh sách thi</a>
                    @endif
                    
                </div>
            </div>
        @endforeach
        
        {!! $exams->render() !!}
    </div>
</div>
<script type="text/javascript">
    setTimeout(function(){ $(".select2-search__field").attr('placeholder', 'chọn lĩnh vực' ); }, 20);
</script>
@endsection
