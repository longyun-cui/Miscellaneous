@extends('layout.layout')

@section('title','导航')
@section('header','导航')
@section('description','导航')
@section('breadcrumb')
    <li><a href="#"><i class="fa fa-home"></i>首页</a></li>
@endsection


@section('content')

{{--Qingbo8--}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info">

            <div class="box-header with-border" style="margin:8px 0 16px;">
                <h3 class="box-title">Qingbo8</h3>
            </div>

            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-olive" href="/">bg-olive</a>
                <a target="_blank" class="margin btn btn-sm bg-orange" href="/">bg-orange</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="/">bg-maroon</a>
                <a target="_blank" class="margin btn btn-sm bg-teal" href="/">bg-teal</a>
                <a target="_blank" class="margin btn btn-sm bg-navy" href="/">bg-navy</a>
                <a target="_blank" class="margin btn btn-sm bg-black" href="/">bg-black</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href="/">bg-purple</a>

                <a target="_blank" class="margin btn btn-sm bg-success" href="/">bg-success</a>
                <a target="_blank" class="margin btn btn-sm bg-warning" href="/">bg-warning</a>
                <a target="_blank" class="margin btn btn-sm bg-danger" href="/">bg-danger</a>
                <a target="_blank" class="margin btn btn-sm bg-info" href="/">bg-info</a>
                <a target="_blank" class="margin btn btn-sm bg-primary" href="/">bg-primary</a>
                <a target="_blank" class="margin btn btn-sm bg-grey" href="/">bg-grey</a>
            </div>

            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm btn-success" href="/">btn-success</a>
                <a target="_blank" class="margin btn btn-sm btn-warning" href="/">btn-warning</a>
                <a target="_blank" class="margin btn btn-sm btn-danger" href="/">btn-danger</a>
                <a target="_blank" class="margin btn btn-sm btn-info" href="/">btn-info</a>
                <a target="_blank" class="margin btn btn-sm btn-primary" href="/">btn-primary</a>
                <a target="_blank" class="margin btn btn-sm btn-grey" href="/">btn-grey</a>
            </div>

            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm btn-primary" href="http://softorg.cn:8088/admin">企业站后台</a>
                <a target="_blank" class="margin btn btn-sm btn-primary" href="http://softorg.cn:8088/org/1">企业站前台</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://qingbo8.cn:8088/login">登录页</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://qingbo8.cn:8088/guest">游客页</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://qingbo.date:8088/admin">作品</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://qingbo8.cn:8088/Program/divuncate">divuncate</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://qingbo8.cn:8088/Program/relation_init">relation_init</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href=""></a>
            </div>

            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://qingbo8.cn:8088/test">qingbo.test</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://qingbo8.cn:8088/testLearning">qingbo.testLearning</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://qingbo8.cn:8088/testLaravel">qingbo.testLaravel</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://qingbo8.cn:8088/testProgram">qingbo.testProgram</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="">null</a>
            </div>

        </div>
        <!-- END PORTLET-->
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info">

            <div class="box-header with-border" style="margin:8px 0 16px;">
                <h3 class="box-title">Programming.Tools</h3>
            </div>
            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-primary" href="https://adminlte.io/themes/AdminLTE/index2.html">AdminLTE</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href="https://laravel.com/docs/5.5">Docs5.5(English)</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href="http://d.laravel-china.org/docs/5.1">Docs5.1</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href="http://d.laravel-china.org/docs/5.4">Docs5.4</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href="http://d.laravel-china.org/docs/5.5">Docs5.5</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href="http://laravelacademy.org/post/205.html">Laravel 帮助函数</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href="http://laravelacademy.org/post/178.html">Laravel 集合</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href="http://select2.github.io/select2/">select2</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href="https://nwidart.com/laravel-modules/v1/introduction">laravel-modules</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href="https://codeigniter.org.cn/docs">codeigniter</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href=""></a>
            </div>

            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-primary" href="https://netcn.console.aliyun.com/core/domain/list">域名控制台</a>
                <a target="_blank" class="margin btn btn-sm bg-primary" href="https://qiye.aliyun.com/">阿里企业邮箱</a>
                <a target="_blank" class="margin btn btn-sm btn-success" href="https://mp.weixin.qq.com/">微信公众平台</a>
                <a target="_blank" class="margin btn btn-sm btn-success" href="https://exmail.qq.com/cgi-bin/loginpage">腾讯企业邮箱</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://mail.163.com/">网易邮箱</a>
            </div>

            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="https://github.com/softorg2017/softorg">softorg</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href="https://github.com/">GitHub</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href="https://gitlab.com/">GitLab</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.bootcss.com/">BootCSS</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://expo.bootcss.com/">BootCSS.expo</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.bootcdn.cn/">BootCDN</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.open-open.com/lib/view/open1355830836135.html">Redis</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.bejson.com/">Json验证</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.atool.org/timestamp.php">时间戳</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="https://github.com/zusaleshi">donghai</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://pandao.github.io/editor.md/">markdown(github)</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href="https://space.bilibili.com/11490447#!/">万力B站</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href=""></a>
            </div>


            {{--Article.Laravel--}}
            <div class="box-header with-border" style="margin:8px 0 16px;">
                <h3 class="box-title">Article.Laravel</h3>
            </div>
            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-olive" href="http://laravelacademy.org/post/3502.html">多用户认证功能实现详解</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href="http://laravelacademy.org/post/153.html">Laravel 精选资源大全</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href="http://laravelacademy.org/post/3850.html">集成七牛云存储实现云存储功能</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href="http://laravelacademy.org/post/2605.html">Simple QrCode 二维码</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href="http://www.runoob.com/design-pattern/design-pattern-tutorial.html">设计模式</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href="http://coding.imooc.com/class/chapter/111.html">Laravel 5.4 快速开发简书（课程）</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href="https://d.laravel-china.org/docs/5.5/migrations">migrations 数据迁移</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href=""></a>
            </div>


            {{--Article.JQuery--}}
            <div class="box-header with-border" style="margin:8px 0 16px;">
                <h3 class="box-title">Article.JQuery</h3>
            </div>
            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-olive" href="http://www.cnblogs.com/xiangsj/p/5884808.html">JQuery 选中， 置顶、上移、下移、置底、删除</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href=""></a>
            </div>


            {{--Article.Bootstrap--}}
            <div class="box-header with-border" style="margin:8px 0 16px;">
                <h3 class="box-title">Article.Bootstrap</h3>
            </div>
            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-olive" href="http://www.runoob.com/bootstrap/bootstrap-modal-plugin.html">Bootstrap 模态框（Modal）插件</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href=""></a>
            </div>


            {{--Article.Others--}}
            <div class="box-header with-border" style="margin:8px 0 16px;">
                <h3 class="box-title">Article.Others</h3>
            </div>
            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-olive" href="http://www.open-open.com/lib/view/open1355830836135.html">利用predis操作redis方法大全</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href=""></a>
            </div>

            <div class="box-header with-border" style="margin:8px 0 16px;">
                <h3 class="box-title">Medsci</h3>
            </div>

            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://chandao.bioon.com:2222">禅道</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://doc.medon.com.cn:2222">日报</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://api.center.medsci.cn/api/docs#/">API.center</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://backend.bioon.com/admin">inside</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://common.backend.medsci.cn/admin">common</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://xy.bioon.com/admin_mooc/">行云后台</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://xy.bioon.com/">行云学院</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://customer.medsci.cn/imbruvica/index">杨森</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://customer.medsci.cn/casemeeting/meeting/list/bayer">拜新同</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://customer.medsci.cn/novonordisk/meeting/list/nhnd">诺和诺德</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://customer.medsci.cn/glypressin/index">可利新</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://customer.medsci.cn/glypressin/record/export">可利新下载</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href=""></a>
            </div>

        </div>
        <!-- END PORTLET-->
    </div>
</div>

{{--Documents--}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info">

            <div class="box-header with-border" style="margin:8px 0 16px;">
                <h3 class="box-title">Life</h3>
            </div>
            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.google.cn/maps">Google地图</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href="http://map.baidu.com">百度地图</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://map.baidu.com/subways/index.html?c=shanghai">上海地铁</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href="https://netcn.console.aliyun.com/core/domain/list">域名控制台</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href=""></a>
            </div>

            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-olive" href="http://www.youku.com/">优酷</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href="https://v.qq.com/">腾讯视频</a>
                <a target="_blank" class="margin btn btn-sm bg-olive" href="http://www.iqiyi.com/">爱奇艺</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href="https://www.iqiyi.com/a_19rrhb3xvl.html">海贼王</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="https://www.ashleymadison.com">ashleymadison</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href=""></a>
            </div>

            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-purple" href="http://list.youku.com/show/id_z6e782defbfbd0d4e11ef.html">晓松奇谈2017</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href="http://www.iqiyi.com/a_19rrh9pwd9.html">坑王驾到</a>
                <a target="_blank" class="margin btn btn-sm bg-purple" href=""></a>
            </div>


            <div class="box-header with-border" style="margin:8px 0 16px;">
                <h3 class="box-title">Life.Tools</h3>
            </div>
            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.zhaopin.com/">智联招聘</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://xin.baidu.com/">百度企业信用</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="https://www.tianyancha.com/">天眼查</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://salarycalculator.sinaapp.com/">上海税后工资计算器</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="https://checkcoverage.apple.com/cn/zh/">apple保修服务和支持期限</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.miitbeian.gov.cn">ICP备案</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.chsi.com.cn/">学信网</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href=""></a>
            </div>

        </div>
        <!-- END PORTLET-->
    </div>
</div>



<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info">

            <div class="box-header with-border" style="margin:8px 0 16px;">
                <h3 class="box-title">企业首页</h3>
            </div>
            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.meritse.com/">锐凡企业管理咨询（上海）有限公司</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="https://www.paintin.cn/">Paintin（插画师）</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://leancapital.tk/">精益资本</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.youguard.cn/">上海誉甲自动化技术有限公司</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.10years.me/account/login">10年后</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.justsy.com">嘉兴嘉赛</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href=""></a>
            </div>

            <div class="box-header with-border" style="margin:8px 0 16px;">
                <h3 class="box-title">design</h3>
            </div>
            <div class="box-body">
                <a target="_blank" class="margin btn btn-sm bg-maroon" href="http://www.hellorf.com/">站酷海洛</a>
                <a target="_blank" class="margin btn btn-sm bg-maroon" href=""></a>
            </div>

        </div>
        <!-- END PORTLET-->
    </div>
</div>




@endsection


@section('js')
    <script>
        $(function() {
        });
    </script>
@endsection









