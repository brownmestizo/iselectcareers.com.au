<?php
/* iselectcareers.com.au */
/* May 16, 2014 */
/* brownmestizo@gmail.com */

	include 'libs/phpmailer/PHPMailerAutoload.php';

	class Form {

		public $yesNo = '';
		public $state = '';
		public $country = '';

	}

	class yourCareerFormQuestions {
		public $questions = array (
			1 => 'Q1. What is your current industry/profession?',
			2 => 'Q2. What is your desired industry/profession?',
			3 => 'Q3. How did you hear about us?',			
			4 => 'Q4. Are you have difficulty getting a job?',
			5 => 'Q5. Have you or are you using job recruitment companies to assist in finding you a job?',
			6 => 'What assistance has been provided, and are your expectations being met?',
			7 => 'Do you have a target resume for each position you are applying for?'
		);
	}

	class iselectForm extends Form {

			var $sendToPrimary = array ("person"=>'Emily Knox', "email"=>'emily@rawpixel.com.au');
			var $sendToSecondary = array ("person"=>'Raden Sucalit', "email"=>'brownmestizo@gmail.com');

			public function __construct() {

				$this->yesNo = array(
            		'1' => 'Yes',
            		'2' => 'No',
				);

				$this->delivery = array(
            		'1' => 'Online',
            		'2' => 'Classroom',
				);

				$this->state = array(
					  '8' => 'Australian Capital Territory',
		              '2' => 'New South Wales',
		              '3' => 'Northern Territory',
		              '4' => 'Queensland',
		              '5' => 'South Australia',
		              '6' => 'Tasmania',
		              '1' => 'Victoria',
		              '7' => 'Western Australia',
				);

				$this->country = array(
					"12"=>"Australia",
					"1"=>"Afghanistan",
					"2"=>"Albania",
					"3"=>"Algeria",
					"4"=>"American Samoa",
					"5"=>"Andorra",
					"6"=>"Angolo",
					"7"=>"Anguilla",
					"8"=>"Antigua and Burbuda",
					"9"=>"Argentina",
					"10"=>"Armenia",
					"11"=>"Aruba",
					"13"=>"Austria",
					"14"=>"Azerbaijan",
					"15"=>"Bahamas",
					"16"=>"Bahrain",
					"17"=>"Bangladesh",
					"18"=>"Barbados",
					"19"=>"Belarus",
					"20"=>"Belgium",
					"21"=>"Belize",
					"22"=>"Benin",
					"23"=>"Bermuda",
					"24"=>"Bhutan",
					"25"=>"Bolivia",
					"26"=>"Bosnia and Herzegovina",
					"27"=>"Botswana",
					"28"=>"Brazil",
					"29"=>"British Indian Ocean Territory",
					"30"=>"British Virgin Islands",
					"31"=>"Brunei",
					"32"=>"Bulgaria",
					"33"=>"Burkina Faso",
					"34"=>"Burundi",
					"35"=>"Cambodia",
					"36"=>"Cameroon",
					"37"=>"Canada",
					"38"=>"Cape Varde Islands",
					"39"=>"Cayman Islands",
					"40"=>"Central African Republic",
					"41"=>"Chad",
					"42"=>"Chile",
					"43"=>"China",
					"44"=>"Colombia",
					"45"=>"Comoros",
					"46"=>"Congo",
					"47"=>"Cook Islands",
					"48"=>"Costa Rica",
					"49"=>"Cte d'Ivoire",
					"50"=>"Croatia",
					"51"=>"Cuba",
					"52"=>"Cyprus",
					"53"=>"Czech Republic",
					"54"=>"Democratic Republic of the Congo",
					"55"=>"Denmark",
					"56"=>"Djibouti",
					"57"=>"Dominica",
					"58"=>"Dominican Republic",
					"59"=>"East Timor",
					"60"=>"Ecuador",
					"61"=>"Egypt",
					"62"=>"El Salvador",
					"63"=>"Equatorial Guinea",
					"64"=>"Eritrea",
					"65"=>"Estonia",
					"66"=>"Ethiopia",
					"67"=>"Falkland Islands",
					"68"=>"Fiji",
					"69"=>"Finland",
					"70"=>"France",
					"71"=>"French Guiana",
					"72"=>"French Plynesia",
					"73"=>"Gabon",
					"74"=>"Gambia",
					"75"=>"Georgia",
					"76"=>"Germany",
					"77"=>"Ghana",
					"78"=>"Gibraltar",
					"79"=>"Greece",
					"80"=>"Greenland",
					"81"=>"Grenada",
					"82"=>"Guadeloupe",
					"83"=>"Guam",
					"84"=>"Guatemala",
					"85"=>"Guinea",
					"86"=>"Guinea-Bissau",
					"87"=>"Guyana",
					"88"=>"Haiti",
					"89"=>"Hinduras",
					"90"=>"Hungry",
					"91"=>"Iceland",
					"92"=>"india",
					"93"=>"Indonesia",
					"94"=>"Iran",
					"95"=>"Iraq",
					"96"=>"Ireland",
					"97"=>"Isreal",
					"98"=>"Italy",
					"99"=>"Jamaica",
					"100"=>"Japan",
					"101"=>"Jordan",
					"102"=>"Kazakhstan",
					"103"=>"Kenya",
					"104"=>"Kiribati",
					"105"=>"Korea, North",
					"106"=>"Korea, South",
					"107"=>"Kuwait",
					"108"=>"Kyrgyzstan",
					"109"=>"Laos",
					"110"=>"Latvia",
					"111"=>"Lebanon",
					"112"=>"Lesotho",
					"113"=>"Liberia",
					"114"=>"Libya",
					"115"=>"Liechtenstein",
					"116"=>"Lithuania",
					"117"=>"Luxembourg",
					"118"=>"Macedonia",
					"119"=>"Madagascar",
					"120"=>"Malawi",
					"121"=>"Malaysia",
					"122"=>"Maldives",
					"123"=>"Mali",
					"124"=>"Malta",
					"125"=>"Marshall Islands",
					"126"=>"Martinique",
					"127"=>"Mauritania",
					"128"=>"Mauritius",
					"129"=>"Mayotte",
					"130"=>"Mexico",
					"131"=>"Micronesia",
					"132"=>"Moldova",
					"133"=>"Monacco",
					"134"=>"Mongolia",
					"135"=>"Montserrat",
					"136"=>"Morocco",
					"137"=>"Mozambique",
					"138"=>"Myanmar",
					"139"=>"Namibia",
					"140"=>"Nauru",
					"141"=>"Nepal",
					"142"=>"Netherlands",
					"143"=>"Netherlands Antilles",
					"144"=>"New Caledonia",
					"145"=>"New Zealand",
					"146"=>"Nicaragua",
					"147"=>"Niger",
					"148"=>"Nigeria",
					"149"=>"Niue",
					"150"=>"Norfolk Island",
					"151"=>"Northern Mariana Islands",
					"152"=>"Norway",
					"153"=>"Oman",
					"154"=>"Pakistan",
					"155"=>"Palau",
					"156"=>"Panama",
					"157"=>"Papua New Guinea",
					"158"=>"Paraguay",
					"159"=>"Pelestinian West Bank and Gaza",
					"160"=>"Peru",
					"161"=>"Philippines",
					"162"=>"Pitcaim",
					"163"=>"Poland",
					"164"=>"Portugal",
					"165"=>"Puerto Rico",
					"166"=>"Qatar",
					"167"=>"Runion",
					"168"=>"Romania",
					"169"=>"Russia",
					"170"=>"Rwanda",
					"171"=>"Saint Helena",
					"172"=>"Saint Kitts and Nevis",
					"173"=>"Saint Lucia",
					"174"=>"Saint Pierre and Miquelon",
					"175"=>"Saint Vincent and the Grenadines",
					"176"=>"Samoa",
					"177"=>"San Marino",
					"178"=>"So Tom e Prncipe",
					"179"=>"Saudi Arabia",
					"180"=>"Senegal",
					"181"=>"Serbia and Montenegro",
					"182"=>"Seychelles",
					"183"=>"Sierra Leone",
					"184"=>"Singapore",
					"185"=>"Slovakia",
					"186"=>"Slovenia",
					"187"=>"Solomon Islands",
					"188"=>"Somalia",
					"189"=>"South Africa",
					"190"=>"Spain",
					"191"=>"Sri Lanka",
					"192"=>"Sudan",
					"193"=>"Suriname",
					"194"=>"Swaziland",
					"195"=>"Swedan",
					"196"=>"Switzerland",
					"197"=>"Syria",
					"198"=>"Taiwan",
					"199"=>"Tajikistan",
					"200"=>"Tanzania",
					"201"=>"Thailand",
					"202"=>"Togo",
					"203"=>"Tokelau",
					"204"=>"Tonga",
					"205"=>"Trinidad and Tobago",
					"206"=>"Tunisia",
					"207"=>"Turkey",
					"208"=>"Turkmenistan",
					"209"=>"Turks and Caicos Islands",
					"210"=>"Tuvalu",
					"211"=>"U.S. Virgin Islands",
					"212"=>"Uganda",
					"213"=>"Ukraine",
					"214"=>"United Arab Emirates",
					"215"=>"United Kingdom",
					"216"=>"Uruguay",
					"217"=>"USA",
					"218"=>"Uzbekistan",
					"219"=>"Vanuatu",
					"220"=>"Vatican State",
					"221"=>"Venezuela",
					"222"=>"Viet Nam",
					"223"=>"Wallis and Futuna",
					"224"=>"Yeman",
					"225"=>"Zambia",
					"226"=>"Zimbabwe"
				);
			}

			public function sendFormToEmail ($form, $categoryEmail, $fileUpload = null) {

	            $fullName = $_POST['firstName'] . " " . $_POST['lastName'];

				switch ($categoryEmail) {
					case 'contact':
						$subject = 'Contact Form';
						break;
					case 'submitResume':
						$subject = 'Submit Resume Form';
						break;
					case 'joinUs':
						$subject = 'Join Us Form';
						break;
					case 'yourCareer':
						$subject = 'Your Career Form';
						break;
				}

	            $message =  "<p>This email has been sent using the iSelectCareers form. </p>";
	            $message .= '<table class="results"><thead><tr><td colspan="2">Submitted values</td></tr></thead>';
	                foreach ($form as $key => $value) {
	                    if (strpos($key, 'name_') !== 0 && strpos($key, 'timer_') !== 0 && strpos($key, 'response_') !== 0)
	                        $message .= '<tr><th align="left">' . $key . '</th><td>' . (is_array($value) ? '<pre>' . print_r($value, true) . '</pre>' : $value) . '</td></tr>';
	                }
	            $message .= '</table>';

	            $mail = new PHPMailer();

	            $mail->isSMTP();
	            $mail->SMTPDebug = 2;
	            $mail->Debugoutput = 'html';
	            $mail->Host = 'localhost';
	            $mail->Port = 587;
	            $mail->SMTPAuth = true;
	            $mail->Username = "email@iselectcareers.com.au";
	            $mail->Password = "rp?Wz%Q(P+y%";

	            $mail->setFrom($_POST['emailAddress'], $fullName);
	            $mail->addAddress($this->sendToPrimary['email'], $this->sendToPrimary['person']);
	            $mail->addCC($this->sendToSecondary['email']);
	            $mail->Subject = $subject.' - '.$fullName; //Set the subject line

	            $mail->Body = $message;
	            $mail->AltBody = 'This is a plain-text message body';
				$mail->addAttachment($fileUpload['path'].$fileUpload['file_name']);
				//print_r($fileUpload['path'].$fileUpload['file_name']);

	            if (!$mail->send()) {
	                header("Location: error.html"); die();
	            } else {
	                header("Location: thankyou.php"); die();
	            }



			}

	}


?>