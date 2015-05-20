<?php
return array(
   
    /*
    |--------------------------------------------------------------------------
    | Set environment
    |--------------------------------------------------------------------------
    |
    | Switch between test and live
    |
    */
    'environment' => 'test',

    /*
    |--------------------------------------------------------------------------
    | Integration type
    |--------------------------------------------------------------------------
    |
    | Switch between the types of api being used for the sage account.
    |
    | Options: Server, Direct and Direct-Server
    |
    */
    'integration_type' => 'Server',

    /*
    |--------------------------------------------------------------------------
    | Sage pay API url
    |--------------------------------------------------------------------------
    |
    | Switch between URL location for the API testing and live envuronment
    |
    |
    */
    'transaction_url' => array(
        'live' => 'https://live.sagepay.com/gateway/service/vspserver-register.vsp',
        'test' => 'https://test.sagepay.com/gateway/service/vspserver-register.vsp'
    ),


    /*
    |--------------------------------------------------------------------------
    | Server configuration
    |--------------------------------------------------------------------------
    |
    | All the data required for Server based transactions
    |
    */
    'server' => array(

        'Mandatory' => array(

            /*
            |--------------------------------------------------------------------------
            | Sage pay api version
            |--------------------------------------------------------------------------
            |
            | Set the version of sages api for both live and testing
            |
            */
            'VPSProtocol' => '3.00',

            /*
            |--------------------------------------------------------------------------
            | Sage pay vendor name 
            |--------------------------------------------------------------------------
            |
            | The vendor name used when signing up -  for testing purposes use: protxross
            |
            */
            'Vendor' => 'protxross',
          
            /*
            |--------------------------------------------------------------------------
            | Vendor currency
            |--------------------------------------------------------------------------
            |
            | The currency used in transactions - needs to be ISO 4217 valid
            |
            */
            'Currency' => 'GBP',

            /*
            |--------------------------------------------------------------------------
            | Payment type
            |--------------------------------------------------------------------------
            |
            | Accepts PAYMENT, DEFERRED and AUTHENTICATE depending on you account
            |
            */
            'TxType' => 'PAYMENT',

            /*
            |--------------------------------------------------------------------------
            | Notification URL
            |--------------------------------------------------------------------------
            |
            | Switch for live and tests 
            |
            */
            'NotificationURL' => array(
                'live' => 'http://hotels.yourcrippswedding.co.uk/sage',
                'test' => 'http://hotels.yourcrippswedding.co.uk/sage',
            ), 
        ),

        'Optional' => array(
            
            /*
            |--------------------------------------------------------------------------
            | Address Verification Status / Card Verification Value
            |--------------------------------------------------------------------------
            |
            | 0 = If AVS/CV2 enabled then check them.  If rules apply, use rules (default).
            | 1 = Force AVS/CV2 checks even if not enabled for the account. If rules apply, use rules.
            | 2 = Force NO AVS/CV2 checks even if enabled on account.
            | 3 = Force AVS/CV2 checks even if not enabled for the account but DON'T apply any rules.
            |
            */
            'ApplyAVSCV2' => 0,

            /*
            |--------------------------------------------------------------------------
            | 3D-Secure Check
            |--------------------------------------------------------------------------
            |
            | 0 = If 3D-Secure checks are possible and rules allow, perform the checks and apply the authorisation rules. (default)
            | 1 = Force 3D-Secure checks for this transaction if possible and apply rules for authorisation.
            | 2 = Do not perform 3D-Secure checks for this transaction and always authorise.
            | 3 = Force 3D-Secure checks for this transaction if possible but ALWAYS obtain an auth code, irrespective of rule base.
            |
            */
            'Apply3DSecure' => 0, 
        ),
           
    ),

    /*
    |--------------------------------------------------------------------------
    | Form mandatory transaction data
    |--------------------------------------------------------------------------
    |
    | All the data required for Server based transactions
    |
    */
    'form' => array(

        'Mandatory' => array(

        ),

        'Optional' => array(

        ),

    ),

    /*
    |--------------------------------------------------------------------------
    | Direct mandatory transaction data
    |--------------------------------------------------------------------------
    |
    | All the data required for Server based transactions
    |
    */
    'direct' => array(

        'Mandatory' => array(

        ),

        'Optional' => array(

        ),

    ),

    /*
    |--------------------------------------------------------------------------
    | Paypal mandatory transaction data
    |--------------------------------------------------------------------------
    |
    | All the data required for Server based transactions
    |
    */
    'paypal' => array(

        'Mandatory' => array(

        ),

        'Optional' => array(

        ),

    ),

    /*
    |--------------------------------------------------------------------------
    | ISO country list
    |--------------------------------------------------------------------------
    |
    | All the countries and their codes accepted by Sage
    |
    */
    'ISOCountries' => array(
        array("code" => "GB", "name" => "United Kingdom"),
        array("code" => "AF", "name" => "Afghanistan"),
        array("code" => "AX", "name" => "Aland Islands"),
        array("code" => "AL", "name" => "Albania"),
        array("code" => "DZ", "name" => "Algeria"),
        array("code" => "AS", "name" => "American Samoa"),
        array("code" => "AD", "name" => "Andorra"),
        array("code" => "AO", "name" => "Angola"),
        array("code" => "AI", "name" => "Anguilla"),
        array("code" => "AQ", "name" => "Antarctica"),
        array("code" => "AG", "name" => "Antigua and Barbuda"),
        array("code" => "AR", "name" => "Argentina"),
        array("code" => "AM", "name" => "Armenia"),
        array("code" => "AW", "name" => "Aruba"),
        array("code" => "AU", "name" => "Australia"),
        array("code" => "AT", "name" => "Austria"),
        array("code" => "AZ", "name" => "Azerbaijan"),
        array("code" => "BS", "name" => "Bahamas"),
        array("code" => "BH", "name" => "Bahrain"),
        array("code" => "BD", "name" => "Bangladesh"),
        array("code" => "BB", "name" => "Barbados"),
        array("code" => "BY", "name" => "Belarus"),
        array("code" => "BE", "name" => "Belgium"),
        array("code" => "BZ", "name" => "Belize"),
        array("code" => "BJ", "name" => "Benin"),
        array("code" => "BM", "name" => "Bermuda"),
        array("code" => "BT", "name" => "Bhutan"),
        array("code" => "BO", "name" => "Bolivia"),
        array("code" => "BA", "name" => "Bosnia and Herzegovina"),
        array("code" => "BW", "name" => "Botswana"),
        array("code" => "BV", "name" => "Bouvet Island"),
        array("code" => "BR", "name" => "Brazil"),
        array("code" => "IO", "name" => "British Indian Ocean Territory"),
        array("code" => "BN", "name" => "Brunei Darussalam"),
        array("code" => "BG", "name" => "Bulgaria"),
        array("code" => "BF", "name" => "Burkina Faso"),
        array("code" => "BI", "name" => "Burundi"),
        array("code" => "KH", "name" => "Cambodia"),
        array("code" => "CM", "name" => "Cameroon"),
        array("code" => "CA", "name" => "Canada"),
        array("code" => "CV", "name" => "Cape Verde"),
        array("code" => "KY", "name" => "Cayman Islands"),
        array("code" => "CF", "name" => "Central African Republic"),
        array("code" => "TD", "name" => "Chad"),
        array("code" => "CL", "name" => "Chile"),
        array("code" => "CN", "name" => "China"),
        array("code" => "CX", "name" => "Christmas Island"),
        array("code" => "CC", "name" => "Cocos (Keeling) Islands"),
        array("code" => "CO", "name" => "Colombia"),
        array("code" => "KM", "name" => "Comoros"),
        array("code" => "CG", "name" => "Congo"),
        array("code" => "CD", "name" => "Congo, The Democratic Republic of the"),
        array("code" => "CK", "name" => "Cook Islands"),
        array("code" => "CR", "name" => "Costa Rica"),
        array("code" => "CI", "name" => "Côte d'Ivoire"),
        array("code" => "HR", "name" => "Croatia"),
        array("code" => "CU", "name" => "Cuba"),
        array("code" => "CY", "name" => "Cyprus"),
        array("code" => "CZ", "name" => "Czech Republic"),
        array("code" => "DK", "name" => "Denmark"),
        array("code" => "DJ", "name" => "Djibouti"),
        array("code" => "DM", "name" => "Dominica"),
        array("code" => "DO", "name" => "Dominican Republic"),
        array("code" => "EC", "name" => "Ecuador"),
        array("code" => "EG", "name" => "Egypt"),
        array("code" => "SV", "name" => "El Salvador"),
        array("code" => "GQ", "name" => "Equatorial Guinea"),
        array("code" => "ER", "name" => "Eritrea"),
        array("code" => "EE", "name" => "Estonia"),
        array("code" => "ET", "name" => "Ethiopia"),
        array("code" => "FK", "name" => "Falkland Islands (Malvinas)"),
        array("code" => "FO", "name" => "Faroe Islands"),
        array("code" => "FJ", "name" => "Fiji"),
        array("code" => "FI", "name" => "Finland"),
        array("code" => "FR", "name" => "France"),
        array("code" => "GF", "name" => "French Guiana"),
        array("code" => "PF", "name" => "French Polynesia"),
        array("code" => "TF", "name" => "French Southern Territories"),
        array("code" => "GA", "name" => "Gabon"),
        array("code" => "GM", "name" => "Gambia"),
        array("code" => "GE", "name" => "Georgia"),
        array("code" => "DE", "name" => "Germany"),
        array("code" => "GH", "name" => "Ghana"),
        array("code" => "GI", "name" => "Gibraltar"),
        array("code" => "GR", "name" => "Greece"),
        array("code" => "GL", "name" => "Greenland"),
        array("code" => "GD", "name" => "Grenada"),
        array("code" => "GP", "name" => "Guadeloupe"),
        array("code" => "GU", "name" => "Guam"),
        array("code" => "GT", "name" => "Guatemala"),
        array("code" => "GG", "name" => "Guernsey"),
        array("code" => "GN", "name" => "Guinea"),
        array("code" => "GW", "name" => "Guinea-Bissau"),
        array("code" => "GY", "name" => "Guyana"),
        array("code" => "HT", "name" => "Haiti"),
        array("code" => "HM", "name" => "Heard Island and McDonald Islands"),
        array("code" => "VA", "name" => "Holy See (Vatican City State)"),
        array("code" => "HN", "name" => "Honduras"),
        array("code" => "HK", "name" => "Hong Kong"),
        array("code" => "HU", "name" => "Hungary"),
        array("code" => "IS", "name" => "Iceland"),
        array("code" => "IN", "name" => "India"),
        array("code" => "ID", "name" => "Indonesia"),
        array("code" => "IR", "name" => "Iran, Islamic Republic of"),
        array("code" => "IQ", "name" => "Iraq"),
        array("code" => "IE", "name" => "Ireland"),
        array("code" => "IM", "name" => "Isle of Man"),
        array("code" => "IL", "name" => "Israel"),
        array("code" => "IT", "name" => "Italy"),
        array("code" => "JM", "name" => "Jamaica"),
        array("code" => "JP", "name" => "Japan"),
        array("code" => "JE", "name" => "Jersey"),
        array("code" => "JO", "name" => "Jordan"),
        array("code" => "KZ", "name" => "Kazakhstan"),
        array("code" => "KE", "name" => "Kenya"),
        array("code" => "KI", "name" => "Kiribati"),
        array("code" => "KP", "name" => "Korea, Democratic People's Republic of"),
        array("code" => "KR", "name" => "Korea, Republic of"),
        array("code" => "KW", "name" => "Kuwait"),
        array("code" => "KG", "name" => "Kyrgyzstan"),
        array("code" => "LA", "name" => "Lao People's Democratic Republic"),
        array("code" => "LV", "name" => "Latvia"),
        array("code" => "LB", "name" => "Lebanon"),
        array("code" => "LS", "name" => "Lesotho"),
        array("code" => "LR", "name" => "Liberia"),
        array("code" => "LY", "name" => "Libyan Arab Jamahiriya"),
        array("code" => "LI", "name" => "Liechtenstein"),
        array("code" => "LT", "name" => "Lithuania"),
        array("code" => "LU", "name" => "Luxembourg"),
        array("code" => "MO", "name" => "Macao"),
        array("code" => "MK", "name" => "Macedonia, The Former Yugoslav Republic of"),
        array("code" => "MG", "name" => "Madagascar"),
        array("code" => "MW", "name" => "Malawi"),
        array("code" => "MY", "name" => "Malaysia"),
        array("code" => "MV", "name" => "Maldives"),
        array("code" => "ML", "name" => "Mali"),
        array("code" => "MT", "name" => "Malta"),
        array("code" => "MH", "name" => "Marshall Islands"),
        array("code" => "MQ", "name" => "Martinique"),
        array("code" => "MR", "name" => "Mauritania"),
        array("code" => "MU", "name" => "Mauritius"),
        array("code" => "YT", "name" => "Mayotte"),
        array("code" => "MX", "name" => "Mexico"),
        array("code" => "FM", "name" => "Micronesia, Federated States of"),
        array("code" => "MD", "name" => "Moldova"),
        array("code" => "MC", "name" => "Monaco"),
        array("code" => "MN", "name" => "Mongolia"),
        array("code" => "ME", "name" => "Montenegro"),
        array("code" => "MS", "name" => "Montserrat"),
        array("code" => "MA", "name" => "Morocco"),
        array("code" => "MZ", "name" => "Mozambique"),
        array("code" => "MM", "name" => "Myanmar"),
        array("code" => "NA", "name" => "Namibia"),
        array("code" => "NR", "name" => "Nauru"),
        array("code" => "NP", "name" => "Nepal"),
        array("code" => "NL", "name" => "Netherlands"),
        array("code" => "AN", "name" => "Netherlands Antilles"),
        array("code" => "NC", "name" => "New Caledonia"),
        array("code" => "NZ", "name" => "New Zealand"),
        array("code" => "NI", "name" => "Nicaragua"),
        array("code" => "NE", "name" => "Niger"),
        array("code" => "NG", "name" => "Nigeria"),
        array("code" => "NU", "name" => "Niue"),
        array("code" => "NF", "name" => "Norfolk Island"),
        array("code" => "MP", "name" => "Northern Mariana Islands"),
        array("code" => "NO", "name" => "Norway"),
        array("code" => "OM", "name" => "Oman"),
        array("code" => "PK", "name" => "Pakistan"),
        array("code" => "PW", "name" => "Palau"),
        array("code" => "PS", "name" => "Palestinian Territory, Occupied"),
        array("code" => "PA", "name" => "Panama"),
        array("code" => "PG", "name" => "Papua New Guinea"),
        array("code" => "PY", "name" => "Paraguay"),
        array("code" => "PE", "name" => "Peru"),
        array("code" => "PH", "name" => "Philippines"),
        array("code" => "PN", "name" => "Pitcairn"),
        array("code" => "PL", "name" => "Poland"),
        array("code" => "PT", "name" => "Portugal"),
        array("code" => "PR", "name" => "Puerto Rico"),
        array("code" => "QA", "name" => "Qatar"),
        array("code" => "RE", "name" => "Réunion"),
        array("code" => "RO", "name" => "Romania"),
        array("code" => "RU", "name" => "Russian Federation"),
        array("code" => "RW", "name" => "Rwanda"),
        array("code" => "BL", "name" => "Saint Barthélemy"),
        array("code" => "SH", "name" => "Saint Helena"),
        array("code" => "KN", "name" => "Saint Kitts and Nevis"),
        array("code" => "LC", "name" => "Saint Lucia"),
        array("code" => "MF", "name" => "Saint Martin"),
        array("code" => "PM", "name" => "Saint Pierre and Miquelon"),
        array("code" => "VC", "name" => "Saint Vincent and the Grenadines"),
        array("code" => "WS", "name" => "Samoa"),
        array("code" => "SM", "name" => "San Marino"),
        array("code" => "ST", "name" => "Sao Tome and Principe"),
        array("code" => "SA", "name" => "Saudi Arabia"),
        array("code" => "SN", "name" => "Senegal"),
        array("code" => "RS", "name" => "Serbia"),
        array("code" => "SC", "name" => "Seychelles"),
        array("code" => "SL", "name" => "Sierra Leone"),
        array("code" => "SG", "name" => "Singapore"),
        array("code" => "SK", "name" => "Slovakia"),
        array("code" => "SI", "name" => "Slovenia"),
        array("code" => "SB", "name" => "Solomon Islands"),
        array("code" => "SO", "name" => "Somalia"),
        array("code" => "ZA", "name" => "South Africa"),
        array("code" => "GS", "name" => "South Georgia and the South Sandwich Islands"),
        array("code" => "ES", "name" => "Spain"),
        array("code" => "LK", "name" => "Sri Lanka"),
        array("code" => "SD", "name" => "Sudan"),
        array("code" => "SR", "name" => "Suriname"),
        array("code" => "SJ", "name" => "Svalbard and Jan Mayen"),
        array("code" => "SZ", "name" => "Swaziland"),
        array("code" => "SE", "name" => "Sweden"),
        array("code" => "CH", "name" => "Switzerland"),
        array("code" => "SY", "name" => "Syrian Arab Republic"),
        array("code" => "TW", "name" => "Taiwan, Province of China"),
        array("code" => "TJ", "name" => "Tajikistan"),
        array("code" => "TZ", "name" => "Tanzania, United Republic of"),
        array("code" => "TH", "name" => "Thailand"),
        array("code" => "TL", "name" => "Timor-Leste"),
        array("code" => "TG", "name" => "Togo"),
        array("code" => "TK", "name" => "Tokelau"),
        array("code" => "TO", "name" => "Tonga"),
        array("code" => "TT", "name" => "Trinidad and Tobago"),
        array("code" => "TN", "name" => "Tunisia"),
        array("code" => "TR", "name" => "Turkey"),
        array("code" => "TM", "name" => "Turkmenistan"),
        array("code" => "TC", "name" => "Turks and Caicos Islands"),
        array("code" => "TV", "name" => "Tuvalu"),
        array("code" => "UG", "name" => "Uganda"),
        array("code" => "UA", "name" => "Ukraine"),
        array("code" => "AE", "name" => "United Arab Emirates"),
        array("code" => "GB", "name" => "United Kingdom"),
        array("code" => "US", "name" => "United States"),
        array("code" => "UM", "name" => "United States Minor Outlying Islands"),
        array("code" => "UY", "name" => "Uruguay"),
        array("code" => "UZ", "name" => "Uzbekistan"),
        array("code" => "VU", "name" => "Vanuatu"),
        array("code" => "VE", "name" => "Venezuela"),
        array("code" => "VN", "name" => "Viet Nam"),
        array("code" => "VG", "name" => "Virgin Islands, British"),
        array("code" => "VI", "name" => "Virgin Islands, U.S."),
        array("code" => "WF", "name" => "Wallis and Futuna"),
        array("code" => "EH", "name" => "Western Sahara"),
        array("code" => "YE", "name" => "Yemen"),
        array("code" => "ZM", "name" => "Zambia"),
        array("code" => "ZW", "name" => "Zimbabwe")
    ),
  
);