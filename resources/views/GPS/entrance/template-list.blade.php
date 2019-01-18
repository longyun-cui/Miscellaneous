@extends('GPS.layout.layout')

@section('head_title','GPS - 模板')
@section('header','模板')
@section('description','模板')
@section('breadcrumb')
    <li><a href="#"><i class="fa fa-home"></i>首页</a></li>
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-default">

            <div class="box-header with-border">
                <h3 class="box-title"><b>Moban</b></h3>
            </div>

            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm btn-primary" href="{{ url('/template-library/moban3030/') }}">
                    moban3030 - 徒步旅行俱乐部网站模板
                </a>
            </div>

            <div class="box-footer">
            </div>

        </div>
        <!-- END PORTLET-->
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-default">

            <div class="box-header with-border">
                <h3 class="box-title"><b>Jiaoben</b></h3>
            </div>

            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm btn-primary" href="{{ url('/template-library/jiaoben1967/') }}">
                    jiaoben1967 - CSS3悬停特效合集Hover.css
                </a>
                <a target="_blank" class="margin btn btn-sm btn-primary" href="{{ url('/template-library/jiaoben1597/') }}">
                    jiaoben1597 - jQuery动画标签折叠式菜单
                </a>
            </div>

            <div class="box-footer">
            </div>

        </div>
        <!-- END PORTLET-->
    </div>
</div>
@endsection