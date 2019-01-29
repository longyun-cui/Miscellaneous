@extends('library.layout.layout')


{{--html.head--}}
@section('head_title') 【GPS】developing @endsection
@section('meta_author')@endsection
@section('meta_title')@endsection
@section('meta_description')@endsection
@section('meta_keywords')@endsection



{{--header--}}
@section('component-header')
    @include('library.component.header')
@endsection


{{--footer--}}
@section('component-footer')
    @include('library.component.footer')
@endsection




{{--custom-content--}}
@section('custom-content')

    {{--banner--}}
    @include('library.component.banner-for-root')

    <div class="page-root">

        @include('library.module.section-left-right-bar', ['items'=>$items])

        @include('library.module.root-service-list', ['items'=>$items])

        @include('library.module.root-article-list', ['items'=>$items])

        @include('library.module.root-product-1', ['items'=>$items])

        @include('library.module.root-product-2', ['items'=>$items])

        @include('library.module.root-recycle')

        @include('library.module.root-advantage-1')

        @include('library.module.root-coverage', ['items'=>$items])

        @include('frontend.module.root-qrcode')

        @include('library.module.root-client-1')

    </div>

@endsection




{{--style--}}
@section('custom-style')
<style>
</style>
@endsection




{{--style--}}
@section('custom-script')
<script>
</script>
@endsection