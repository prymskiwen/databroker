@extends('layouts.app')

@section('title')
{{ $usecase[0]->meta_title }}
@stop
@section('description')
{{ $usecase[0]->meta_desc }}
@stop

@section('additional_css')
    <link rel="stylesheet" href="{{ asset('css/imageuploadify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

@section('content')
<div class="container-fluid app-wapper">
    <div class="bg-pattern1-left"></div>
    <div class="container">
        <div class="app-section app-reveal-section align-items-center usecases detail">
            <div class="blog-header row">                
                <div class="col-md-12">
                    <h1 class="h1-small">{{$usecase[0]->articleTitle}}</h1>
                    <p class="fs-18"><span class="h3" id="matchmaking-detail-category"><b>By Valentina Ponomariova&nbsp;|&nbsp;{{ date_format($usecase[0]->published,"F d, Y") }}</b></span></p>
                </div>                
            </div>          
            <div class="blog-content">
                <div class="row">
                    <div class="col-lg-4 flex-vcenter mgh30">
                        <!-- <h4 class="h4_intro">Explore use cases in</h4> -->
                    </div>
                </div>
                <div id="usecase-list" class="mgh30">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                                <div class="card card-profile card-plain">                  
                                    <div class="card-header holder">        
                                        <img class="img" src="{{ asset('uploads/usecases/'.$usecase[0]->image) }}"  id="news_detail_img"/>
                                    </div>
                                </div>  
                        </div>  
                    </div>

                    <div class="row">                
                        <div class="col-md-12" id="updates-article-content">
                            {!! $usecase[0]->articleContent !!}
                        </div>                
                    </div> 
                    <!-- <div class="row">                
                        <div class="col-md-12">
                            <h1 class="h1-small">The challenge</h1>
                            <p class="fs-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
                        </div>                
                    </div> 
                    <div class="row">                
                        <div class="col-md-12">
                            <h1 class="h1-small">The solution</h1>
                            <p class="fs-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
                            <p class="fs-18">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
                        </div>                
                    </div>   -->
                </div>
            </div>
        </div>  
    </div>  
    <div id="sub-footer" class="sub-footer mgh30">
        <div class="section_splitor_gray"></div>
        <div class="bg-pattern1-both flex-center flex-vertical">
            <div class="divider-green mgb30"></div>
            <div class="h2">Find out about new updates</div>
            <div class="para mgb40">Sign up for our NewsBytes!</div>
            <a href="{{route('register_nl')}}"><button type="button" class="customize-btn button mgt15">SIGN UP</button></a>
        </div>
        <div class="section_splitor_gray h713"></div>
    </div>   
    <div class="container">
        <div class="app-section app-reveal-section align-items-center usecases">
            <div id="usecase-list2" class="mgh30">
            <h1 class="fs-18"><b>More updates to discover</b></h1>
                <div class="row">
                    @foreach ( $usecases2 as $usecase )
                    <div class="col-md-4">
                        <a href="{{ route('about.news_detail',  ['id' => $usecase->articleIdx] ) }}">
                            <div class="card card-profile card-plain">                  
                                <div class="card-header holder" id="resposive-card-header">        
                                    <img class="img" src="{{ asset('images/usecases_small/'.$usecase->image) }}" id="responsive-card-img"/>
                                    <div class="small-image-overlay"></div>
                                </div>
                                <div class="card-body text-left">
                                    <div class="para-small">
                                        <!-- <span class="color-green">{{ $usecase->community->communityName }}</span> -->
                                        <span class="color-green"><b>By Valentina Ponomariova&nbsp;|&nbsp;{{ date_format($usecase->published,"F d, Y") }}</b></span>
                                    </div>
                                    <h4 class="offer-title card-title">{{ $usecase->articleTitle }}</h4>
                                </div>
                            </div>  
                        </a>
                    </div>  
                    @endforeach         
                </div>
            </div>
            <div class="flex-center">
                <a href="{{ route('about.news') }}"><button type="button" class="button blue-outline w225">LOAD MORE</button></a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('additional_javascript')
    <script src="{{ asset('js/plugins/imageuploadify.min.js') }}"></script>        
    <script src="{{ asset('js/plugins/select2.min.js') }}"></script>        
@endsection
