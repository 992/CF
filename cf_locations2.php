<?php
$user_country_code = $_SERVER["HTTP_CF_IPCOUNTRY"]; 
$connectedvia = 'Connected via ';

    if ($user_country_code == 'AF') $connected = 'Afghanistan';
    if ($user_country_code == 'AX') $connected = 'Aland Islands';
    if ($user_country_code == 'AL') $connected = 'London, England';
    if ($user_country_code == 'DZ') $connected = 'Algeria';
    if ($user_country_code == 'AS') $connected = 'American Samoa';
    if ($user_country_code == 'AD') $connected = 'Andorra';
    if ($user_country_code == 'AO') $connected = 'Angola';
    if ($user_country_code == 'AI') $connected = 'Anguilla';
    if ($user_country_code == 'AQ') $connected = 'Antarctica';
    if ($user_country_code == 'AG') $connected = 'Antigua and Barbuda';
    if ($user_country_code == 'AR') $connected = 'Argentina';
    if ($user_country_code == 'AM') $connected = 'Armenia';
    if ($user_country_code == 'AW') $connected = 'Aruba';
    if ($user_country_code == 'AU') $connected = 'Sydney, New South Wales, Australia'; //
    if ($user_country_code == 'AT') $connected = 'Vienna, Austria'; //
    if ($user_country_code == 'AZ') $connected = 'Azerbaijan';
    if ($user_country_code == 'BS') $connected = 'Bahamas the';
    if ($user_country_code == 'BH') $connected = 'Bahrain';
    if ($user_country_code == 'BD') $connected = 'Bangladesh';
    if ($user_country_code == 'BB') $connected = 'Barbados';
    if ($user_country_code == 'BY') $connected = 'Belarus';
    if ($user_country_code == 'BE') $connected = 'Amsterdam, Netherlands'; //
    if ($user_country_code == 'BZ') $connected = 'Belize';
    if ($user_country_code == 'BJ') $connected = 'Benin';
    if ($user_country_code == 'BM') $connected = 'Bermuda';
    if ($user_country_code == 'BT') $connected = 'Bhutan';
    if ($user_country_code == 'BO') $connected = 'Bolivia';
    if ($user_country_code == 'BA') $connected = 'Frankfurt, Germany'; //
    if ($user_country_code == 'BW') $connected = 'Botswana';
    if ($user_country_code == 'BV') $connected = 'Bouvet Island (Bouvetoya)';
    if ($user_country_code == 'BR') $connected = 'São Paulo, Brazil'; //
    if ($user_country_code == 'IO') $connected = 'British Indian Ocean Territory (Chagos Archipelago)';
    if ($user_country_code == 'VG') $connected = 'British Virgin Islands';
    if ($user_country_code == 'BN') $connected = 'Brunei Darussalam';
    if ($user_country_code == 'BG') $connected = 'Bulgaria';
    if ($user_country_code == 'BF') $connected = 'Burkina Faso';
    if ($user_country_code == 'BI') $connected = 'Burundi';
    if ($user_country_code == 'KH') $connected = 'Cambodia';
    if ($user_country_code == 'CM') $connected = 'Cameroon';
    if ($user_country_code == 'CA') $connected = 'Toronto, Ontario, Canada'; //
    if ($user_country_code == 'CV') $connected = 'Cape Verde';
    if ($user_country_code == 'KY') $connected = 'Cayman Islands';
    if ($user_country_code == 'CF') $connected = 'Central African Republic';
    if ($user_country_code == 'TD') $connected = 'Chad';
    if ($user_country_code == 'CL') $connected = 'Valparaíso, Chile'; //
    if ($user_country_code == 'CN') $connected = 'China';
    if ($user_country_code == 'CX') $connected = 'Christmas Island';
    if ($user_country_code == 'CC') $connected = 'Cocos (Keeling) Islands';
    if ($user_country_code == 'CO') $connected = 'Medellín, Colombia'; //
    if ($user_country_code == 'KM') $connected = 'Comoros the';
    if ($user_country_code == 'CD') $connected = 'Congo';
    if ($user_country_code == 'CG') $connected = 'Congo the';
    if ($user_country_code == 'CK') $connected = 'Cook Islands';
    if ($user_country_code == 'CR') $connected = 'Costa Rica';
    if ($user_country_code == 'CI') $connected = 'Cote d\'Ivoire';
    if ($user_country_code == 'HR') $connected = 'Croatia';
    if ($user_country_code == 'CU') $connected = 'Cuba';
    if ($user_country_code == 'CY') $connected = 'Cyprus';
    if ($user_country_code == 'CZ') $connected = 'Prague, Czech Republic';
    if ($user_country_code == 'DK') $connected = 'Denmark';
    if ($user_country_code == 'DJ') $connected = 'Djibouti';
    if ($user_country_code == 'DM') $connected = 'Dominica';
    if ($user_country_code == 'DO') $connected = 'Dominican Republic';
    if ($user_country_code == 'EC') $connected = 'Ecuador';
    if ($user_country_code == 'EG') $connected = 'Egypt';
    if ($user_country_code == 'SV') $connected = 'El Salvador';
    if ($user_country_code == 'GQ') $connected = 'Equatorial Guinea';
    if ($user_country_code == 'ER') $connected = 'Eritrea';
    if ($user_country_code == 'EE') $connected = 'Stockholm, Sweden'; //
    if ($user_country_code == 'ET') $connected = 'Ethiopia';
    if ($user_country_code == 'FO') $connected = 'Faroe Islands';
    if ($user_country_code == 'FK') $connected = 'Falkland Islands (Malvinas)';
    if ($user_country_code == 'FJ') $connected = 'Fiji the Fiji Islands';
    if ($user_country_code == 'FI') $connected = 'Stockholm, Sweden'; //
    if ($user_country_code == 'FR') $connected = 'Paris, France'; //
    if ($user_country_code == 'GF') $connected = 'French Guiana';
    if ($user_country_code == 'PF') $connected = 'French Polynesia';
    if ($user_country_code == 'TF') $connected = 'French Southern Territories';
    if ($user_country_code == 'GA') $connected = 'Gabon';
    if ($user_country_code == 'GM') $connected = 'Gambia the';
    if ($user_country_code == 'GE') $connected = 'Georgia';
    if ($user_country_code == 'DE') $connected = 'Frankfurt, Germany'; //
    if ($user_country_code == 'GH') $connected = 'Ghana';
    if ($user_country_code == 'GI') $connected = 'Gibraltar';
    if ($user_country_code == 'GR') $connected = 'Greece';
    if ($user_country_code == 'GL') $connected = 'Greenland';
    if ($user_country_code == 'GD') $connected = 'Grenada';
    if ($user_country_code == 'GP') $connected = 'Guadeloupe';
    if ($user_country_code == 'GU') $connected = 'Guam';
    if ($user_country_code == 'GT') $connected = 'Guatemala';
    if ($user_country_code == 'GG') $connected = 'Guernsey';
    if ($user_country_code == 'GN') $connected = 'Guinea';
    if ($user_country_code == 'GW') $connected = 'Guinea-Bissau';
    if ($user_country_code == 'GY') $connected = 'Guyana';
    if ($user_country_code == 'HT') $connected = 'Haiti';
    if ($user_country_code == 'HM') $connected = 'Heard Island and McDonald Islands';
    if ($user_country_code == 'VA') $connected = 'Holy See (Vatican City State)';
    if ($user_country_code == 'HN') $connected = 'Honduras';
    if ($user_country_code == 'HK') $connected = 'Hong Kong, Hong Kong'; //
    if ($user_country_code == 'HU') $connected = 'Prague, Czech Republic'; //
    if ($user_country_code == 'IS') $connected = 'Amsterdam, Netherlands'; //
    if ($user_country_code == 'IN') $connected = 'Hong Kong, Hong Kong'; //
    if ($user_country_code == 'ID') $connected = 'Indonesia';
    if ($user_country_code == 'IR') $connected = 'Iran';
    if ($user_country_code == 'IQ') $connected = 'Iraq';
    if ($user_country_code == 'IE') $connected = 'Ireland';
    if ($user_country_code == 'IM') $connected = 'Isle of Man';
    if ($user_country_code == 'IL') $connected = 'Israel';
    if ($user_country_code == 'IT') $connected = 'Milan, Italy'; //
    if ($user_country_code == 'JM') $connected = 'Jamaica';
    if ($user_country_code == 'JP') $connected = 'Tokyo, Japan'; //
    if ($user_country_code == 'JE') $connected = 'Jersey';
    if ($user_country_code == 'JO') $connected = 'Jordan';
    if ($user_country_code == 'KZ') $connected = 'Kazakhstan';
    if ($user_country_code == 'KE') $connected = 'Kenya';
    if ($user_country_code == 'KI') $connected = 'Kiribati';
    if ($user_country_code == 'KP') $connected = 'Korea';
    if ($user_country_code == 'KR') $connected = 'Seoul, South Korea'; //
    if ($user_country_code == 'KW') $connected = 'Kuwait';
    if ($user_country_code == 'KG') $connected = 'Kyrgyz Republic';
    if ($user_country_code == 'LA') $connected = 'Lao';
    if ($user_country_code == 'LV') $connected = 'Latvia';
    if ($user_country_code == 'LB') $connected = 'Lebanon';
    if ($user_country_code == 'LS') $connected = 'Lesotho';
    if ($user_country_code == 'LR') $connected = 'Liberia';
    if ($user_country_code == 'LY') $connected = 'Libyan Arab Jamahiriya';
    if ($user_country_code == 'LI') $connected = 'Liechtenstein';
    if ($user_country_code == 'LT') $connected = 'Lithuania';
    if ($user_country_code == 'LU') $connected = 'Luxembourg';
    if ($user_country_code == 'MO') $connected = 'Macao';
    if ($user_country_code == 'MK') $connected = 'Macedonia';
    if ($user_country_code == 'MG') $connected = 'Madagascar';
    if ($user_country_code == 'MW') $connected = 'Malawi';
    if ($user_country_code == 'MY') $connected = 'Malaysia';
    if ($user_country_code == 'MV') $connected = 'Maldives';
    if ($user_country_code == 'ML') $connected = 'Mali';
    if ($user_country_code == 'MT') $connected = 'Malta';
    if ($user_country_code == 'MH') $connected = 'Marshall Islands';
    if ($user_country_code == 'MQ') $connected = 'Martinique';
    if ($user_country_code == 'MR') $connected = 'Mauritania';
    if ($user_country_code == 'MU') $connected = 'Mauritius';
    if ($user_country_code == 'YT') $connected = 'Mayotte';
    if ($user_country_code == 'MX') $connected = 'Mexico';
    if ($user_country_code == 'FM') $connected = 'Micronesia';
    if ($user_country_code == 'MD') $connected = 'Moldova';
    if ($user_country_code == 'MC') $connected = 'Monaco';
    if ($user_country_code == 'MN') $connected = 'Mongolia';
    if ($user_country_code == 'ME') $connected = 'Montenegro';
    if ($user_country_code == 'MS') $connected = 'Montserrat';
    if ($user_country_code == 'MA') $connected = 'Morocco';
    if ($user_country_code == 'MZ') $connected = 'Mozambique';
    if ($user_country_code == 'MM') $connected = 'Myanmar';
    if ($user_country_code == 'NA') $connected = 'Namibia';
    if ($user_country_code == 'NR') $connected = 'Nauru';
    if ($user_country_code == 'NP') $connected = 'Nepal';
    if ($user_country_code == 'AN') $connected = 'Netherlands Antilles';
    if ($user_country_code == 'NL') $connected = 'Amsterdam, Netherlands'; //
    if ($user_country_code == 'NC') $connected = 'New Caledonia';
    if ($user_country_code == 'NZ') $connected = 'Auckland, New Zealand'; //
    if ($user_country_code == 'NI') $connected = 'Nicaragua';
    if ($user_country_code == 'NE') $connected = 'Niger';
    if ($user_country_code == 'NG') $connected = 'Nigeria';
    if ($user_country_code == 'NU') $connected = 'Niue';
    if ($user_country_code == 'NF') $connected = 'Norfolk Island';
    if ($user_country_code == 'MP') $connected = 'Northern Mariana Islands';
    if ($user_country_code == 'NO') $connected = 'Norway';
    if ($user_country_code == 'OM') $connected = 'Oman';
    if ($user_country_code == 'PK') $connected = 'Singapore, Singapo'; //
    if ($user_country_code == 'PW') $connected = 'Palau';
    if ($user_country_code == 'PS') $connected = 'Palestinian Territory';
    if ($user_country_code == 'PA') $connected = 'Panama';
    if ($user_country_code == 'PG') $connected = 'Papua New Guinea';
    if ($user_country_code == 'PY') $connected = 'Paraguay';
    if ($user_country_code == 'PE') $connected = 'Lima, Peru'; //
    if ($user_country_code == 'PH') $connected = 'Philippines';
    if ($user_country_code == 'PN') $connected = 'Pitcairn Islands';
    if ($user_country_code == 'PL') $connected = 'Warsaw, Poland'; //
    if ($user_country_code == 'PT') $connected = 'Portugal, Portuguese Republic';
    if ($user_country_code == 'PR') $connected = 'Puerto Rico';
    if ($user_country_code == 'QA') $connected = 'Qatar';
    if ($user_country_code == 'RE') $connected = 'Reunion';
    if ($user_country_code == 'RO') $connected = 'London, England'; //
    if ($user_country_code == 'RU') $connected = 'Russian Federation';
    if ($user_country_code == 'RW') $connected = 'Rwanda';
    if ($user_country_code == 'BL') $connected = 'Saint Barthelemy';
    if ($user_country_code == 'SH') $connected = 'Saint Helena';
    if ($user_country_code == 'KN') $connected = 'Saint Kitts and Nevis';
    if ($user_country_code == 'LC') $connected = 'Saint Lucia';
    if ($user_country_code == 'MF') $connected = 'Saint Martin';
    if ($user_country_code == 'PM') $connected = 'Saint Pierre and Miquelon';
    if ($user_country_code == 'VC') $connected = 'Saint Vincent and the Grenadines';
    if ($user_country_code == 'WS') $connected = 'Samoa';
    if ($user_country_code == 'SM') $connected = 'San Marino';
    if ($user_country_code == 'ST') $connected = 'Sao Tome and Principe';
    if ($user_country_code == 'SA') $connected = 'Frankfurt, Germany';
    if ($user_country_code == 'SN') $connected = 'Senegal';
    if ($user_country_code == 'RS') $connected = 'Serbia';
    if ($user_country_code == 'SC') $connected = 'Seychelles';
    if ($user_country_code == 'SL') $connected = 'Sierra Leone';
    if ($user_country_code == 'SG') $connected = 'Singapore, Singapo';
    if ($user_country_code == 'SK') $connected = 'Slovakia (Slovak Republic)';
    if ($user_country_code == 'SI') $connected = 'Slovenia';
    if ($user_country_code == 'SB') $connected = 'Solomon Islands';
    if ($user_country_code == 'SO') $connected = 'Somalia, Somali Republic';
    if ($user_country_code == 'ZA') $connected = 'Johannesburg, South Africa';
    if ($user_country_code == 'GS') $connected = 'South Georgia and the South Sandwich Islands';
    if ($user_country_code == 'ES') $connected = 'Madrid, Spain';
    if ($user_country_code == 'LK') $connected = 'Singapore, Singapo'; //
    if ($user_country_code == 'SD') $connected = 'Sudan';
    if ($user_country_code == 'SR') $connected = 'Suriname';
    if ($user_country_code == 'SJ') $connected = 'Svalbard & Jan Mayen Islands';
    if ($user_country_code == 'SZ') $connected = 'Swaziland';
    if ($user_country_code == 'SE') $connected = 'Stockholm, Sweden'; //
    if ($user_country_code == 'CH') $connected = 'Switzerland, Swiss Confederation';
    if ($user_country_code == 'SY') $connected = 'Syrian Arab Republic';
    if ($user_country_code == 'TW') $connected = 'Taiwan';
    if ($user_country_code == 'TJ') $connected = 'Tajikistan';
    if ($user_country_code == 'TZ') $connected = 'Tanzania';
    if ($user_country_code == 'TH') $connected = 'Thailand';
    if ($user_country_code == 'TL') $connected = 'Timor-Leste';
    if ($user_country_code == 'TG') $connected = 'Togo';
    if ($user_country_code == 'TK') $connected = 'Tokelau';
    if ($user_country_code == 'TO') $connected = 'Tonga';
    if ($user_country_code == 'TT') $connected = 'Trinidad and Tobago';
    if ($user_country_code == 'TN') $connected = 'Tunisia';
    if ($user_country_code == 'TR') $connected = 'London, England';
    if ($user_country_code == 'TM') $connected = 'Turkmenistan';
    if ($user_country_code == 'TC') $connected = 'Turks and Caicos Islands';
    if ($user_country_code == 'TV') $connected = 'Tuvalu';
    if ($user_country_code == 'UG') $connected = 'Uganda';
    if ($user_country_code == 'UA') $connected = 'Frankfurt, Germany';
    if ($user_country_code == 'AE') $connected = 'Singapore, Singapo';
    if ($user_country_code == 'GB') $connected = 'London, England'; //
    if ($user_country_code == 'US') $connected = 'United States of America';
    if ($user_country_code == 'UM') $connected = 'United States Minor Outlying Islands';
    if ($user_country_code == 'VI') $connected = 'United States Virgin Islands';
    if ($user_country_code == 'UY') $connected = 'Uruguay, Eastern Republic of';
    if ($user_country_code == 'UZ') $connected = 'Uzbekistan';
    if ($user_country_code == 'VU') $connected = 'Vanuatu';
    if ($user_country_code == 'VE') $connected = 'Venezuela';
    if ($user_country_code == 'VN') $connected = 'Vietnam';
    if ($user_country_code == 'WF') $connected = 'Wallis and Futuna';
    if ($user_country_code == 'EH') $connected = 'Western Sahara';
    if ($user_country_code == 'YE') $connected = 'Yemen';
    if ($user_country_code == 'ZM') $connected = 'Zambia';
    if ($user_country_code == 'ZW') $connected = 'Zimbabwe';
    echo $connectedvia, $connected;
    ?>
