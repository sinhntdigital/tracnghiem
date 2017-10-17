@extends('home.app')

@section("page_content")
<link rel="stylesheet" type="text/css" href="{{ asset("public/css/pagehome/pagehome.css") }}"/>
<div class="clearfix"></div>
<div class="container" >
    <div class="search">
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <select  name="hang_hoa[]" id="single-append-radio" class="form-control select2-allow-clear select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" placeholder="nhập lĩnh vực">
                        <option>sdsd</option>
                        <option>srwer</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <select  class="form-control">
                        <option>sdsd</option>
                        <option>srwer</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <button type="button" class="btn btn-warning">Tìm kiếm</button>
            </div>
        </div>
    </div>

    <div class="info">
        <div class="row info-header">
            <div class="col-sm-12">
                <h3>Tổng số đề thi là : {{count($exams)}}</h3>
            </div>
        </div>
        @foreach($exams as $exam)
            <div class="row info-content">
                
                <div class="col-sm-12">
                    {{$exam->title_exam}}
                </div>
            </div>
        @endforeach
        
        {!! $exams->render() !!}
    </div>
</div>
@endsection
