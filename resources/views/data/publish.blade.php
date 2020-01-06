@extends('layouts.app')

@section('additional_css')
	<link rel="stylesheet" href="{{ asset('css/imageuploadify.min.css') }}">
@endsection

@section('content')
<div class="container-fluid app-wapper">
	<div class="bg-pattern1-left"></div>
    <div class="container">
    	<div class="app-section app-reveal-section align-items-center">
    		<div class="row">
    			<div class="col-lg-6">
    				<div class="blog-header">
			            <h1>Before we start</h1>			            
			            <p class="area">Please provide us some extra information about your company first. <br>
			            We need this info to publish it on the marketplace together with your data offer.</p>
			        </div>
			        <div class="blog-content">
			        	<label class="pure-material-textfield">In which country are you located?</label>
			        	<div class="dropdown-container">
	                        <div class="dropdown" tabindex="1">
	                            <div class="select">
	                                <span>{{ trans('pages.please_select') }}</span>
	                            </div>
	                            <input type="hidden" id="businessName" name="businessName" value="Agriculture/Mining/Forestry">
	                            <ul class="dropdown-menu" style="display: none;">	                                
	                                <li value="Afghanistan">Afghanistan</li>
	                                <li value="Åland Islands">Åland Islands</li>
	                                <li value="Albania">Albania</li>
	                                <li value="Algeria">Algeria</li>
	                                <li value="American Samoa">American Samoa</li>
	                                <li value="Andorra">Andorra</li>
	                                <li value="Angola">Angola</li>
	                                <li value="Anguilla">Anguilla</li>
	                                <li value="Antarctica">Antarctica</li>
	                                <li value="Antigua and Barbuda">Antigua and Barbuda</li>
	                                <li value="Argentina">Argentina</li>
	                                <li value="Armenia">Armenia</li>
	                                <li value="Aruba">Aruba</li>
	                                <li value="Australia">Australia</li>
	                                <li value="Austria">Austria</li>
	                                <li value="Azerbaijan">Azerbaijan</li>
	                                <li value="Bahamas">Bahamas</li>
	                                <li value="Bahrain">Bahrain</li>
	                                <li value="Bangladesh">Bangladesh</li>
	                                <li value="Barbados">Barbados</li>
	                                <li value="Belarus">Belarus</li>
	                                <li value="Belgium">Belgium</li>
	                                <li value="Belize">Belize</li>
	                                <li value="Benin">Benin</li>
	                                <li value="Bermuda">Bermuda</li>
	                                <li value="Bhutan">Bhutan</li>
	                                <li value="Bolivia">Bolivia</li>
	                                <li value="Bosnia and Herzegovina">Bosnia and Herzegovina</li>
	                                <li value="Botswana">Botswana</li>
	                                <li value="Bouvet Island">Bouvet Island</li>
	                                <li value="Brazil">Brazil</li>
	                                <li value="British Indian Ocean Territory">British Indian Ocean Territory</li>
	                                <li value="Brunei Darussalam">Brunei Darussalam</li>
	                                <li value="Bulgaria">Bulgaria</li>
	                                <li value="Burkina Faso">Burkina Faso</li>
	                                <li value="Burundi">Burundi</li>
	                                <li value="Cambodia">Cambodia</li>
	                                <li value="Cameroon">Cameroon</li>
	                                <li value="Canada">Canada</li>
	                                <li value="Cape Verde">Cape Verde</li>
	                                <li value="Cayman Islands">Cayman Islands</li>
	                                <li value="Central African Republic">Central African Republic</li>
	                                <li value="Chad">Chad</li>
	                                <li value="Chile">Chile</li>
	                                <li value="China">China</li>
	                                <li value="Christmas Island">Christmas Island</li>
	                                <li value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</li>
	                                <li value="Colombia">Colombia</li>
	                                <li value="Comoros">Comoros</li>
	                                <li value="Congo">Congo</li>
	                                <li value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</li>
	                                <li value="Cook Islands">Cook Islands</li>
	                                <li value="Costa Rica">Costa Rica</li>
	                                <li value="Cote D'ivoire">Cote D'ivoire</li>
	                                <li value="Croatia">Croatia</li>
	                                <li value="Cuba">Cuba</li>
	                                <li value="Cyprus">Cyprus</li>
	                                <li value="Czech Republic">Czech Republic</li>
	                                <li value="Denmark">Denmark</li>
	                                <li value="Djibouti">Djibouti</li>
	                                <li value="Dominica">Dominica</li>
	                                <li value="Dominican Republic">Dominican Republic</li>
	                                <li value="Ecuador">Ecuador</li>
	                                <li value="Egypt">Egypt</li>
	                                <li value="El Salvador">El Salvador</li>
	                                <li value="Equatorial Guinea">Equatorial Guinea</li>
	                                <li value="Eritrea">Eritrea</li>
	                                <li value="Estonia">Estonia</li>
	                                <li value="Ethiopia">Ethiopia</li>
	                                <li value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</li>
	                                <li value="Faroe Islands">Faroe Islands</li>
	                                <li value="Fiji">Fiji</li>
	                                <li value="Finland">Finland</li>
	                                <li value="France">France</li>
	                                <li value="French Guiana">French Guiana</li>
	                                <li value="French Polynesia">French Polynesia</li>
	                                <li value="French Southern Territories">French Southern Territories</li>
	                                <li value="Gabon">Gabon</li>
	                                <li value="Gambia">Gambia</li>
	                                <li value="Georgia">Georgia</li>
	                                <li value="Germany">Germany</li>
	                                <li value="Ghana">Ghana</li>
	                                <li value="Gibraltar">Gibraltar</li>
	                                <li value="Greece">Greece</li>
	                                <li value="Greenland">Greenland</li>
	                                <li value="Grenada">Grenada</li>
	                                <li value="Guadeloupe">Guadeloupe</li>
	                                <li value="Guam">Guam</li>
	                                <li value="Guatemala">Guatemala</li>
	                                <li value="Guernsey">Guernsey</li>
	                                <li value="Guinea">Guinea</li>
	                                <li value="Guinea-bissau">Guinea-bissau</li>
	                                <li value="Guyana">Guyana</li>
	                                <li value="Haiti">Haiti</li>
	                                <li value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</li>
	                                <li value="Holy See (Vatican City State)">Holy See (Vatican City State)</li>
	                                <li value="Honduras">Honduras</li>
	                                <li value="Hong Kong">Hong Kong</li>
	                                <li value="Hungary">Hungary</li>
	                                <li value="Iceland">Iceland</li>
	                                <li value="India">India</li>
	                                <li value="Indonesia">Indonesia</li>
	                                <li value="Iran, Islamic Republic of">Iran, Islamic Republic of</li>
	                                <li value="Iraq">Iraq</li>
	                                <li value="Ireland">Ireland</li>
	                                <li value="Isle of Man">Isle of Man</li>
	                                <li value="Israel">Israel</li>
	                                <li value="Italy">Italy</li>
	                                <li value="Jamaica">Jamaica</li>
	                                <li value="Japan">Japan</li>
	                                <li value="Jersey">Jersey</li>
	                                <li value="Jordan">Jordan</li>
	                                <li value="Kazakhstan">Kazakhstan</li>
	                                <li value="Kenya">Kenya</li>
	                                <li value="Kiribati">Kiribati</li>
	                                <li value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</li>
	                                <li value="Korea, Republic of">Korea, Republic of</li>
	                                <li value="Kuwait">Kuwait</li>
	                                <li value="Kyrgyzstan">Kyrgyzstan</li>
	                                <li value="Lao People's Democratic Republic">Lao People's Democratic Republic</li>
	                                <li value="Latvia">Latvia</li>
	                                <li value="Lebanon">Lebanon</li>
	                                <li value="Lesotho">Lesotho</li>
	                                <li value="Liberia">Liberia</li>
	                                <li value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</li>
	                                <li value="Liechtenstein">Liechtenstein</li>
	                                <li value="Lithuania">Lithuania</li>
	                                <li value="Luxembourg">Luxembourg</li>
	                                <li value="Macao">Macao</li>
	                                <li value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</li>
	                                <li value="Madagascar">Madagascar</li>
	                                <li value="Malawi">Malawi</li>
	                                <li value="Malaysia">Malaysia</li>
	                                <li value="Maldives">Maldives</li>
	                                <li value="Mali">Mali</li>
	                                <li value="Malta">Malta</li>
	                                <li value="Marshall Islands">Marshall Islands</li>
	                                <li value="Martinique">Martinique</li>
	                                <li value="Mauritania">Mauritania</li>
	                                <li value="Mauritius">Mauritius</li>
	                                <li value="Mayotte">Mayotte</li>
	                                <li value="Mexico">Mexico</li>
	                                <li value="Micronesia, Federated States of">Micronesia, Federated States of</li>
	                                <li value="Moldova, Republic of">Moldova, Republic of</li>
	                                <li value="Monaco">Monaco</li>
	                                <li value="Mongolia">Mongolia</li>
	                                <li value="Montenegro">Montenegro</li>
	                                <li value="Montserrat">Montserrat</li>
	                                <li value="Morocco">Morocco</li>
	                                <li value="Mozambique">Mozambique</li>
	                                <li value="Myanmar">Myanmar</li>
	                                <li value="Namibia">Namibia</li>
	                                <li value="Nauru">Nauru</li>
	                                <li value="Nepal">Nepal</li>
	                                <li value="Netherlands">Netherlands</li>
	                                <li value="Netherlands Antilles">Netherlands Antilles</li>
	                                <li value="New Caledonia">New Caledonia</li>
	                                <li value="New Zealand">New Zealand</li>
	                                <li value="Nicaragua">Nicaragua</li>
	                                <li value="Niger">Niger</li>
	                                <li value="Nigeria">Nigeria</li>
	                                <li value="Niue">Niue</li>
	                                <li value="Norfolk Island">Norfolk Island</li>
	                                <li value="Northern Mariana Islands">Northern Mariana Islands</li>
	                                <li value="Norway">Norway</li>
	                                <li value="Oman">Oman</li>
	                                <li value="Pakistan">Pakistan</li>
	                                <li value="Palau">Palau</li>
	                                <li value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</li>
	                                <li value="Panama">Panama</li>
	                                <li value="Papua New Guinea">Papua New Guinea</li>
	                                <li value="Paraguay">Paraguay</li>
	                                <li value="Peru">Peru</li>
	                                <li value="Philippines">Philippines</li>
	                                <li value="Pitcairn">Pitcairn</li>
	                                <li value="Poland">Poland</li>
	                                <li value="Portugal">Portugal</li>
	                                <li value="Puerto Rico">Puerto Rico</li>
	                                <li value="Qatar">Qatar</li>
	                                <li value="Reunion">Reunion</li>
	                                <li value="Romania">Romania</li>
	                                <li value="Russian Federation">Russian Federation</li>
	                                <li value="Rwanda">Rwanda</li>
	                                <li value="Saint Helena">Saint Helena</li>
	                                <li value="Saint Kitts and Nevis">Saint Kitts and Nevis</li>
	                                <li value="Saint Lucia">Saint Lucia</li>
	                                <li value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</li>
	                                <li value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</li>
	                                <li value="Samoa">Samoa</li>
	                                <li value="San Marino">San Marino</li>
	                                <li value="Sao Tome and Principe">Sao Tome and Principe</li>
	                                <li value="Saudi Arabia">Saudi Arabia</li>
	                                <li value="Senegal">Senegal</li>
	                                <li value="Serbia">Serbia</li>
	                                <li value="Seychelles">Seychelles</li>
	                                <li value="Sierra Leone">Sierra Leone</li>
	                                <li value="Singapore">Singapore</li>
	                                <li value="Slovakia">Slovakia</li>
	                                <li value="Slovenia">Slovenia</li>
	                                <li value="Solomon Islands">Solomon Islands</li>
	                                <li value="Somalia">Somalia</li>
	                                <li value="South Africa">South Africa</li>
	                                <li value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</li>
	                                <li value="Spain">Spain</li>
	                                <li value="Sri Lanka">Sri Lanka</li>
	                                <li value="Sudan">Sudan</li>
	                                <li value="Suriname">Suriname</li>
	                                <li value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</li>
	                                <li value="Swaziland">Swaziland</li>
	                                <li value="Sweden">Sweden</li>
	                                <li value="Switzerland">Switzerland</li>
	                                <li value="Syrian Arab Republic">Syrian Arab Republic</li>
	                                <li value="Taiwan, Province of China">Taiwan, Province of China</li>
	                                <li value="Tajikistan">Tajikistan</li>
	                                <li value="Tanzania, United Republic of">Tanzania, United Republic of</li>
	                                <li value="Thailand">Thailand</li>
	                                <li value="Timor-leste">Timor-leste</li>
	                                <li value="Togo">Togo</li>
	                                <li value="Tokelau">Tokelau</li>
	                                <li value="Tonga">Tonga</li>
	                                <li value="Trinidad and Tobago">Trinidad and Tobago</li>
	                                <li value="Tunisia">Tunisia</li>
	                                <li value="Turkey">Turkey</li>
	                                <li value="Turkmenistan">Turkmenistan</li>
	                                <li value="Turks and Caicos Islands">Turks and Caicos Islands</li>
	                                <li value="Tuvalu">Tuvalu</li>
	                                <li value="Uganda">Uganda</li>
	                                <li value="Ukraine">Ukraine</li>
	                                <li value="United Arab Emirates">United Arab Emirates</li>
	                                <li value="United Kingdom">United Kingdom</li>
	                                <li value="United States">United States</li>
	                                <li value="United States Minor Outlying Islands">United States Minor Outlying Islands</li>
	                                <li value="Uruguay">Uruguay</li>
	                                <li value="Uzbekistan">Uzbekistan</li>
	                                <li value="Vanuatu">Vanuatu</li>
	                                <li value="Venezuela">Venezuela</li>
	                                <li value="Viet Nam">Viet Nam</li>
	                                <li value="Virgin Islands, British">Virgin Islands, British</li>
	                                <li value="Virgin Islands, U.S.">Virgin Islands, U.S.</li>
	                                <li value="Wallis and Futuna">Wallis and Futuna</li>
	                                <li value="Western Sahara">Western Sahara</li>
	                                <li value="Yemen">Yemen</li>
	                                <li value="Zambia">Zambia</li>
	                                <li value="Zimbabwe">Zimbabwe</li>
	                            </ul>	                           
	                        </div>
	                        <div class="error_notice"> This field is required</div>
	                    </div>
	                    <label class="pure-material-textfield">In which country are you located?</label>
	                    <label class="pure-material-textfield-outlined">
	                        <input type="text" id="companyUrl" name="companyUrl" class="form-control input_data" placeholder=" "  value="" required autocomplete="companyUrl" autofocus>
	                        <span>{{ trans('pages.enter_url') }}</span>	                        
	                    </label>
	                    <label class="pure-material-textfield mt-20">Please upload your company's logo <i class="material-icons text-grey text-top">error</i></label>
	                    
	                    <div class="fileupload">	                    	
				            <input type="file" name="company_logo" accept='.xlsx,.xls,image/*,.doc,audio/*,.docx,<a href="https://www.jqueryscript.net/tags.php?/video/">video</a>/*,.ppt,.pptx,.txt,.pdf'>
	                    </div>

			        </div>	
    			</div>
    		</div>	        
	    </div>	
	    
    </div>      
</div>

@endsection


@section('additional_javascript')
	<script src="{{ asset('js/plugins/imageuploadify.min.js') }}"></script>        
@endsection