@extends('layouts.app')


@section('content')
<div class="container-fluid app-wapper">	
    <div class="top-bg-image"></div>
    <div class="app-section app-reveal-section align-items-center">
        <div class="app-reveal-section-notify" style="margin-bottom: 0;">
            <h1>Welcome to <br> databroker. </h1>
            <p>Here comes an extra copy line. Lorem<br>
                ipsum dolor sit amet, consectetur</p>
        </div>
    </div>
    <img class="app-reveal-section-mark2" src="{{ asset('images/reveal_mark1.jpg') }}">
    <div class="app-section app-reveal-section align-items-center" style="padding-top: 0;">
    
        <img class="app-reveal-section-mark" src="{{ asset('images/reveal_mark0.jpg') }}">
    </div>
</div>
<div class="container-fluid app-wapper">    
	<div class="section_splitor">
        <div class="section_splitor_green"></div>
    </div>
	<div class="container">		
	    <div class="row">
	    	<div class="col-md-12">
				<div class="card card-raised card-background" style="background-image: url('./assets/img/examples/card-project6.jpg')">
					<div class="card-body">
						<h6 class="card-category text-info">Marketing</h6>
						<h3 class="card-title">0 to 100.000 Customers in 6 months</h3>
						<p class="card-description">
							Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
						</p>
						<a href="#pablo" class="btn btn-warning btn-round">
							<i class="material-icons">subject</i> Case Study
						</a>
					</div>
				</div>
			</div>
	    </div>
	    <div class="app-section app-monetize-section align-items-center">
	        <div class="app-monetize-section-item0"></div>
	        <div class="app-monetize-section-item1">
	            <h1>Need data? Find it!</h1>
	            <h1>Got data? Monetise it!</h1>
	            <h3>Simple as that.</h3>
	            <p>Whether you want to buy or sell business data, Databroker's … peer-to-peer marketplace for data brings together everything you need for a winning match!</p>
	        </div>
	        <div class="app-monetize-section-item2">
	            <p>Easy access to large communities of buyers and sellers</p>
	            <p>One platform to manage all aspects of your data transactions</p>
	            <p>Guaranteed security, reliability and privacy thanks to blockchain technology</p>
	        </div>
	        <div class="row app-monetize-section-item3">
	            <ul class="app-monetize-section-item3-list">
	                <li class="app-monetize-section-item3-listitem">
	                    
	                    <h5>Find data</h5>
	                    <h3>Find the data your business needs</h3>
	                    <ul>
	                        <li>
	                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 20 20" style="float: left;">
	                              <path id="check" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2ZM10,17,5,12l1.41-1.41L10,14.17l7.59-7.59L19,8Z" transform="translate(-2 -2)" fill="#06038d"></path>
	                            </svg>
	                            <p>Ensure data diversity for trustworthy, insight-driven business decisions</p>
	                        </li>
	                        <li>
	                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 20 20" style="float: left;">
	                              <path id="check" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2ZM10,17,5,12l1.41-1.41L10,14.17l7.59-7.59L19,8Z" transform="translate(-2 -2)" fill="#06038d"></path>
	                            </svg>
	                            <p>Get easy, fast and cost-effective access to 'data as a service'</p>
	                        </li>
	                        <li>
	                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 20 20" style="float: left;">
	                              <path id="check" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2ZM10,17,5,12l1.41-1.41L10,14.17l7.59-7.59L19,8Z" transform="translate(-2 -2)" fill="#06038d"></path>
	                            </svg>
	                            <p>Connect with global communities of data sellers</p>
	                        </li>
	                    </ul>
	                    <a href="/contact">
	                        <button type="button" class="btn tellme-more-btn pure-material-button-outlined">Tell Me More</button>
	                    </a>
	                </li>
	                <li class="app-monetize-section-item3-listitem">
	                    
	                    <h5>Monetise data</h5>
	                    <h3>Monetise data to enrich your business</h3>
	                    <ul>
	                        <li>
	                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 20 20" style="float: left;">
	                              <path id="check" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2ZM10,17,5,12l1.41-1.41L10,14.17l7.59-7.59L19,8Z" transform="translate(-2 -2)" fill="#06038d"></path>
	                            </svg>
	                            <p>Share data easily and securely with any counterparty</p>
	                        </li>
	                        <li>
	                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 20 20" style="float: left;">
	                              <path id="check" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2ZM10,17,5,12l1.41-1.41L10,14.17l7.59-7.59L19,8Z" transform="translate(-2 -2)" fill="#06038d"></path>
	                            </svg>
	                            <p>Develop a sustainable new revenue stream</p>
	                        </li>
	                        <li>
	                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 20 20" style="float: left;">
	                              <path id="check" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2ZM10,17,5,12l1.41-1.41L10,14.17l7.59-7.59L19,8Z" transform="translate(-2 -2)" fill="#06038d"></path>
	                            </svg>
	                            <p style="letter-spacing: 1px;">Reach a global audience of data-hungry companies</p>
	                        </li>
	                    </ul>
	                    <a href="/contact">
	                        <button type="button" class="btn tellme-more-btn pure-material-button-outlined tellme-more-btn2">Tell Me More</button>
	                    </a>
	                    
	                </li>
	            </ul>
	        </div>

	        <div class="app-monetize-section-item4">
	            <h3 style="text-align: center;">Connect with others<br> in our global communities</h3>
	            <ul class="row" style="padding-left: 0;">                
	                <li class="col">
	                    
	                        <svg id="geography" xmlns="http://www.w3.org/2000/svg" width="63.4" height="63.4" viewBox="0 0 63.4 63.4">
	                            <g transform="scale(2)">
	                          <path id="Path_5536" data-name="Path 5536" d="M427.058,119.5a15.843,15.843,0,1,1,16.074,15.984A15.834,15.834,0,0,1,427.058,119.5m23.434-.671c-.2-1.805-.394-3.514-.581-5.189h-6.216v5.189Zm-6.793,1.625v5.2h6.222c.187-1.74.371-3.451.558-5.2Zm-8.383-1.633h6.766v-5.2h-6.193c-.19,1.721-.378,3.433-.573,5.2m-.006,1.636c.2,1.807.4,3.514.585,5.2h6.185v-5.2Zm8.384-15.1v6.724c1.8,0,3.553,0,5.307,0,.122,0,.244-.022.459-.043-.258-.716-.471-1.4-.748-2.056a8.732,8.732,0,0,0-2.982-4.014,3.274,3.274,0,0,0-2.036-.609m-.018,28.5c2.415.388,5.121-3.425,5.647-6.607h-5.647Zm-7.249-21.831h5.666V105.4c-2.3-.3-4.816,2.889-5.666,6.626m5.66,21.859v-6.644h-5.674a11.083,11.083,0,0,0,3.309,5.832,3.215,3.215,0,0,0,2.365.812M433.8,118.834l.52-5.244h-2.437c-2.184,0-2.211-.007-2.749,2.114-.257,1.009-.394,2.049-.6,3.13Zm0,1.622h-5.176a13.635,13.635,0,0,0,1.161,4.941.567.567,0,0,0,.415.277c1.375.021,2.749.012,4.118.012-.175-1.769-.346-3.487-.519-5.23m23.361-1.632a13.4,13.4,0,0,0-1.176-4.99.446.446,0,0,0-.313-.232c-1.413-.016-2.826-.01-4.2-.01.178,1.772.351,3.488.527,5.231Zm-5.655,6.834a.159.159,0,0,0,.075.02q1.492.008,2.983.009c1.4,0,1.411,0,1.859-1.335a11.881,11.881,0,0,0,.717-3.936c-1.659,0-3.263-.012-4.867.023-.127,0-.337.315-.355.5-.156,1.553-.276,3.11-.412,4.719M437.095,106.61a13.325,13.325,0,0,0-6.333,5.465c1.3,0,2.46.013,3.622-.016a.625.625,0,0,0,.463-.345,19.878,19.878,0,0,1,2.248-5.1m-.075,26.038c-.608-1.356-1.3-2.789-1.893-4.265-.461-1.156-.4-1.18-1.648-1.18h-2.667c1.281,2.344,4.441,5.034,6.208,5.446m17.961-20.574a13.2,13.2,0,0,0-6.431-5.547,16.964,16.964,0,0,1,2.419,5.248.52.52,0,0,0,.385.287c1.183.023,2.366.013,3.627.013m-6.5,20.749a14.234,14.234,0,0,0,6.561-5.62c-1.323,0-2.506-.009-3.688.013a.515.515,0,0,0-.383.287,17.488,17.488,0,0,1-2.491,5.32" transform="translate(-427.056 -103.784)" fill="#78e6d0"></path>
	                            </g>
	                        </svg>
	                    
	                    <svg id="environment" xmlns="http://www.w3.org/2000/svg" width="63.4" height="63.4" viewBox="0 0 63.4 63.4">
	                        <g transform="scale(2)">
	                      <path id="Path_9337" data-name="Path 9337" d="M443.3,135.981a16.412,16.412,0,0,1-2.175-.148,15.161,15.161,0,0,1-12.746-11.316,14.967,14.967,0,0,1,2.238-12.579.888.888,0,0,1,.714-.446.741.741,0,0,1,.425.14.788.788,0,0,1,.128,1.17,13.72,13.72,0,0,0-2.432,8.919,13.892,13.892,0,0,0,2.519,6.917,17.622,17.622,0,0,0,4.453-1.948c-.039-.047-.076-.094-.112-.141a6.528,6.528,0,0,1,.132-8.506,7.665,7.665,0,0,1,4.93-2.816,5.053,5.053,0,0,0,3.6-2.373,8.687,8.687,0,0,0,.55-1.017.835.835,0,0,1,.74-.571.956.956,0,0,1,.656.316,8.34,8.34,0,0,1,1.919,2.95,14.231,14.231,0,0,1,.817,8.6,7.221,7.221,0,0,1-3.642,5.074,7.939,7.939,0,0,1-3.765.918,9.836,9.836,0,0,1-1.288-.087,7.613,7.613,0,0,1-3.325-1.242,21.827,21.827,0,0,1-4.61,2.13,13.7,13.7,0,0,0,18.807,1.425l-1.506-.32c-.16-.032-.322-.065-.481-.1a.79.79,0,0,1-.673-.909.778.778,0,0,1,.8-.617,1.139,1.139,0,0,1,.2.019c.45.084.9.179,1.348.275l2.674.563.018.163a2.015,2.015,0,0,1,.026.243l.015.863q.026,1.433.047,2.865a.928.928,0,0,1-.238.673.689.689,0,0,1-.5.205.864.864,0,0,1-.264-.042.746.746,0,0,1-.539-.771l-.036-1.839a15.049,15.049,0,0,1-9.425,3.363m-4.271-9.173a6.436,6.436,0,0,0,3.08.774,7.957,7.957,0,0,0,1.844-.228,5.431,5.431,0,0,0,4.048-3.975,11.341,11.341,0,0,0,.213-5.483,10.756,10.756,0,0,0-1.715-4.454l-.036-.05a6.787,6.787,0,0,1-4.917,3.368,6.094,6.094,0,0,0-4.807,3.707,4.98,4.98,0,0,0,1.024,5.371l.325-.258c.44-.35.879-.7,1.323-1.039.1-.075.124-.129.085-.3-.2-.859-.382-1.721-.569-2.583l-.112-.518a.785.785,0,0,1,.572-1,.775.775,0,0,1,.175-.02.794.794,0,0,1,.753.677c.055.237.105.476.155.713l.368,1.68.258-.3c.456-.536.911-1.072,1.372-1.6a.215.215,0,0,0,.04-.3c-.283-.6-.549-1.21-.806-1.823a.859.859,0,0,1,.055-.813.68.68,0,0,1,.575-.31.791.791,0,0,1,.191.024,1.043,1.043,0,0,1,.589.516c.171.326.313.665.466,1.021l.018.042c.032-.053.063-.105.092-.158l.3-.545c.125-.229.25-.458.379-.684a.718.718,0,0,1,.634-.394.824.824,0,0,1,.179.02.729.729,0,0,1,.608.7,1.079,1.079,0,0,1-.134.518c-.2.383-.412.762-.629,1.155l-.03.055,1.014-.16a1.02,1.02,0,0,1,.172-.014.755.755,0,0,1,.786.665.787.787,0,0,1-.7.868l-.366.062a7.926,7.926,0,0,1-.957.127,1.818,1.818,0,0,0-1.735.946,1.58,1.58,0,0,1-.275.348l-.089.095-.7.783.629.026c.49.02.981.039,1.47.067a.765.765,0,0,1,.8.752.737.737,0,0,1-.2.544.832.832,0,0,1-.614.235l-.548-.018c-.812-.028-1.623-.056-2.433-.118-.056-.005-.11-.007-.164-.007a1.22,1.22,0,0,0-.915.373,10.253,10.253,0,0,1-.971.8l-.168.127" transform="translate(-427.867 -105.384)" fill="#78e6d0"/>
	                      <path id="Path_9338" data-name="Path 9338" d="M456.071,128.427a.674.674,0,0,1-.192-.029.9.9,0,0,1-.559-.544,1.012,1.012,0,0,1,.16-.739,13.064,13.064,0,0,0,1.619-3.467,13.436,13.436,0,0,0-3.669-14.032,12.918,12.918,0,0,0-9.351-3.8c-.471,0-.955.022-1.44.065a13.374,13.374,0,0,0-7.21,2.9l1.729.355c.841.186.819.73.771.957a.744.744,0,0,1-.79.591,1.411,1.411,0,0,1-.281-.029c-.634-.129-3.585-.74-3.585-.74a.454.454,0,0,1-.4-.481c-.008-.637-.018-1.272-.029-1.909s-.022-1.273-.029-1.909a.748.748,0,0,1,.739-.79h0a.748.748,0,0,1,.788.776c.007.584.007,1.169.006,1.754v.308c.071-.058.142-.115.214-.17a15.133,15.133,0,0,1,9.356-3.222c.292,0,.587.008.884.024a15.184,15.184,0,0,1,13.959,11.454,14.964,14.964,0,0,1-2.007,12.219.869.869,0,0,1-.681.465" transform="translate(-428.657 -104.266)" fill="#78e6d0"/>
	                       </g>
	                        </svg>
	                    

	                    <svg id="environment" xmlns="http://www.w3.org/2000/svg" width="63.4" height="63.4" viewBox="0 0 68.5 68.5">
	                        <g transform="scale(2)">
	                          <path id="Path_5550" data-name="Path 5550" d="M448.064,219.143a3.641,3.641,0,0,1,2.083,2.69,13.757,13.757,0,0,1,.09,1.839c.01.259.01.519,0,.779a1.042,1.042,0,0,1-1.037,1.056c-.067,0-.134,0-.2,0-1.655,0-3.308-.017-4.962.008a1.12,1.12,0,0,1-1.248-1.258c.04-.738-.045-1.487.042-2.218a3.672,3.672,0,0,1,2.137-2.9,3.006,3.006,0,0,1-1.4-2.983,2.821,2.821,0,0,1,1.088-1.9,2.99,2.99,0,0,1,4.085.342,3.022,3.022,0,0,1-.671,4.549m.674,4.866c0-.544.022-1.064,0-1.58a2.221,2.221,0,0,0-2.107-2.128,2.141,2.141,0,0,0-2.266,1.725,11.637,11.637,0,0,0-.021,1.983Zm-3.706-7.446a1.48,1.48,0,1,0,2.961-.008,1.5,1.5,0,0,0-1.5-1.466,1.471,1.471,0,0,0-1.457,1.475" transform="translate(-429.398 -202.429)" fill="#78e6d0"/>
	                          <path id="Path_5551" data-name="Path 5551" d="M434.971,220.881c-.7,0-1.4.008-2.106-.006a.323.323,0,0,0-.364.263,2.971,2.971,0,0,1-5.757-1.3,2.824,2.824,0,0,1,1.9-2.468,2.779,2.779,0,0,1,3.092.628,4.743,4.743,0,0,1,.763,1.165c.092.167.158.243.353.241,1.385-.008,2.771-.007,4.155,0,.55,0,.871.28.875.74a.709.709,0,0,1-.746.742c-.721.008-1.443,0-2.164,0Zm-5.27-2.222a1.484,1.484,0,1,0,1.482,1.505,1.456,1.456,0,0,0-1.482-1.505" transform="translate(-426.725 -203.019)" fill="#78e6d0"/>
	                          <path id="Path_5552" data-name="Path 5552" d="M436.2,210.717a3.1,3.1,0,0,1-2.025.378,3.053,3.053,0,0,1-2.475-2.7,2.975,2.975,0,0,1,2.383-3.144,2.972,2.972,0,0,1,3.272,4.169.335.335,0,0,0,.08.46c.838.819,1.664,1.652,2.494,2.481a.755.755,0,0,1,.238.783.7.7,0,0,1-.554.526.8.8,0,0,1-.773-.28c-.808-.81-1.62-1.615-2.428-2.424-.074-.074-.138-.159-.212-.246m-1.54-4.034a1.48,1.48,0,1,0,.013,2.961,1.5,1.5,0,0,0,1.481-1.49,1.481,1.481,0,0,0-1.495-1.471" transform="translate(-427.552 -201.028)" fill="#78e6d0"/>
	                          <path id="Path_5553" data-name="Path 5553" d="M455.578,209.708a2.977,2.977,0,1,1,1.005,1.009c-.7.72-1.42,1.455-2.137,2.19q-.233.236-.47.468a.754.754,0,1,1-1.058-1.048q1.213-1.213,2.429-2.423c.075-.074.16-.137.231-.2m1.085-1.558a1.478,1.478,0,1,0,1.457-1.465,1.451,1.451,0,0,0-1.457,1.465" transform="translate(-431.034 -201.028)" fill="#78e6d0"/>
	                          <path id="Path_5554" data-name="Path 5554" d="M457.82,220.886c-.566,0-1.134,0-1.7,0a.746.746,0,0,1-.836-.747.758.758,0,0,1,.829-.736c1.134-.008,2.268-.009,3.4,0a.37.37,0,0,0,.425-.3,2.988,2.988,0,1,1,.007,2.071.369.369,0,0,0-.425-.3c-.566.018-1.134.006-1.7.006m4.946-2.22a1.485,1.485,0,1,0,1.446,1.548,1.476,1.476,0,0,0-1.446-1.548" transform="translate(-431.478 -203.023)" fill="#78e6d0"/>
	                          <path id="Path_5555" data-name="Path 5555" d="M447.4,231.843c0,.452.008.9,0,1.355a.3.3,0,0,0,.237.35,2.974,2.974,0,1,1-3.813,3.7,2.949,2.949,0,0,1,1.8-3.673.372.372,0,0,0,.3-.428q-.019-1.339,0-2.681a.74.74,0,0,1,.978-.765.713.713,0,0,1,.5.7c.008.48,0,.96,0,1.441Zm-2.218,4.519a1.467,1.467,0,0,0,1.506,1.484,1.491,1.491,0,0,0,1.454-1.515,1.471,1.471,0,0,0-1.514-1.445,1.451,1.451,0,0,0-1.446,1.476" transform="translate(-429.548 -205.102)" fill="#78e6d0"/>
	                          <path id="Path_5556" data-name="Path 5556" d="M445.913,207.683c0-.443-.008-.884,0-1.326a.322.322,0,0,0-.251-.37,2.95,2.95,0,0,1-1.188-4.809,2.96,2.96,0,0,1,5.1,1.5,2.9,2.9,0,0,1-1.906,3.3.361.361,0,0,0-.276.413c.012.923.008,1.845,0,2.768a.693.693,0,0,1-.539.7.715.715,0,0,1-.838-.344,1.3,1.3,0,0,1-.1-.5c-.013-.442,0-.884,0-1.326m.747-5.972a1.477,1.477,0,1,0,1.481,1.509,1.472,1.472,0,0,0-1.481-1.509" transform="translate(-429.546 -200.198)" fill="#78e6d0"/>
	                          <path id="Path_5557" data-name="Path 5557" d="M456.74,229.2c1.765-.7,3.185-.358,4.036.95a2.974,2.974,0,0,1-4.168,4.08,3.019,3.019,0,0,1-.894-3.983c-.628-.626-1.265-1.253-1.89-1.891a1.184,1.184,0,0,1-.288-.45.719.719,0,0,1,.328-.82.776.776,0,0,1,.93.133c.589.579,1.171,1.167,1.754,1.753.074.074.136.162.191.228m1.545,1.1a1.477,1.477,0,1,0,1.482,1.505,1.456,1.456,0,0,0-1.482-1.505" transform="translate(-431.183 -204.656)" fill="#78e6d0"/>
	                          <path id="Path_5558" data-name="Path 5558" d="M431.7,231.76a2.962,2.962,0,0,1,4.222-2.677.35.35,0,0,0,.482-.1c.563-.579,1.138-1.147,1.711-1.716a.749.749,0,1,1,1.049,1.053c-.589.594-1.179,1.187-1.775,1.773a.25.25,0,0,0-.064.343,2.971,2.971,0,1,1-5.623,1.321m2.965,1.49a1.477,1.477,0,1,0-1.48-1.51,1.465,1.465,0,0,0,1.48,1.51" transform="translate(-427.554 -204.656)" fill="#78e6d0"/>
	                       </g>
	                        </svg>
	                    
	                    <svg id="environment" xmlns="http://www.w3.org/2000/svg" width="63.4" height="63.4" viewBox="0 0 71.206 71.206">
	                        <g transform="scale(2)">
	                          <path id="Path_5584" data-name="Path 5584" d="M436.707,409.33c-.6.318-1.039.25-1.315-.182a.815.815,0,0,1,.138-1.079c.377-.356.783-.679,1.154-1.039a.733.733,0,0,0,.2-.436c.1-1.2.13-2.414.263-3.613a4.433,4.433,0,0,1,2.251-3.4,4.659,4.659,0,0,1,2.523-.665c1.737.017,3.474,0,5.211,0a4.73,4.73,0,0,1,4.826,4.632c.043.963.131,1.925.193,2.887a.61.61,0,0,0,.26.474c.429.341.833.714,1.244,1.077a.855.855,0,1,1-1.094,1.308c-.053-.043-.105-.087-.178-.147,0,.238,0,.443,0,.65.036,3.23.077,6.459.1,9.689q.024,2.682.008,5.365a4.337,4.337,0,0,1-2,3.786,3.878,3.878,0,0,1-2.144.689c-2.5.017-5,.035-7.5.008a4.222,4.222,0,0,1-4.245-4.33q-.013-6.157-.007-12.313c0-.974.069-1.947.1-2.922,0-.141,0-.283,0-.447m14.091,8.536h-.015c0-1.128.015-2.255,0-3.383-.028-1.665-.046-3.331-.129-4.993-.1-2-.279-3.99-.4-5.987a2.993,2.993,0,0,0-2.993-2.879q-2.744-.006-5.486.006a2.99,2.99,0,0,0-2.989,2.916c-.063,1.41-.181,2.817-.261,4.226-.084,1.49-.208,2.979-.218,4.47-.027,4.246-.005,8.492,0,12.738a3.163,3.163,0,0,0,.1.812,2.624,2.624,0,0,0,2.684,1.865q3.566-.006,7.131-.02a1.835,1.835,0,0,0,.422-.043,2.668,2.668,0,0,0,2.152-2.72q0-3.5,0-7.009" transform="translate(-426.829 -398.917)" fill="#78e6d0"/>
	                          <path id="Path_5585" data-name="Path 5585" d="M465.257,416.376a8.641,8.641,0,0,0-2.377-5.9c-.082-.09-.173-.172-.253-.263a.839.839,0,0,1,.018-1.181.823.823,0,0,1,1.155-.037,8.723,8.723,0,0,1,.879.968,9.971,9.971,0,0,1,2.259,6.775,10.2,10.2,0,0,1-3.023,6.759.874.874,0,0,1-1.275.085.862.862,0,0,1,.051-1.272,9.325,9.325,0,0,0,1.908-2.835,8.373,8.373,0,0,0,.657-3.1" transform="translate(-431.345 -400.557)" fill="#78e6d0"/>
	                          <path id="Path_5586" data-name="Path 5586" d="M428.83,408.706a.968.968,0,0,1,.786.545.847.847,0,0,1-.133.935,18.228,18.228,0,0,0-1.431,1.849,8.168,8.168,0,0,0,.688,9.492c.22.278.464.536.7.8a.851.851,0,0,1,.008,1.25.869.869,0,0,1-1.25-.089,10.243,10.243,0,0,1-3.019-6.48,10.341,10.341,0,0,1,3.043-7.953,2.8,2.8,0,0,1,.608-.35" transform="translate(-425.148 -400.546)" fill="#78e6d0"/>
	                          <path id="Path_5587" data-name="Path 5587" d="M462.952,416.938a6.447,6.447,0,0,1-1.893,4.405.848.848,0,0,1-1.5-.284.992.992,0,0,1,.281-.915,8.025,8.025,0,0,0,.876-1.235,4.593,4.593,0,0,0-.763-5.3,1.712,1.712,0,0,1-.4-.658.781.781,0,0,1,.443-.882.82.82,0,0,1,1,.18,11.816,11.816,0,0,1,1.1,1.453,6.151,6.151,0,0,1,.855,3.237" transform="translate(-430.87 -401.09)" fill="#78e6d0"/>
	                          <path id="Path_5588" data-name="Path 5588" d="M431.915,411.907a1,1,0,0,1,.8.531.821.821,0,0,1-.106.911,11.355,11.355,0,0,0-1,1.406,4.529,4.529,0,0,0,.654,5.126c.107.123.215.244.318.369a.828.828,0,0,1-.012,1.155.843.843,0,0,1-1.2.01,6.466,6.466,0,0,1-1.48-2.171,6.313,6.313,0,0,1,1.425-6.98,2.944,2.944,0,0,1,.606-.357" transform="translate(-425.854 -401.079)" fill="#78e6d0"/>
	                          <path id="Path_5589" data-name="Path 5589" d="M445.277,406.242a12.56,12.56,0,0,1,4.114.668,1.142,1.142,0,0,1,.878,1.169c.1,1.305.211,2.609.337,3.911a1.065,1.065,0,0,1-1.345,1.213,17.241,17.241,0,0,0-3.916-.49,17.64,17.64,0,0,0-3.913.5,1.031,1.031,0,0,1-1.35-1.106c.069-1.174.181-2.346.276-3.52.016-.212.027-.424.047-.637a1.1,1.1,0,0,1,.776-.99,13.081,13.081,0,0,1,4.1-.718" transform="translate(-427.633 -400.136)" fill="#78e6d0"/>
	                          <path id="Path_5590" data-name="Path 5590" d="M445.3,428.566a12.347,12.347,0,0,1-4.06-.679,1.1,1.1,0,0,1-.8-.969c-.11-.884-.233-1.769-.345-2.653a1.113,1.113,0,0,1,.781-1.287,12.3,12.3,0,0,1,5.7-.806,13.409,13.409,0,0,1,3.3.814,1.119,1.119,0,0,1,.735,1.312c-.118.853-.228,1.708-.325,2.564a1.148,1.148,0,0,1-.857,1.028,12.626,12.626,0,0,1-4.121.675" transform="translate(-427.633 -402.776)" fill="#78e6d0"/>
	                       </g>
	                        </svg>
	                    
	                    <svg id="environment" xmlns="http://www.w3.org/2000/svg" width="63.4" height="63.4" viewBox="0 0 52 77.544">
	                        <g transform="scale(2)">
	                          <path id="Path_5560" data-name="Path 5560" d="M443.3,324.213c-.093.982-.158,1.745-.245,2.506a.333.333,0,0,1-.215.23,13.839,13.839,0,0,1-7.742-.892,7.628,7.628,0,0,1-4.274-5.427,15.139,15.139,0,0,1-.261-5.871.408.408,0,0,1,.231-.293,14.64,14.64,0,0,1,6.324.345,7.715,7.715,0,0,1,5.723,6.169c.249,1.126.33,2.291.458,3.233m-11.252-8.276a12.914,12.914,0,0,0,.658,5.306,5.816,5.816,0,0,0,3.491,3.533,10.93,10.93,0,0,0,3.488.7c.626.027,1.255,0,1.91,0a12.948,12.948,0,0,0-.708-5.409,5.741,5.741,0,0,0-3.018-3.258,9.747,9.747,0,0,0-3.615-.87c-.725-.039-1.455-.008-2.206-.008" transform="translate(-430.395 -301.243)" fill="#78e6d0"/>
	                          <path id="Path_5561" data-name="Path 5561" d="M447.926,342.313a14.943,14.943,0,0,1-.142-4.115,11.238,11.238,0,0,1,1.2-4.225,7.535,7.535,0,0,1,4.789-3.734,14.867,14.867,0,0,1,6.571-.35,13.648,13.648,0,0,1,.2,3.23,12.97,12.97,0,0,1-.819,4.153,7.567,7.567,0,0,1-5.212,4.7,14.863,14.863,0,0,1-6.285.4c-.1-.013-.2-.042-.3-.066m2.6-1.417c0,.014,0,.028,0,.042.55-.038,1.106-.042,1.65-.122a14.657,14.657,0,0,0,1.847-.388,5.935,5.935,0,0,0,4.194-3.729,13.1,13.1,0,0,0,.719-5.016c-.006-.305-.117-.381-.4-.386a15.081,15.081,0,0,0-3.825.35,6.135,6.135,0,0,0-4.292,3.047,11.322,11.322,0,0,0-1.069,5.976c0,.079.163.207.258.215.3.028.608.011.913.011" transform="translate(-433.275 -303.807)" fill="#78e6d0"/>
	                          <path id="Path_5562" data-name="Path 5562" d="M440.2,342.579a14.419,14.419,0,0,1-4.562-.883,7.5,7.5,0,0,1-4.6-4.892,14.791,14.791,0,0,1-.468-6.679.364.364,0,0,1,.232-.248,13.617,13.617,0,0,1,7.612.823,7.555,7.555,0,0,1,4.377,5.411,15.093,15.093,0,0,1,.354,5.231,4.972,4.972,0,0,0-.062.671c.013.3-.167.354-.4.372q-1.244.1-2.489.194m1.389-1.673a12.285,12.285,0,0,0-.88-5.852,5.393,5.393,0,0,0-2.116-2.437,10.977,10.977,0,0,0-6.353-1.295c-.07,0-.189.148-.193.23a12.934,12.934,0,0,0,.532,4.739,5.9,5.9,0,0,0,3.491,3.837,11.494,11.494,0,0,0,3.783.773c.56.029,1.123.005,1.737.005" transform="translate(-430.394 -303.807)" fill="#78e6d0"/>
	                          <path id="Path_5563" data-name="Path 5563" d="M450.378,327.165c-.74-.067-1.481-.128-2.219-.207a.343.343,0,0,1-.247-.2,13.07,13.07,0,0,1,1.122-8.255,7.443,7.443,0,0,1,4.85-3.706,15.26,15.26,0,0,1,6.262-.353c.281.039.249.24.259.392.06.944.156,1.891.133,2.834a11.853,11.853,0,0,1-1.007,4.655,7.68,7.68,0,0,1-5.47,4.367,15.721,15.721,0,0,1-3.683.468m-1.048-1.68a13.135,13.135,0,0,0,5.348-.676A5.893,5.893,0,0,0,458.331,321a11.874,11.874,0,0,0,.607-3.781c0-.423,0-.846,0-1.281-.246-.023-.423-.05-.6-.053a14.379,14.379,0,0,0-3.816.4A6.114,6.114,0,0,0,450,320.247a11.906,11.906,0,0,0-.666,3.872c-.008.447,0,.9,0,1.366" transform="translate(-433.276 -301.244)" fill="#78e6d0"/>
	                          <path id="Path_5564" data-name="Path 5564" d="M445.763,315.126c-2.323-1.916-4.159-4.146-4.7-7.216a7.169,7.169,0,0,1,.734-4.46,13.573,13.573,0,0,1,3.914-4.762.535.535,0,0,1,.105-.048,13.629,13.629,0,0,1,3.023,3.2,9.6,9.6,0,0,1,1.678,4.012,7.561,7.561,0,0,1-.846,4.669,13.558,13.558,0,0,1-3.734,4.485c-.043.034-.091.063-.175.121m.043-14.386a11.531,11.531,0,0,0-2.613,3.56,5.784,5.784,0,0,0-.593,2.3c-.04,2.678,1.435,4.605,3.183,6.413a11.568,11.568,0,0,0,2.662-3.67,5.681,5.681,0,0,0,.465-3.393,10.128,10.128,0,0,0-3.1-5.216" transform="translate(-432.154 -298.641)" fill="#78e6d0"/>
	                       </g>
	                        </svg>
	                    
	                    
	                    <svg id="environment" xmlns="http://www.w3.org/2000/svg" width="63.4" height="63.4" viewBox="0 0 34 61.8">
	                        <g transform="scale(2)">
	                            <path id="Path_5608" data-name="Path 5608" d="M445.267,509.878h.721c1.916,0,3.832,0,5.748,0a1.13,1.13,0,0,1,1.075.605,1.076,1.076,0,0,1-.1,1.2q-5.425,8.288-10.845,16.581a2.357,2.357,0,0,1-.473.583,1.053,1.053,0,0,1-1.292.025,1.174,1.174,0,0,1-.428-1.209q1.105-5.086,2.2-10.174a.617.617,0,0,0-.007-.1h-.31q-3.025,0-6.049,0a1.164,1.164,0,0,1-1.275-.975,1.1,1.1,0,0,1,.225-.815q1.623-2.484,3.243-4.969,3.842-5.893,7.682-11.788a1.168,1.168,0,0,1,1.164-.644,1.1,1.1,0,0,1,.932,1.423q-.768,3.56-1.542,7.119c-.224,1.034-.443,2.07-.674,3.141m-2.143,12.3.07.016,6.609-10.118h-.367c-1.816,0-3.633,0-5.449,0a1.1,1.1,0,0,1-1.152-1.425c.09-.426.185-.851.276-1.275q.471-2.178.942-4.354c-.013-.007-.028-.014-.042-.02-2.2,3.371-4.4,6.742-6.638,10.164h.36q2.712,0,5.422,0a1.112,1.112,0,0,1,1.17,1.437c-.27,1.285-.556,2.567-.834,3.852q-.185.86-.368,1.723" transform="translate(-434.221 -498.185)" fill="#78e6d0"/>
	                       </g>
	                        </svg>
	                    
	            </ul>
	        </div>
	    </div>
	</div>    
</div>
<div class="section_splitor2"></div>
<div class="container-fluid height-space"></div>
<div class="container-fluid app-wapper">
    <div style="background: url({{ asset('images/patterns/background_00.png') }});background-position: 107%; background-repeat: no-repeat; background-size: 50%;">
        <div class="app-section app-peek-section align-items-center">
            <div class="app-monetize-section-item0"></div>
            <h1>A sneak peek at some data offers</h1>
            <div class="app-peek-section-item">
                <ul>
                    <li><div><img src="/picture/510/?u=uploads/articles/80.jpg"></div></li>
                    <li class="article-content">
                        <h3>In the geographic community</h3>
                        <h1>Tree health monitoring for greener cities</h1>
                        <p><b>Type of data:</b> semi-automatic aerial and satellite images</p>
                        <p><b>Business challenge addressed:</b> High-quality geographical data like semi-automatic aerial or satellite images can be used to monitor urban tree health. This information can help cities design and implement appropriate short- and long-term policies to manage their trees and woodlands.</p>
                        <a href="/blog/80">
                            <button type="button" class="btn readmore-inourblog-btn pure-material-button-outlined">Read More In Our Blog</button>
                        </a>
                        <h4>Data provided by Eurosense</h4>
                        <div class="europense"><img src="/uploads/logos/eurosense.png"></div>
                    </li>
                </ul>
            </div>
            <div style="height: 60px;"></div>
            <div class="app-peek-section-item">
                <ul>
                    <li><div><img src="/picture/510/?u=uploads/articles/88.jpg"></div></li>
                    <li class="article-content">
                        <h3>In the geographic community</h3>
                        <h1>SityTrail: never get lost again with this hiking GPS app</h1>
                        <p><b>Type of data:</b> High quality, rich topographic maps</p>
                        <p><b>Business challenge addressed:</b> Finding your way around is crucial for any outdoor activity. For good orientation and to avoid getting lost, you need a good map. SityTrail offers a way-finding and tracking solution with the indispensable NGI topographic maps.</p>
                        <a href="/blog/88">
                            <button type="button" class="btn readmore-inourblog-btn pure-material-button-outlined">Read More In Our Blog</button>
                        </a>
                        <h4>Data provided by NGI</h4>
                        <div class="europense ngi-logo" style="min-width: 360px;"><img src="/uploads/logos/NGI.jpg"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="section_splitor2"></div>
<div class="container-fluid height-space"></div>
<div class="container-fluid app-wapper">
    <img class="look-for-specific-logo2" src="{{ asset('images/man.jpg?v2') }}">
    <div class="app-section app-peek-section align-items-center">
        <div class="app-peek-section-item" style="position: relative;">
            <div class="look-for-specific-logo"></div>
            <ul>
                <li class="look-for-specific">
                    <h3>Looking for specific data ?</h3>
                    <h1>Get a tailor-made service with DataMatch!</h1>
                    <div class="match-me-up-container">
                        <p>Hi, I'm Vincent, your DataMatch Advisor!</p>
                        <p>Are you looking for specific data that's hard to find? We work with you to understand exactly what you need, and then use our wide global network of data partners to find the perfect data match for you.</p>
                        <p>Our DataMatch service is already up and running, so just tell us what you need and we'll do our best to make it happen!</p>
                    </div>
                    <a href="/contact">
                        <button type="button" class="btn match-me-up-btn pure-material-button-outlined">Match Me Up</button>
                    </a>
                    <h4>It's free</h4>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="section_splitor2"></div>
<div class="container-fluid height-space"></div>
<div class="container-fluid app-wapper">
    <div class="app-section app-peek-section align-items-center">
        <div class="app-monetize-section-item0"></div>
        <h1 style="margin-bottom: 40px;">We are proud to partner with</h1>
        <div class="app-partner-items">
            <img class="app-partner-item" src="{{ asset('images/partner_1.png') }}" style="border: 0;">
            <img class="app-partner-item" src="{{ asset('images/partner_2.png') }}">
            <img class="app-partner-item" src="{{ asset('images/partner_3.png') }}">
            <img class="app-partner-item" src="{{ asset('images/partner_4.png') }}">
            <img class="app-partner-item" src="{{ asset('images/partner_5.png') }}">
        </div>
        <div class="clear" style="height: 30px;"></div>
        <p class="center">
            Interested in teaming up with Databroker?<br>
            Contact <a class="mail_link" href="mailto:vincent@databrokerdao.com">vincent@databrokerdao.com</a> to explore the possibilities.
        </p>
        <br><br>
        <div class="app-peek-section-item">
            <ul>
                <li class="article-image article-image-415"><div><a href="/blog/67"><img class="gartner_image" src="/picture/410/?u=uploads/reference/Gartner.jpg"></a></div></li>
                <li class="article-item">
                    <h3>Gartner includes Databroker in its list of</h3>
                    <h1 style="font-size: 27px;">‘Cool Vendors in IoT Data Exchanges and Brokers’</h1><br>
                    <a href="/blog/67">
                        <button type="button" class="btn readmore-inourblog-btn pure-material-button-outlined">Read Full Article</button>
                    </a>
                </li>
                <li class="article-image article-image-414"><div><a href="/blog/67"><img class="gartner_image" src="/picture/410/?u=uploads/reference/Gartner.jpg"></a></div></li>
            </ul>
        </div>
    </div>
</div>
<div class="section_splitor2"></div>
<div class="container-fluid height-space"></div>
<div class="container-fluid app-wapper">
    <div style="background: url({{ asset('images/patterns/background_01.png') }});background-position: right;background-repeat: no-repeat;background-size: contain;">
        <div style="background: url({{ asset('images/patterns/background_02.png') }});background-position: left;background-repeat: no-repeat;background-size: contain;">
            <div class="app-section app-peek-section align-items-center">
                <div class="app-monetize-section-item0"></div>
                <h1 style="margin-bottom: 20px;">Let's stay in touch</h1>
                <p class="center">
                    Here comes an extra copy line. Lorem<br>
                    ipsum dolor sit amet, consectetur
                    <span class="height-space" style="display: block;"></span>
                    <a href="/newsletter">
                        <button type="button" class="btn match-me-up-btn pure-material-button-outlined">Notify Me</button>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

