<?php
require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../../config.php";

if (!$cors) {
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Headers: *");
}

header("Content-Type", "application/json");


$http = new GuzzleHttp\Client();
$json = file_get_contents("php://input");

if ($json) {
  $data = json_decode($json);

  $email = $data->email;
  $firstName = $data->firstName;

  $fields = [
    "ziel" => isset($data->q2) ? $data->q2 : null,
    "bankinstitute" => isset($data->q3) ? $data->q3 : null,
    "wohnung" => isset($data->q5) ? $data->q5 : null,
    "steuererklarung" => isset($data->q6) ? $data->q6 : null,
    "hauptkonto" => isset($data->q7) ? $data->q7 : null,
    "abos" => isset($data->q8) ? $data->q8 : null,
    "app" => isset($data->q9) ? $data->q9 : null,
    "kreditkarten" => isset($data->q10) ? $data->q10 : null,
    "reisetatigkeit" => isset($data->q11) ? $data->q11 : null,
    "auto" => isset($data->q12) ? $data->q12 : null,
    "krankenkasse" => isset($data->q13) ? $data->q13 : null,
    "privatkredit" => isset($data->q14) ? $data->q14 : null,
    "aktiendepot" => isset($data->q15) ? $data->q15 : null,
    "finanzuberblick" => isset($data->q16) ? $data->q16 : null,
    "notgroschen" => isset($data->q17) ? $data->q17 : null,
    "risikotoleranz" => isset($data->q18) ? $data->q18 : null,
    "nachhaltigkeit" => isset($data->q19) ? $data->q19 : null,
    "kinder" => isset($data->q22) ? $data->q22 : null,
    "wechselt_selber" => isset($data->q23) ? $data->q23 : null,
    "notfallordner" => isset($data->q24) ? $data->q24 : null,

    "patientenverfugung_testament" => isset($data->q26) ? $data->q26 : null,
    "clark" => isset($data->q27) ? $data->q27 : null,
    "glaubenssatz" => isset($data->q28) ? $data->q28 : null,
    "finanzwissen" => isset($data->q29) ? $data->q29 : null,

    "strom" => isset($data->q4) && in_array("41", $data->q4) ? "41" : null,
    "internet" => isset($data->q4) && in_array("42", $data->q4) ? "42" : null,
    "handy" => isset($data->q4) && in_array("43", $data->q4) ? "43" : null,

    "investieren_wo" =>
      isset($data->q21) && in_array("2110", $data->q21) ? "2110" : null,
    "interesse_an_tagesgeld" =>
      isset($data->q21) && in_array("2111", $data->q21) ? "2111" : null,
    "interesse_an_festgeld" =>
      isset($data->q21) && in_array("2112", $data->q21) ? "2112" : null,
    "interesse_an_immobilien" =>
      isset($data->q21) && in_array("2113", $data->q21) ? "2113" : null,
    "interesse_an_einzelaktien" =>
      isset($data->q21) && in_array("2114", $data->q21) ? "2114" : null,
    "interesse_an_etfs" =>
      isset($data->q21) && in_array("2115", $data->q21) ? "2115" : null,
    "interesse_an_p2p" =>
      isset($data->q21) && in_array("2116", $data->q21) ? "2116" : null,
    "interesse_an_krypto" =>
      isset($data->q21) && in_array("2117", $data->q21) ? "2117" : null,
    "interesse_an_rohstoffen" =>
      isset($data->q21) && in_array("2118", $data->q21) ? "2118" : null,
    "interesse_an_optionen" =>
      isset($data->q21) && in_array("2119", $data->q21) ? "2119" : null,

    "ikein_geld_investiert" =>
      isset($data->q20) && in_array("2011", $data->q20) ? "2011" : null,
    "investiert_in_tagesgeld" =>
      isset($data->q20) && in_array("2012", $data->q20) ? "2012" : null,
    "investiert_in_festgeld" =>
      isset($data->q20) && in_array("2013", $data->q20) ? "2013" : null,
    "investiert_in_immobilien" =>
      isset($data->q20) && in_array("2014", $data->q20) ? "2014" : null,
    "investiert_in_einzelaktien" =>
      isset($data->q20) && in_array("2015", $data->q20) ? "2015" : null,
    "investiert_in_rohstoffe" =>
      isset($data->q20) && in_array("2016", $data->q20) ? "2016" : null,
    "investiert_in_p2p" =>
      isset($data->q20) && in_array("2017", $data->q20) ? "2017" : null,
    "investiert_in_etfs" =>
      isset($data->q20) && in_array("2018", $data->q20) ? "2018" : null,
    "investiert_in_kryptos" =>
      isset($data->q20) && in_array("2019", $data->q20) ? "2019" : null,
    "investiert_in_optionen" =>
      isset($data->q20) && in_array("2020", $data->q20) ? "2020" : null,
    "investiert_in_weiteres" =>
      isset($data->q20) && in_array("2021", $data->q20) ? "2021" : null,
    "kein_interesse_investieren" =>
      isset($data->q20) && in_array("2022", $data->q20) ? "2022" : null,

    "private_krankenversicherung" =>
      isset($data->q25) && in_array("251", $data->q25) ? "251" : null,
    "hausrat" =>
      isset($data->q25) && in_array("252", $data->q25) ? "252" : null,
    "privathaftpflicht" =>
      isset($data->q25) && in_array("253", $data->q25) ? "253" : null,
    "bu" => isset($data->q25) && in_array("254", $data->q25) ? "254" : null,
    "rechtsschutz" =>
      isset($data->q25) && in_array("255", $data->q25) ? "255" : null,
    "wohngebaude" =>
      isset($data->q25) && in_array("256", $data->q25) ? "256" : null,

    "dlink" => isset($data->recommendationsLink)
      ? $data->recommendationsLink
      : null,
  ];

  $response = $http->request(
    "POST",
    "https://api.convertkit.com/v3/forms/" . $formId . "/subscribe",
    [
      "headers" => [
        "Content-Type" => "application/json; charset=utf-8",
      ],
      "body" => json_encode([
        "api_key" => $apiKey,
        "email" => $email,
        "first_name" => $firstName,
      ]),
    ]
  );

  $subscribeBody = $response->getBody();
  $subscribeResponse = json_decode($subscribeBody);
  $subscriberId = $subscribeResponse->subscription->subscriber->id;

  $response = $http->request(
    "PUT",
    "https://api.convertkit.com/v3/subscribers/" . $subscriberId,
    [
      "headers" => [
        "Content-Type" => "application/json; charset=utf-8",
      ],
      "body" => json_encode([
        "api_secret" => $apiSecret,
        "fields" => $fields,
      ]),
    ]
  );

  $subscribersBody = $response->getBody();
  $subscribersResponse = json_decode($subscribersBody);

  echo json_encode([
    "success" => true,
    "subscribeResponse" => $subscribeResponse,
    "subscribersResponse" => $subscribersResponse,
  ]);
}
