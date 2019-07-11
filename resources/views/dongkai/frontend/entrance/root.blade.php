@extends('dongkai.frontend.layout.layout')


{{--html.head--}}
@section('head_title')快速下款@endsection
@section('meta_author')@endsection
@section('meta_title')@endsection
@section('meta_description')@endsection
@section('meta_keywords')@endsection



{{--header--}}
@section('component-header')
    {{--@include('dongkai.frontend.component.header')--}}
@endsection


{{--footer--}}
@section('component-footer')
    {{--@include('dongkai.frontend.component.footer')--}}
@endsection




{{--custom-content--}}
@section('custom-content')

    {{--banner--}}
    @include('dongkai.frontend.component.banner-for-root')

    <div class="page-root">

        @include('dongkai.frontend.module.root-loan', ['menus'=>$loan_menus,'items'=>$loan_items])

    </div>

@endsection



{{--footer--}}
@section('custom-style')
<style>
</style>
@endsection