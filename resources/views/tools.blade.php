@extends('layout.layout')

@section('title','工具')
@section('header','工具')
@section('description','工具')
@section('breadcrumb')
    <li><a href="/"><i class="fa fa-dashboard"></i>导航</a></li>
@endsection


@section('content')

{{--Qingbo8--}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info">

            <div class="box-header with-border">
                <h3 class="box-title">密码加密 password_hash(md5($str),PASSWORD_BCRYPT);</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="box-body">
                {{--密码--}}
                <div class="form-group">
                    <div class="col-md-8">
                        <div><input type="text" class="form-control" placeholder="请输入待加密的密码" id="password"></div>
                    </div>
                    <div class="col-md-8">
                        <div><input type="text" class="form-control" placeholder="结果" id="password-encode-result"></div>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <div class="row">
                    <div class="col-md-8">
                        <button type="button" class="btn btn-sm btn-primary" id="tool-password-encode-submit"><i class="fa fa-check"></i> 提交</button>
                        <button type="button" class="btn btn-sm btn-default" onclick="history.go(-1);">返回</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>

{{--null & bg-maroon--}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info">

            <div class="box-header with-border">
                <h3 class="box-title">Life.Tools</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="box-body">
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-maroon margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-maroon margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-maroon margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-maroon margin"></button></a>
            </div>

            <div class="box-footer">
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>

{{--null & bg-orange --}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info">

            <div class="box-header with-border">
                <h3 class="box-title">design</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="box-body">
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-orange margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-orange margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-orange margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-orange margin"></button></a>
            </div>

            <div class="box-footer">
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>

{{--null & bg-olive --}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info">

            <div class="box-header with-border">
                <h3 class="box-title">null</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="box-body">
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-olive margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-olive margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-olive margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-olive margin"></button></a>
            </div>

            <div class="box-footer">
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>

{{--null & bg-purple --}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info">

            <div class="box-header with-border">
                <h3 class="box-title">null</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="box-body">
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-purple margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-purple margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-purple margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-purple margin"></button></a>
            </div>

            <div class="box-footer">
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>

{{--project & bg-navy --}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info">

            <div class="box-header with-border">
                <h3 class="box-title">企业首页</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="box-body">
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-navy margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-navy margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-navy margin"></button></a>
                <a href="" target="_blank"><button type="button" class="btn btn-sm bg-navy margin"></button></a>
            </div>

            <div class="box-footer">
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>

@endsection


@section('js')
<script>
    $(function() {
        // 修改幻灯片信息
        $("#tool-password-encode-submit").on('click', function() {
            var url = '/test/tool';
            $.post(
                url,
                {
                    _token:$('meta[name="_token"]').attr('content'),
                    type:"password_encode",
                    password:$("#password").val()
                },
                function(data){
                    if(data.success){
                        layer.msg(data.msg);
                        $("#password-encode-result").val(data.data.password_encode);
                    } else {
                        layer.msg(2);
                    }
            }, 'json');
        });
    });
</script>
@endsection








