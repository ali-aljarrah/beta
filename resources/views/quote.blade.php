@include('include.head')
 <title>Beta Logistics FZE - Free Quote</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.css">

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .iti {
        width: 100%;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        display: flex;
        height: 55px;
        align-items: center
    }
    .select2-container--default .select2-selection--single {
        height: 55px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 14px;
    }
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
                            <div class="row g-3">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-floating">
                                        <input required type="text" class="form-control rounded-1" id="name" placeholder="Your Name" style="height: 55px;">
                                        <label for="name">Your Name <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-floating">
                                        <input required type="email" class="form-control rounded-1" id="email" placeholder="Your Email" style="height: 55px;">
                                        <label for="email">Your Email <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="tel" id="phone" class="form-control w-100 rounded-1" placeholder="Your Mobile" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control rounded-1" id="fax" placeholder="Your Fax" style="height: 55px;">
                                        <label for="fax">Fax</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <select id="countrySelect" class="form-select rounded-1" style="height: 55px;" required>
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
                                        <input type="text" class="form-control rounded-1" id="companyName" placeholder="Your Company Name" style="height: 55px;">
                                        <label for="companyName">Company Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-5 text-start">
                                    <h3>Cargo Details</h3>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <select id="FreightSelect" required class="form-select rounded-1" style="height: 55px;">
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
                                    <select id="originCountrySelect" class="form-select rounded-1" style="height: 55px;" required>
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
                                        <input type="text" class="form-control rounded-1" id="stateOriginName" placeholder="Your Cargo State Origin Name" style="height: 55px;">
                                        <label for="stateOriginName">State Origin Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <select id="departuretypeSelect" class="form-select rounded-1" style="height: 55px;">
                                        <option value="">Select a Departure type</option>
                                        <option value="sea-port">Sea Port</option>
                                        <option value="air-port">Air Port</option>
                                        <option value="residential-address">Residential Address</option>
                                        <option value="commercial-address">Commercial Address</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <select id="destinationCountrySelect" class="form-select rounded-1" style="height: 55px;" required>
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
                                        <input type="text" class="form-control rounded-1" id="stateDestinationName" placeholder="Your Cargo Destination State Name" style="height: 55px;">
                                        <label for="stateDestinationName">State Destination Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <select id="ArrivalType" required class="form-select rounded-1" style="height: 55px;">
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
                                        <input type="date" class="form-control rounded-1" id="shippingDate" placeholder="Required Shipping Date" style="height: 55px;">
                                        <label for="shippingDate">Required Shipping Date</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                         <div class="col-12 col-md-6 col-lg-4">
                                            <select id="ContainerType" required class="form-select rounded-1" style="height: 55px;">
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
                                                <input required type="text" class="form-control rounded-1" id="commodity" placeholder="Commodity" style="height: 55px;">
                                                <label for="commodity">Commodity <span class="text-danger">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control rounded-1" id="dimensions-1" placeholder="Dimensions L X W X H" style="height: 55px;">
                                                <label for="dimensions-1">Dimensions L X W X H</label>
                                            </div>
                                        </div>
                                         <div class="col-12 col-md-6 col-lg-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control rounded-1" id="dimensions-2" placeholder="Dimensions L X W X H" style="height: 55px;">
                                                <label for="dimensions-2">Dimensions L X W X H</label>
                                            </div>
                                        </div>
                                         <div class="col-12 col-md-6 col-lg-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control rounded-1" id="dimensions-3" placeholder="Dimensions L X W X H" style="height: 55px;">
                                                <label for="dimensions-3">Dimensions L X W X H</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <div class="form-floating">
                                                <select id="DimensionSizeType" required class="form-select rounded-1" style="height: 55px;">
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
                                {{-- <div class="col-12">
                                    <div class="form-floating">
                                        <textarea required class="form-control rounded-1" id="message" placeholder="Special Note" style="height: 100px"></textarea>
                                        <label for="message">Special Note</label>
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3 rounded-1" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Quote End -->

    <section class="py-5">
        <div class="container">
            <div class="col-lg-12 mb-5 wow fadeInUp text-center" data-wow-delay="0.2s">
                <h2 class="text-dark">Get in touch with us!</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp h-100 mx-auto" data-wow-delay="0.2s">
                    <div class="text-center px-3 py-4 shadow-sm border border-1 rounded-1 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa fa-envelope text-primary fa-4x flex-shrink-0 mb-4"></i>
                        <p class="h5 mb-2">
                            <span>Email Address</span>
                        </p>
                        <div>
                            <a class="text-dark text-decoration-underline" href="mailto:info@betafzco.com">info@betafzco.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp h-100 mx-auto" data-wow-delay="0.2s">
                    <div class="text-center px-3 py-4 shadow-sm border border-1 rounded-1 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa fa-headphones text-primary fa-4x flex-shrink-0 mb-4"></i>
                        <p class="h5 mb-2">
                            <span>Phone Number</span>
                        </p>
                        <div>
                            <a class="text-dark text-decoration-underline" href="tel:+:971503440101">+971503440101</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp h-100 mx-auto" data-wow-delay="0.2s">
                    <div class="text-center px-3 py-4 shadow-sm border border-1 rounded-1 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa fa-map text-primary fa-4x flex-shrink-0 mb-4"></i>
                        <p class="h5 mb-2">
                            <span>UAE Address</span>
                        </p>
                        <div>
                            <p class="text-dark mb-0">
                                Dubai, Jafza - UA-03
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp h-100 mx-auto" data-wow-delay="0.2s">
                    <div class="text-center px-3 py-4 shadow-sm border border-1 rounded-1 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa fa-map text-primary fa-4x flex-shrink-0 mb-4"></i>
                        <p class="h5 mb-2">
                            <span>IRAQ, Baghdad Address</span>
                        </p>
                        <div>
                            <p class="text-dark mb-0">
                                Baghdad, Aldoura
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp h-100 mx-auto" data-wow-delay="0.2s">
                    <div class="text-center px-3 py-4 shadow-sm border border-1 rounded-1 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa fa-map text-primary fa-4x flex-shrink-0 mb-4"></i>
                        <p class="h5 mb-2">
                            <span>IRAQ, Erbil Address</span>
                        </p>
                        <div>
                            <p class="text-dark mb-0">
                               Mousal Road, Alwaa - WH # 445
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp h-100 mx-auto" data-wow-delay="0.2s">
                    <div class="text-center px-3 py-4 shadow-sm border border-1 rounded-1 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa fa-map text-primary fa-4x flex-shrink-0 mb-4"></i>
                        <p class="h5 mb-2">
                            <span>IRAQ, Duhok Address</span>
                        </p>
                        <div>
                            <p class="text-dark mb-0">
                              K.R.O STR - Near Traffic
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp h-100 mx-auto" data-wow-delay="0.2s">
                    <div class="text-center px-3 py-4 shadow-sm border border-1 rounded-1 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa fa-map text-primary fa-4x flex-shrink-0 mb-4"></i>
                        <p class="h5 mb-2">
                            <span>IRAQ, Karbala Address</span>
                        </p>
                        <div>
                            <p class="text-dark mb-0">
                             Al-Iskan Street
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp h-100 mx-auto" data-wow-delay="0.2s">
                    <div class="text-center px-3 py-4 shadow-sm border border-1 rounded-1 d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa fa-map text-primary fa-4x flex-shrink-0 mb-4"></i>
                        <p class="h5 mb-2">
                            <span>IRAQ, Sulaymaniyah Address</span>
                        </p>
                        <div>
                            <p class="text-dark mb-0">
                                Salem Street - Near Rand Gallery
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     @include('include.footer')

     <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/intlTelInput.min.js"></script>
<script>
  const input = document.querySelector("#phone");
  window.intlTelInput(input, {
    loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/utils.js"),
  });
</script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('#countrySelect').select2({
      placeholder: "Select a country",
      allowClear: true
    });
    $('#FreightSelect').select2({
      placeholder: "Select a Shipping Mode",
      allowClear: true
    });
    $('#originCountrySelect').select2({
      placeholder: "Select Origin Country",
      allowClear: true
    });
    $('#departuretypeSelect').select2({
      placeholder: "Select Departure type",
      allowClear: true
    });
      $('#destinationCountrySelect').select2({
      placeholder: "Select Destination Country",
      allowClear: true
    });
    $('#ArrivalType').select2({
      placeholder: "Select Arrival Type",
      allowClear: true
    });
     $('#ContainerType').select2({
      placeholder: "Select Container Type",
      allowClear: true
    });
     $('#DimensionSizeType').select2({
      placeholder: "Select Size Type",
      allowClear: true
    });

  });
</script>
</script>
     <script>
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    } else {
                        event.preventDefault()
                        console.log('test')
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
     </script>
</body>

</html>
