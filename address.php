<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Address Selection</title>
  <link rel="stylesheet" href="add.css">
</head>
<body>
<?php
require_once "database.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $country = $_POST["country"];
    $province = $_POST["province"];
    $city = $_POST["city"];
    $Brgy = $_POST["Brgy"];
    $contactNumber = $_POST["contact_number"];

    // Perform necessary validation on user inputs

    // Assuming $conn is your database connection
    $sql = "INSERT INTO addresses (country, province, city, Brgy, contact_number) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    // Assuming contact_number is an integer, adjust the parameter types accordingly
    mysqli_stmt_bind_param($stmt, "ssssi", $country, $province, $city, $Brgy, $contactNumber);

    // Check if the query executed successfully
    if (mysqli_stmt_execute($stmt)) {
        echo "<div class='alert alert-success'>All inputs saved successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error saving address: " . mysqli_error($conn) . "</div>";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the database connection outside the if condition
mysqli_close($conn);
?>


<form method="post" action="address.php">
  <!-- Country Selection -->
  <label for="country">Country:</label>
  <select id="country" name="country" onclick="updateProvinceAndCity()">
  <option value="" disabled selected>Select a Country</option>
  <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Baden">Baden</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Bavaria">Bavaria</option>
    <option value="Belgium">Belgium</option>
    <option value="	Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Brazil">Brazil</option>
    <option value="Brunei">Brunei</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cabo Verde">Cabo Verde</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
    <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Eswatini (fmr. Swaziland)">Eswatini (fmr. Swaziland)</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Greece">Greece</option>
    <option value="Grenada">Grenada</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Holy See">Holy See</option>
    <option value="Honduras">Honduras</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Laos">Laos</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libya">Libya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldivess</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia">Micronesia</option>
    <option value="Moldova">Moldova</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montenegro">Montenegro</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="North Korea">North Korea</option>
    <option value="North Macedonia">North Macedonia</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Palestine State">Palestine State</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Qatar">Qatar</option>
    <option value="Romania">Romania</option>
    <option value="Russia">Russia</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
    <option value="Saint Lucia">Saint Lucia</option>
    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Serbia">Serbia</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra Leone">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Korea">South Korea</option>
    <option value="South Sudan">South Sudan</option>
    <option value="Spain">Spain</option>
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syria</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania</option>
    <option value="Thailand">Thailand</option>
    <option value="Taiwan">Taiwan</option>
    <option value="Togo">Togo</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States of America">United States of America</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Vietnam</option>
    <option value="Yemen">Yemen</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
  </select>

  <!-- Province/State Selection -->
  <label for="province">Province:</label>
  <select id="province" name="province">
  <option value="" disabled selected>Select a Province/State</option>
  </select>

  <!-- City/Municipality Selection -->
  <label for="city">City/Municipality:</label>
  <select id="city" name="city">
  <option value="" disabled selected>Select a City/Municipality</option>
   </select>

  <!-- Street Input -->
  <label for="brgy">Brgy:</label>
  <input type="text" id="Brgy" name="Brgy" placeholder="Enter Brgy name">

  <!-- Additional Address Fields can be added as needed -->

  
  </select>

  <!-- Contact Number Input -->
  <label for="contact_number">ContacNO:</label>
  <input type="text" id="contact_number" name="contact_number" pattern="\d{10}" placeholder="Enter a number">
</div>


  <!-- Submit Button -->
  <input type="submit" value="Submit">
</form>

<div><p>Already registered? <a href="login.php"> Login Here</a></p></div>

<script>
  function updateProvinceAndCity() {
    var countrySelect = document.getElementById("country");
    var provinceSelect = document.getElementById("province");
    var citySelect = document.getElementById("city");

    // Clear previous options
    provinceSelect.innerHTML = "<option value='' disabled selected>Select a Province/State</option>";
    citySelect.innerHTML = "<option value='' disabled selected>Select a City/Municipality</option>";

    // Get selected country
    var selectedCountry = countrySelect.value;

    // Populate provinces and cities based on the selected country
    if (selectedCountry === "Philippines") {
      var philippinesProvinces = ["Abra", "Agusan del Norte", "Agusan del Sur", "Aklan", "Albay", "Antique", "Apayao", "Aurora",
        "Basilan", "Bataan", "Batanes", "Batangas", "Benguet", "Biliran", "Bukidnon", "Bulacan",
        "Cagayan", "Camarines Norte", "Camarines Sur", "Camiguin", "Capiz", "Catanduanes", "Cavite",
        "Cebu", "Cotabato", "Davao de Oro (Compostela Valley)", "Davao del Norte", "Davao del Sur",
        "Davao Occidental", "Davao Oriental", "Dinagat Islands", "Eastern Samar", "Guimaras",
        "Ifugao", "Ilocos Norte", "Ilocos Sur", "Iloilo", "Isabela", "Kalinga", "La Union", "Laguna",
        "Lanao del Norte", "Lanao del Sur", "Leyte", "Maguindanao del Norte", "Maguindanao del Sur",
        "Marinduque", "Masbate", "Misamis Occidental", "Metro Manila", "Misamis Oriental",
        "Mountain Province", "Negros Occidental", "Negros Oriental", "Northern Samar", "Nueva Ecija",
        "Nueva Vizcaya", "Occidental Mindoro", "Oriental Mindoro", "Palawan", "Pampanga", "Pangasinan",
        "Quezon", "Quirino", "Rizal", "Romblon", "Samar", "Sarangani", "Siquijor", "Sorsogon",
        "South Cotabato", "Southern Leyte", "Sultan Kudarat", "Sulu", "Surigao del Norte",
        "Surigao del Sur", "Tarlac", "Tawi-Tawi", "Zambales", "Zamboanga del Norte", "Zamboanga del Sur", /* Add more provinces */];
      var philippinesCities = ["Bangued","Boliney", "Bucay","Bucloc","Daguioman","Danglas","Dolores","La Paz","Lacub","Lagangilang",
            "Lagayan","Langiden","Licuan-Baay","Luba", "Malibcong","Manabo","Peñarrubia","Pidigan","Pilar","Sallapadan",
            "San Isidro","San Juan","San Quintin","Tayum","Tineg","Tubo","Villaviciosa", /* Add more cities */];

      // Populate provinces
      for (var i = 0; i < philippinesProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = philippinesProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities
      for (var i = 0; i < philippinesCities.length; i++) {
        var option = document.createElement("option");
        option.text = philippinesCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Afghanistan") {
      // Add provinces and cities for Afghanistan
      var afghanistanProvinces = ["Badakhshan", "Badghis", "Baghlan", "Balkh", "Bamyan", "Daykundi", "Farah", "Faryab",
        "Ghazni", "Ghor", "Helmand", "Herat", "Jowzjan", "Kabul", "Kandahar", "Kapisa", "Khost", "Kunar", "Kunduz",
        "Laghman", "Logar", "Nangarhar", "Nimroz", "Nuristan", "Paktia", "Paktika", "Panjshir", "Parwan", "Samangan",
        "Sar-e Pol", "Takhar", "Urozgan", "Wardak", "Zabul", /* Add more provinces for Afghanistan */];
      var afghanistanCities = ["Kabul", "Herat", "Mazar-i-Sharif", "Kandahar", "Jalalabad", "Lashkargah", "Taloqan", "Kunduz",
        "Farah", "Ghazni", "Balkh", "Baghlan", "Nangarhar", "Khost", "Helmand", "Kabul", "Kandahar", "Herat", "Jowzjan",
        "Paktia", "Bamyan", /* Add more cities for Afghanistan */];
        
      // Populate provinces for Afghanistan
      for (var i = 0; i < afghanistanProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = afghanistanProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Afghanistan
      for (var i = 0; i < afghanistanCities.length; i++) {
        var option = document.createElement("option");
        option.text = afghanistanCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Albania") {
      // Add provinces and cities for Albania
      var albaniaProvinces = ["Berat", "Dibër", "Durrës", "Elbasan", "Fier", "Gjirokastër", "Korçë", "Kukës",
        "Lezhë", "Shkodër", "Tiranë", "Vlorë", /* Add more provinces for Albania */];
      var albaniaCities = ["Tiranë", "Durrës", "Vlorë", "Shkodër", "Elbasan", "Fier", "Kamëz", "Korçë",
        "Berat", "Lushnjë", "Patos", "Kavajë", "Gjirokastër", "Lezhë", "Kukës", "Burrel", /* Add more cities for Albania */];

      // Populate provinces for Albania
      for (var i = 0; i < albaniaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = albaniaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Algeria
      for (var i = 0; i < algeriaCities.length; i++) {
        var option = document.createElement("option");
        option.text = albaniaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Algeria") {
  // Add provinces and cities for Algeria
  var algeriaProvinces = ["Adrar", "Chlef", "Laghouat", "Oum El Bouaghi", "Batna", "Béjaïa", "Biskra", "Béchar",
    "Blida", "Bouira", "Tamanrasset", "Tébessa", "Tlemcen", "Tiaret", "Tizi Ouzou", "Alger", "Djelfa", "Jijel",
    "Sétif", "Saïda", "Skikda", "Sidi Bel Abbès", "Annaba", "Guelma", "Constantine", "Médéa", "Mostaganem",
    "M'Sila", "Mascara", "Ouargla", "Oran", "El Bayadh", "Illizi", "Bordj Bou Arréridj", "Boumerdès",
    "El Tarf", "Tindouf", "Tissemsilt", "El Oued", "Khenchela", "Souk Ahras", "Tipaza", "Mila", "Aïn Defla",
    "Naâma", "Aïn Témouchent", "Ghardaïa", "Relizane" /* Add more provinces for Algeria */];
  var algeriaCities = ["Algiers", "Oran", "Constantine", "Annaba", "Batna", "Blida", "Setif", "Tlemcen",
    "Béjaïa", "Oran", "Tizi Ouzou", "Tamanrasset", "Tébessa", "Djelfa", "Jijel", "Sétif", "Skikda",
    "Sidi Bel Abbès", "Annaba", "Guelma", "Constantine", "Médéa", "Mostaganem", "M'Sila", "Mascara",
    "Ouargla", "El Bayadh", "Illizi", "Bordj Bou Arréridj", "Boumerdès", "El Tarf", "Tindouf", "Tissemsilt",
    "El Oued", "Khenchela", "Souk Ahras", "Tipaza", "Mila", "Aïn Defla", "Naâma", "Aïn Témouchent",
    "Ghardaïa", "Relizane" /* Add more cities for Algeria */];

  // Populate provinces for Algeria
  for (var i = 0; i < algeriaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = algeriaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Algeria
  for (var i = 0; i < algeriaCities.length; i++) {
    var option = document.createElement("option");
    option.text = algeriaCities[i];
    citySelect.add(option);
      } 
    } else if (selectedCountry === "Andorra") {
      // Add provinces and cities for Andorra
      var andorraProvinces = ["Andorra la Vella", "Canillo", "Encamp", "Escaldes-Engordany", "La Massana", "Ordino", "Sant Julià de Lòria", /* Add more provinces for Andorra */];
      var andorraCities = ["Andorra la Vella", "Canillo", "Encamp", "Escaldes-Engordany", "La Massana", "Ordino", "Sant Julià de Lòria", /* Add more cities for Andorra */];

      // Populate provinces for Andorra
      for (var i = 0; i < andorraProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = andorraProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Andorra
      for (var i = 0; i < andorraCities.length; i++) {
        var option = document.createElement("option");
        option.text = andorraCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Angola") {
  // Add provinces and cities for Angola
  var angolaProvinces = ["Bengo", "Benguela", "Bié", "Cabinda", "Cuando Cubango", "Cuanza Norte", "Cuanza Sul", "Cunene",
    "Huambo", "Huíla", "Luanda", "Lunda Norte", "Lunda Sul", "Malanje", "Moxico", "Namibe", "Uíge", "Zaire", /* Add more provinces for Angola */];
  var angolaCities = ["Luanda", "Lobito", "Huambo", "Benguela", "Namibe", "Malanje", "Cabinda", "Kuito",
    "Uíge", "Soyo", "Lubango", "Cuito", "Menongue", "Sumbe", "N'dalatando", "Luena", "Luau", /* Add more cities for Angola */];

  // Populate provinces for Angola
  for (var i = 0; i < angolaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = angolaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Angola
  for (var i = 0; i < angolaCities.length; i++) {
    var option = document.createElement("option");
    option.text = angolaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Antigua and Barbuda") {
  // Add provinces and cities for Antigua and Barbuda
  var antiguaBarbudaParishes = ["Saint George", "Saint John", "Saint Mary", "Saint Paul", "Saint Peter", "Saint Philip", /* Add more parishes for Antigua and Barbuda */];
  var antiguaBarbudaCities = ["Saint John's", "All Saints", "Liberta", "Bolands", "Piggotts", "Parham", "Falmouth", "Carlisle", /* Add more cities for Antigua and Barbuda */];

  // Populate parishes for Antigua and Barbuda
  for (var i = 0; i < antiguaBarbudaParishes.length; i++) {
    var option = document.createElement("option");
    option.text = antiguaBarbudaParishes[i];
    provinceSelect.add(option);
  }

  // Populate cities for Antigua and Barbuda
  for (var i = 0; i < antiguaBarbudaCities.length; i++) {
    var option = document.createElement("option");
    option.text = antiguaBarbudaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Argentina") {
  // Add provinces and cities for Argentina
  var argentinaProvinces = ["Buenos Aires", "Catamarca", "Chaco", "Chubut", "Córdoba", "Corrientes", "Entre Ríos", "Formosa",
    "Jujuy", "La Pampa", "La Rioja", "Mendoza", "Misiones", "Neuquén", "Río Negro", "Salta", "San Juan", "San Luis",
    "Santa Cruz", "Santa Fe", "Santiago del Estero", "Tierra del Fuego", "Tucumán", /* Add more provinces for Argentina */];
  var argentinaCities = ["Buenos Aires", "Córdoba", "Rosario", "Mendoza", "San Miguel de Tucumán", "La Plata", "Mar del Plata",
    "Salta", "Santa Fe", "San Juan", "Resistencia", "Neuquén", "Formosa", "San Salvador de Jujuy", "Posadas",
    "Paraná", "Ushuaia", "Rawson", "Viedma", "La Rioja", "Santa Rosa", "San Luis", "Corrientes", /* Add more cities for Argentina */];

  // Populate provinces for Argentina
  for (var i = 0; i < argentinaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = argentinaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Argentina
  for (var i = 0; i < argentinaCities.length; i++) {
    var option = document.createElement("option");
    option.text = argentinaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Armenia") {
  // Add provinces and cities for Armenia
  var armeniaProvinces = ["Aragatsotn", "Ararat", "Armavir", "Gegharkunik", "Kotayk", "Lori", "Shirak", "Syunik", "Tavush", "Vayots Dzor", "Yerevan", /* Add more provinces for Armenia */];
  var armeniaCities = ["Yerevan", "Gyumri", "Vanadzor", "Vagharshapat (Etchmiadzin)", "Hrazdan", "Abovyan", "Kapan", "Armavir", "Gavar", "Artashat", /* Add more cities for Armenia */];

  // Populate provinces for Armenia
  for (var i = 0; i < armeniaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = armeniaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Armenia
  for (var i = 0; i < armeniaCities.length; i++) {
    var option = document.createElement("option");
    option.text = armeniaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Australia") {
  // Add states and cities for Australia
  var australiaStates = ["Australian Capital Territory (ACT)", "New South Wales (NSW)", "Northern Territory (NT)", "Queensland (QLD)", "South Australia (SA)", "Tasmania (TAS)", "Victoria (VIC)", "Western Australia (WA)", /* Add more states for Australia */];
  var australiaCities = ["Sydney", "Melbourne", "Brisbane", "Perth", "Adelaide", "Hobart", "Canberra", "Darwin", /* Add more cities for Australia */];

  // Populate states for Australia
  for (var i = 0; i < australiaStates.length; i++) {
    var option = document.createElement("option");
    option.text = australiaStates[i];
    provinceSelect.add(option);
  }

  // Populate cities for Australia
  for (var i = 0; i < australiaCities.length; i++) {
    var option = document.createElement("option");
    option.text = australiaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Austria") {
  // Add states and cities for Austria
  var austriaStates = ["Burgenland", "Carinthia", "Lower Austria", "Upper Austria", "Salzburg", "Styria", "Tyrol", "Vorarlberg", "Vienna", /* Add more states for Austria */];
  var austriaCities = ["Vienna", "Graz", "Linz", "Salzburg", "Innsbruck", "Klagenfurt", "Villach", "Wels", "Sankt Pölten", /* Add more cities for Austria */];

  // Populate states for Austria
  for (var i = 0; i < austriaStates.length; i++) {
    var option = document.createElement("option");
    option.text = austriaStates[i];
    provinceSelect.add(option);
  }

  // Populate cities for Austria
  for (var i = 0; i < austriaCities.length; i++) {
    var option = document.createElement("option");
    option.text = austriaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Azerbaijan") {
  // Add regions and cities for Azerbaijan
  var azerbaijanRegions = ["Absheron", "Ganja-Gazakh", "Guba-Khachmaz", "Lankaran", "Shaki-Zaqatala", "Armenian-occupied territories surrounding Nagorno-Karabakh", /* Add more regions for Azerbaijan */];
  var azerbaijanCities = ["Baku", "Ganja", "Sumqayit", "Mingachevir", "Lankaran", "Shaki", "Yevlakh", "Stepanakert", /* Add more cities for Azerbaijan */];

  // Populate regions for Azerbaijan
  for (var i = 0; i < azerbaijanRegions.length; i++) {
    var option = document.createElement("option");
    option.text = azerbaijanRegions[i];
    provinceSelect.add(option);
  }

  // Populate cities for Azerbaijan
  for (var i = 0; i < azerbaijanCities.length; i++) {
    var option = document.createElement("option");
    option.text = azerbaijanCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Bahamas") {
  // Add islands and cities for the Bahamas
  var bahamasIslands = ["New Providence", "Grand Bahama", "Abaco Islands", "Andros", "Eleuthera", "Exuma", "Cat Island", "Long Island", "Bimini", "Berry Islands", /* Add more islands for the Bahamas */];
  var bahamasCities = ["Nassau", "Freeport", "Marsh Harbour", "Andros Town", "Governor's Harbour", "George Town", "Arthur's Town", "Clarence Town", "Bimini", "Great Harbour Cay", /* Add more cities for the Bahamas */];

  // Populate islands for the Bahamas
  for (var i = 0; i < bahamasIslands.length; i++) {
    var option = document.createElement("option");
    option.text = bahamasIslands[i];
    provinceSelect.add(option);
  }

  // Populate cities for the Bahamas
  for (var i = 0; i < bahamasCities.length; i++) {
    var option = document.createElement("option");
    option.text = bahamasCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Bahrain") {
  // Add governorates and cities for Bahrain
  var bahrainGovernorates = ["Capital Governorate", "Muharraq Governorate", "Northern Governorate", "Southern Governorate"];
  var bahrainCities = ["Manama", "Muharraq", "Riffa", "Hamad Town", "Isa Town", /* Add more cities for Bahrain */];

  // Populate governorates for Bahrain
  for (var i = 0; i < bahrainGovernorates.length; i++) {
    var option = document.createElement("option");
    option.text = bahrainGovernorates[i];
    provinceSelect.add(option);
  }

  // Populate cities for Bahrain
  for (var i = 0; i < bahrainCities.length; i++) {
    var option = document.createElement("option");
    option.text = bahrainCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Bangladesh") {
  // Add divisions and cities for Bangladesh
  var bangladeshDivisions = ["Dhaka", "Chittagong", "Rajshahi", "Khulna", "Barisal", "Sylhet", "Rangpur", "Mymensingh"];
  var bangladeshCities = ["Dhaka", "Chittagong", "Rajshahi", "Khulna", "Barisal", "Sylhet", "Rangpur", "Mymensingh", /* Add more cities for Bangladesh */];

  // Populate divisions for Bangladesh
  for (var i = 0; i < bangladeshDivisions.length; i++) {
    var option = document.createElement("option");
    option.text = bangladeshDivisions[i];
    provinceSelect.add(option);
  }

  // Populate cities for Bangladesh
  for (var i = 0; i < bangladeshCities.length; i++) {
    var option = document.createElement("option");
    option.text = bangladeshCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Barbados") {
  // Add parishes and cities for Barbados
  var barbadosParishes = ["Christ Church", "Saint Andrew", "Saint George", "Saint James", "Saint John", "Saint Joseph", "Saint Lucy", "Saint Michael", "Saint Peter", "Saint Philip"];
  var barbadosCities = ["Bridgetown", "Oistins", "Speightstown", /* Add more cities for Barbados */];

  // Populate parishes for Barbados
  for (var i = 0; i < barbadosParishes.length; i++) {
    var option = document.createElement("option");
    option.text = barbadosParishes[i];
    provinceSelect.add(option);
  }

  // Populate cities for Barbados
  for (var i = 0; i < barbadosCities.length; i++) {
    var option = document.createElement("option");
    option.text = barbadosCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Belarus") {
  // Add regions and cities for Belarus
  var belarusRegions = ["Brest", "Gomel", "Grodno", "Minsk", "Mogilev", "Vitebsk", /* Add more regions for Belarus */];
  var belarusCities = ["Minsk", "Gomel", "Mogilev", "Brest", "Vitebsk", "Grodno", /* Add more cities for Belarus */];

  // Populate regions for Belarus
  for (var i = 0; i < belarusRegions.length; i++) {
    var option = document.createElement("option");
    option.text = belarusRegions[i];
    provinceSelect.add(option);
  }

  // Populate cities for Belarus
  for (var i = 0; i < belarusCities.length; i++) {
    var option = document.createElement("option");
    option.text = belarusCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Belgium") {
  // Add regions and cities for Belgium
  var belgiumRegions = ["Brussels Capital Region", "Flemish Region", "Walloon Region", /* Add more regions for Belgium */];
  var belgiumCities = ["Brussels", "Antwerp", "Ghent", "Bruges", "Liege", "Namur", /* Add more cities for Belgium */];

  // Populate regions for Belgium
  for (var i = 0; i < belgiumRegions.length; i++) {
    var option = document.createElement("option");
    option.text = belgiumRegions[i];
    provinceSelect.add(option);
  }

  // Populate cities for Belgium
  for (var i = 0; i < belgiumCities.length; i++) {
    var option = document.createElement("option");
    option.text = belgiumCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Belize") {
  // Add districts and cities for Belize
  var belizeDistricts = ["Belize", "Cayo", "Corozal", "Orange Walk", "Stann Creek", "Toledo", /* Add more districts for Belize */];
  var belizeCities = ["Belize City", "San Ignacio", "Corozal Town", "Orange Walk Town", "Dangriga", "Punta Gorda", /* Add more cities for Belize */];

  // Populate districts for Belize
  for (var i = 0; i < belizeDistricts.length; i++) {
    var option = document.createElement("option");
    option.text = belizeDistricts[i];
    provinceSelect.add(option);
  }

  // Populate cities for Belize
  for (var i = 0; i < belizeCities.length; i++) {
    var option = document.createElement("option");
    option.text = belizeCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Benin") {
  // Add departments and cities for Benin
  var beninDepartments = ["Alibori", "Atakora", "Atlantique", "Borgou", "Collines", "Donga", "Kouffo", "Littoral", "Mono", "Ouémé", "Plateau", "Zou", /* Add more departments for Benin */];
  var beninCities = ["Porto-Novo", "Cotonou", "Parakou", "Djougou", "Bohicon", "Abomey-Calavi", "Kandi", "Lokossa", "Ouidah", "Malanville", "Natitingou", "Savalou", /* Add more cities for Benin */];

  // Populate departments for Benin
  for (var i = 0; i < beninDepartments.length; i++) {
    var option = document.createElement("option");
    option.text = beninDepartments[i];
    provinceSelect.add(option);
  }

  // Populate cities for Benin
  for (var i = 0; i < beninCities.length; i++) {
    var option = document.createElement("option");
    option.text = beninCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Bhutan") {
  // Add districts and cities for Bhutan
  var bhutanDistricts = ["Bumthang", "Chukha", "Dagana", "Gasa", "Haa", "Lhuentse", "Mongar", "Paro", "Pemagatshel", "Punakha", "Samdrup Jongkhar", "Samtse", "Sarpang", "Thimphu", "Trashigang", "Trashiyangtse", "Trongsa", "Tsirang", "Wangdue Phodrang", "Zhemgang", /* Add more districts for Bhutan */];
  var bhutanCities = ["Thimphu", "Phuntsholing", "Paro", "Punakha", "Wangdue Phodrang", "Jakar", "Trongsa", "Gelephu", "Samdrup Jongkhar", "Haa", "Lhuentse", "Trashigang", /* Add more cities for Bhutan */];

  // Populate districts for Bhutan
  for (var i = 0; i < bhutanDistricts.length; i++) {
    var option = document.createElement("option");
    option.text = bhutanDistricts[i];
    provinceSelect.add(option);
  }

  // Populate cities for Bhutan
  for (var i = 0; i < bhutanCities.length; i++) {
    var option = document.createElement("option");
    option.text = bhutanCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Bolivia") {
  // Add departments and cities for Bolivia
  var boliviaDepartments = ["Beni", "Chuquisaca", "Cochabamba", "La Paz", "Oruro", "Pando", "Potosí", "Santa Cruz", "Tarija", /* Add more departments for Bolivia */];
  var boliviaCities = ["La Paz", "Sucre", "Cochabamba", "Santa Cruz de la Sierra", "Oruro", "Tarija", "Potosí", "Trinidad", "Cobija", /* Add more cities for Bolivia */];

  // Populate departments for Bolivia
  for (var i = 0; i < boliviaDepartments.length; i++) {
    var option = document.createElement("option");
    option.text = boliviaDepartments[i];
    provinceSelect.add(option);
  }

  // Populate cities for Bolivia
  for (var i = 0; i < boliviaCities.length; i++) {
    var option = document.createElement("option");
    option.text = boliviaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Bosnia and Herzegovina") {
  // Add entities and cities for Bosnia and Herzegovina
  var bosniaEntities = ["Federation of Bosnia and Herzegovina", "Republika Srpska", /* Add more entities for Bosnia and Herzegovina */];
  var bosniaCities = ["Sarajevo", "Banja Luka", "Mostar", "Tuzla", "Zenica", /* Add more cities for Bosnia and Herzegovina */];

  // Populate entities for Bosnia and Herzegovina
  for (var i = 0; i < bosniaEntities.length; i++) {
    var option = document.createElement("option");
    option.text = bosniaEntities[i];
    provinceSelect.add(option);
  }

  // Populate cities for Bosnia and Herzegovina
  for (var i = 0; i < bosniaCities.length; i++) {
    var option = document.createElement("option");
    option.text = bosniaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Botswana") {
  // Add provinces and cities for Botswana
  var botswanaProvinces = ["Central", "Ghanzi", "Kgalagadi", "Kgatleng", "Kweneng", "North-East", "North-West", "South-East", "Southern", /* Add more provinces for Botswana */];
  var botswanaCities = ["Gaborone", "Francistown", "Molepolole", "Serowe", "Selibe Phikwe", /* Add more cities for Botswana */];

  // Populate provinces for Botswana
  for (var i = 0; i < botswanaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = botswanaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Botswana
  for (var i = 0; i < botswanaCities.length; i++) {
    var option = document.createElement("option");
    option.text = botswanaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Brazil") {
  // Add provinces and cities for Brazil
  var brazilProvinces = ["Acre", "Alagoas", "Amapá", "Amazonas", "Bahia", "Ceará", "Distrito Federal", "Espírito Santo", "Goiás", "Maranhão", "Mato Grosso", "Mato Grosso do Sul", "Minas Gerais", "Pará", "Paraíba", "Paraná", "Pernambuco", "Piauí", "Rio de Janeiro", "Rio Grande do Norte", "Rio Grande do Sul", "Rondônia", "Roraima", "Santa Catarina", "São Paulo", "Sergipe", "Tocantins", /* Add more provinces for Brazil */];
  var brazilCities = ["São Paulo", "Rio de Janeiro", "Salvador", "Brasília", "Fortaleza", "Belo Horizonte", "Manaus", "Curitiba", "Recife", "Porto Alegre", /* Add more cities for Brazil */];

  // Populate provinces for Brazil
  for (var i = 0; i < brazilProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = brazilProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Brazil
  for (var i = 0; i < brazilCities.length; i++) {
    var option = document.createElement("option");
    option.text = brazilCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Brunei") {
  // Add provinces and cities for Brunei
  var bruneiProvinces = ["Belait", "Brunei-Muara", "Temburong", "Tutong", /* Add more provinces for Brunei */];
  var bruneiCities = ["Bandar Seri Begawan", "Kuala Belait", "Seria", "Tutong", /* Add more cities for Brunei */];

  // Populate provinces for Brunei
  for (var i = 0; i < bruneiProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = bruneiProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Brunei
  for (var i = 0; i < bruneiCities.length; i++) {
    var option = document.createElement("option");
    option.text = bruneiCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Bulgaria") {
  // Add provinces and cities for Bulgaria
  var bulgariaProvinces = ["Blagoevgrad", "Burgas", "Dobrich", "Gabrovo", "Haskovo", "Kardzhali", "Kyustendil", "Lovech",
    "Montana", "Pazardzhik", "Pernik", "Pleven", "Plovdiv", "Razgrad", "Ruse", "Shumen", "Silistra", "Sliven", "Smolyan",
    "Sofia", "Stara Zagora", "Targovishte", "Varna", "Veliko Tarnovo", "Vidin", "Vratsa", "Yambol", /* Add more provinces for Bulgaria */];
  var bulgariaCities = ["Sofia", "Plovdiv", "Varna", "Burgas", "Ruse", "Stara Zagora", "Pleven", "Sliven", "Dobrich",
    "Shumen", "Pernik", "Haskovo", "Yambol", "Pazardzhik", "Blagoevgrad", "Veliko Tarnovo", "Vratsa", "Gabrovo", "Asenovgrad",
    "Vidin", "Kazanlak", "Kyustendil", "Kardzhali", "Montana", "Dimitrovgrad", "Silistra", "Targovishte", "Lovech", /* Add more cities for Bulgaria */];

  // Populate provinces for Bulgaria
  for (var i = 0; i < bulgariaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = bulgariaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Bulgaria
  for (var i = 0; i < bulgariaCities.length; i++) {
    var option = document.createElement("option");
    option.text = bulgariaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Burkina Faso") {
  // Add provinces and cities for Burkina Faso
  var burkinaFasoProvinces = ["Balé", "Bam", "Banwa", "Bazèga", "Bougouriba", "Boulgou", "Boulkiemdé", "Comoe",
    "Ganzourgou", "Gnagna", "Gourma", "Houet", "Ioba", "Kadiogo", "Kénédougou", "Komondjari", "Kompienga", "Kossi", "Koulpélogo",
    "Kouritenga", "Kourwéogo", "Léraba", "Loroum", "Mouhoun", "Namentenga", "Nahouri", "Nayala", "Noumbiel", "Oubritenga", "Oudalan",
    "Passoré", "Poni", "Sanguié", "Sanmatenga", "Séno", "Sissili", "Soum", "Sourou", "Tapoa", "Tuy", "Yagha", "Yatenga", "Ziro", "Zondoma", "Zoundwéogo", /* Add more provinces for Burkina Faso */];
  var burkinaFasoCities = ["Ouagadougou", "Bobo-Dioulasso", "Koudougou", "Ouahigouya", "Banfora", "Dédougou", "Kaya", "Tenkodogo", "Fada N'gourma",
    "Houndé", "Dori", "Réo", "Ziniaré", "Ouargaye", "Djibo", "Koupéla", "Garango", "Kombissiri", "Nouna", "Diapaga", "Kantchari", "Gaoua", "Zorgo",
    "Manga", "Boulsa", "Kaya", "Dano", "Tougan", "Diebougou", "Gourcy", "Leo", "Boromo", "Pouytenga", "Solenzo", "Kongoussi", "Batié", "Diébougou", "Koudougou", /* Add more cities for Burkina Faso */];

  // Populate provinces for Burkina Faso
  for (var i = 0; i < burkinaFasoProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = burkinaFasoProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Burkina Faso
  for (var i = 0; i < burkinaFasoCities.length; i++) {
    var option = document.createElement("option");
    option.text = burkinaFasoCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Burundi") {
  // Add provinces and cities for Burundi
  var burundiProvinces = ["Bubanza", "Bujumbura Mairie", "Bujumbura Rural", "Bururi", "Cankuzo", "Cibitoke", "Gitega", "Karuzi",
    "Kayanza", "Kirundo", "Makamba", "Muramvya", "Muyinga", "Mwaro", "Ngozi", "Rutana", "Ruyigi", /* Add more provinces for Burundi */];
  var burundiCities = ["Bujumbura", "Ngozi", "Gitega", "Ruyigi", "Muyinga", "Bururi", "Kirundo", "Makamba", "Cibitoke", "Muramvya",
    "Rutana", "Cankuzo", "Karuzi", "Kayanza", "Bubanza", "Bujumbura Mairie", "Bujumbura Rural", "Bururi", /* Add more cities for Burundi */];

  // Populate provinces for Burundi
  for (var i = 0; i < burundiProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = burundiProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Burundi
  for (var i = 0; i < burundiCities.length; i++) {
    var option = document.createElement("option");
    option.text = burundiCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Cabo Verde") {
  // Add provinces and cities for Cabo Verde
  var caboVerdeProvinces = ["Boa Vista", "Brava", "Maio", "Mosteiros", "Paul", "Porto Novo", "Praia", "Ribeira Brava",
    "Ribeira Grande", "Sal", "Santa Catarina", "Santa Cruz", "São Domingos", "São Filipe", "São Lourenço dos Órgãos",
    "São Miguel", "São Salvador do Mundo", "São Vicente", "Tarrafal", /* Add more provinces for Cabo Verde */];
  var caboVerdeCities = ["Praia", "Mindelo", "Assomada", "Tarrafal", "Espargos", "Pedra Badejo", "Porto Novo", "Cidade Velha",
    "São Filipe", "Ribeira Brava", "Vila do Maio", "Sal Rei", "Cidade de Picos", "Vila Nova Sintra", "Porto Inglês",
    "São Lourenço dos Órgãos", "Ribeira Grande", "Vila do Porto Inglês", "Cidade das Pombas", /* Add more cities for Cabo Verde */];

  // Populate provinces for Cabo Verde
  for (var i = 0; i < caboVerdeProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = caboVerdeProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Cabo Verde
  for (var i = 0; i < caboVerdeCities.length; i++) {
    var option = document.createElement("option");
    option.text = caboVerdeCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Cambodia") {
  // Add provinces and cities for Cambodia
  var cambodiaProvinces = ["Banteay Meanchey", "Battambang", "Kampong Cham", "Kampong Chhnang", "Kampong Speu", "Kampong Thom",
    "Kampot", "Kandal", "Kep", "Koh Kong", "Kratie", "Mondulkiri", "Oddar Meanchey", "Pailin", "Phnom Penh", "Preah Vihear",
    "Prey Veng", "Pursat", "Ratanakiri", "Siem Reap", "Sihanoukville", "Stung Treng", "Svay Rieng", "Takeo", /* Add more provinces for Cambodia */];
  var cambodiaCities = ["Phnom Penh", "Siem Reap", "Sihanoukville", "Battambang", "Kampong Cham", "Preah Sihanouk", "Ta Khmau",
    "Kampot", "Battambang", "Sisophon", "Koh Kong", "Kratié", "Samraong", "Pursat", "Stung Treng", "Prey Veng", "Kampong Thom",
    "Lumphat", "Kampong Speu", "Kampong Chhnang", "Pailin", "Krong Kep", "Banlung", "Svay Rieng", /* Add more cities for Cambodia */];

  // Populate provinces for Cambodia
  for (var i = 0; i < cambodiaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = cambodiaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Cambodia
  for (var i = 0; i < cambodiaCities.length; i++) {
    var option = document.createElement("option");
    option.text = cambodiaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Cambodia") {
  // Add provinces and cities for Cambodia
  var cambodiaProvinces = ["Banteay Meanchey", "Battambang", "Kampong Cham", "Kampong Chhnang", "Kampong Speu", "Kampong Thom", "Kampot", "Kandal",
    "Koh Kong", "Kratié", "Mondulkiri", "Oddar Meanchey", "Pailin", "Phnom Penh", "Preah Sihanouk", "Preah Vihear", "Prey Veng", "Pursat", "Ratanakiri",
    "Siem Reap", "Stung Treng", "Svay Rieng", "Takeo", /* Add more provinces for Cambodia */];
  var cambodiaCities = ["Phnom Penh", "Siem Reap", "Battambang", "Sihanoukville", "Poipet", "Kampong Cham", "Ta Khmau", "Battambang",
    "Kampong Speu", "Pursat", "Kampong Chhnang", "Kampot", "Koh Kong", "Kratié", "Prey Veng", "Stung Treng", "Svay Rieng", "Preah Sihanouk",
    "Kampong Thom", "Kampong Thom", /* Add more cities for Cambodia */];

  // Populate provinces for Cambodia
  for (var i = 0; i < cambodiaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = cambodiaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Cambodia
  for (var i = 0; i < cambodiaCities.length; i++) {
    var option = document.createElement("option");
    option.text = cambodiaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Cameroon") {
  // Add regions and cities for Cameroon
  var cameroonRegions = ["Adamawa", "Centre", "East", "Far North", "Littoral", "North", "Northwest", "West", "South", "Southwest", /* Add more regions for Cameroon */];
  var cameroonCities = ["Yaoundé", "Douala", "Ngaoundéré", "Maroua", "Bamenda", "Buea", "Bafoussam", "Ebolowa", "Limbe", "Bamenda", /* Add more cities for Cameroon */];

  // Populate regions for Cameroon
  for (var i = 0; i < cameroonRegions.length; i++) {
    var option = document.createElement("option");
    option.text = cameroonRegions[i];
    provinceSelect.add(option);
  }

  // Populate cities for Cameroon
  for (var i = 0; i < cameroonCities.length; i++) {
    var option = document.createElement("option");
    option.text = cameroonCities[i];
    citySelect.add(option);
  }
    } else if (selectedCountry === "Canada") {
      // Add provinces and cities for Canada
      var canadaProvinces = ["Alberta", "British Columbia", "Manitoba", "New Brunswick", "Newfoundland and Labrador", "Nova Scotia", "Ontario", "Prince Edward Island", "Quebec", "Saskatchewan"];
      var canadaCities = ["Toronto", "Vancouver", "Montreal", "Calgary", "Edmonton", "Ottawa", "Quebec City", "Winnipeg", "Halifax", "Regina"];

      // Populate provinces for Canada
      for (var i = 0; i < canadaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = canadaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Canada
      for (var i = 0; i < canadaCities.length; i++) {
        var option = document.createElement("option");
        option.text = canadaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Central African Republic") {
      // Add provinces and cities for Central African Republic
      var carProvinces = ["Bamingui-Bangoran", "Bangui", "Basse-Kotto", "Haute-Kotto", "Haut-Mbomou", "Kémo", "Lobaye", "Mambéré-Kadéï", "Mbomou", "Nana-Grébizi", "Nana-Mambéré", "Ombella-M'Poko", "Ouaka", "Ouham", "Ouham-Pendé", "Sangha-Mbaéré", "Vakaga"];
      var carCities = ["Bangui", "Bimbo", "Berbérati", "Bambari", "Bossangoa", "Nola", "Boali", "Bria", "Sibut", "Kaga-Bandoro"];

      // Populate provinces for Central African Republic
      for (var i = 0; i < carProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = carProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Central African Republic
      for (var i = 0; i < carCities.length; i++) {
        var option = document.createElement("option");
        option.text = carCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Chad") {
      // Add provinces and cities for Chad
      var chadProvinces = ["Batha", "Biltine", "Borkou", "Ennedi Est", "Ennedi Ouest", "Guéra", "Hadjer-Lamis", "Kanem", "Lac", "Logone Occidental", "Logone Oriental", "Mandoul", "Mayo-Kebbi Est", "Mayo-Kebbi Ouest", "Moyen-Chari", "N'Djamena", "Ouaddaï", "Salamat", "Sila", "Tandjilé", "Tibesti", "Wadi Fira"];
      var chadCities = ["N'Djamena", "Moundou", "Sarh", "Abeche", "Kelo", "Bongor", "Pala", "Am Timan", "Mongo", "Doba"];

      // Populate provinces for Chad
      for (var i = 0; i < chadProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = chadProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Chad
      for (var i = 0; i < chadCities.length; i++) {
        var option = document.createElement("option");
        option.text = chadCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Chile") {
      // Add provinces and cities for Chile
      var chileProvinces = ["Aysén del General Carlos Ibáñez del Campo", "Antofagasta", "Araucanía", "Arica y Parinacota", "Atacama", "Biobío", "Coquimbo", "Los Lagos", "Los Ríos", "Magallanes y de la Antártica Chilena", "Maule", "Ñuble", "Región Metropolitana de Santiago", "Tarapacá", "Valparaíso"];
      var chileCities = ["Santiago", "Valparaíso", "Concepción", "La Serena", "Antofagasta", "Puerto Montt", "Temuco", "Iquique", "Rancagua", "Talca", "Arica", "Chillán", "Valdivia", "Osorno", "Copiapó", "Punta Arenas"];

      // Populate provinces for Chile
      for (var i = 0; i < chileProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = chileProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Chile
      for (var i = 0; i < chileCities.length; i++) {
        var option = document.createElement("option");
        option.text = chileCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "China") {
      // Add provinces and cities for China
      var chinaProvinces = ["Anhui", "Beijing", "Chongqing", "Fujian", "Gansu", "Guangdong", "Guangxi", "Guizhou", "Hainan", "Hebei", "Heilongjiang", "Henan", "Hong Kong", "Hubei", "Hunan", "Inner Mongolia", "Jiangsu", "Jiangxi", "Jilin", "Liaoning", "Macau", "Ningxia", "Qinghai", "Shaanxi", "Shandong", "Shanghai", "Shanxi", "Sichuan", "Tianjin", "Tibet", "Xinjiang", "Yunnan", "Zhejiang"];
      var chinaCities = ["Beijing", "Shanghai", "Guangzhou", "Shenzhen", "Tianjin", "Chongqing", "Hangzhou", "Chengdu", "Xi'an", "Wuhan", "Shenyang", "Nanjing", "Harbin", "Changchun", "Hefei", "Jinan", "Nanning", "Kunming", "Fuzhou", "Xiamen", "Nanchang", "Guiyang", "Haikou", "Lanzhou", "Urumqi", "Taiyuan", "Jining", "Zhuhai", "Dalian", "Qingdao", "Xining", "Lhasa", "Yinchuan"];
      
      // Populate provinces for China
      for (var i = 0; i < chinaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = chinaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for China
      for (var i = 0; i < chinaCities.length; i++) {
        var option = document.createElement("option");
        option.text = chinaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Colombia") {
      // Add provinces and cities for Colombia
      var colombiaProvinces = ["Amazonas", "Antioquia", "Arauca", "Atlántico", "Bolívar", "Boyacá", "Caldas", "Caquetá", "Casanare", "Cauca", "Cesar", "Chocó", "Córdoba", "Cundinamarca", "Guainía", "Guaviare", "Huila", "La Guajira", "Magdalena", "Meta", "Nariño", "Norte de Santander", "Putumayo", "Quindío", "Risaralda", "San Andrés y Providencia", "Santander", "Sucre", "Tolima", "Valle del Cauca", "Vaupés", "Vichada"];
      var colombiaCities = ["Bogotá", "Medellín", "Cali", "Barranquilla", "Cartagena", "Cúcuta", "Santa Marta", "Villavicencio", "Bucaramanga", "Pereira", "Manizales", "Ibagué", "Neiva", "Pasto", "Popayán", "Quibdó", "Montería", "Tunja", "Riohacha", "Armenia", "Sincelejo", "Florencia", "Yopal", "Mocoa", "Puerto Carreño", "San José del Guaviare", "Mitú", "Leticia", "Inírida", "San Andrés"];
  
      // Populate provinces for Colombia
      for (var i = 0; i < colombiaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = colombiaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Colombia
      for (var i = 0; i < colombiaCities.length; i++) {
        var option = document.createElement("option");
        option.text = colombiaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Comoros") {
      // Add provinces and cities for Comoros
      var comorosProvinces = ["Grande Comore (N'gazidja)", "Anjouan (Ndzuwani)", "Mohéli (Mwali)"];
      var comorosCities = ["Moroni", "Mutsamudu", "Fomboni"];
  
      // Populate provinces for Comoros
      for (var i = 0; i < comorosProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = comorosProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Comoros
      for (var i = 0; i < comorosCities.length; i++) {
        var option = document.createElement("option");
        option.text = comorosCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Congo") {
      // Add provinces and cities for Congo
      var congoProvinces = ["Bouenza", "Pool", "Cuvette", "Cuvette-Ouest", "Kouilou", "Lékoumou", "Likouala", "Niari", "Plateaux", "Sangha"];
      var congoCities = ["Brazzaville", "Pointe-Noire", "Dolisie", "Nkayi", "Owando", "Impfondo", "Mossendjo", "Sibiti", "Loandjili", "Djambala"];
  
      // Populate provinces for Congo
      for (var i = 0; i < congoProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = congoProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Congo
      for (var i = 0; i < congoCities.length; i++) {
        var option = document.createElement("option");
        option.text = congoCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Costa Rica") {
      // Add provinces and cities for Costa Rica
      var costaRicaProvinces = ["San Jose", "Alajuela", "Cartago", "Heredia", "Guanacaste", "Puntarenas", "Limón"];
      var costaRicaCities = ["San Jose", "Alajuela", "Cartago", "Heredia", "Liberia", "Puntarenas", "Limón", "Quesada", "Golfito", "Canas"];
  
      // Populate provinces for Costa Rica
      for (var i = 0; i < costaRicaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = costaRicaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Costa Rica
      for (var i = 0; i < costaRicaCities.length; i++) {
        var option = document.createElement("option");
        option.text = costaRicaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Croatia") {
      // Add provinces and cities for Croatia
      var croatiaProvinces = ["Zagreb County", "Split-Dalmatia County", "Primorje-Gorski Kotar County", "Istria County", "Osijek-Baranja County", "Sisak-Moslavina County", "Varaždin County"];
      var croatiaCities = ["Zagreb", "Split", "Rijeka", "Pula", "Osijek", "Sisak", "Varaždin", "Dubrovnik", "Zadar", "Karlovac"];
  
      // Populate provinces for Croatia
      for (var i = 0; i < croatiaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = croatiaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Croatia
      for (var i = 0; i < croatiaCities.length; i++) {
        var option = document.createElement("option");
        option.text = croatiaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Cuba") {
      // Add provinces and cities for Cuba
      var cubaProvinces = ["Pinar del Río", "Artemisa", "Havana", "Mayabeque", "Matanzas", "Cienfuegos", "Villa Clara"];
      var cubaCities = ["Havana", "Santiago de Cuba", "Camagüey", "Holguín", "Santa Clara", "Guantánamo", "Cienfuegos", "Pinar del Río", "Artemisa", "Matanzas"];
  
      // Populate provinces for Cuba
      for (var i = 0; i < cubaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = cubaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Cuba
      for (var i = 0; i < cubaCities.length; i++) {
        var option = document.createElement("option");
        option.text = cubaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Cyprus") {
      // Add provinces and cities for Cyprus
      var cyprusProvinces = ["Famagusta", "Kyrenia", "Larnaca", "Limassol", "Nicosia", "Paphos"];
      var cyprusCities = ["Nicosia", "Limassol", "Larnaca", "Paphos", "Famagusta", "Kyrenia"];
  
      // Populate provinces for Cyprus
      for (var i = 0; i < cyprusProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = cyprusProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Cyprus
      for (var i = 0; i < cyprusCities.length; i++) {
        var option = document.createElement("option");
        option.text = cyprusCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Czech Republic") {
      // Add provinces and cities for Czech Republic
      var czechProvinces = ["Central Bohemian", "South Bohemian", "Plzeň", "Karlovy Vary", "Ústí nad Labem", "Liberec", "Hradec Králové", "Pardubice", "Vysočina", "South Moravian", "Olomouc", "Zlín", "Moravian-Silesian"];
      var czechCities = ["Prague", "Brno", "Ostrava", "Plzeň", "Liberec", "Olomouc", "České Budějovice", "Hradec Králové", "Pardubice", "Zlín", "Karlovy Vary", "Ústí nad Labem", "Jihlava"];

      // Populate provinces for Czech Republic
      for (var i = 0; i < czechProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = czechProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Czech Republic
      for (var i = 0; i < czechCities.length; i++) {
        var option = document.createElement("option");
        option.text = czechCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Democratic Republic of the Congo") {
      // Add provinces and cities for Democratic Republic of the Congo
      var congoProvinces = ["Kinshasa", "Kasai", "Katanga", "North Kivu", "South Kivu", "Ituri", "Haut-Uele", "Tshopo", "Bas-Uele", "Tshuapa", "Equateur", "Mongala", "Nord-Ubangi", "Sud-Ubangi", "Maniema", "Tanganyika", "Haut-Lomami", "Haut-Uele", "Tshopo"];
      var congoCities = ["Kinshasa", "Lubumbashi", "Mbuji-Mayi", "Kisangani", "Bukavu", "Goma", "Kananga", "Likasi", "Kolwezi", "Tshikapa", "Matadi", "Mbandaka", "Beni", "Boma", "Uvira", "Isiro", "Bunia", "Kindu", "Kalemie", "Kamina"];

      // Populate provinces for Democratic Republic of the Congo
      for (var i = 0; i < congoProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = congoProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Democratic Republic of the Congo
      for (var i = 0; i < congoCities.length; i++) {
        var option = document.createElement("option");
        option.text = congoCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Denmark") {
      // Add provinces and cities for Denmark
      var denmarkProvinces = ["Capital Region", "Central Denmark Region", "North Denmark Region", "Region Zealand", "Region of Southern Denmark"];
      var denmarkCities = ["Copenhagen", "Aarhus", "Aalborg", "Odense", "Esbjerg", "Randers", "Kolding", "Horsens", "Vejle", "Roskilde"];

      // Populate provinces for Denmark
      for (var i = 0; i < denmarkProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = denmarkProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Denmark
      for (var i = 0; i < denmarkCities.length; i++) {
        var option = document.createElement("option");
        option.text = denmarkCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Djibouti") {
      // Add provinces and cities for Djibouti
      var djiboutiProvinces = ["Arta", "Dikhil", "Djibouti", "Obock", "Tadjourah"];
      var djiboutiCities = ["Djibouti City", "Ali Sabieh", "Dikhil", "Obock", "Tadjourah", "Arta", "Holhol"];

      // Populate provinces for Djibouti
      for (var i = 0; i < djiboutiProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = djiboutiProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Djibouti
      for (var i = 0; i < djiboutiCities.length; i++) {
        var option = document.createElement("option");
        option.text = djiboutiCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Dominica") {
      // Add provinces and cities for Dominica
      var dominicaProvinces = ["Saint Andrew", "Saint David", "Saint George", "Saint John", "Saint Joseph", "Saint Luke", "Saint Mark", "Saint Patrick"];
      var dominicaCities = ["Roseau", "Portsmouth", "Marigot", "Grand Fond", "Berekua", "Mahaut", "Saint Joseph", "Wesley"];

      // Populate provinces for Dominica
      for (var i = 0; i < dominicaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = dominicaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Dominica
      for (var i = 0; i < dominicaCities.length; i++) {
        var option = document.createElement("option");
        option.text = dominicaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Dominican Republic") {
      // Add provinces and cities for the Dominican Republic
      var dominicanRepublicProvinces = ["Azua", "Baoruco", "Barahona", "Dajabón", "Duarte", "Elías Piña", "El Seibo", "Espaillat", "Hato Mayor", "Independencia", "La Altagracia", "La Romana", "La Vega", "María Trinidad Sánchez", "Monseñor Nouel", "Monte Cristi", "Monte Plata", "Pedernales", "Peravia", "Puerto Plata", "Samaná", "San Cristóbal", "San José de Ocoa", "San Juan", "San Pedro de Macorís", "Sánchez Ramírez", "Santiago", "Santiago Rodríguez", "Santo Domingo", "Valverde"];
      var dominicanRepublicCities = ["Santo Domingo", "Santiago de los Caballeros", "Santo Domingo Este", "Santo Domingo Norte", "Santo Domingo Oeste", "La Romana", "San Pedro de Macorís", "San Francisco de Macorís", "San Cristóbal", "Puerto Plata", "La Vega", "San Juan de la Maguana", "Bonao", "Baní", "Moca", "Higüey", "Concepción de La Vega", "Salcedo", "Bávaro", "Cotuí", "Azua", "Nagua", "Hato Mayor", "Dajabón", "Monte Cristi", "Jimaní", "Sabaneta", "Neiba", "Santa Cruz de Barahona", "El Seibo", "Higüero"];
      
      // Populate provinces for the Dominican Republic
      for (var i = 0; i < dominicanRepublicProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = dominicanRepublicProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for the Dominican Republic
      for (var i = 0; i < dominicanRepublicCities.length; i++) {
        var option = document.createElement("option");
        option.text = dominicanRepublicCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "East Timor") {
      // Add provinces and cities for East Timor
      var eastTimorProvinces = ["Aileu", "Ainaro", "Baucau", "Bobonaro", "Cova Lima", "Dili", "Ermera", "Lautém", "Liquiçá", "Manatuto", "Manufahi", "Oecusse", "Viqueque"];
      var eastTimorCities = ["Dili", "Suai", "Baucau", "Ainaro", "Maliana", "Lospalos", "Viqueque", "Gleno", "Same", "Aileu", "Ainaro", "Bobonaro", "Oecusse"];
      
      // Populate provinces for East Timor
      for (var i = 0; i < eastTimorProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = eastTimorProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for East Timor
      for (var i = 0; i < eastTimorCities.length; i++) {
        var option = document.createElement("option");
        option.text = eastTimorCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Ecuador") {
      // Add provinces and cities for Ecuador
      var ecuadorProvinces = ["Azuay", "Bolívar", "Cañar", "Carchi", "Chimborazo", "Cotopaxi", "El Oro", "Esmeraldas", "Galápagos", "Guayas", "Imbabura", "Loja", "Los Ríos", "Manabí", "Morona Santiago", "Napo", "Orellana", "Pastaza", "Pichincha", "Santa Elena", "Santo Domingo de los Tsáchilas", "Sucumbíos", "Tungurahua", "Zamora-Chinchipe"];
      var ecuadorCities = ["Quito", "Guayaquil", "Cuenca", "Santo Domingo", "Machala", "Durán", "Manta", "Portoviejo", "Ambato", "Riobamba", "Quevedo", "Loja", "Ibarra", "Eloy Alfaro", "Esmeraldas", "Huaquillas", "Milagro", "Loja", "Tulcán", "Babahoyo", "Salinas", "Sangolquí", "Daule", "Azogues", "Esmeraldas"];
      
      // Populate provinces for Ecuador
      for (var i = 0; i < ecuadorProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = ecuadorProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Ecuador
      for (var i = 0; i < ecuadorCities.length; i++) {
        var option = document.createElement("option");
        option.text = ecuadorCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Egypt") {
      // Add provinces and cities for Egypt
      var egyptProvinces = ["Cairo", "Alexandria", "Giza", "Shubra El Kheima", "Port Said", "Suez", "Luxor", "Mansoura", "El-Mahalla El-Kubra", "Tanta", "Asyut", "Ismailia", "Fayoum", "Zagazig", "Aswan", "Damietta", "Damanhur", "Minya", "Beni Suef", "Hurghada", "Qena", "Sohag", "Shibin El Kom", "Banha", "Kafr El Sheikh"];
      var egyptCities = ["Cairo", "Alexandria", "Giza", "Shubra El Kheima", "Port Said", "Suez", "Luxor", "Mansoura", "El-Mahalla El-Kubra", "Tanta", "Asyut", "Ismailia", "Fayoum", "Zagazig", "Aswan", "Damietta", "Damanhur", "Minya", "Beni Suef", "Hurghada", "Qena", "Sohag", "Shibin El Kom", "Banha", "Kafr El Sheikh"];
      
      // Populate provinces for Egypt
      for (var i = 0; i < egyptProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = egyptProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Egypt
      for (var i = 0; i < egyptCities.length; i++) {
        var option = document.createElement("option");
        option.text = egyptCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "El Salvador") {
      // Add provinces and cities for El Salvador
      var elSalvadorProvinces = ["Ahuachapán", "Cabañas", "Chalatenango", "Cuscatlán", "La Libertad", "La Paz", "La Unión", "Morazán", "San Miguel", "San Salvador", "San Vicente", "Santa Ana", "Sonsonate", "Usulután"];
      var elSalvadorCities = ["San Salvador", "Santa Ana", "San Miguel", "Soyapango", "Usulután", "Apopa", "Mejicanos", "Santa Tecla", "Ilopango", "San Martin", "Sonsonate", "Cojutepeque", "Zacatecoluca", "San Vicente"];
      
      // Populate provinces for El Salvador
      for (var i = 0; i < elSalvadorProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = elSalvadorProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for El Salvador
      for (var i = 0; i < elSalvadorCities.length; i++) {
        var option = document.createElement("option");
        option.text = elSalvadorCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Equatorial Guinea") {
      // Add provinces and cities for Equatorial Guinea
      var equatorialGuineaProvinces = ["Annobón", "Bioko Norte", "Bioko Sur", "Centro Sur", "Kié-Ntem", "Litoral", "Wele-Nzas"];
      var equatorialGuineaCities = ["Malabo", "Bata", "Ebebiyin", "Aconibe", "Anisoc", "Luba", "Mbini"];
      
      // Populate provinces for Equatorial Guinea
      for (var i = 0; i < equatorialGuineaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = equatorialGuineaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Equatorial Guinea
      for (var i = 0; i < equatorialGuineaCities.length; i++) {
        var option = document.createElement("option");
        option.text = equatorialGuineaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Eritrea") {
      // Add provinces and cities for Eritrea
      var eritreaProvinces = ["Anseba", "Central", "Gash-Barka", "Northern Red Sea", "Southern Red Sea", "Southern", "Debub"];
      var eritreaCities = ["Asmara", "Keren", "Barentu", "Massawa", "Assab", "Mendefera", "Adi Keyh"];
      
      // Populate provinces for Eritrea
      for (var i = 0; i < eritreaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = eritreaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Eritrea
      for (var i = 0; i < eritreaCities.length; i++) {
        var option = document.createElement("option");
        option.text = eritreaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Estonia") {
      // Add provinces and cities for Estonia
      var estoniaProvinces = ["Harju", "Hiiu", "Ida-Viru", "Jõgeva", "Järva", "Lääne", "Lääne-Viru", "Põlva", "Pärnu", "Rapla", "Saare", "Tartu", "Valga", "Viljandi", "Võru"];
      var estoniaCities = ["Tallinn", "Tartu", "Narva", "Pärnu", "Kohtla-Järve", "Viljandi", "Rakvere", "Maardu", "Sillamäe", "Kuressaare", "Võru", "Valga", "Haapsalu", "Jõhvi", "Paide"];
      
      // Populate provinces for Estonia
      for (var i = 0; i < estoniaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = estoniaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Estonia
      for (var i = 0; i < estoniaCities.length; i++) {
        var option = document.createElement("option");
        option.text = estoniaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Eswatini") {
      // Add provinces and cities for Eswatini
      var eswatiniProvinces = ["Hhohho", "Lubombo", "Manzini", "Shiselweni"];
      var eswatiniCities = ["Mbabane", "Manzini", "Big Bend", "Malkerns", "Nhlangano", "Siteki", "Piggs Peak", "Lobamba", "Hluti", "Simunye"];
      
      // Populate provinces for Eswatini
      for (var i = 0; i < eswatiniProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = eswatiniProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Eswatini
      for (var i = 0; i < eswatiniCities.length; i++) {
        var option = document.createElement("option");
        option.text = eswatiniCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Ethiopia") {
      // Add provinces and cities for Ethiopia
      var ethiopiaProvinces = ["Addis Ababa", "Afar", "Amhara", "Benishangul-Gumuz", "Dire Dawa", "Gambela", "Harari", "Oromia", "Sidama", "Somali", "Southern Nations, Nationalities, and Peoples' Region (SNNPR)", "Tigray"];
      var ethiopiaCities = ["Addis Ababa", "Dire Dawa", "Mek'ele", "Adama", "Gondar", "Hawassa", "Bahir Dar", "Jimma", "Jijiga", "Dessie", "Harar", "Nekemte", "Sodo", "Arba Minch", "Woldiya", "Shashamane", "Adigrat"];
      
      // Populate provinces for Ethiopia
      for (var i = 0; i < ethiopiaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = ethiopiaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Ethiopia
      for (var i = 0; i < ethiopiaCities.length; i++) {
        var option = document.createElement("option");
        option.text = ethiopiaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Fiji") {
      // Add provinces and cities for Fiji
      var fijiProvinces = ["Central", "Eastern", "Northern", "Western"];
      var fijiCities = ["Suva", "Lautoka", "Nadi", "Labasa", "Ba", "Levuka", "Savusavu", "Nasinu"];
      
      // Populate provinces for Fiji
      for (var i = 0; i < fijiProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = fijiProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Fiji
      for (var i = 0; i < fijiCities.length; i++) {
        var option = document.createElement("option");
        option.text = fijiCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Finland") {
      // Add provinces and cities for Finland
      var finlandProvinces = ["Åland Islands", "Southern Finland", "Western Finland", "Eastern Finland", "Oulu", "Lapland"];
      var finlandCities = ["Helsinki", "Espoo", "Tampere", "Vantaa", "Turku", "Oulu", "Lahti", "Kuopio", "Jyväskylä", "Pori", "Lappeenranta", "Vaasa", "Kotka", "Joensuu", "Kouvola", "Mikkeli", "Seinäjoki", "Rovaniemi"];
      
      // Populate provinces for Finland
      for (var i = 0; i < finlandProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = finlandProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Finland
      for (var i = 0; i < finlandCities.length; i++) {
        var option = document.createElement("option");
        option.text = finlandCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "France") {
      // Add provinces and cities for France
      var franceProvinces = ["Île-de-France", "Auvergne-Rhône-Alpes", "Hauts-de-France", "Provence-Alpes-Côte d'Azur", "Occitanie", "Nouvelle-Aquitaine", "Grand Est", "Pays de la Loire", "Brittany", "Normandy", "Centre-Val de Loire", "Bourgogne-Franche-Comté", "Aquitaine", "Champagne-Ardenne", "Lorraine", "Picardy", "Nord-Pas-de-Calais", "Alsace"];
      var franceCities = ["Paris", "Marseille", "Lyon", "Toulouse", "Nice", "Nantes", "Strasbourg", "Montpellier", "Bordeaux", "Lille", "Rennes", "Reims", "Le Havre", "Saint-Étienne", "Toulon", "Grenoble", "Dijon", "Nîmes", "Angers"];
      
      // Populate provinces for France
      for (var i = 0; i < franceProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = franceProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for France
      for (var i = 0; i < franceCities.length; i++) {
        var option = document.createElement("option");
        option.text = franceCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Gabon") {
      // Add provinces and cities for Gabon
      var gabonProvinces = ["Estuaire", "Haut-Ogooué", "Moyen-Ogooué", "Ngounié", "Nyanga", "Ogooué-Ivindo", "Ogooué-Lolo", "Ogooué-Maritime", "Woleu-Ntem"];
      var gabonCities = ["Libreville", "Port-Gentil", "Franceville", "Oyem", "Moanda", "Mouila", "Lambaréné", "Tchibanga", "Koulamoutou"];
      
      // Populate provinces for Gabon
      for (var i = 0; i < gabonProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = gabonProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Gabon
      for (var i = 0; i < gabonCities.length; i++) {
        var option = document.createElement("option");
        option.text = gabonCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Gambia") {
      // Add provinces and cities for Gambia
      var gambiaProvinces = ["Banjul", "Central River", "Lower River", "North Bank", "Upper River", "Western"];
      var gambiaCities = ["Banjul", "Serekunda", "Brikama", "Bakau", "Farafenni", "Lamin", "Gunjur", "Basse Santa Su", "Kerewan"];
      
      // Populate provinces for Gambia
      for (var i = 0; i < gambiaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = gambiaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Gambia
      for (var i = 0; i < gambiaCities.length; i++) {
        var option = document.createElement("option");
        option.text = gambiaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Georgia") {
      // Add provinces and cities for Georgia
      var georgiaProvinces = ["Abkhazia", "Ajara", "Guria", "Imereti", "Kakheti", "Kvemo Kartli", "Mtskheta-Mtianeti", "Racha-Lechkhumi and Kvemo Svaneti", "Samegrelo-Zemo Svaneti", "Samtskhe-Javakheti", "Shida Kartli"];
      var georgiaCities = ["Tbilisi", "Kutaisi", "Batumi", "Rustavi", "Gori", "Zugdidi", "Poti", "Khashuri", "Telavi", "Akhaltsikhe"];
      
      // Populate provinces for Georgia
      for (var i = 0; i < georgiaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = georgiaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Georgia
      for (var i = 0; i < georgiaCities.length; i++) {
        var option = document.createElement("option");
        option.text = georgiaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Germany") {
      // Add provinces and cities for Germany
      var germanyProvinces = ["Baden-Württemberg", "Bavaria (Bayern)", "Berlin", "Brandenburg", "Bremen", "Hamburg", "Hesse (Hessen)", "Lower Saxony (Niedersachsen)", "Mecklenburg-Vorpommern", "North Rhine-Westphalia (Nordrhein-Westfalen)", "Rhineland-Palatinate (Rheinland-Pfalz)", "Saarland", "Saxony (Sachsen)", "Saxony-Anhalt (Sachsen-Anhalt)", "Schleswig-Holstein", "Thuringia (Thüringen)"];
      var germanyCities = ["Berlin", "Hamburg", "Munich (München)", "Cologne (Köln)", "Frankfurt", "Stuttgart", "Düsseldorf", "Dortmund", "Essen", "Leipzig", "Bremen", "Dresden", "Hanover (Hannover)", "Nuremberg (Nürnberg)", "Duisburg", "Bochum"];
      
      // Populate provinces for Germany
      for (var i = 0; i < germanyProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = germanyProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Germany
      for (var i = 0; i < germanyCities.length; i++) {
        var option = document.createElement("option");
        option.text = germanyCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Ghana") {
      // Add regions and cities for Ghana
      var ghanaRegions = ["Ashanti", "Brong-Ahafo", "Central", "Eastern", "Greater Accra", "Northern", "Upper East", "Upper West", "Volta", "Western"];
      var ghanaCities = ["Accra", "Kumasi", "Tamale", "Takoradi", "Sunyani", "Cape Coast", "Bolgatanga", "Ho", "Wa", "Koforidua"];
      
      // Populate regions for Ghana
      for (var i = 0; i < ghanaRegions.length; i++) {
        var option = document.createElement("option");
        option.text = ghanaRegions[i];
        provinceSelect.add(option);
      }

      // Populate cities for Ghana
      for (var i = 0; i < ghanaCities.length; i++) {
        var option = document.createElement("option");
        option.text = ghanaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Greece") {
      // Add regions and cities for Greece
      var greeceRegions = ["Attica", "Central Greece", "Central Macedonia", "Crete", "Eastern Macedonia and Thrace", "Epirus", "Ionian Islands", "North Aegean", "Peloponnese", "South Aegean", "Thessaly", "Western Greece", "Western Macedonia"];
      var greeceCities = ["Athens", "Thessaloniki", "Patras", "Heraklion", "Larissa", "Volos", "Ioannina", "Rhodes", "Chania", "Kavala", "Alexandroupoli", "Corinth", "Kalamata"];
      
      // Populate regions for Greece
      for (var i = 0; i < greeceRegions.length; i++) {
        var option = document.createElement("option");
        option.text = greeceRegions[i];
        provinceSelect.add(option);
      }

      // Populate cities for Greece
      for (var i = 0; i < greeceCities.length; i++) {
        var option = document.createElement("option");
        option.text = greeceCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Grenada") {
      // Add parishes and towns for Grenada
      var grenadaParishes = ["Saint George", "Saint Andrew", "Saint David", "Saint John", "Saint Mark"];
      var grenadaTowns = ["St. George's", "Grenville", "Hillsborough", "Victoria", "Sauteurs"];
      
      // Populate parishes for Grenada
      for (var i = 0; i < grenadaParishes.length; i++) {
        var option = document.createElement("option");
        option.text = grenadaParishes[i];
        provinceSelect.add(option);
      }

      // Populate towns for Grenada
      for (var i = 0; i < grenadaTowns.length; i++) {
        var option = document.createElement("option");
        option.text = grenadaTowns[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Guatemala") {
      // Add departments and cities for Guatemala
      var guatemalaDepartments = ["Guatemala", "Baja Verapaz", "Chimaltenango", "Chiquimula", "El Progreso", "Escuintla", "Guastatoya", "Huehuetenango", "Izabal", "Jalapa", "Jutiapa", "Petén", "Quetzaltenango", "Quiché", "Retalhuleu", "Sacatepéquez", "San Marcos", "Santa Rosa", "Sololá", "Suchitepéquez", "Totonicapán", "Zacapa"];
      var guatemalaCities = ["Guatemala City", "Antigua Guatemala", "Chichicastenango", "Escuintla", "Flores", "Huehuetenango", "Jalapa", "Jutiapa", "Livingston", "Mazatenango", "Puerto Barrios", "Quetzaltenango", "Retalhuleu", "San Marcos", "Santa Cruz del Quiché", "Sololá", "Totonicapán", "Zacapa"];
      
      // Populate departments for Guatemala
      for (var i = 0; i < guatemalaDepartments.length; i++) {
        var option = document.createElement("option");
        option.text = guatemalaDepartments[i];
        provinceSelect.add(option);
      }

      // Populate cities for Guatemala
      for (var i = 0; i < guatemalaCities.length; i++) {
        var option = document.createElement("option");
        option.text = guatemalaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Guinea") {
      // Add regions and cities for Guinea
      var guineaRegions = ["Boké", "Conakry", "Faranah", "Kankan", "Kindia", "Labé", "Mamou", "Nzérékoré"];
      var guineaCities = ["Conakry", "Boké", "Kindia", "Labé", "Kankan", "Mamou", "Nzérékoré", "Faranah"];

      // Populate regions for Guinea
      for (var i = 0; i < guineaRegions.length; i++) {
        var option = document.createElement("option");
        option.text = guineaRegions[i];
        provinceSelect.add(option);
      }

      // Populate cities for Guinea
      for (var i = 0; i < guineaCities.length; i++) {
        var option = document.createElement("option");
        option.text = guineaCities[i];
        citySelect.add(option);
      }
} else if (selectedCountry === "Guinea-Bissau") {
      // Add regions and cities for Guinea-Bissau
      var guineaBissauRegions = ["Bafatá", "Biombo", "Bissau", "Bolama", "Cacheu", "Gabú", "Oio", "Quinara", "Tombali"];
      var guineaBissauCities = ["Bissau", "Bafatá", "Bolama", "Cacheu", "Gabú", "Biombo", "Quinara", "Tombali"];

      // Populate regions for Guinea-Bissau
      for (var i = 0; i < guineaBissauRegions.length; i++) {
        var option = document.createElement("option");
        option.text = guineaBissauRegions[i];
        provinceSelect.add(option);
      }

      // Populate cities for Guinea-Bissau
      for (var i = 0; i < guineaBissauCities.length; i++) {
        var option = document.createElement("option");
        option.text = guineaBissauCities[i];
        citySelect.add(option);
      }
} else if (selectedCountry === "Guyana") {
      // Add regions and cities for Guyana
      var guyanaRegions = ["Barima-Waini", "Cuyuni-Mazaruni", "Demerara-Mahaica", "East Berbice-Corentyne", "Essequibo Islands-West Demerara", "Mahaica-Berbice", "Pomeroon-Supenaam", "Potaro-Siparuni", "Upper Demerara-Berbice", "Upper Takutu-Upper Essequibo"];
      var guyanaCities = ["Georgetown", "Linden", "New Amsterdam", "Bartica", "Anna Regina", "Corriverton", "Lethem", "Mabaruma", "Mahdia", "Vreed-en-Hoop"];

      // Populate regions for Guyana
      for (var i = 0; i < guyanaRegions.length; i++) {
        var option = document.createElement("option");
        option.text = guyanaRegions[i];
        provinceSelect.add(option);
      }

      // Populate cities for Guyana
      for (var i = 0; i < guyanaCities.length; i++) {
        var option = document.createElement("option");
        option.text = guyanaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Haiti") {
      // Add departments and cities for Haiti
      var haitiDepartments = ["Artibonite", "Centre", "Grand'Anse", "Nippes", "Nord", "Nord-Est", "Nord-Ouest", "Ouest", "Sud", "Sud-Est"];
      var haitiCities = ["Port-au-Prince", "Cap-Haïtien", "Carrefour", "Delmas", "Pétion-Ville", "Gonaïves", "Saint-Marc", "Les Cayes", "Jacmel", "Léogâne"];

      // Populate departments for Haiti
      for (var i = 0; i < haitiDepartments.length; i++) {
        var option = document.createElement("option");
        option.text = haitiDepartments[i];
        provinceSelect.add(option);
      }

      // Populate cities for Haiti
      for (var i = 0; i < haitiCities.length; i++) {
        var option = document.createElement("option");
        option.text = haitiCities[i];
        citySelect.add(option);
      }
} else if (selectedCountry === "Honduras") {
      // Add departments and cities for Honduras
      var hondurasDepartments = ["Atlántida", "Choluteca", "Colón", "Comayagua", "Copán", "Cortés", "El Paraíso", "Francisco Morazán", "Gracias a Dios", "Intibucá", "Islas de la Bahía", "La Paz", "Lempira", "Ocotepeque", "Olancho", "Santa Bárbara", "Valle", "Yoro"];
      var hondurasCities = ["Tegucigalpa", "San Pedro Sula", "Choloma", "La Ceiba", "El Progreso", "Ciudad Choluteca", "Comayagua", "Puerto Cortés", "La Lima", "Danlí"];

      // Populate departments for Honduras
      for (var i = 0; i < hondurasDepartments.length; i++) {
        var option = document.createElement("option");
        option.text = hondurasDepartments[i];
        provinceSelect.add(option);
      }

      // Populate cities for Honduras
      for (var i = 0; i < hondurasCities.length; i++) {
        var option = document.createElement("option");
        option.text = hondurasCities[i];
        citySelect.add(option);
      }
} else if (selectedCountry === "Hungary") {
      // Add counties and cities for Hungary
      var hungaryCounties = ["Budapest", "Baranya", "Bács-Kiskun", "Békés", "Borsod-Abaúj-Zemplén", "Csongrád-Csanád", "Fejér", "Győr-Moson-Sopron", "Hajdú-Bihar", "Heves", "Jász-Nagykun-Szolnok", "Komárom-Esztergom", "Nógrád", "Pest", "Somogy", "Szabolcs-Szatmár-Bereg", "Tolna", "Vas", "Veszprém", "Zala"];
      var hungaryCities = ["Budapest", "Debrecen", "Szeged", "Miskolc", "Pécs", "Győr", "Nyíregyháza", "Kecskemét", "Székesfehérvár", "Szombathely", "Érd", "Tatabánya", "Sopron", "Kaposvár", "Veszprém", "Békéscsaba", "Zalaegerszeg", "Eger", "Nagykanizsa", "Dunaújváros"];

      // Populate counties for Hungary
      for (var i = 0; i < hungaryCounties.length; i++) {
        var option = document.createElement("option");
        option.text = hungaryCounties[i];
        provinceSelect.add(option);
      }

      // Populate cities for Hungary
      for (var i = 0; i < hungaryCities.length; i++) {
        var option = document.createElement("option");
        option.text = hungaryCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Iceland") {
      // Add regions and cities for Iceland
      var icelandRegions = ["Capital Region", "Southern Peninsula", "Western Region", "Westfjords", "Northwestern Region", "Northeastern Region", "Eastern Region", "Southern Region"];
      var icelandCities = ["Reykjavik", "Kópavogur", "Hafnarfjörður", "Akureyri", "Reykjanesbær", "Ísafjörður", "Akranes", "Egilsstaðir", "Selfoss", "Vestmannaeyjar"];

      // Populate regions for Iceland
      for (var i = 0; i < icelandRegions.length; i++) {
        var option = document.createElement("option");
        option.text = icelandRegions[i];
        provinceSelect.add(option);
      }

      // Populate cities for Iceland
      for (var i = 0; i < icelandCities.length; i++) {
        var option = document.createElement("option");
        option.text = icelandCities[i];
        citySelect.add(option);
      }
} else if (selectedCountry === "India") {
      // Add states and cities for India
      var indiaStates = ["Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jharkhand", "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura", "Uttar Pradesh", "Uttarakhand", "West Bengal"];
      var indiaCities = ["Mumbai", "Delhi", "Bangalore", "Hyderabad", "Chennai", "Kolkata", "Pune", "Ahmedabad", "Jaipur", "Lucknow", "Kanpur", "Nagpur", "Indore", "Thane", "Bhopal", "Visakhapatnam", "Patna", "Vadodara", "Ghaziabad", "Ludhiana", "Agra", "Nashik", "Faridabad", "Meerut", "Rajkot", "Varanasi", "Srinagar"];

      // Populate states for India
      for (var i = 0; i < indiaStates.length; i++) {
        var option = document.createElement("option");
        option.text = indiaStates[i];
        provinceSelect.add(option);
      }

      // Populate cities for India
      for (var i = 0; i < indiaCities.length; i++) {
        var option = document.createElement("option");
        option.text = indiaCities[i];
        citySelect.add(option);
      }
} else if (selectedCountry === "Indonesia") {
      // Add provinces and cities for Indonesia
      var indonesiaProvinces = ["Aceh", "Bali", "Bangka Belitung", "Banten", "Bengkulu", "Central Java", "Central Kalimantan", "Central Sulawesi", "East Java", "East Kalimantan", "East Nusa Tenggara", "Gorontalo", "Jakarta", "Jambi", "Lampung", "Maluku", "North Kalimantan", "North Maluku", "North Sulawesi", "North Sumatra", "Papua", "Riau", "Riau Islands", "South Kalimantan", "South Sulawesi", "South Sumatra", "Southeast Sulawesi", "West Java", "West Kalimantan", "West Nusa Tenggara", "West Papua", "West Sulawesi", "West Sumatra", "Yogyakarta"];
      var indonesiaCities = ["Jakarta", "Surabaya", "Bandung", "Medan", "Semarang", "Makassar", "Bandar Lampung", "Padang", "Denpasar", "Pontianak", "Banjarmasin", "Manado", "Balikpapan", "Ambon", "Mataram", "Jayapura", "Palembang", "Pekanbaru", "Tanjung Pinang", "Gorontalo"];

      // Populate provinces for Indonesia
      for (var i = 0; i < indonesiaProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = indonesiaProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Indonesia
      for (var i = 0; i < indonesiaCities.length; i++) {
        var option = document.createElement("option");
        option.text = indonesiaCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Iran") {
      // Add provinces and cities for Iran
      var iranProvinces = ["Tehran", "Isfahan", "Fars", "Khorasan Razavi", "Khuzestan", "East Azerbaijan", "West Azerbaijan", "Kerman", "Mazandaran", "Gilan", "Lorestan", "Sistan and Baluchestan", "Kermanshah", "Markazi", "Hormozgan", "Ardabil", "Bushehr", "Kohgiluyeh and Boyer-Ahmad", "North Khorasan", "Razavi Khorasan", "Qazvin", "Qom", "Semnan", "South Khorasan", "Zanjan", "Chaharmahal and Bakhtiari", "Ilam", "Northwestern", "Southern", "Central", "Eastern", "Western"];
      var iranCities = ["Tehran", "Mashhad", "Isfahan", "Karaj", "Shiraz", "Tabriz", "Ahvaz", "Qom", "Kermanshah", "Rasht", "Kerman", "Hamadan", "Yazd", "Arak", "Ardabil", "Esfahan", "Zahedan", "Sari", "Bandar Abbas", "Kashan", "Qazvin", "Qeshm", "Khorramabad", "Urmia", "Zanjan", "Ilam", "Gorgan", "Saveh", "Birjand", "Bojnourd", "Semnan"];

      // Populate provinces for Iran
      for (var i = 0; i < iranProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = iranProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Iran
      for (var i = 0; i < iranCities.length; i++) {
        var option = document.createElement("option");
        option.text = iranCities[i];
        citySelect.add(option);
      }
} else if (selectedCountry === "Iraq") {
      // Add governorates and cities for Iraq
      var iraqGovernorates = ["Baghdad", "Basra", "Nineveh", "Anbar", "Dhi Qar", "Diyala", "Erbil", "Karbala", "Kirkuk", "Maysan", "Muthanna", "Najaf", "Saladin", "Sulaymaniyah", "Wasit", "Babil", "Dohuk", "Kut", "Nasiriyah", "Rutbah", "Sinjar", "Tikrit", "Mosul", "Fallujah"];
      var iraqCities = ["Baghdad", "Basra", "Mosul", "Erbil", "Kirkuk", "Najaf", "Karbala", "Nasiriyah", "Amara", "Ramadi", "Sulaymaniyah", "Fallujah", "Kut", "Hilla", "Dohuk", "Tikrit", "Diwaniyah", "Kufa", "Samawah", "Baqubah", "Sinjar", "Rutbah", "Rania", "Shingal", "Tuz Khurmatu"];

      // Populate governorates for Iraq
      for (var i = 0; i < iraqGovernorates.length; i++) {
        var option = document.createElement("option");
        option.text = iraqGovernorates[i];
        provinceSelect.add(option);
      }

      // Populate cities for Iraq
      for (var i = 0; i < iraqCities.length; i++) {
        var option = document.createElement("option");
        option.text = iraqCities[i];
        citySelect.add(option);
      }
} else if (selectedCountry === "Ireland") {
      // Add counties and cities for Ireland
      var irelandCounties = ["Carlow", "Cavan", "Clare", "Cork", "Donegal", "Dublin", "Galway", "Kerry", "Kildare", "Kilkenny", "Laois", "Leitrim", "Limerick", "Longford", "Louth", "Mayo", "Meath", "Monaghan", "Offaly", "Roscommon", "Sligo", "Tipperary", "Waterford", "Westmeath", "Wexford", "Wicklow"];
      var irelandCities = ["Dublin", "Cork", "Limerick", "Galway", "Waterford", "Drogheda", "Dundalk", "Sligo", "Bray", "Navan", "Ennis", "Kilkenny", "Tralee", "Carlow", "Naas", "Athlone", "Letterkenny", "Tullamore", "Killarney", "Arklow", "Carrick-on-Shannon", "Ballina", "Shannon", "Gorey", "Wexford", "Wicklow"];

      // Populate counties for Ireland
      for (var i = 0; i < irelandCounties.length; i++) {
        var option = document.createElement("option");
        option.text = irelandCounties[i];
        provinceSelect.add(option);
      }

      // Populate cities for Ireland
      for (var i = 0; i < irelandCities.length; i++) {
        var option = document.createElement("option");
        option.text = irelandCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Iran") {
      // Add provinces and cities for Iran
      var iranProvinces = ["Alborz", "Ardabil", "East Azerbaijan", "Isfahan", "Fars", "Gilan", "Golestan", "Hamadan",
        "Hormozgan", "Ilam", "Kerman", "Kermanshah", "Khuzestan", "Kohgiluyeh and Boyer-Ahmad", "Kurdistan", "Lorestan",
        "Markazi", "Mazandaran", "North Khorasan", "Razavi Khorasan", "Qazvin", "Qom", "Semnan", "Sistan and Baluchestan",
        "South Khorasan", "Tehran", "West Azerbaijan", "Yazd", "Zanjan", /* Add more provinces for Iran */];
      var iranCities = ["Tehran", "Mashhad", "Isfahan", "Karaj", "Shiraz", "Tabriz", "Qom", "Ahvaz", "Kermanshah",
        "Rasht", "Kerman", "Hamedan", "Yazd", "Arak", "Ardabil", "Bandar Abbas", "Esfahan", "Zahedan", "Rafsanjan",
        "Kashan", "Gorgan", "Ilam", "Sabzevar", "Qazvin", "Khorramabad", "Orumiyeh", "Malayer", "Qods", "Zanjan", /* Add more cities for Iran */];

      // Populate provinces for Iran
      for (var i = 0; i < iranProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = iranProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Iran
      for (var i = 0; i < iranCities.length; i++) {
        var option = document.createElement("option");
        option.text = iranCities[i];
        citySelect.add(option);
      }
} else if (selectedCountry === "Iraq") {
      // Add provinces and cities for Iraq
      var iraqProvinces = ["Al-Anbar", "Babil", "Baghdad", "Basra", "Dhi Qar", "Diyala", "Duhok", "Erbil",
        "Karbala", "Kirkuk", "Maysan", "Muthanna", "Najaf", "Nineveh", "Saladin", "Sulaymaniyah", "Wasit", /* Add more provinces for Iraq */];
      var iraqCities = ["Baghdad", "Basra", "Mosul", "Erbil", "Kirkuk", "Najaf", "Karbala", "Ramadi", "Sulaymaniyah",
        "Amara", "Nasiriyah", "Hilla", "Kut", "Fallujah", "Diyala", "Dohuk", "Tikrit", "Samawah", "Kufa", /* Add more cities for Iraq */];

      // Populate provinces for Iraq
      for (var i = 0; i < iraqProvinces.length; i++) {
        var option = document.createElement("option");
        option.text = iraqProvinces[i];
        provinceSelect.add(option);
      }

      // Populate cities for Iraq
      for (var i = 0; i < iraqCities.length; i++) {
        var option = document.createElement("option");
        option.text = iraqCities[i];
        citySelect.add(option);
      }
} else if (selectedCountry === "Ireland") {
      // Add counties and cities for Ireland
      var irelandCounties = ["Carlow", "Cavan", "Clare", "Cork", "Donegal", "Dublin", "Galway", "Kerry",
        "Kildare", "Kilkenny", "Laois", "Leitrim", "Limerick", "Longford", "Louth", "Mayo", "Meath", "Monaghan",
        "Offaly", "Roscommon", "Sligo", "Tipperary", "Waterford", "Westmeath", "Wexford", "Wicklow", /* Add more counties for Ireland */];
      var irelandCities = ["Dublin", "Cork", "Galway", "Limerick", "Waterford", "Drogheda", "Dundalk", "Wexford",
        "Letterkenny", "Sligo", "Clonmel", "Carrick-on-Shannon", "Tullamore", "Navan", "Ennis", "Kilkenny", "Tralee",
        "Carlow", "Athlone", "Ballina", "Shannon", "Arklow", "Cobh", "Birr", "Gorey", "Tramore", /* Add more cities for Ireland */];

      // Populate counties for Ireland
      for (var i = 0; i < irelandCounties.length; i++) {
        var option = document.createElement("option");
        option.text = irelandCounties[i];
        provinceSelect.add(option);
      }

      // Populate cities for Ireland
      for (var i = 0; i < irelandCities.length; i++) {
        var option = document.createElement("option");
        option.text = irelandCities[i];
        citySelect.add(option);
      }
    } else if (selectedCountry === "Israel") {
  // Add districts and cities for Israel
  var israelDistricts = ["Central", "Haifa", "Jerusalem", "Northern", "Southern", "Tel Aviv", /* Add more districts for Israel */];
  var israelCities = ["Jerusalem", "Tel Aviv", "Haifa", "Rishon LeZion", "Petah Tikva", "Ashdod", "Netanya",
    "Beer Sheva", "Holon", "Bnei Brak", "Ramat Gan", "Herzliya", "Kfar Saba", "Nazareth", "Eilat", /* Add more cities for Israel */];

  // Populate districts for Israel
  for (var i = 0; i < israelDistricts.length; i++) {
    var option = document.createElement("option");
    option.text = israelDistricts[i];
    provinceSelect.add(option);
  }

  // Populate cities for Israel
  for (var i = 0; i < israelCities.length; i++) {
    var option = document.createElement("option");
    option.text = israelCities[i];
    citySelect.add(option);
  }

    } else if (selectedCountry === "Jamaica") {
  // Add provinces and cities for Jamaica
  var jamaicaParishes = ["Clarendon", "Hanover", "Kingston", "Manchester", "Portland", "Saint Andrew", "Saint Ann", "Saint Catherine", "Saint Elizabeth", "Saint James", "Saint Mary", "Saint Thomas", "Trelawny", "Westmoreland", /* Add more parishes for Jamaica */];
  var jamaicaCities = ["Kingston", "Montego Bay", "Spanish Town", "Portmore", "Mandeville", "Ocho Rios", "May Pen", "Port Antonio", "Savanna-la-Mar", /* Add more cities for Jamaica */];

  // Populate provinces for Jamaica
  for (var i = 0; i < jamaicaParishes.length; i++) {
    var option = document.createElement("option");
    option.text = jamaicaParishes[i];
    provinceSelect.add(option);
  }

  // Populate cities for Jamaica
  for (var i = 0; i < jamaicaCities.length; i++) {
    var option = document.createElement("option");
    option.text = jamaicaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Japan") {
  // Add prefectures and cities for Japan
  var japanPrefectures = ["Hokkaido", "Aomori", "Iwate", "Miyagi", "Akita", "Yamagata", "Fukushima", "Ibaraki", "Tochigi", "Gunma", "Saitama", "Chiba", "Tokyo", "Kanagawa", "Niigata", "Toyama", "Ishikawa", "Fukui", "Yamanashi", "Nagano", "Gifu", "Shizuoka", "Aichi", "Mie", "Shiga", "Kyoto", "Osaka", "Hyogo", "Nara", "Wakayama", "Tottori", "Shimane", "Okayama", "Hiroshima", "Yamaguchi", "Tokushima", "Kagawa", "Ehime", "Kochi", "Fukuoka", "Saga", "Nagasaki", "Kumamoto", "Oita", "Miyazaki", "Kagoshima", "Okinawa", /* Add more prefectures for Japan */];
  var japanCities = ["Tokyo", "Yokohama", "Osaka", "Nagoya", "Sapporo", "Fukuoka", "Kobe", "Kyoto", "Saitama", "Kawasaki", "Saitama", "Hiroshima", "Sendai", "Chiba", "Kitakyushu", "Nagasaki", /* Add more cities for Japan */];

  // Populate prefectures for Japan
  for (var i = 0; i < japanPrefectures.length; i++) {
    var option = document.createElement("option");
    option.text = japanPrefectures[i];
    provinceSelect.add(option);
  }

  // Populate cities for Japan
  for (var i = 0; i < japanCities.length; i++) {
    var option = document.createElement("option");
    option.text = japanCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Jordan") {
  // Add governorates and cities for Jordan
  var jordanGovernorates = ["Amman", "Zarqa", "Irbid", "Ajloun", "Jerash", "Mafraq", "Balqa", "Madaba", "Karak", "Tafilah", "Ma'an", "Aqaba", /* Add more governorates for Jordan */];
  var jordanCities = ["Amman", "Zarqa", "Irbid", "Ajloun", "Jerash", "Mafraq", "Balqa", "Madaba", "Karak", "Tafilah", "Ma'an", "Aqaba", /* Add more cities for Jordan */];

  // Populate governorates for Jordan
  for (var i = 0; i < jordanGovernorates.length; i++) {
    var option = document.createElement("option");
    option.text = jordanGovernorates[i];
    provinceSelect.add(option);
  }

  // Populate cities for Jordan
  for (var i = 0; i < jordanCities.length; i++) {
    var option = document.createElement("option");
    option.text = jordanCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Kazakhstan") {
  // Add provinces and cities for Kazakhstan
  var kazakhstanProvinces = ["Almaty", "Aktobe", "Atyrau", "East Kazakhstan", "Karaganda", "Kostanay", "Kyzylorda", "Mangystau", "North Kazakhstan", "Nur-Sultan", "Pavlodar", "Turkestan", /* Add more provinces for Kazakhstan */];
  var kazakhstanCities = ["Almaty", "Nur-Sultan", "Shymkent", "Karaganda", "Aktobe", "Taraz", "Pavlodar", "Ust-Kamenogorsk", "Semey", "Aktau", "Kostanay", "Petropavl", "Oral", "Temirtau", "Atyrau", /* Add more cities for Kazakhstan */];

  // Populate provinces for Kazakhstan
  for (var i = 0; i < kazakhstanProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = kazakhstanProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Kazakhstan
  for (var i = 0; i < kazakhstanCities.length; i++) {
    var option = document.createElement("option");
    option.text = kazakhstanCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Kenya") {
  // Add provinces and cities for Kenya
  var kenyaProvinces = ["Nairobi", "Central", "Coast", "Eastern", "North Eastern", "Nyanza", "Rift Valley", "Western", /* Add more provinces for Kenya */];
  var kenyaCities = ["Nairobi", "Mombasa", "Kisumu", "Nakuru", "Eldoret", "Thika", "Malindi", "Kitale", "Garissa", /* Add more cities for Kenya */];

  // Populate provinces for Kenya
  for (var i = 0; i < kenyaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = kenyaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Kenya
  for (var i = 0; i < kenyaCities.length; i++) {
    var option = document.createElement("option");
    option.text = kenyaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Kiribati") {
  // Add provinces and cities for Kiribati
  var kiribatiProvinces = ["Gilbert Islands", "Phoenix Islands", "Line Islands", /* Add more provinces for Kiribati */];
  var kiribatiCities = ["Tarawa", "Kiritimati", "Betio", "Bairiki", "Butaritari", "Eita", "Tabwakea", /* Add more cities for Kiribati */];

  // Populate provinces for Kiribati
  for (var i = 0; i < kiribatiProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = kiribatiProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Kiribati
  for (var i = 0; i < kiribatiCities.length; i++) {
    var option = document.createElement("option");
    option.text = kiribatiCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Kosovo") {
  // Add provinces and cities for Kosovo
  var kosovoProvinces = ["District of Pristina", "District of Mitrovica", "District of Peja", "District of Gjilan", "District of Prizren", "District of Ferizaj", /* Add more provinces for Kosovo */];
  var kosovoCities = ["Pristina", "Mitrovica", "Peja", "Gjilan", "Prizren", "Ferizaj", /* Add more cities for Kosovo */];

  // Populate provinces for Kosovo
  for (var i = 0; i < kosovoProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = kosovoProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Kosovo
  for (var i = 0; i < kosovoCities.length; i++) {
    var option = document.createElement("option");
    option.text = kosovoCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Kuwait") {
  // Add provinces and cities for Kuwait
  var kuwaitProvinces = ["Al Asimah Governorate", "Hawalli Governorate", "Farwaniya Governorate", "Mubarak Al-Kabeer Governorate", "Ahmadi Governorate", "Jahra Governorate", /* Add more provinces for Kuwait */];
  var kuwaitCities = ["Kuwait City", "Hawalli", "Farwaniya", "Fahaheel", "Ahmadi", "Jahra", /* Add more cities for Kuwait */];

  // Populate provinces for Kuwait
  for (var i = 0; i < kuwaitProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = kuwaitProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Kuwait
  for (var i = 0; i < kuwaitCities.length; i++) {
    var option = document.createElement("option");
    option.text = kuwaitCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Kyrgyzstan") {
  // Add provinces and cities for Kyrgyzstan
  var kyrgyzstanProvinces = ["Bishkek City", "Chuy Province", "Issyk-Kul Province", "Jalal-Abad Province", "Naryn Province", "Osh Province", "Talas Province", "Batken Province", /* Add more provinces for Kyrgyzstan */];
  var kyrgyzstanCities = ["Bishkek", "Osh", "Jalal-Abad", "Karakol", "Tokmok", "Kyzyl-Kiya", "Talas", "Batken", /* Add more cities for Kyrgyzstan */];

  // Populate provinces for Kyrgyzstan
  for (var i = 0; i < kyrgyzstanProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = kyrgyzstanProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Kyrgyzstan
  for (var i = 0; i < kyrgyzstanCities.length; i++) {
    var option = document.createElement("option");
    option.text = kyrgyzstanCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Laos") {
  // Add provinces and cities for Laos
  var laosProvinces = ["Attapeu", "Bokeo", "Bolikhamsai", "Champasak", "Houaphanh", "Khammouane", "Luang Namtha", "Luang Prabang", "Oudomxay", "Phongsaly", "Salavan", "Savannakhet", "Vientiane Capital", "Vientiane Province", "Xaisomboun", "Xayabouly", "Xieng Khouang", /* Add more provinces for Laos */];
  var laosCities = ["Vientiane", "Luang Prabang", "Pakse", "Savannakhet", "Thakhek", "Xam Neua", /* Add more cities for Laos */];

  // Populate provinces for Laos
  for (var i = 0; i < laosProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = laosProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Laos
  for (var i = 0; i < laosCities.length; i++) {
    var option = document.createElement("option");
    option.text = laosCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Latvia") {
  // Add provinces and cities for Latvia
  var latviaProvinces = ["Kurzeme", "Latgale", "Riga", "Vidzeme", "Zemgale", /* Add more provinces for Latvia */];
  var latviaCities = ["Riga", "Daugavpils", "Liepaja", "Jelgava", "Jurmala", "Ventspils", /* Add more cities for Latvia */];

  // Populate provinces for Latvia
  for (var i = 0; latviaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = latviaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Latvia
  for (var i = 0; i < latviaCities.length; i++) {
    var option = document.createElement("option");
    option.text = latviaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Lebanon") {
  // Add provinces and cities for Lebanon
  var lebanonProvinces = ["Beirut", "Mount Lebanon", "North Governorate", "South Governorate", "Nabatieh Governorate", "Bekaa Governorate", /* Add more provinces for Lebanon */];
  var lebanonCities = ["Beirut", "Tripoli", "Sidon", "Tyre", "Byblos", "Baalbek", /* Add more cities for Lebanon */];

  // Populate provinces for Lebanon
  for (var i = 0; i < lebanonProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = lebanonProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Lebanon
  for (var i = 0; i < lebanonCities.length; i++) {
    var option = document.createElement("option");
    option.text = lebanonCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Lesotho") {
  // Add provinces and cities for Lesotho
  var lesothoProvinces = ["Berea", "Butha-Buthe", "Leribe", "Mafeteng", "Maseru", "Mohale's Hoek", "Mokhotlong", "Qacha's Nek", "Quthing", "Thaba-Tseka", /* Add more provinces for Lesotho */];
  var lesothoCities = ["Maseru", "Teyateyaneng", "Mafeteng", "Hlotse", "Mohale's Hoek", "Qacha's Nek", /* Add more cities for Lesotho */];

  // Populate provinces for Lesotho
  for (var i = 0; i < lesothoProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = lesothoProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Lesotho
  for (var i = 0; i < lesothoCities.length; i++) {
    var option = document.createElement("option");
    option.text = lesothoCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Liberia") {
  // Add provinces and cities for Liberia
  var liberiaProvinces = ["Bomi", "Bong", "Gbarpolu", "Grand Bassa", "Grand Cape Mount", "Grand Gedeh", "Grand Kru", "Lofa", "Margibi", "Maryland", "Montserrado", "Nimba", "River Cess", "River Gee", "Sinoe", /* Add more provinces for Liberia */];
  var liberiaCities = ["Monrovia", "Gbarnga", "Buchanan", "Ganta", "Zwedru", /* Add more cities for Liberia */];

  // Populate provinces for Liberia
  for (var i = 0; i < liberiaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = liberiaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Liberia
  for (var i = 0; i < liberiaCities.length; i++) {
    var option = document.createElement("option");
    option.text = liberiaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Libya") {
  // Add provinces and cities for Libya
  var libyaProvinces = ["Tripolitania", "Cyrenaica", "Fezzan", /* Add more provinces for Libya */];
  var libyaCities = ["Tripoli", "Benghazi", "Misrata", "Sirte", "Sabha", /* Add more cities for Libya */];

  // Populate provinces for Libya
  for (var i = 0; i < libyaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = libyaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Libya
  for (var i = 0; i < libyaCities.length; i++) {
    var option = document.createElement("option");
    option.text = libyaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Liechtenstein") {
  // Add provinces and cities for Liechtenstein
  var liechtensteinProvinces = ["Balzers", "Eschen", "Gamprin", "Mauren", "Planken", "Ruggell", "Schaan", "Schellenberg", "Triesen", "Triesenberg", "Vaduz", /* Add more provinces for Liechtenstein */];
  var liechtensteinCities = ["Vaduz", "Schaan", "Triesen", "Balzers", "Eschen", /* Add more cities for Liechtenstein */];

  // Populate provinces for Liechtenstein
  for (var i = 0; i < liechtensteinProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = liechtensteinProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Liechtenstein
  for (var i = 0; i < liechtensteinCities.length; i++) {
    var option = document.createElement("option");
    option.text = liechtensteinCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Lithuania") {
  // Add provinces and cities for Lithuania
  var lithuaniaProvinces = ["Alytus County", "Kaunas County", "Klaipėda County", "Marijampolė County", "Panevėžys County", "Šiauliai County", "Tauragė County", "Telšiai County", "Utena County", "Vilnius County", /* Add more provinces for Lithuania */];
  var lithuaniaCities = ["Vilnius", "Kaunas", "Klaipėda", "Šiauliai", "Panevėžys", /* Add more cities for Lithuania */];

  // Populate provinces for Lithuania
  for (var i = 0; i < lithuaniaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = lithuaniaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Lithuania
  for (var i = 0; i < lithuaniaCities.length; i++) {
    var option = document.createElement("option");
    option.text = lithuaniaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Luxembourg") {
  // Add provinces and cities for Luxembourg
  var luxembourgProvinces = ["Diekirch", "Grevenmacher", "Luxembourg", /* Add more provinces for Luxembourg */];
  var luxembourgCities = ["Luxembourg City", "Esch-sur-Alzette", "Differdange", "Dudelange", "Ettelbruck", /* Add more cities for Luxembourg */];

  // Populate provinces for Luxembourg
  for (var i = 0; i < luxembourgProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = luxembourgProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Luxembourg
  for (var i = 0; i < luxembourgCities.length; i++) {
    var option = document.createElement("option");
    option.text = luxembourgCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Madagascar") {
  // Add provinces and cities for Madagascar
  var madagascarProvinces = ["Antananarivo", "Antsiranana", "Fianarantsoa", "Mahajanga", "Toamasina", "Toliara", /* Add more provinces for Madagascar */];
  var madagascarCities = ["Antananarivo", "Antsirabe", "Fianarantsoa", "Mahajanga", "Toamasina", "Toliara", /* Add more cities for Madagascar */];

  // Populate provinces for Madagascar
  for (var i = 0; i < madagascarProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = madagascarProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Madagascar
  for (var i = 0; i < madagascarCities.length; i++) {
    var option = document.createElement("option");
    option.text = madagascarCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Malawi") {
  // Add provinces and cities for Malawi
  var malawiProvinces = ["Central Region", "Northern Region", "Southern Region", /* Add more provinces for Malawi */];
  var malawiCities = ["Lilongwe", "Blantyre", "Mzuzu", /* Add more cities for Malawi */];

  // Populate provinces for Malawi
  for (var i = 0; i < malawiProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = malawiProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Malawi
  for (var i = 0; i < malawiCities.length; i++) {
    var option = document.createElement("option");
    option.text = malawiCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Malaysia") {
  // Add provinces and cities for Malaysia
  var malaysiaProvinces = ["Johor", "Kedah", "Kelantan", "Kuala Lumpur", "Labuan", "Melaka", "Negeri Sembilan", "Pahang", "Perak", "Perlis", "Penang", "Sabah", "Sarawak", "Selangor", "Terengganu", /* Add more provinces for Malaysia */];
  var malaysiaCities = ["Kuala Lumpur", "George Town", "Ipoh", "Johor Bahru", "Kuching", "Kota Kinabalu", "Shah Alam", "Malacca City", "Alor Setar", "Kuantan", /* Add more cities for Malaysia */];

  // Populate provinces for Malaysia
  for (var i = 0; i < malaysiaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = malaysiaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Malaysia
  for (var i = 0; i < malaysiaCities.length; i++) {
    var option = document.createElement("option");
    option.text = malaysiaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Maldives") {
  // Add provinces and cities for Maldives
  var maldivesProvinces = ["Addu Atoll", "Fuvahmulah", "Malé Atoll", /* Add more provinces for Maldives */];
  var maldivesCities = ["Malé", "Addu City", "Fuvahmulah City", /* Add more cities for Maldives */];

  // Populate provinces for Maldives
  for (var i = 0; i < maldivesProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = maldivesProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Maldives
  for (var i = 0; i < maldivesCities.length; i++) {
    var option = document.createElement("option");
    option.text = maldivesCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Mali") {
  // Add provinces and cities for Mali
  var maliProvinces = ["Bamako", "Gao", "Kayes", "Kidal", "Koulikoro", "Mopti", "Ségou", "Sikasso", "Tombouctou", /* Add more provinces for Mali */];
  var maliCities = ["Bamako", "Sikasso", "Mopti", "Segou", "Kayes", /* Add more cities for Mali */];

  // Populate provinces for Mali
  for (var i = 0; i < maliProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = maliProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Mali
  for (var i = 0; i < maliCities.length; i++) {
    var option = document.createElement("option");
    option.text = maliCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Malta") {
  // Add provinces and cities for Malta
  var maltaProvinces = ["Gozo", "Malta", /* Add more provinces for Malta */];
  var maltaCities = ["Valletta", "Mdina", "Victoria", /* Add more cities for Malta */];

  // Populate provinces for Malta
  for (var i = 0; i < maltaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = maltaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Malta
  for (var i = 0; i < maltaCities.length; i++) {
    var option = document.createElement("option");
    option.text = maltaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Marshall Islands") {
  // Add provinces and cities for Marshall Islands
  var marshallIslandsProvinces = ["Majuro Atoll", "Kwajalein Atoll", "Ailinglaplap Atoll", "Kosrae Atoll", "Maloelap Atoll", "Wotje Atoll", "Ailuk Atoll", "Jaluit Atoll", "Namorik Atoll", "Ebon Atoll", /* Add more provinces for Marshall Islands */];
  var marshallIslandsCities = ["Majuro", "Kwajalein", "Arno", "Jabor", "Wotje", /* Add more cities for Marshall Islands */];

  // Populate provinces for Marshall Islands
  for (var i = 0; i < marshallIslandsProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = marshallIslandsProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Marshall Islands
  for (var i = 0; i < marshallIslandsCities.length; i++) {
    var option = document.createElement("option");
    option.text = marshallIslandsCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Mauritania") {
  // Add provinces and cities for Mauritania
  var mauritaniaProvinces = ["Nouakchott", "Hodh Ech Chargui", "Hodh El Gharbi", "Assaba", "Gorgol", "Brakna", "Trarza", "Adrar", "Dakhlet Nouadhibou", "Tagant", /* Add more provinces for Mauritania */];
  var mauritaniaCities = ["Nouakchott", "Nouadhibou", "Néma", "Kaédi", "Rosso", /* Add more cities for Mauritania */];

  // Populate provinces for Mauritania
  for (var i = 0; i < mauritaniaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = mauritaniaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Mauritania
  for (var i = 0; i < mauritaniaCities.length; i++) {
    var option = document.createElement("option");
    option.text = mauritaniaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Mauritius") {
  // Add provinces and cities for Mauritius
  var mauritiusProvinces = ["Port Louis", "Pamplemousses", "Rivière du Rempart", "Flacq", "Grand Port", "Savanne", "Plaines Wilhems", "Moka", /* Add more provinces for Mauritius */];
  var mauritiusCities = ["Port Louis", "Beau Bassin-Rose Hill", "Vacoas-Phoenix", "Curepipe", "Quatre Bornes", /* Add more cities for Mauritius */];

  // Populate provinces for Mauritius
  for (var i = 0; i < mauritiusProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = mauritiusProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Mauritius
  for (var i = 0; i < mauritiusCities.length; i++) {
    var option = document.createElement("option");
    option.text = mauritiusCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Mexico") {
  // Add provinces and cities for Mexico
  var mexicoProvinces = ["Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas", "Chihuahua", "Coahuila", "Colima", "Durango", "Guanajuato", "Guerrero", "Hidalgo", "Jalisco", "Mexico City", "Mexico State", "Michoacán", "Morelos", "Nayarit", "Nuevo León", "Oaxaca", "Puebla", "Querétaro", "Quintana Roo", "San Luis Potosí", "Sinaloa", "Sonora", "Tabasco", "Tamaulipas", "Tlaxcala", "Veracruz", "Yucatán", "Zacatecas", /* Add more provinces for Mexico */];
  var mexicoCities = ["Mexico City", "Guadalajara", "Monterrey", "Puebla", "Tijuana", /* Add more cities for Mexico */];

  // Populate provinces for Mexico
  for (var i = 0; i < mexicoProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = mexicoProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Mexico
  for (var i = 0; i < mexicoCities.length; i++) {
    var option = document.createElement("option");
    option.text = mexicoCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Micronesia") {
  // Add states and cities for Micronesia
  var micronesiaStates = ["Chuuk", "Kosrae", "Pohnpei", "Yap", /* Add more states for Micronesia */];
  var micronesiaCities = ["Weno", "Lelu", "Palikir", "Tofol", /* Add more cities for Micronesia */];

  // Populate states for Micronesia
  for (var i = 0; i < micronesiaStates.length; i++) {
    var option = document.createElement("option");
    option.text = micronesiaStates[i];
    provinceSelect.add(option);
  }

  // Populate cities for Micronesia
  for (var i = 0; i < micronesiaCities.length; i++) {
    var option = document.createElement("option");
    option.text = micronesiaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Moldova") {
  // Add regions and cities for Moldova
  var moldovaRegions = ["Bălți", "Cahul", "Chișinău", "Edineț", "Găgăuzia", "Orhei", "Soroca", "Ștefan Vodă", "Taraclia", "Tighina", "Ungheni", /* Add more regions for Moldova */];
  var moldovaCities = ["Chișinău", "Bălți", "Tiraspol", "Bender", "Cahul", /* Add more cities for Moldova */];

  // Populate regions for Moldova
  for (var i = 0; i < moldovaRegions.length; i++) {
    var option = document.createElement("option");
    option.text = moldovaRegions[i];
    provinceSelect.add(option);
  }

  // Populate cities for Moldova
  for (var i = 0; i < moldovaCities.length; i++) {
    var option = document.createElement("option");
    option.text = moldovaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Monaco") {
  // Add provinces and cities for Monaco
  var monacoProvinces = ["Fontvieille", "La Condamine", "Monaco-Ville", "Monte-Carlo", /* Add more provinces for Monaco */];
  var monacoCities = ["Monte-Carlo", "Monaco-Ville", "Fontvieille", "La Condamine", /* Add more cities for Monaco */];

  // Populate provinces for Monaco
  for (var i = 0; i < monacoProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = monacoProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Monaco
  for (var i = 0; i < monacoCities.length; i++) {
    var option = document.createElement("option");
    option.text = monacoCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Mongolia") {
  // Add provinces and cities for Mongolia
  var mongoliaProvinces = ["Arkhangai", "Bayan-Ölgii", "Bayankhongor", "Bulgan", "Darkhan-Uul", "Dornod", "Dornogovi", "Dundgovi", "Govi-Altai", "Govi-Sumber", "Khentii", "Khovd", "Khövsgöl", "Ömnögovi", "Orkhon", "Övörkhangai", "Selenge", "Sükhbaatar", "Töv", "Ulaanbaatar", "Uvs", "Zavkhan", /* Add more provinces for Mongolia */];
  var mongoliaCities = ["Ulaanbaatar", "Darkhan", "Erdenet", "Choibalsan", "Khovd", /* Add more cities for Mongolia */];

  // Populate provinces for Mongolia
  for (var i = 0; i < mongoliaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = mongoliaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Mongolia
  for (var i = 0; i < mongoliaCities.length; i++) {
    var option = document.createElement("option");
    option.text = mongoliaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Montenegro") {
  // Add provinces and cities for Montenegro
  var montenegroProvinces = ["Andrijevica", "Bar", "Berane", "Bijelo Polje", "Budva", "Cetinje", "Danilovgrad", "Gusinje", "Herceg Novi", "Kolašin", "Kotor", "Mojkovac", "Nikšić", "Plav", "Pljevlja", "Plužine", "Podgorica", "Rožaje", "Šavnik", "Tivat", "Ulcinj", "Žabljak", /* Add more provinces for Montenegro */];
  var montenegroCities = ["Podgorica", "Nikšić", "Herceg Novi", "Budva", "Bar", /* Add more cities for Montenegro */];

  // Populate provinces for Montenegro
  for (var i = 0; i < montenegroProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = montenegroProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Montenegro
  for (var i = 0; i < montenegroCities.length; i++) {
    var option = document.createElement("option");
    option.text = montenegroCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Morocco") {
  // Add provinces and cities for Morocco
  var moroccoProvinces = ["Al Hoceïma", "Béni Mellal", "Casablanca", "Dakhla-Oued Ed-Dahab", "Draâ-Tafilalet", "Fès-Meknès", "Guelmim-Oued Noun", "Laâyoune-Sakia El Hamra", "Marrakesh-Safi", "Oriental", "Rabat-Salé-Kénitra", "Souss-Massa", "Tanger-Tetouan-Al Hoceima", /* Add more provinces for Morocco */];
  var moroccoCities = ["Casablanca", "Rabat", "Fès", "Marrakesh", "Tangier", "Agadir", "Meknès", "Oujda", "Kenitra", "Tétouan", "Laâyoune", /* Add more cities for Morocco */];

  // Populate provinces for Morocco
  for (var i = 0; i < moroccoProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = moroccoProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Morocco
  for (var i = 0; i < moroccoCities.length; i++) {
    var option = document.createElement("option");
    option.text = moroccoCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Mozambique") {
  // Add provinces and cities for Mozambique
  var mozambiqueProvinces = ["Cabo Delgado", "Gaza", "Inhambane", "Manica", "Maputo", "Nampula", "Niassa", "Sofala", "Tete", "Zambezia", /* Add more provinces for Mozambique */];
  var mozambiqueCities = ["Maputo", "Matola", "Beira", "Nampula", "Chimoio", "Nacala", "Quelimane", "Tete", /* Add more cities for Mozambique */];

  // Populate provinces for Mozambique
  for (var i = 0; i < mozambiqueProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = mozambiqueProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Mozambique
  for (var i = 0; i < mozambiqueCities.length; i++) {
    var option = document.createElement("option");
    option.text = mozambiqueCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Myanmar") {
  // Add provinces and cities for Myanmar
  var myanmarProvinces = ["Ayeyarwady", "Bago", "Chin", "Kachin", "Kayah", "Kayin", "Magway", "Mandalay", "Mon", "Rakhine", "Sagaing", "Shan", "Tanintharyi", "Yangon", /* Add more provinces for Myanmar */];
  var myanmarCities = ["Yangon", "Mandalay", "Naypyidaw", "Bago", "Hpa-An", "Taunggyi", "Magway", "Mawlamyine", /* Add more cities for Myanmar */];

  // Populate provinces for Myanmar
  for (var i = 0; i < myanmarProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = myanmarProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Myanmar
  for (var i = 0; i < myanmarCities.length; i++) {
    var option = document.createElement("option");
    option.text = myanmarCities[i];
    citySelect.add(option);
      }
      
    } else if (selectedCountry === "Namibia") {
  // Add provinces and cities for Namibia
  var namibiaProvinces = ["Erongo", "Hardap", "Karas", "Kavango East", "Kavango West", "Khomas", "Kunene", "Ohangwena", "Omaheke", "Omusati", "Oshana", "Oshikoto", "Otjozondjupa", /* Add more provinces for Namibia */];
  var namibiaCities = ["Windhoek", "Swakopmund", "Walvis Bay", "Oshakati", "Rundu", /* Add more cities for Namibia */];

  // Populate provinces for Namibia
  for (var i = 0; i < namibiaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = namibiaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Namibia
  for (var i = 0; i < namibiaCities.length; i++) {
    var option = document.createElement("option");
    option.text = namibiaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Nauru") {
  // Add provinces and cities for Nauru
  var nauruProvinces = ["Aiwo", "Anabar", "Anetan", "Anibare", "Baiti", "Boe", "Buada", "Denigomodu", "Ewa", "Ijuw", "Meneng", "Nibok", "Uaboe", "Yaren", /* Add more provinces for Nauru */];
  var nauruCities = ["Yaren", /* Add more cities for Nauru */];

  // Populate provinces for Nauru
  for (var i = 0; i < nauruProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = nauruProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Nauru
  for (var i = 0; i < nauruCities.length; i++) {
    var option = document.createElement("option");
    option.text = nauruCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Nepal") {
  // Add provinces and cities for Nepal
  var nepalProvinces = ["Bagmati", "Bheri", "Dhawalagiri", "Gandaki", "Janakpur", "Karnali", "Koshi", "Lumbini", "Mahakali", "Mechi", "Narayani", "Rapti", "Sagarmatha", "Seti", /* Add more provinces for Nepal */];
  var nepalCities = ["Kathmandu", "Pokhara", "Lalitpur", "Biratnagar", "Birgunj", /* Add more cities for Nepal */];

  // Populate provinces for Nepal
  for (var i = 0; i < nepalProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = nepalProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Nepal
  for (var i = 0; i < nepalCities.length; i++) {
    var option = document.createElement("option");
    option.text = nepalCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Netherlands") {
  // Add provinces and cities for Netherlands
  var netherlandsProvinces = ["Drenthe", "Flevoland", "Friesland", "Gelderland", "Groningen", "Limburg", "North Brabant", "North Holland", "Overijssel", "South Holland", "Utrecht", "Zeeland", /* Add more provinces for Netherlands */];
  var netherlandsCities = ["Amsterdam", "Rotterdam", "The Hague", "Utrecht", "Eindhoven", /* Add more cities for Netherlands */];

  // Populate provinces for Netherlands
  for (var i = 0; i < netherlandsProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = netherlandsProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Netherlands
  for (var i = 0; i < netherlandsCities.length; i++) {
    var option = document.createElement("option");
    option.text = netherlandsCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "New Zealand") {
  // Add provinces and cities for New Zealand
  var newZealandProvinces = ["Auckland", "Bay of Plenty", "Canterbury", "Gisborne", "Hawke's Bay", "Manawatū-Whanganui", "Marlborough", "Nelson", "Northland", "Otago", "Southland", "Taranaki", "Tasman", "Waikato", "Wellington", "West Coast", /* Add more provinces for New Zealand */];
  var newZealandCities = ["Auckland", "Wellington", "Christchurch", "Hamilton", "Tauranga", /* Add more cities for New Zealand */];

  // Populate provinces for New Zealand
  for (var i = 0; i < newZealandProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = newZealandProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for New Zealand
  for (var i = 0; i < newZealandCities.length; i++) {
    var option = document.createElement("option");
    option.text = newZealandCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Nicaragua") {
  // Add provinces and cities for Nicaragua
  var nicaraguaProvinces = ["Boaco", "Carazo", "Chinandega", "Chontales", "Estelí", "Granada", "Jinotega", "León", "Madriz", "Managua", "Masaya", "Matagalpa", "Nueva Segovia", "Río San Juan", "Rivas", /* Add more provinces for Nicaragua */];
  var nicaraguaCities = ["Managua", "León", "Masaya", "Matagalpa", "Chinandega", /* Add more cities for Nicaragua */];

  // Populate provinces for Nicaragua
  for (var i = 0; i < nicaraguaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = nicaraguaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Nicaragua
  for (var i = 0; i < nicaraguaCities.length; i++) {
    var option = document.createElement("option");
    option.text = nicaraguaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Netherlands") {
  // Add provinces and cities for Netherlands
  var netherlandsProvinces = ["Drenthe", "Flevoland", "Friesland", "Gelderland", "Groningen", "Limburg", "North Brabant", "North Holland", "Overijssel", "South Holland", "Utrecht", "Zeeland", /* Add more provinces for Netherlands */];
  var netherlandsCities = ["Amsterdam", "Rotterdam", "The Hague", "Utrecht", "Eindhoven", /* Add more cities for Netherlands */];

  // Populate provinces for Netherlands
  for (var i = 0; i < netherlandsProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = netherlandsProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Netherlands
  for (var i = 0; i < netherlandsCities.length; i++) {
    var option = document.createElement("option");
    option.text = netherlandsCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "New Zealand") {
  // Add provinces and cities for New Zealand
  var newZealandProvinces = ["Auckland", "Bay of Plenty", "Canterbury", "Gisborne", "Hawke's Bay", "Manawatū-Whanganui", "Marlborough", "Nelson", "Northland", "Otago", "Southland", "Taranaki", "Tasman", "Waikato", "Wellington", "West Coast", /* Add more provinces for New Zealand */];
  var newZealandCities = ["Auckland", "Wellington", "Christchurch", "Hamilton", "Tauranga", /* Add more cities for New Zealand */];

  // Populate provinces for New Zealand
  for (var i = 0; i < newZealandProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = newZealandProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for New Zealand
  for (var i = 0; i < newZealandCities.length; i++) {
    var option = document.createElement("option");
    option.text = newZealandCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Nicaragua") {
  // Add provinces and cities for Nicaragua
  var nicaraguaProvinces = ["Boaco", "Carazo", "Chinandega", "Chontales", "Estelí", "Granada", "Jinotega", "León", "Madriz", "Managua", "Masaya", "Matagalpa", "Nueva Segovia", "Río San Juan", "Rivas", /* Add more provinces for Nicaragua */];
  var nicaraguaCities = ["Managua", "León", "Masaya", "Matagalpa", "Chinandega", /* Add more cities for Nicaragua */];

  // Populate provinces for Nicaragua
  for (var i = 0; i < nicaraguaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = nicaraguaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Nicaragua
  for (var i = 0; i < nicaraguaCities.length; i++) {
    var option = document.createElement("option");
    option.text = nicaraguaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Niger") {
  // Add provinces and cities for Niger
  var nigerProvinces = ["Agadez", "Diffa", "Dosso", "Maradi", "Tahoua", "Tillabéri", "Zinder", /* Add more provinces for Niger */];
  var nigerCities = ["Niamey", "Zinder", "Maradi", "Agadez", "Tahoua", /* Add more cities for Niger */];

  // Populate provinces for Niger
  for (var i = 0; i < nigerProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = nigerProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Niger
  for (var i = 0; i < nigerCities.length; i++) {
    var option = document.createElement("option");
    option.text = nigerCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Nigeria") {
  // Add provinces and cities for Nigeria
  var nigeriaProvinces = ["Abia", "Adamawa", "Akwa Ibom", "Anambra", "Bauchi", "Bayelsa", "Benue", "Borno", "Cross River", "Delta", "Ebonyi", "Edo", "Ekiti", "Enugu", "Gombe", "Imo", "Jigawa", "Kaduna", "Kano", "Katsina", "Kebbi", "Kogi", "Kwara", "Lagos", "Nasarawa", "Niger", "Ogun", "Ondo", "Osun", "Oyo", "Plateau", "Rivers", "Sokoto", "Taraba", "Yobe", "Zamfara", /* Add more provinces for Nigeria */];
  var nigeriaCities = ["Lagos", "Kano", "Ibadan", "Abuja", "Port Harcourt", /* Add more cities for Nigeria */];

  // Populate provinces for Nigeria
  for (var i = 0; i < nigeriaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = nigeriaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Nigeria
  for (var i = 0; i < nigeriaCities.length; i++) {
    var option = document.createElement("option");
    option.text = nigeriaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "North Korea") {
  // Add provinces and cities for North Korea
  var northKoreaProvinces = ["Chagang", "North Hamgyong", "South Hamgyong", "North Hwanghae", "South Hwanghae", "Kangwon", "Ryanggang", "Pyongyang", /* Add more provinces for North Korea */];
  var northKoreaCities = ["Pyongyang", "Hamhung", "Chongjin", "Nampo", "Sinuiju", /* Add more cities for North Korea */];

  // Populate provinces for North Korea
  for (var i = 0; i < northKoreaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = northKoreaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for North Korea
  for (var i = 0; i < northKoreaCities.length; i++) {
    var option = document.createElement("option");
    option.text = northKoreaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "North Macedonia") {
  // Add provinces and cities for North Macedonia
  var macedoniaProvinces = ["Bitola", "Kumanovo", "Ohrid", "Prilep", "Skopje", "Struga", "Tetovo", "Veles", /* Add more provinces for North Macedonia */];
  var macedoniaCities = ["Skopje", "Bitola", "Kumanovo", "Prilep", "Tetovo", "Ohrid", "Veles", /* Add more cities for North Macedonia */];

  // Populate provinces for North Macedonia
  for (var i = 0; i < macedoniaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = macedoniaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for North Macedonia
  for (var i = 0; i < macedoniaCities.length; i++) {
    var option = document.createElement("option");
    option.text = macedoniaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Norway") {
  // Add provinces and cities for Norway
  var norwayProvinces = ["Akershus", "Aust-Agder", "Buskerud", "Finnmark", "Hedmark", "Hordaland", "Møre og Romsdal", "Nordland", "Nord-Trøndelag", "Oppland", "Oslo", "Østfold", "Rogaland", "Sogn og Fjordane", "Sør-Trøndelag", "Telemark", "Troms", "Vest-Agder", "Vestfold", /* Add more provinces for Norway */];
  var norwayCities = ["Oslo", "Bergen", "Trondheim", "Stavanger", "Drammen", "Fredrikstad", "Tromsø", "Sandnes", "Kristiansand", /* Add more cities for Norway */];

  // Populate provinces for Norway
  for (var i = 0; i < norwayProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = norwayProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Norway
  for (var i = 0; i < norwayCities.length; i++) {
    var option = document.createElement("option");
    option.text = norwayCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Oman") {
  // Add provinces and cities for Oman
  var omanProvinces = ["Ad Dakhiliyah", "Ad Dhahirah", "Al Batinah North", "Al Batinah South", "Al Buraimi", "Al Wusta", "Ash Sharqiyah North", "Ash Sharqiyah South", "Dhofar", "Musandam", "Muscat", /* Add more provinces for Oman */];
  var omanCities = ["Muscat", "Salalah", "Sohar", "Nizwa", "Sur", "Ibri", "Rustaq", "Bahla", /* Add more cities for Oman */];

  // Populate provinces for Oman
  for (var i = 0; i < omanProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = omanProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Oman
  for (var i = 0; i < omanCities.length; i++) {
    var option = document.createElement("option");
    option.text = omanCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Pakistan") {
  // Add provinces and cities for Pakistan
  var pakistanProvinces = ["Punjab", "Sindh", "Khyber Pakhtunkhwa", "Balochistan", "Gilgit-Baltistan", "Azad Jammu and Kashmir", /* Add more provinces for Pakistan */];
  var pakistanCities = ["Karachi", "Lahore", "Islamabad", "Rawalpindi", "Peshawar", /* Add more cities for Pakistan */];

  // Populate provinces for Pakistan
  for (var i = 0; i < pakistanProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = pakistanProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Pakistan
  for (var i = 0; i < pakistanCities.length; i++) {
    var option = document.createElement("option");
    option.text = pakistanCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Palau") {
  // Add states and cities for Palau
  var palauStates = ["Koror", "Aimeliik", "Airai", "Angaur", "Hatohobei", "Kayangel", "Melekeok", "Ngaraard", "Ngarchelong", "Ngardmau", "Ngatpang", "Ngchesar", "Ngeremlengui", "Ngiwal", "Peleliu", "Sonsorol", /* Add more states for Palau */];
  var palauCities = ["Koror", "Meyungs", "Ngerulmud", "Airai", "Melekeok", /* Add more cities for Palau */];

  // Populate states for Palau
  for (var i = 0; i < palauStates.length; i++) {
    var option = document.createElement("option");
    option.text = palauStates[i];
    provinceSelect.add(option);
  }

  // Populate cities for Palau
  for (var i = 0; i < palauCities.length; i++) {
    var option = document.createElement("option");
    option.text = palauCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Panama") {
  // Add provinces and cities for Panama
  var panamaProvinces = ["Bocas del Toro", "Chiriquí", "Coclé", "Colón", "Darién", "Herrera", "Los Santos", "Panamá", "Veraguas", /* Add more provinces for Panama */];
  var panamaCities = ["Panama City", "Colon", "David", "La Chorrera", "Santiago", /* Add more cities for Panama */];

  // Populate provinces for Panama
  for (var i = 0; i < panamaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = panamaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Panama
  for (var i = 0; i < panamaCities.length; i++) {
    var option = document.createElement("option");
    option.text = panamaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Papua New Guinea") {
  // Add provinces and cities for Papua New Guinea
  var papuaNewGuineaProvinces = ["Central", "Chimbu", "East New Britain", "Eastern Highlands", "Enga", "Gulf", "Hela", "Jiwaka", "Madang", "Manus", "Milne Bay", "Morobe", "National Capital District", "New Ireland", "Oro", "Sandaun (West Sepik)", "Simbu", "Southern Highlands", "Western", "Western Highlands", "West New Britain", /* Add more provinces for Papua New Guinea */];
  var papuaNewGuineaCities = ["Port Moresby", "Lae", "Mount Hagen", "Madang", "Goroka", /* Add more cities for Papua New Guinea */];

  // Populate provinces for Papua New Guinea
  for (var i = 0; i < papuaNewGuineaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = papuaNewGuineaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Papua New Guinea
  for (var i = 0; i < papuaNewGuineaCities.length; i++) {
    var option = document.createElement("option");
    option.text = papuaNewGuineaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Paraguay") {
  // Add provinces and cities for Paraguay
  var paraguayProvinces = ["Alto Paraguay", "Alto Paraná", "Amambay", "Boquerón", "Caaguazú", "Caazapá", "Canindeyú", "Central", "Concepción", "Cordillera", "Guairá", "Itapúa", "Misiones", "Ñeembucú", "Paraguarí", "Presidente Hayes", "San Pedro", /* Add more provinces for Paraguay */];
  var paraguayCities = ["Asunción", "Ciudad del Este", "San Lorenzo", "Luque", "Capiatá", /* Add more cities for Paraguay */];

  // Populate provinces for Paraguay
  for (var i = 0; i < paraguayProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = paraguayProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Paraguay
  for (var i = 0; i < paraguayCities.length; i++) {
    var option = document.createElement("option");
    option.text = paraguayCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Peru") {
  // Add provinces and cities for Peru
  var peruProvinces = ["Amazonas", "Áncash", "Apurímac", "Arequipa", "Ayacucho", "Cajamarca", "Callao", "Cusco", "Huancavelica", "Huánuco", "Ica", "Junín", "La Libertad", "Lambayeque", "Lima", "Loreto", "Madre de Dios", "Moquegua", "Pasco", "Piura", "Puno", "San Martín", "Tacna", "Tumbes", "Ucayali", /* Add more provinces for Peru */];
  var peruCities = ["Lima", "Arequipa", "Trujillo", "Chiclayo", "Callao", /* Add more cities for Peru */];

  // Populate provinces for Peru
  for (var i = 0; i < peruProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = peruProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Peru
  for (var i = 0; i < peruCities.length; i++) {
    var option = document.createElement("option");
    option.text = peruCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Poland") {
  // Add provinces and cities for Poland
  var polandProvinces = ["Greater Poland", "Kuyavian-Pomeranian", "Lesser Poland", "Lodz", "Lower Silesian", "Lubusz", "Masovian", "Opole", "Podkarpackie", "Podlaskie", "Pomeranian", "Silesian", "Subcarpathian", "Swietokrzyskie", "Warmian-Masurian", "West Pomeranian", /* Add more provinces for Poland */];
  var polandCities = ["Warsaw", "Krakow", "Lodz", "Wroclaw", "Poznan", /* Add more cities for Poland */];

  // Populate provinces for Poland
  for (var i = 0; i < polandProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = polandProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Poland
  for (var i = 0; i < polandCities.length; i++) {
    var option = document.createElement("option");
    option.text = polandCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Portugal") {
  // Add provinces and cities for Portugal
  var portugalProvinces = ["Aveiro", "Beja", "Braga", "Braganca", "Castelo Branco", "Coimbra", "Evora", "Faro", "Guarda", "Leiria", "Lisbon", "Portalegre", "Porto", "Santarem", "Setubal", "Viana do Castelo", "Vila Real", "Viseu", /* Add more provinces for Portugal */];
  var portugalCities = ["Lisbon", "Porto", "Vila Nova de Gaia", "Amadora", "Braga", /* Add more cities for Portugal */];

  // Populate provinces for Portugal
  for (var i = 0; i < portugalProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = portugalProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Portugal
  for (var i = 0; i < portugalCities.length; i++) {
    var option = document.createElement("option");
    option.text = portugalCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Qatar") {
  // Add provinces and cities for Qatar
  var qatarProvinces = ["Ad Dawhah", "Al Khor", "Al Wakrah", "Ar Rayyan", "Madinat ash Shamal", "Umm Salal", /* Add more provinces for Qatar */];
  var qatarCities = ["Doha", "Al Khor", "Al Wakrah", "Ar Rayyan", "Madinat ash Shamal", /* Add more cities for Qatar */];

  // Populate provinces for Qatar
  for (var i = 0; i < qatarProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = qatarProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Qatar
  for (var i = 0; i < qatarCities.length; i++) {
    var option = document.createElement("option");
    option.text = qatarCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Romania") {
  // Add provinces and cities for Romania
  var romaniaProvinces = ["Alba", "Arad", "Arges", "Bacau", "Bihor", "Bistrita-Nasaud", "Botosani", "Braila", "Brasov", "Buzau", "Calarasi", "Caras-Severin", "Cluj", "Constanta", "Covasna", "Dambovita", "Dolj", "Galati", "Giurgiu", "Gorj", "Harghita", "Hunedoara", "Ialomita", "Iasi", "Ilfov", "Maramures", "Mehedinti", "Mures", "Neamt", "Olt", "Prahova", "Salaj", "Satu Mare", "Sibiu", "Suceava", "Teleorman", "Timis", "Tulcea", "Valcea", "Vaslui", "Vrancea", /* Add more provinces for Romania */];
  var romaniaCities = ["Bucharest", "Cluj-Napoca", "Timisoara", "Iasi", "Craiova", /* Add more cities for Romania */];

  // Populate provinces for Romania
  for (var i = 0; i < romaniaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = romaniaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Romania
  for (var i = 0; i < romaniaCities.length; i++) {
    var option = document.createElement("option");
    option.text = romaniaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Russia") {
  // Add provinces and cities for Russia
  var russiaProvinces = ["Altai Krai", "Amur Oblast", "Arkhangelsk Oblast", "Astrakhan Oblast", "Belgorod Oblast", "Bryansk Oblast", "Chelyabinsk Oblast", "Chukotka Autonomous Okrug", "Chuvash Republic", "Irkutsk Oblast", "Ivanovo Oblast", "Jewish Autonomous Oblast", "Kabardino-Balkarian Republic", "Kaliningrad Oblast", "Kalmykia Republic", "Kaluga Oblast", "Kamchatka Krai", "Karachay-Cherkess Republic", "Kemerovo Oblast", "Khabarovsk Krai", "Khakassia Republic", "Khanty-Mansi Autonomous Okrug", "Kirov Oblast", "Komi Republic", "Kostroma Oblast", "Krasnodar Krai", "Krasnoyarsk Krai", "Kurgan Oblast", "Kursk Oblast", "Leningrad Oblast", "Lipetsk Oblast", "Magadan Oblast", "Mari El Republic", "Mordovia Republic", "Moscow", "Moscow Oblast", "Murmansk Oblast", "Nenets Autonomous Okrug", "Nizhny Novgorod Oblast", "North Ossetia-Alania Republic", "Novgorod Oblast", "Novosibirsk Oblast", "Omsk Oblast", "Orel Oblast", "Orenburg Oblast", "Penza Oblast", "Perm Krai", "Primorsky Krai", "Pskov Oblast", "Rostov Oblast", "Ryazan Oblast", "Sakha (Yakutia) Republic", "Sakhalin Oblast", "Samara Oblast", "Saratov Oblast", "Smolensk Oblast", "Stavropol Krai", "Sverdlovsk Oblast", "Tambov Oblast", "Tatarstan Republic", "Tomsk Oblast", "Tula Oblast", "Tuva Republic", "Tver Oblast", "Tyumen Oblast", "Tyva Republic", "Udmurt Republic", "Ulyanovsk Oblast", "Vladimir Oblast", "Volgograd Oblast", "Vologda Oblast", "Voronezh Oblast", "Yamalo-Nenets Autonomous Okrug", "Yaroslavl Oblast", "Zabaykalsky Krai", /* Add more provinces for Russia */];
  var russiaCities = ["Moscow", "Saint Petersburg", "Novosibirsk", "Yekaterinburg", "Nizhny Novgorod", /* Add more cities for Russia */];

  // Populate provinces for Russia
  for (var i = 0; i < russiaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = russiaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Russia
  for (var i = 0; i < russiaCities.length; i++) {
    var option = document.createElement("option");
    option.text = russiaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Rwanda") {
  // Add provinces and cities for Rwanda
  var rwandaProvinces = ["Kigali City", "Eastern Province", "Northern Province", "Southern Province", "Western Province", /* Add more provinces for Rwanda */];
  var rwandaCities = ["Kigali", "Huye", "Musanze", "Rubavu", "Nyagatare", /* Add more cities for Rwanda */];

  // Populate provinces for Rwanda
  for (var i = 0; i < rwandaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = rwandaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Rwanda
  for (var i = 0; i < rwandaCities.length; i++) {
    var option = document.createElement("option");
    option.text = rwandaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Saint Kitts and Nevis") {
  // Add provinces and cities for Saint Kitts and Nevis
  var saintKittsNevisProvinces = ["Christ Church Nichola Town", "Saint Anne Sandy Point", "Saint George Basseterre", "Saint George Gingerland", "Saint James Windward", "Saint John Capisterre", "Saint John Figtree", "Saint Mary Cayon", "Saint Paul Capisterre", "Saint Paul Charlestown", "Saint Peter Basseterre", "Saint Thomas Lowland", "Saint Thomas Middle Island", /* Add more provinces for Saint Kitts and Nevis */];
  var saintKittsNevisCities = ["Basseterre", "Charlestown", /* Add more cities for Saint Kitts and Nevis */];

  // Populate provinces for Saint Kitts and Nevis
  for (var i = 0; i < saintKittsNevisProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = saintKittsNevisProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Saint Kitts and Nevis
  for (var i = 0; i < saintKittsNevisCities.length; i++) {
    var option = document.createElement("option");
    option.text = saintKittsNevisCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Saint Lucia") {
  // Add provinces and cities for Saint Lucia
  var saintLuciaProvinces = ["Anse la Raye", "Castries", "Choiseul", "Dauphin", "Dennery", "Gros Islet", "Laborie", "Micoud", "Praslin", "Soufrière", "Vieux Fort", /* Add more provinces for Saint Lucia */];
  var saintLuciaCities = ["Castries", "Vieux Fort", "Gros Islet", "Micoud", "Soufrière", /* Add more cities for Saint Lucia */];

  // Populate provinces for Saint Lucia
  for (var i = 0; i < saintLuciaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = saintLuciaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Saint Lucia
  for (var i = 0; i < saintLuciaCities.length; i++) {
    var option = document.createElement("option");
    option.text = saintLuciaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Saint Vincent and the Grenadines") {
  // Add provinces and cities for Saint Vincent and the Grenadines
  var saintVincentGrenadinesProvinces = ["Charlotte", "Grenadines", "Saint Andrew", "Saint David", "Saint George", "Saint Patrick", /* Add more provinces for Saint Vincent and the Grenadines */];
  var saintVincentGrenadinesCities = ["Kingstown", "Arnos Vale", "Georgetown", "Byera Village", /* Add more cities for Saint Vincent and the Grenadines */];

  // Populate provinces for Saint Vincent and the Grenadines
  for (var i = 0; i < saintVincentGrenadinesProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = saintVincentGrenadinesProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Saint Vincent and the Grenadines
  for (var i = 0; i < saintVincentGrenadinesCities.length; i++) {
    var option = document.createElement("option");
    option.text = saintVincentGrenadinesCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Samoa") {
  // Add provinces and cities for Samoa
  var samoaProvinces = ["A'ana", "Aiga-i-le-Tai", "Atua", "Fa'asaleleaga", "Gaga'emauga", "Gaga'ifomauga", "Palauli", "Satupa'itea", "Tuamasaga", "Va'a-o-Fonoti", "Vaisigano", /* Add more provinces for Samoa */];
  var samoaCities = ["Apia", "Asau", "Mulifanua", "Safotu", "Salelologa", /* Add more cities for Samoa */];

  // Populate provinces for Samoa
  for (var i = 0; i < samoaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = samoaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Samoa
  for (var i = 0; i < samoaCities.length; i++) {
    var option = document.createElement("option");
    option.text = samoaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "San Marino") {
  // Add provinces and cities for San Marino
  var sanMarinoProvinces = ["Acquaviva", "Borgo Maggiore", "Chiesanuova", "Domagnano", "Faetano", "Fiorentino", "Montegiardino", "San Marino", "Serravalle", /* Add more provinces for San Marino */];
  var sanMarinoCities = ["San Marino", "Borgo Maggiore", "Serravalle", "Domagnano", "Fiorentino", /* Add more cities for San Marino */];

  // Populate provinces for San Marino
  for (var i = 0; i < sanMarinoProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = sanMarinoProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for San Marino
  for (var i = 0; i < sanMarinoCities.length; i++) {
    var option = document.createElement("option");
    option.text = sanMarinoCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Sao Tome and Principe") {
  // Add provinces and cities for Sao Tome and Principe
  var saoTomeProvinces = ["Água Grande", "Cantagalo", "Caué", "Lembá", "Lobata", "Mé-Zóchi", "Príncipe", /* Add more provinces for Sao Tome and Principe */];
  var saoTomeCities = ["São Tomé", "Santo António", "Neves", "Trindade", /* Add more cities for Sao Tome and Principe */];

  // Populate provinces for Sao Tome and Principe
  for (var i = 0; i < saoTomeProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = saoTomeProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Sao Tome and Principe
  for (var i = 0; i < saoTomeCities.length; i++) {
    var option = document.createElement("option");
    option.text = saoTomeCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Saudi Arabia") {
  // Add provinces and cities for Saudi Arabia
  var saudiArabiaProvinces = ["Al Bahah", "Al Hudud ash Shamaliyah", "Al Jawf", "Al Madinah", "Al Qasim", "Ar Riyad", "Ash Sharqiyah", "Asir", "Ha'il", "Jizan", "Makkah", "Najran", "Tabuk", /* Add more provinces for Saudi Arabia */];
  var saudiArabiaCities = ["Riyadh", "Jeddah", "Mecca", "Medina", "Dammam", /* Add more cities for Saudi Arabia */];

  // Populate provinces for Saudi Arabia
  for (var i = 0; i < saudiArabiaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = saudiArabiaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Saudi Arabia
  for (var i = 0; i < saudiArabiaCities.length; i++) {
    var option = document.createElement("option");
    option.text = saudiArabiaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Senegal") {
  // Add provinces and cities for Senegal
  var senegalProvinces = ["Dakar", "Diourbel", "Fatick", "Kaffrine", "Kaolack", "Kédougou", "Kolda", "Louga", "Matam", "Saint-Louis", "Sédhiou", "Tambacounda", "Thiès", "Ziguinchor", /* Add more provinces for Senegal */];
  var senegalCities = ["Dakar", "Thiès", "Kaolack", "Ziguinchor", "Saint-Louis", /* Add more cities for Senegal */];

  // Populate provinces for Senegal
  for (var i = 0; i < senegalProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = senegalProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Senegal
  for (var i = 0; i < senegalCities.length; i++) {
    var option = document.createElement("option");
    option.text = senegalCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Serbia") {
  // Add provinces and cities for Serbia
  var serbiaProvinces = ["Belgrade", "Central Banat", "Moravica", "Nišava", "North Bačka", "North Banat", "Pomoravlje", "Raška", "South Bačka", "South Banat", "Srem", "Šumadija", "Toplica", "West Bačka", "West Banat", /* Add more provinces for Serbia */];
  var serbiaCities = ["Belgrade", "Niš", "Novi Sad", "Kragujevac", "Subotica", /* Add more cities for Serbia */];

  // Populate provinces for Serbia
  for (var i = 0; i < serbiaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = serbiaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Serbia
  for (var i = 0; i < serbiaCities.length; i++) {
    var option = document.createElement("option");
    option.text = serbiaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Seychelles") {
  // Add provinces and cities for Seychelles
  var seychellesProvinces = ["Anse aux Pins", "Anse Boileau", "Anse Etoile", "Anse Louis", "Anse Royale", "Baie Lazare", "Baie Sainte Anne", "Beau Vallon", "Bel Air", "Bel Ombre", "Cascade", "Glacis", "Grand' Anse (Mahé)", "Grand' Anse (Praslin)", "La Digue", "La Rivière Anglaise", "Mont Buxton", "Mont Fleuri", "Plaisance", "Pointe La Rue", "Port Glaud", "Saint Louis", "Takamaka", /* Add more provinces for Seychelles */];
  var seychellesCities = ["Victoria", "Anse Boileau", "Anse Royale", "Beau Vallon", "Bel Ombre", /* Add more cities for Seychelles */];

  // Populate provinces for Seychelles
  for (var i = 0; i < seychellesProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = seychellesProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Seychelles
  for (var i = 0; i < seychellesCities.length; i++) {
    var option = document.createElement("option");
    option.text = seychellesCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Sierra Leone") {
  // Add provinces and cities for Sierra Leone
  var sierraLeoneProvinces = ["Eastern Province", "Northern Province", "Southern Province", "Western Area", /* Add more provinces for Sierra Leone */];
  var sierraLeoneCities = ["Freetown", "Bo", "Kenema", "Koidu", "Makeni", /* Add more cities for Sierra Leone */];

  // Populate provinces for Sierra Leone
  for (var i = 0; i < sierraLeoneProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = sierraLeoneProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Sierra Leone
  for (var i = 0; i < sierraLeoneCities.length; i++) {
    var option = document.createElement("option");
    option.text = sierraLeoneCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Singapore") {
  // Add provinces and cities for Singapore
  var singaporeProvinces = ["Central Region", "East Region", "North Region", "North-East Region", "West Region", /* Add more provinces for Singapore */];
  var singaporeCities = ["Singapore City", "Woodlands", "Jurong", "Tampines", "Yishun", /* Add more cities for Singapore */];

  // Populate provinces for Singapore
  for (var i = 0; i < singaporeProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = singaporeProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Singapore
  for (var i = 0; i < singaporeCities.length; i++) {
    var option = document.createElement("option");
    option.text = singaporeCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Slovakia") {
  // Add provinces and cities for Slovakia
  var slovakiaProvinces = ["Banská Bystrica", "Bratislava", "Košice", "Nitra", "Prešov", "Trenčín", "Trnava", "Žilina", /* Add more provinces for Slovakia */];
  var slovakiaCities = ["Bratislava", "Košice", "Prešov", "Žilina", "Nitra", /* Add more cities for Slovakia */];

  // Populate provinces for Slovakia
  for (var i = 0; i < slovakiaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = slovakiaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Slovakia
  for (var i = 0; i < slovakiaCities.length; i++) {
    var option = document.createElement("option");
    option.text = slovakiaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Slovenia") {
  // Add provinces and cities for Slovenia
  var sloveniaProvinces = ["Ajdovščina", "Beltinci", "Bled", "Celje", "Koper", "Kranj", "Ljubljana", "Maribor", "Novo Mesto", "Ptuj", /* Add more provinces for Slovenia */];
  var sloveniaCities = ["Ljubljana", "Maribor", "Celje", "Kranj", "Koper", /* Add more cities for Slovenia */];

  // Populate provinces for Slovenia
  for (var i = 0; i < sloveniaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = sloveniaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Slovenia
  for (var i = 0; i < sloveniaCities.length; i++) {
    var option = document.createElement("option");
    option.text = sloveniaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Solomon Islands") {
  // Add provinces and cities for Solomon Islands
  var solomonIslandsProvinces = ["Central", "Choiseul", "Guadalcanal", "Honiara", "Isabel", "Makira-Ulawa", "Malaita", "Rennell and Bellona", "Temotu", "Western", /* Add more provinces for Solomon Islands */];
  var solomonIslandsCities = ["Honiara", "Auki", "Gizo", "Kirakira", "Tulagi", /* Add more cities for Solomon Islands */];

  // Populate provinces for Solomon Islands
  for (var i = 0; i < solomonIslandsProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = solomonIslandsProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Solomon Islands
  for (var i = 0; i < solomonIslandsCities.length; i++) {
    var option = document.createElement("option");
    option.text = solomonIslandsCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Somalia") {
  // Add provinces and cities for Somalia
  var somaliaProvinces = ["Awdal", "Bakool", "Banaadir", "Bari", "Bay", "Galguduud", "Gedo", "Hiraan", "Jubbada Dhexe", "Jubbada Hoose", "Mudug", "Nugaal", "Sanaag", "Shabelle Dhexe", "Shabelle Hoose", "Sool", "Togdheer", "Woqooyi Galbeed", /* Add more provinces for Somalia */];
  var somaliaCities = ["Mogadishu", "Hargeisa", "Kismayo", "Baidoa", "Garoowe", /* Add more cities for Somalia */];

  // Populate provinces for Somalia
  for (var i = 0; i < somaliaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = somaliaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Somalia
  for (var i = 0; i < somaliaCities.length; i++) {
    var option = document.createElement("option");
    option.text = somaliaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "South Africa") {
  // Add provinces and cities for South Africa
  var saProvinces = ["Eastern Cape", "Free State", "Gauteng", "KwaZulu-Natal", "Limpopo", "Mpumalanga", "North West", "Northern Cape", "Western Cape", /* Add more provinces for South Africa */];
  var saCities = ["Johannesburg", "Cape Town", "Durban", "Pretoria", "Bloemfontein", /* Add more cities for South Africa */];

  // Populate provinces for South Africa
  for (var i = 0; i < saProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = saProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for South Africa
  for (var i = 0; i < saCities.length; i++) {
    var option = document.createElement("option");
    option.text = saCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "South Korea") {
  // Add provinces and cities for South Korea
  var skProvinces = ["Seoul", "Busan", "Daegu", "Incheon", "Gwangju", "Daejeon", "Ulsan", "Sejong", "Gyeonggi", "Gangwon", "Chungbuk", "Chungnam", "Jeonbuk", "Jeonnam", "Gyeongbuk", "Gyeongnam", "Jeju", /* Add more provinces for South Korea */];
  var skCities = ["Seoul", "Busan", "Incheon", "Daegu", "Daejeon", /* Add more cities for South Korea */];

  // Populate provinces for South Korea
  for (var i = 0; i < skProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = skProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for South Korea
  for (var i = 0; i < skCities.length; i++) {
    var option = document.createElement("option");
    option.text = skCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "South Sudan") {
  // Add provinces and cities for South Sudan
  var southSudanProvinces = ["Central Equatoria", "Eastern Equatoria", "Jonglei", "Lakes", "Northern Bahr el Ghazal", "Unity", "Upper Nile", "Warrap", "Western Bahr el Ghazal", "Western Equatoria", /* Add more provinces for South Sudan */];
  var southSudanCities = ["Juba", "Bor", "Rumbek", "Malakal", "Wau", /* Add more cities for South Sudan */];

  // Populate provinces for South Sudan
  for (var i = 0; i < southSudanProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = southSudanProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for South Sudan
  for (var i = 0; i < southSudanCities.length; i++) {
    var option = document.createElement("option");
    option.text = southSudanCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Spain") {
  // Add provinces and cities for Spain
  var spainProvinces = ["Andalusia", "Aragon", "Asturias", "Balearic Islands", "Basque Country", "Canary Islands", "Cantabria", "Castilla-La Mancha", "Castilla y León", "Catalonia", "Extremadura", "Galicia", "Madrid", "Murcia", "Navarre", "La Rioja", "Valencian Community", /* Add more provinces for Spain */];
  var spainCities = ["Madrid", "Barcelona", "Valencia", "Seville", "Zaragoza", /* Add more cities for Spain */];

  // Populate provinces for Spain
  for (var i = 0; i < spainProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = spainProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Spain
  for (var i = 0; i < spainCities.length; i++) {
    var option = document.createElement("option");
    option.text = spainCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Sri Lanka") {
  // Add provinces and cities for Sri Lanka
  var sriLankaProvinces = ["Central Province", "Eastern Province", "North Central Province", "Northern Province", "North Western Province", "Sabaragamuwa Province", "Southern Province", "Uva Province", "Western Province", /* Add more provinces for Sri Lanka */];
  var sriLankaCities = ["Colombo", "Kandy", "Galle", "Jaffna", "Trincomalee", /* Add more cities for Sri Lanka */];

  // Populate provinces for Sri Lanka
  for (var i = 0; i < sriLankaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = sriLankaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Sri Lanka
  for (var i = 0; i < sriLankaCities.length; i++) {
    var option = document.createElement("option");
    option.text = sriLankaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Sudan") {
  // Add provinces and cities for Sudan
  var sudanProvinces = ["Red Sea", "River Nile", "North Darfur", "South Darfur", "East Darfur", "West Darfur", "Kassala", "Gezira", "Khartoum", "North Kordofan", "South Kordofan", "North Kurdufan", "South Kurdufan", "West Kurdufan", "White Nile", "Blue Nile", "Sennar", /* Add more provinces for Sudan */];
  var sudanCities = ["Khartoum", "Omdurman", "Kassala", "Port Sudan", "Nyala", /* Add more cities for Sudan */];

  // Populate provinces for Sudan
  for (var i = 0; i < sudanProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = sudanProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Sudan
  for (var i = 0; i < sudanCities.length; i++) {
    var option = document.createElement("option");
    option.text = sudanCities[i];
    citySelect.add(option);
      }   
    } else if (selectedCountry === "Taiwan") {
  // Add provinces and cities for Taiwan
  var taiwanProvinces = ["Taipei City", "New Taipei City", "Taichung City", "Tainan City", "Kaohsiung City", "Keelung City", "Hsinchu City", "Hsinchu County", "Miaoli County", "Changhua County", "Nantou County", "Yunlin County", "Chiayi City", "Chiayi County", "Pingtung County", "Yilan County", "Hualien County", "Taitung County", /* Add more provinces for Taiwan */];
  var taiwanCities = ["Taipei", "New Taipei", "Taichung", "Tainan", "Kaohsiung", /* Add more cities for Taiwan */];

  // Populate provinces for Taiwan
  for (var i = 0; i < taiwanProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = taiwanProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Taiwan
  for (var i = 0; i < taiwanCities.length; i++) {
    var option = document.createElement("option");
    option.text = taiwanCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Tajikistan") {
  // Add provinces and cities for Tajikistan
  var tajikistanProvinces = ["Sughd", "Khatlon", "GBAO", "Districts of Republican Subordination", /* Add more provinces for Tajikistan */];
  var tajikistanCities = ["Dushanbe", "Khujand", "Qurghonteppa", "Kulob", "Istaravshan", /* Add more cities for Tajikistan */];

  // Populate provinces for Tajikistan
  for (var i = 0; i < tajikistanProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = tajikistanProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Tajikistan
  for (var i = 0; i < tajikistanCities.length; i++) {
    var option = document.createElement("option");
    option.text = tajikistanCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Tanzania") {
  // Add provinces and cities for Tanzania
  var tanzaniaProvinces = ["Arusha", "Dar es Salaam", "Dodoma", "Geita", "Iringa", "Kagera", "Katavi", "Kigoma", "Kilimanjaro", "Lindi", "Manyara", "Mara", "Mbeya", "Morogoro", "Mtwara", "Mwanza", "Njombe", "Pemba North", "Pemba South", "Pwani", "Rukwa", "Ruvuma", "Shinyanga", "Simiyu", "Singida", "Tabora", "Tanga", "Zanzibar North", "Zanzibar Central/South", "Zanzibar West", /* Add more provinces for Tanzania */];
  var tanzaniaCities = ["Dodoma", "Dar es Salaam", "Arusha", "Mwanza", "Mbeya", /* Add more cities for Tanzania */];

  // Populate provinces for Tanzania
  for (var i = 0; i < tanzaniaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = tanzaniaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Tanzania
  for (var i = 0; i < tanzaniaCities.length; i++) {
    var option = document.createElement("option");
    option.text = tanzaniaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Thailand") {
  // Add provinces and cities for Thailand
  var thailandProvinces = ["Bangkok", "Samut Prakan", "Nonthaburi", "Pathum Thani", "Phra Nakhon Si Ayutthaya", "Ang Thong", "Lop Buri", "Sing Buri", "Chai Nat", "Saraburi", "Chon Buri", "Rayong", "Chanthaburi", "Trat", "Chachoengsao", "Prachin Buri", "Nakhon Nayok", "Sa Kaeo", "Nakhon Ratchasima", "Buri Ram", "Surin", "Si Sa Ket", "Ubon Ratchathani", "Yasothon", "Chaiyaphum", "Amnat Charoen", "Bueng Kan", "Nong Bua Lam Phu", "Khon Kaen", "Udon Thani", "Loei", "Nong Khai", "Maha Sarakham", "Roi Et", "Kalasin", "Sakon Nakhon", "Nakhon Phanom", "Mukdahan", "Chiang Mai", "Lamphun", "Lampang", "Uttaradit", "Phrae", "Nan", "Phayao", "Chiang Rai", "Mae Hong Son", "Nakhon Sawan", "Uthai Thani", "Kamphaeng Phet", "Tak", "Sukhothai", "Phitsanulok", "Phichit", "Phetchabun", "Ratchaburi", "Kanchanaburi", "Suphan Buri", "Nakhon Pathom", "Samut Sakhon", "Samut Songkhram", "Phetchaburi", "Prachuap Khiri Khan", "Nakhon Si Thammarat", "Krabi", "Phang Nga", "Phuket", "Surat Thani", "Ranong", "Chumphon", "Songkhla", "Satun", "Trang", "Phatthalung", "Pattani", "Yala", "Narathiwat", /* Add more provinces for Thailand */];
  var thailandCities = ["Bangkok", "Nonthaburi", "Pak Kret", "Hat Yai", "Chiang Mai", /* Add more cities for Thailand */];

  // Populate provinces for Thailand
  for (var i = 0; i < thailandProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = thailandProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Thailand
  for (var i = 0; i < thailandCities.length; i++) {
    var option = document.createElement("option");
    option.text = thailandCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Togo") {
  // Add provinces and cities for Togo
  var togoProvinces = ["Centrale Region", "Kara Region", "Maritime Region", "Plateaux Region", "Savanes Region", /* Add more provinces for Togo */];
  var togoCities = ["Lomé", "Sokodé", "Kara", "Palimé", "Atakpamé", /* Add more cities for Togo */];

  // Populate provinces for Togo
  for (var i = 0; i < togoProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = togoProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Togo
  for (var i = 0; i < togoCities.length; i++) {
    var option = document.createElement("option");
    option.text = togoCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Tonga") {
  // Add provinces and cities for Tonga
  var tongaProvinces = ["Ha'apai", "Tongatapu", "Vava'u", /* Add more provinces for Tonga */];
  var tongaCities = ["Nuku'alofa", "Neiafu", "Pangai", /* Add more cities for Tonga */];

  // Populate provinces for Tonga
  for (var i = 0; i < tongaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = tongaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Tonga
  for (var i = 0; i < tongaCities.length; i++) {
    var option = document.createElement("option");
    option.text = tongaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Trinidad and Tobago") {
  // Add provinces and cities for Trinidad and Tobago
  var trinidadProvinces = ["Arima", "Chaguanas", "Couva-Tabaquite-Talparo", "Diego Martin", "Eastern Tobago", "Penal-Debe", "Point Fortin", "Port of Spain", "Princes Town", "San Fernando", "San Juan-Laventille", "Sangre Grande", "Siparia", "Tunapuna-Piarco", "Western Tobago", /* Add more provinces for Trinidad and Tobago */];
  var trinidadCities = ["Port of Spain", "Chaguanas", "San Fernando", "Arima", "Point Fortin", /* Add more cities for Trinidad and Tobago */];

  // Populate provinces for Trinidad and Tobago
  for (var i = 0; i < trinidadProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = trinidadProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Trinidad and Tobago
  for (var i = 0; i < trinidadCities.length; i++) {
    var option = document.createElement("option");
    option.text = trinidadCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Tunisia") {
  // Add provinces and cities for Tunisia
  var tunisiaProvinces = ["Ariana", "Béja", "Ben Arous", "Bizerte", "Gabès", "Gafsa", "Jendouba", "Kairouan", "Kasserine", "Kebili", "Kef", "Mahdia", "Manouba", "Medenine", "Monastir", "Nabeul", "Sfax", "Sidi Bouzid", "Siliana", "Sousse", "Tataouine", "Tozeur", "Tunis", "Zaghouan", /* Add more provinces for Tunisia */];
  var tunisiaCities = ["Tunis", "Sfax", "Sousse", "Kairouan", "Bizerte", /* Add more cities for Tunisia */];

  // Populate provinces for Tunisia
  for (var i = 0; i < tunisiaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = tunisiaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Tunisia
  for (var i = 0; i < tunisiaCities.length; i++) {
    var option = document.createElement("option");
    option.text = tunisiaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Turkey") {
  // Add provinces and cities for Turkey
  var turkeyProvinces = ["Adana", "Adıyaman", "Afyonkarahisar", "Ağrı", "Aksaray", "Amasya", "Ankara", "Antalya", "Ardahan", "Artvin", "Aydın", "Balıkesir", "Bartın", "Batman", "Bayburt", "Bilecik", "Bingöl", "Bitlis", "Bolu", "Burdur", "Bursa", "Çanakkale", "Çankırı", "Çorum", "Denizli", "Diyarbakır", "Düzce", "Edirne", "Elazığ", "Erzincan", "Erzurum", "Eskişehir", "Gaziantep", "Giresun", "Gümüşhane", "Hakkâri", "Hatay", "Iğdır", "Isparta", "İstanbul", "İzmir", "Kahramanmaraş", "Karabük", "Karaman", "Kars", "Kastamonu", "Kayseri", "Kırıkkale", "Kırklareli", "Kırşehir", "Kilis", "Kocaeli", "Konya", "Kütahya", "Malatya", "Manisa", "Mardin", "Mersin", "Muğla", "Muş", "Nevşehir", "Niğde", "Ordu", "Osmaniye", "Rize", "Sakarya", "Samsun", "Siirt", "Sinop", "Sivas", "Şanlıurfa", "Şırnak", "Tekirdağ", "Tokat", "Trabzon", "Tunceli", "Uşak", "Van", "Yalova", "Yozgat", "Zonguldak", /* Add more provinces for Turkey */];
  var turkeyCities = ["Istanbul", "Ankara", "Izmir", "Bursa", "Antalya", /* Add more cities for Turkey */];

  // Populate provinces for Turkey
  for (var i = 0; i < turkeyProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = turkeyProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Turkey
  for (var i = 0; i < turkeyCities.length; i++) {
    var option = document.createElement("option");
    option.text = turkeyCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Turkmenistan") {
  // Add provinces and cities for Turkmenistan
  var turkmenistanProvinces = ["Ahal", "Balkan", "Dashoguz", "Lebap", "Mary", /* Add more provinces for Turkmenistan */];
  var turkmenistanCities = ["Ashgabat", "Turkmenabat", "Dasoguz", "Mary", "Balkanabat", /* Add more cities for Turkmenistan */];

  // Populate provinces for Turkmenistan
  for (var i = 0; i < turkmenistanProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = turkmenistanProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Turkmenistan
  for (var i = 0; i < turkmenistanCities.length; i++) {
    var option = document.createElement("option");
    option.text = turkmenistanCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Tuvalu") {
  // Add provinces and cities for Tuvalu
  var tuvaluProvinces = ["Funafuti", "Nanumanga", "Nanumea", "Niutao", "Nui", "Nukufetau", "Nukulaelae", "Vaitupu", /* Add more provinces for Tuvalu */];
  var tuvaluCities = ["Funafuti", "Nanumanga", "Nanumea", "Niutao", "Nui", "Nukufetau", "Nukulaelae", "Vaitupu", /* Add more cities for Tuvalu */];

  // Populate provinces for Tuvalu
  for (var i = 0; i < tuvaluProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = tuvaluProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Tuvalu
  for (var i = 0; i < tuvaluCities.length; i++) {
    var option = document.createElement("option");
    option.text = tuvaluCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Uganda") {
  // Add provinces and cities for Uganda
  var ugandaProvinces = ["Central Region", "Eastern Region", "Northern Region", "Western Region", "Kampala Capital City", /* Add more provinces for Uganda */];
  var ugandaCities = ["Kampala", "Entebbe", "Jinja", "Mbarara", "Gulu", /* Add more cities for Uganda */];

  // Populate provinces for Uganda
  for (var i = 0; i < ugandaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = ugandaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Uganda
  for (var i = 0; i < ugandaCities.length; i++) {
    var option = document.createElement("option");
    option.text = ugandaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Ukraine") {
  // Add provinces and cities for Ukraine
  var ukraineProvinces = ["Vinnytsia Oblast", "Volyn Oblast", "Dnipropetrovsk Oblast", "Donetsk Oblast", "Zhytomyr Oblast", /* Add more provinces for Ukraine */];
  var ukraineCities = ["Kyiv", "Kharkiv", "Odesa", "Dnipro", "Lviv", /* Add more cities for Ukraine */];

  // Populate provinces for Ukraine
  for (var i = 0; i < ukraineProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = ukraineProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Ukraine
  for (var i = 0; i < ukraineCities.length; i++) {
    var option = document.createElement("option");
    option.text = ukraineCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "United Arab Emirates") {
  // Add emirates and cities for the United Arab Emirates
  var uaeEmirates = ["Abu Dhabi", "Dubai", "Sharjah", "Ajman", "Umm Al-Quwain", "Fujairah", "Ras Al Khaimah", /* Add more emirates for the UAE */];
  var uaeCities = ["Abu Dhabi City", "Dubai City", "Sharjah City", "Ajman City", "Umm Al-Quwain City", "Fujairah City", "Ras Al Khaimah City", /* Add more cities for the UAE */];

  // Populate emirates for the UAE
  for (var i = 0; i < uaeEmirates.length; i++) {
    var option = document.createElement("option");
    option.text = uaeEmirates[i];
    provinceSelect.add(option);
  }

  // Populate cities for the UAE
  for (var i = 0; i < uaeCities.length; i++) {
    var option = document.createElement("option");
    option.text = uaeCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "United Kingdom") {
  // Add regions and cities for the United Kingdom
  var ukRegions = ["England", "Scotland", "Wales", "Northern Ireland", /* Add more regions for the UK */];
  var ukCities = ["London", "Edinburgh", "Cardiff", "Belfast", /* Add more cities for the UK */];

  // Populate regions for the UK
  for (var i = 0; i < ukRegions.length; i++) {
    var option = document.createElement("option");
    option.text = ukRegions[i];
    provinceSelect.add(option);
  }

  // Populate cities for the UK
  for (var i = 0; i < ukCities.length; i++) {
    var option = document.createElement("option");
    option.text = ukCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "United States") {
  // Add states and cities for the United States
  var usStates = ["Alabama", "California", "New York", "Texas", "Florida", /* Add more states for the US */];
  var usCities = ["New York City", "Los Angeles", "Chicago", "Houston", "Miami", /* Add more cities for the US */];

  // Populate states for the US
  for (var i = 0; i < usStates.length; i++) {
    var option = document.createElement("option");
    option.text = usStates[i];
    provinceSelect.add(option);
  }

  // Populate cities for the US
  for (var i = 0; i < usCities.length; i++) {
    var option = document.createElement("option");
    option.text = usCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Uruguay") {
  // Add departments and cities for Uruguay
  var uruguayDepartments = ["Montevideo", "Canelones", "Maldonado", "Rocha", "Salto", /* Add more departments for Uruguay */];
  var uruguayCities = ["Montevideo", "Canelones", "Maldonado", "Punta del Este", "Salto", /* Add more cities for Uruguay */];

  // Populate departments for Uruguay
  for (var i = 0; uruguayDepartments.length; i++) {
    var option = document.createElement("option");
    option.text = uruguayDepartments[i];
    provinceSelect.add(option);
  }

  // Populate cities for Uruguay
  for (var i = 0; i < uruguayCities.length; i++) {
    var option = document.createElement("option");
    option.text = uruguayCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Uzbekistan") {
  // Add regions and cities for Uzbekistan
  var uzbekistanRegions = ["Tashkent Region", "Samarkand Region", "Bukhara Region", "Namangan Region", "Andijan Region", /* Add more regions for Uzbekistan */];
  var uzbekistanCities = ["Tashkent", "Samarkand", "Bukhara", "Namangan", "Andijan", /* Add more cities for Uzbekistan */];

  // Populate regions for Uzbekistan
  for (var i = 0; i < uzbekistanRegions.length; i++) {
    var option = document.createElement("option");
    option.text = uzbekistanRegions[i];
    provinceSelect.add(option);
  }

  // Populate cities for Uzbekistan
  for (var i = 0; i < uzbekistanCities.length; i++) {
    var option = document.createElement("option");
    option.text = uzbekistanCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Vanuatu") {
  // Add provinces and cities for Vanuatu
  var vanuatuProvinces = ["Malampa", "Penama", "Sanma", "Shefa", "Tafea", "Torba", /* Add more provinces for Vanuatu */];
  var vanuatuCities = ["Port Vila", "Luganville", "Norsup", "Isangel", /* Add more cities for Vanuatu */];

  // Populate provinces for Vanuatu
  for (var i = 0; i < vanuatuProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = vanuatuProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Vanuatu
  for (var i = 0; i < vanuatuCities.length; i++) {
    var option = document.createElement("option");
    option.text = vanuatuCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Vatican City") {
  // Vatican City is an independent city-state with no provinces
  // Add cities for Vatican City
  var vaticanCityCities = ["Vatican City"];
  
  // Populate cities for Vatican City
  for (var i = 0; i < vaticanCityCities.length; i++) {
    var option = document.createElement("option");
    option.text = vaticanCityCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Venezuela") {
  // Add states and cities for Venezuela
  var venezuelaStates = ["Amazonas", "Anzoátegui", "Apure", "Aragua", "Barinas", /* Add more states for Venezuela */];
  var venezuelaCities = ["Caracas", "Maracaibo", "Valencia", "Barquisimeto", "Maracay", /* Add more cities for Venezuela */];

  // Populate states for Venezuela
  for (var i = 0; i < venezuelaStates.length; i++) {
    var option = document.createElement("option");
    option.text = venezuelaStates[i];
    provinceSelect.add(option);
  }

  // Populate cities for Venezuela
  for (var i = 0; i < venezuelaCities.length; i++) {
    var option = document.createElement("option");
    option.text = venezuelaCities[i];
    citySelect.add(option);
      }
    } else if (selectedCountry === "Vietnam") {
  // Add provinces and cities for Vietnam
  var vietnamProvinces = ["Hanoi", "Ho Chi Minh City", "Da Nang", "Hai Phong", "Can Tho", /* Add more provinces for Vietnam */];
  var vietnamCities = ["Hanoi", "Ho Chi Minh City", "Da Nang", "Hai Phong", "Can Tho", /* Add more cities for Vietnam */];

  // Populate provinces for Vietnam
  for (var i = 0; i < vietnamProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = vietnamProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Vietnam
  for (var i = 0; i < vietnamCities.length; i++) {
    var option = document.createElement("option");
    option.text = vietnamCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Yemen") {
  // Add provinces and cities for Yemen
  var yemenProvinces = ["Sana'a", "Aden", "Taiz", "Al Hudaydah", "Ibb", /* Add more provinces for Yemen */];
  var yemenCities = ["Sana'a", "Aden", "Taiz", "Al Hudaydah", "Ibb", /* Add more cities for Yemen */];

  // Populate provinces for Yemen
  for (var i = 0; i < yemenProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = yemenProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Yemen
  for (var i = 0; i < yemenCities.length; i++) {
    var option = document.createElement("option");
    option.text = yemenCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Zambia") {
  // Add provinces and cities for Zambia
  var zambiaProvinces = ["Lusaka", "Copperbelt", "Central Province", "Eastern Province", "Western Province", /* Add more provinces for Zambia */];
  var zambiaCities = ["Lusaka", "Ndola", "Kitwe", "Kabwe", "Livingstone", /* Add more cities for Zambia */];

  // Populate provinces for Zambia
  for (var i = 0; i < zambiaProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = zambiaProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Zambia
  for (var i = 0; i < zambiaCities.length; i++) {
    var option = document.createElement("option");
    option.text = zambiaCities[i];
    citySelect.add(option);
  }
} else if (selectedCountry === "Zimbabwe") {
  // Add provinces and cities for Zimbabwe
  var zimbabweProvinces = ["Harare", "Bulawayo", "Manicaland", "Mashonaland Central", "Matabeleland South", /* Add more provinces for Zimbabwe */];
  var zimbabweCities = ["Harare", "Bulawayo", "Mutare", "Gweru", "Masvingo", /* Add more cities for Zimbabwe */];

  // Populate provinces for Zimbabwe
  for (var i = 0; i < zimbabweProvinces.length; i++) {
    var option = document.createElement("option");
    option.text = zimbabweProvinces[i];
    provinceSelect.add(option);
  }

  // Populate cities for Zimbabwe
  for (var i = 0; i < zimbabweCities.length; i++) {
    var option = document.createElement("option");
    option.text = zimbabweCities[i];
    citySelect.add(option);
      }
    }
    // Add more conditions for other countries
  }
</script>


</body>
</html>

</body>
</html>