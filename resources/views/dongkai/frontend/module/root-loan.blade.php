{{--main--}}
@foreach($menus as $m)
<section class="section-container bg-white" style="margin-bottom:0;">
    <div class="row">

        <header class="module-row module-header-container text-center">
            <div class="wow slideInLeft module-title-row title-with-double-line color-1 border-light title-h5"><b>{{ $m->title or '' }}</b></div>
            {{--<div class="wow slideInRight module-subtitle-row color-5 title-h5"><b>{{ $m->subtitle or '' }}</b></div>--}}
        </header>

        <div class="module-row module-body-container">
            @foreach($m->items as $v)
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 item-col">
                    <a class="zoom- clearfix" target="_blank" href="{{ $v->link_url or '' }}">
                        <div class="item-container model-left-right padding-8px- bg-light-">

                            <figure class="image-container padding-top-1-4-">
                                <div class="image-box">
                                    <img data-action="zoom-" src="{{ env('DOMAIN_CDN').'/'.$v->cover_pic }}" alt="Property Image">
                                    {{--<span class="btn btn-warning">热销中</span>--}}
                                </div>
                            </figure>

                            <figure class="text-container">
                                <div class="text-box" style="padding:0 4px;">
                                    <div class="text-title-row font-12px">{{ $v->title or '' }}</div>
                                    <div class="text-description-row">
                                        <div>
                                            <span class="color-red  font-12px">{{ $v->subtitle or '' }}</span>
                                        </div>
                                        <div class="_none">
                                            <span>{{ $v->description or '' }} </span>
                                        </div>
                                    </div>
                                </div>
                            </figure>

                        </div>
                    </a>
                </div>

            @endforeach
        </div>

        <footer class="module-row module-footer-container text-center _none">
            <a href="{{ url('/rent-out/list') }}" class="view-more">查看更多 <i class="fa fa-hand-o-right"></i></a>
        </footer>

    </div>
</section>
@endforeach





{{--main--}}