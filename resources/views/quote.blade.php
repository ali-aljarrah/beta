@include('include.head')
 <title>Beta Logistics FZE - Free Quote</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.css">
<link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('css/toastr.min.css')}}" rel="stylesheet" />

<style>

</style>

</head>

<body>
  @include('include.loader')
  @include('include.menu')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Quote</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Quote Start -->
    <section>
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-12">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="mb-3 h1">Request A Free Qoute!</h2>
                    </div>
                    <div class="bg-light rounded-1 text-center p-lg-5 p-3 wow fadeIn" data-wow-delay="0.5s">
                        <form id="quoteForm" class="needs-validation" novalidate>
                            @csrf
                            <div class="row g-3">
                                <div class="col-lg-12 text-start">
                                    <p class="h4">Your Information</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-floating">
                                        <input required type="text" class="form-control rounded-1" id="name" name="name" placeholder="Your Name" style="height: 55px;">
                                        <label for="name">Your Name <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-floating">
                                        <input required type="email" class="form-control rounded-1" id="email" name="email" placeholder="Your Email" style="height: 55px;">
                                        <label for="email">Your Email <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="tel" id="phone" name="phone" class="form-control w-100 rounded-1" placeholder="Your Mobile" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control rounded-1" id="fax" name="fax" placeholder="Your Fax" style="height: 55px;">
                                        <label for="fax">Fax</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <select id="countrySelect" name="countrySelect" class="form-select rounded-1" style="height: 55px;" required>
                                        <option value="">Select a country</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BR">Brazil</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="SZ">Eswatini</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GR">Greece</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="KP">North Korea</option>
                                        <option value="MK">North Macedonia</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestine</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="KR">South Korea</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syria</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control rounded-1" id="companyName" name="companyName" placeholder="Your Company Name" style="height: 55px;">
                                        <label for="companyName">Company Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-5 text-start">
                                    <p class="h4">Cargo Details</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <select id="FreightSelect" name="FreightSelect" required class="form-select rounded-1" style="height: 55px;">
                                        <option value="">Select a Freight</option>
                                        <option value="air-freight">Air Freight</option>
                                        <option value="sea-freight">Sea Freight</option>
                                        <option value="international-moving-forwarding">International Moving & Forwarding</option>
                                        <option value="local-move">Local Move</option>
                                        <option value="office-move">Office Move</option>
                                        <option value="insurance">Insurance</option>
                                        <option value="packing">Packing</option>
                                        <option value="secure-storage">Secure Storage</option>
                                        <option value="vehicle-shipping">Vehicle Shipping</option>
                                        <option value="custom-broker">Custom Broker</option>
                                        <option value="commercial">Commercial</option>
                                        <option value="freight-forwarding">Freight Forwarding</option>
                                        <option value="land-transportation">Land Transportation</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <select id="originCountrySelect" name="originCountrySelect" class="form-select rounded-1" style="height: 55px;" required>
                                        <option value="">Select a country</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BR">Brazil</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="SZ">Eswatini</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GR">Greece</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="KP">North Korea</option>
                                        <option value="MK">North Macedonia</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestine</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="KR">South Korea</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syria</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                 <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control rounded-1" id="stateOriginName" name="stateOriginName" placeholder="Your Cargo State Origin Name" style="height: 55px;">
                                        <label for="stateOriginName">State Origin Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <select id="departuretypeSelect" name="departuretypeSelect" class="form-select rounded-1" style="height: 55px;">
                                        <option value="">Select a Departure type</option>
                                        <option value="sea-port">Sea Port</option>
                                        <option value="air-port">Air Port</option>
                                        <option value="residential-address">Residential Address</option>
                                        <option value="commercial-address">Commercial Address</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <select id="destinationCountrySelect" name="destinationCountrySelect" class="form-select rounded-1" style="height: 55px;" required>
                                        <option value="">Select a country</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BR">Brazil</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="SZ">Eswatini</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GR">Greece</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia</option>
                                        <option value="MD">Moldova</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="KP">North Korea</option>
                                        <option value="MK">North Macedonia</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestine</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="KR">South Korea</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syria</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control rounded-1" id="stateDestinationName" name="stateDestinationName" placeholder="Your Cargo Destination State Name" style="height: 55px;">
                                        <label for="stateDestinationName">State Destination Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <select id="ArrivalType" name="ArrivalType" required class="form-select rounded-1" style="height: 55px;">
                                        <option value="">Select a Freight</option>
                                        <option value="air-freight">Air Freight</option>
                                        <option value="sea-freight">Sea Freight</option>
                                        <option value="international-moving-forwarding">International Moving & Forwarding</option>
                                        <option value="local-move">Local Move</option>
                                        <option value="office-move">Office Move</option>
                                        <option value="insurance">Insurance</option>
                                        <option value="packing">Packing</option>
                                        <option value="secure-storage">Secure Storage</option>
                                        <option value="vehicle-shipping">Vehicle Shipping</option>
                                        <option value="custom-broker">Custom Broker</option>
                                        <option value="commercial">Commercial</option>
                                        <option value="freight-forwarding">Freight Forwarding</option>
                                        <option value="land-transportation">Land Transportation</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-floating">
                                        <input type="date" class="form-control rounded-1" id="shippingDate" name="shippingDate" placeholder="Required Shipping Date" style="height: 55px;">
                                        <label for="shippingDate">Required Shipping Date</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-5 text-start">
                                    <p class="h4">Packages Details</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                                            <select id="ContainerType" name="ContainerType" required class="form-select rounded-1" style="height: 55px;">
                                                <option value="">Select Container Type</option>
                                                <option value="20-ft-standard">20 FT Standard</option>
                                                <option value="40-ft-standard">40 FT Standard</option>
                                                <option value="40-ft-hc">40 FT HC</option>
                                                <option value="refer-container">Refer Container</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <div class="form-floating">
                                                <input required type="text" class="form-control rounded-1" id="commodity" name="commodity" placeholder="Commodity" style="height: 55px;">
                                                <label for="commodity">Commodity <span class="text-danger">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-5 text-start">
                                    <p class="h4">Dimensions L X W X H</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-3 mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control rounded-1" id="dimensions1" name="dimensions1" placeholder="Dimensions L X W X H" style="height: 55px;">
                                            </div>
                                        </div>
                                         <div class="col-12 col-md-6 col-lg-3 mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control rounded-1" id="dimensions2" name="dimensions2" placeholder="Dimensions L X W X H" style="height: 55px;">
                                            </div>
                                        </div>
                                         <div class="col-12 col-md-6 col-lg-3 mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control rounded-1" id="dimensions3" name="dimensions3" placeholder="Dimensions L X W X H" style="height: 55px;">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <div class="form-floating">
                                                <select id="DimensionSizeType" name="DimensionSizeType" class="form-select rounded-1" style="height: 55px;">
                                                    <option value="">Select Size Type</option>
                                                    <option value="centimeters">Centimeters</option>
                                                    <option value="inchs">Inchs</option>
                                                    <option value="feet">Feet</option>
                                                    <option value="meter">Meter</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <select id="CargoPacked" name="CargoPacked" required class="form-select rounded-1" style="height: 55px;">
                                        <option value="bulk">Bulk</option>
                                        <option value="unpacked">Unpacked</option>
                                        <option value="boxed">Boxed</option>
                                        <option value="drums">Drums</option>
                                        <option value="bales">Bales</option>
                                        <option value="cases-crates">Cases / Crates</option>
                                        <option value="pallet-48-40">Pallet ISO 48" x 40"</option>
                                        <option value="pallet-39-37-47-24">Pallet ISO 39.37" x 47.24"</option>
                                        <option value="pallet-44-88-44-88">Pallet ISO 44.88" x 44.88"</option>
                                        <option value="pallet-42-42">Pallet ISO 42" x 42"</option>
                                        <option value="pallet-43-30-43-30">Pallet ISO 43.30" x 43.30"</option>
                                        <option value="pallet-31-50-47-24">Pallet ISO 31.50" x 47.24"</option>
                                        <option value="container-20">Container 20'</option>
                                        <option value="container-40">Container 40'</option>
                                        <option value="container-40-high-cube">Container 40' High-cube</option>
                                        <option value="container-45-high-cube">Container 45' High-cube</option>
                                        <option value="air-freight-cotainer-ld-1">Air Freight Cotainer LD-1</option>
                                        <option value="air-freight-cotainer-ld-2">Air Freight Cotainer LD-2</option>
                                        <option value="air-freight-cotainer-ld-3">Air Freight Cotainer LD-3</option>
                                        <option value="air-freight-cotainer-ld-4">Air Freight Cotainer LD-4</option>
                                        <option value="air-freight-cotainer-ld-5">Air Freight Cotainer LD-5</option>
                                        <option value="air-freight-cotainer-ld-6">Air Freight Cotainer LD-6</option>
                                        <option value="air-freight-cotainer-ld-7">Air Freight Cotainer LD-7</option>
                                        <option value="air-freight-cotainer-ld-8">Air Freight Cotainer LD-8</option>
                                        <option value="air-freight-cotainer-ld-9">Air Freight Cotainer LD-9</option>
                                        <option value="air-freight-cotainer-ld-10">Air Freight Cotainer LD-10</option>
                                        <option value="air-freight-cotainer-ld-11">Air Freight Cotainer LD-11</option>
                                        <option value="air-freight-cotainer-ld-29">Air Freight Cotainer LD-29</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-floating">
                                        <input type="number" class="form-control rounded-1" id="packingNumber" name="packingNumber" placeholder="packing-number" style="height: 55px;">
                                        <label for="packingNumber">No. of Packing</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control rounded-1" id="totalWeight" name="totalWeight" placeholder="total-weight" style="height: 55px;">
                                        <label for="total-weight">Total Weight</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <select id="incoterms" name="incoterms" required class="form-select rounded-1" style="height: 55px;">
                                        <option value="unknown">Unknown</option>
                                        <option value="EXW">EXW</option>
                                        <option value="FCA">FCA</option>
                                        <option value="FAS">FAS</option>
                                        <option value="FOB">FOB</option>
                                        <option value="CFR">CFR</option>
                                        <option value="CIF">CIF</option>
                                        <option value="CPT">CPT</option>
                                        <option value="CIP">CIP</option>
                                        <option value="DAF">DAF</option>
                                        <option value="DES">DES</option>
                                        <option value="DEQ">DEQ</option>
                                        <option value="DDU">DDU</option>
                                        <option value="DDP">DDP</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 mt-5 text-start">
                                    <p class="h4">Supports From Swift PRO Freight Services</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-3">
                                            <div class="form-check form-switch text-start">
                                                <input class="form-check-input" type="checkbox" id="cargoStackable" name="cargoStackable">
                                                <label class="form-check-label" for="cargoStackable">Is your cargo stackable?</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12 mb-3">
                                            <div class="form-check form-switch text-start">
                                                <input class="form-check-input" type="checkbox" id="cargoHazardous" name="cargoHazardous">
                                                <label class="form-check-label" for="cargoHazardous">Is Your cargo Hazardous? Material Safety Data Sheet (MSDM) a must to Quote</label>
                                            </div>
                                        </div>
                                         <div class="col-lg-4 col-md-6 col-12 mb-3">
                                            <div class="form-check form-switch text-start">
                                                <input class="form-check-input" type="checkbox" id="cargoInsurance" name="cargoInsurance">
                                                <label class="form-check-label" for="cargoInsurance">Do you Require cargo Insurance?</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control rounded-1" id="cargoValue" name="cargoValue" placeholder="cargoValue" style="height: 55px;">
                                        <label for="cargoValue">Mention the value of the cargo</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control rounded-1" id="message" name="message" placeholder="Special Note" style="height: 100px"></textarea>
                                        <label for="message">Special Note</label>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                                </div>
                                <div class="col-12">
                                    <button id="submitBtn" class="btn btn-primary w-100 py-3 rounded-1" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Quote End -->


     @include('include.footer')

     <script src="{{asset('js/toastr.min.js')}}"></script>
     <script src="{{asset('js/intlTelInput.min.js')}}"></script>
     <script src="{{asset('js/select2.min.js')}}"></script>
     <script src="{{asset('js/quote.js')}}"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        (function () {
            'use strict';

            const form = document.getElementById('quoteForm');

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                event.stopPropagation();

                $('#submitBtn').prop("disabled", true);

                const isCountrySelectValid = validateSelect2('countrySelect');
                const isFreightSelectValid = validateSelect2('FreightSelect');
                const isoriginCountrySelectValid = validateSelect2('originCountrySelect');
                const isdeparturetypeSelectValid = validateSelect2('departuretypeSelect');
                const isdestinationCountrySelectValid = validateSelect2('destinationCountrySelect');
                const isArrivalTypeValid = validateSelect2('ArrivalType');
                const isContainerTypeValid = validateSelect2('ContainerType');


                if (
                        !form.checkValidity() || !isCountrySelectValid || !isFreightSelectValid
                        || !isoriginCountrySelectValid || !isdeparturetypeSelectValid || !isdestinationCountrySelectValid
                        || !isArrivalTypeValid || !isContainerTypeValid
                    )
                {
                    toastr.error("Please fill up the required fields!");
                    form.classList.add('was-validated');
                    $('#submitBtn').prop("disabled", false);
                    return;
                }

                const formData = new FormData(form);

                // Replace values with selected option text
                [
                    'countrySelect',
                    'FreightSelect',
                    'originCountrySelect',
                    'departuretypeSelect',
                    'destinationCountrySelect',
                    'ArrivalType',
                    'ContainerType',
                    'DimensionSizeType',
                    'CargoPacked',
                    'incoterms'
                ].forEach(id => {
                    const select = document.getElementById(id);
                    if (select && select.selectedIndex >= 0) {
                        formData.set(id, select.options[select.selectedIndex].text);
                    }
                });

                // Set checkbox values
                ['cargoStackable', 'cargoHazardous', 'cargoInsurance'].forEach(id => {
                    const checkbox = document.getElementById(id);
                    formData.set(id, checkbox.checked ? 'Yes' : 'No');
                });

                // Add reCAPTCHA
                const recaptcha = grecaptcha.getResponse();
                formData.append('g-recaptcha-response', recaptcha);


                $.ajax({
                    url: '{{ route('submitQuote') }}',
                    type: 'POST',
                    data: formData,
                    processData: false, // prevent jQuery from processing data
                    contentType: false, // prevent jQuery from setting content type
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        toastr.success("Quote submitted successfully!");
                        form.reset();
                        form.classList.remove('was-validated');
                        grecaptcha.reset();
                        $('#submitBtn').prop("disabled", false);
                    },
                    error: function (xhr) {
                        $('#submitBtn').prop("disabled", false);
                        if (xhr.status === 422 && xhr.responseJSON?.errors) {
                            Object.values(xhr.responseJSON.errors).forEach(msgs => {
                                toastr.error(msgs[0]);
                            });
                        } else {
                            toastr.error("Something went wrong. Please try again.");
                        }
                    }
                });
            }, false);
        })();

        function validateSelect2(id) {
            const el = document.getElementById(id);
            const container = $(`#${id}`).next('.select2'); // .select2-container

            if (!el.value || el.value === '') {
                container.addClass('is-invalid');
                container.removeClass('is-valid');
                return false;
            } else {
                container.removeClass('is-invalid');
                container.addClass('is-valid');
                return true;
            }
        }
    </script>
</body>

</html>
