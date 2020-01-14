@extends('layouts.app')

@section('additional_css')	
	<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

@section('content')
<div class="container-fluid app-wapper">	
    <div class="container">
    	<div class="app-section app-reveal-section align-items-center pb-10">    		
	        <div class="cat-header">
	        	<div class="row">
	        		<div class="col-lg-6">
	        			<h4 class="text-green">{{ trans('pages.explore_data_offer') }}</h4>
			            <h1 class="mt-0">{{$category}} Community</h1>
			            <p class="desc">
			            	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
			            </p>	            
			            <button type="button" class="btn btn-round sendmessage-btn">{{ trans('pages.read_more') }}</button>
	        		</div>	
	        	</div>	        	
	        </div>	        
	        <div class="app-monetize-section-item0 ml-0 mt-20"></div>
	        <div class="cat-body">
	        	<div class="row">
	        		<div class="col-lg-4">
	        			<label class="cat-label">{{ trans('pages.explore') }}</label>	        	
	                    <div class="adv-combo-wrapper custom-select2 cat-select">
		                    <select id="community" data-placeholder="{{ trans('pages.select_by_community') }}" class="no-search">
		                    	<option></option>
		                    	@foreach ($communities as $community)
	                                <option value="{{$community->communityName}}">{{ $community->communityName }}</option>
	                            @endforeach
		                    </select>	                        
		                </div>
	        		</div>
	        		<div class="col-lg-4">
	        			<label class="cat-label">{{ trans('pages.for_data_about') }}</label>	        		
	                    <div class="adv-combo-wrapper custom-select2 cat-select">
		                    <select id="theme" data-placeholder="{{ trans('pages.all_themes') }}" class="no-search">
		                    	<option></option>
		                    	@foreach ($themes as $theme)
	                                <option value="{{$theme->themeIdx}}">{{ $theme->themeName }}</option>
	                            @endforeach
		                    </select>	                        
		                </div>
	        		</div>
	        		<div class="col-lg-4">
	        			<label class="cat-label">{{ trans('pages.in') }}</label>
	        			<div class="custom-dropdown-container cat-select">
	                        <div id="region" class="custom-dropdown" tabindex="1">
	                            <div class="select">
	                                <span>{{ trans('pages.all_regions') }}</span>
	                            </div>
	                            <input type="hidden" id="offercountry" name="offercountry" value="">
	                            <ul class="custom-dropdown-menu region-select" style="display: none;">
				                    <div class="adv-combo-wrapper custom-select2">
					                    <select data-placeholder="{{ trans('pages.search_by_country') }}">
					                    	<option></option>
					                    	@foreach ($countries as $country)
				                                <option value="{{$country->regionIdx}}">{{ $country->regionName }}</option>
				                            @endforeach
					                    </select>	                        
					                </div>
	                            	<h5>Or {{ trans('pages.select_region') }}:</h5>
	                            	<span class="region">{{ trans('pages.all_regions') }}</span>
	                            	@foreach ($regions as $region)
					                    <span class="region">{{$region->regionName}}</span>
					                @endforeach
	                            </ul>
	                        </div>
	                        <div class="error_notice offercountry"> This field is required</div>
	                    </div>  
	        		</div>
	        	</div>
	        </div>	        
    	</div>		    
    	<h1 class="mb-20 fs-30 text-bold text-left"> Explore {{ count($dataoffer) }} data offers </h1>    	
		<div class="row">
			@foreach ( $dataoffer as $offer )
			<div class="col-md-4">
				<div class="card card-profile card-plain">					
					<div class="card-header">
						<a href="/data/{{ $offer['offerIdx'] }}">
							<img class="img" src="{{ asset('uploads/offer/'.$offer['offerImage']) }}" />
						</a>
					</div>
					<div class="card-body text-left">
						<h4 class="offer-title card-title">{{$offer['offerTitle']}}</h4>
						<h6 class="offer-location card-category">
							@foreach($offer['region'] as $region)
			            		<span>{{ $region->regionName }}</span>
			            	@endforeach
			            </h6>			            
						<a href="{{ $offer['provider']->companyURL }}"><img class="img" src="{{ asset('uploads/company/'.$offer['provider']->companyLogo) }}" /></a>
					</div>
				</div>	
			</div>	
			@endforeach			
  		</div>
  		@if (count($dataoffer) > 12 )
  		<div class="text-center"><button type="button" class="btn btn-round sendmessage-btn">Load More</button></div>
  		@endif
    </div>      
</div>

@endsection

@section('additional_javascript')
	<script src="{{ asset('js/plugins/select2.min.js') }}"></script>        
@endsection
