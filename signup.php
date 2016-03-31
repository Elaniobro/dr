<?php include('header.php'); ?>
<form data-abide="ajax" id="signup">
  <div class="row">
    <div class="large-12 columns">
      <h1>New Patient Form</h2>
    </div>
  </div>
  <div class="row">
    <div class="large-4 columns">
      <label>First Name: <small>required</small>
        <input name="first_name" type="text" id="first_name" placeholder="ex: John" required/>
      </label>
      <small class="error">Please state your full name</small>
    </div>
    <div class="large-4 columns">
      <label>Last Name: <small>required</small>
        <input name="last_name" type="text" id="last_name" placeholder="ex: Doe" required/>
      </label>
      <small class="error">Please state your full name</small>
    </div>
    <div class="large-2 columns">
      <label>Phone #: <small>required</small>
        <input name="phone_number" type="number" id="dashes_only" placeholder="ex: 555-555-5555" required/>
      </label>
      <small class="error">Phone Number?</small>
    </div>
    <div class="large-2 columns">
      <div class="input-append date" data-date="" data-date-format="mm/dd/yyy">
        <label> Date of Birth: <small>required</small>
          <input name="dob" id="dob" size="16" type="text" value="" placeholder="mm/dd/yyy" required>
          <span class="add-on"><i class="icon-th"></i></span>
        <label>
        <small class="error">Pick a date</small>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="large-4 columns">
      <label>Address: <small>required</small>
        <input name="address_1" type="text" id="address_1" placeholder="1234 apple court" required/>
      </label>
      <small class="error">Please put your address.</small>
    </div>
    <div class="large-2 columns">
      <label>Address 2: 
        <input name="address_2" type="text" id="address_2" placeholder="Apt 1B"/>
      </label>
    </div>
    <div class="large-3 columns">
      <label>city: 
        <input name="city" type="text" id="city" placeholder="Springfield" required/>
      </label>
      <small class="error">Please put your city.</small>
    </div>
    <div class="large-1 columns">
      <label>State: 
        <select name="state" id="state" required>
          <option value="">--</option>
          <option value="AL">AL</option>
          <option value="AK">AK</option>
          <option value="AZ">AZ</option>
          <option value="AR">AR</option>
          <option value="CA">CA</option>
          <option value="CO">CO</option>
          <option value="CT">CT</option>
          <option value="DE">DE</option>
          <option value="DC">DC</option>
          <option value="FL">FL</option>
          <option value="GA">GA</option>
          <option value="HI">HI</option>
          <option value="ID">ID</option>
          <option value="IL">IL</option>
          <option value="IN">IN</option>
          <option value="IA">IA</option>
          <option value="KS">KS</option>
          <option value="KY">KY</option>
          <option value="LA">LA</option>
          <option value="ME">ME</option>
          <option value="MD">MD</option>
          <option value="MA">MA</option>
          <option value="MI">MI</option>
          <option value="MN">MN</option>
          <option value="MS">MS</option>
          <option value="MO">MO</option>
          <option value="MT">MT</option>
          <option value="NE">NE</option>
          <option value="NV">NV</option>
          <option value="NH">NH</option>
          <option value="NJ">NJ</option>
          <option value="NM">NM</option>
          <option value="NY">NY</option>
          <option value="NC">NC</option>
          <option value="ND">ND</option>
          <option value="OH">OH</option>
          <option value="OK">OK</option>
          <option value="OR">OR</option>
          <option value="PA">PA</option>
          <option value="RI">RI</option>
          <option value="SC">SC</option>
          <option value="SD">SD</option>
          <option value="TN">TN</option>
          <option value="TX">TX</option>
          <option value="UT">UT</option>
          <option value="VT">VT</option>
          <option value="VA">VA</option>
          <option value="WA">WA</option>
          <option value="WV">WV</option>
          <option value="WI">WI</option>
          <option value="WY">WY</option>
        </select>
      </label>
      <small class="error">State?</small>
    </div>
    <div class="large-2 columns">
      <label>Zip Code: 
        <input name="zip_code" type="number" id="zip_code" placeholder="11111" required/>
      </label>
      <small class="error">Enter your zip code.</small>
    </div>
  </div>
  <div class="row">
    <div class="large-3 columns">
      <label>Social Security #: <small>required</small>
        <input name="social_security" type="dashes_only" id="social_security" placeholder="ex: XXX-XX-XXXX" required/>
      </label>
      <small class="error">What is your Social Securtiy #?</small>
    </div>
    <div class="large-3 columns">
      <label>Spouse Full Name: <small>required</small>
        <input name="spouse_name" type="text" id="spousce-name" placeholder="ex: Mary Jane" />
      </label>
    </div>
    <div class="large-6 columns">
      <label>Name or relation of person responsible for payment: <small>required</small>
        <input name="guarantor" type="text" id="guarantor" placeholder="ex: Mary Jane" />
      </label>
    </div>
  </div>
  <div class ="row">
    <div class="large-6 columns">
      <label>Primary Insurance: <small>required</small>
        <input name="primary_insurance" id="primary_insurance" type="text" placeholder="ex: Mary Jane" required/>
      </label>
       <small class="error">What phone number may we reach you at?</small>
    </div>
    <div class="large-3 columns">
      <label>ID #: <small>required</small>
        <input name="primary_insurance_id" id="primary_insurance_id" type="text" placeholder="ex: XX00XX00" required/>
      </label>
       <small class="error">What is your ID #?</small>
    </div>
    <div class="large-3 columns">
      <label>Group #: <small>required</small>
        <input name="primary_insurance_group" id="primary_insurance_group" type="text" placeholder="ex: XX00XX00" required/>
      </label>
       <small class="error">What is your group #?</small>
    </div>
  </div>
  <div class ="row">
    <div class="large-6 columns">
      <label>Secondary Insurance: 
        <input name="secondary_insurance" id="secondary_insurance" type="text" placeholder="ex: Mary Jane" />
      </label>
    </div>
    <div class="large-3 columns">
      <label>ID #: <small>required</small>
        <input name="secondary_insurance_id" id="secondary_insurance_id" type="text" placeholder="ex: XX00XX00" />
      </label>
    </div>
    <div class="large-3 columns">
      <label>Group #: <small>required</small>
        <input name="secondary_insurance_group" id="secondary_insurance_group" type="text" placeholder="ex: XX00XX00" />
      </label>
    </div>
  </div>
  <div class ="row">
    <div class="large-4 columns">
      <label>Primary Care Physican's (PCP) Name: 
        <input name="primary_care_name" type="text" id="primary_care_name" placeholder="ex: Mary Jane" required/>
      </label>
       <small class="error">Who is your primary care doctor?</small>
    </div>
    <div class="large-4 columns">
      <label>(PCP) Phone #: <small>required</small>
        <input name="primary_care_number" type="number" id="primary_care_number" placeholder="ex: 555-555-5555" required/>
      </label>
      <small class="error">What is your primary care doctor's phone #?</small>
    </div>
    <div class="large-4 columns">
        <label>Currently under treatment?</label>
        <input type="radio" name="treatment" value="yes" required><label for="treatment">Yes</label>
        <input type="radio" name="treatment" value="no" required><label for="treatment">No</label>
       <small class="error">Please indcate treament.</small>
    </div>
  </div>
  <div class="row">
     <div class="large-6 columns">
      <label>Current medications taken: 
        <input name="current_medications" type="text" id="current_medications" placeholder="ex: Mary Jane"/>
      </label>
    </div>
    <div class="large-6 columns">
      <label>Allergies: 
        <input name="allergies" type="text" id="allergies" placeholder="ex: Mary Jane" />
      </label>
    </div>   
  </div>
  <div class="row">
    <div class="large-3 columns">
      <label>Do you have any of the following? (Check all that apply)</label>
      <input name="anemia" id="anemia" type="checkbox"><label for="anemia">Anemia</label><br/>
      <input name="alzheimer" id="alzheimer" type="checkbox"><label for="alzheimer">Alzheimer's</label><br/>
      <input name="arthritis" id="arthritis" type="checkbox"><label for="arthritis">Arthritis</label><br/>
      <input name="asthma" id="asthma" type="checkbox"><label for="asthma">Asthma</label><br/>
      <input name="bleeding_disorder" id="bleeding_disorder" type="checkbox"><label for="bleeding_disorder">Bleeding Disorders</label><br/>
      <input name="cancer" id="cancer" type="checkbox"><label for="cancer">Cancer</label><br/>
      <input name="chemotherapy" id="chemotherapy" type="checkbox"><label for="chemotherapy">Chemotherapy</label><br/>
    </div>
    <div class="large-3 columns">
      <input name="diabetes" id="diabetes" type="checkbox"><label for="diabetes">Diabetes</label><br/>
      <input name="epilepsy" id="epilepsy" type="checkbox"><label for="epilepsy">Epilepsy</label><br/>
      <input name="glaucoma" id="glaucoma" type="checkbox"><label for="glaucoma">Glaucoma</label><br/>
      <input name="gout" id="gout" type="checkbox"><label for="gout">Gout</label><br/>
      <input name="heart_condition" id="heart_condition" type="checkbox"><label for="heart_condition">Heart Condition</label><br/>    
      <input name="hiv" id="hiv" type="checkbox"><label for="hiv">H.I.V.</label><br/>
      <input name="high_blood_pressure" id="high_blood_pressure" type="checkbox"><label for="high_blood_pressure">High Blood Pressure</label><br/>
      <input name="joint_implants" id="joint_implants" type="checkbox"><label for="joint_implants">Joint Implants</label><br/>
    </div>
    <div class="large-3 columns">      
      <input name="kidney_disorder" id="kidney_disorder" type="checkbox"><label for="kidney_disorder">Kidney Disorders</label><br/>
      <input name="liver_disease" id="liver_disease" type="checkbox"><label for="liver_disease">Liver Disease</label><br/>
      <input name="lung_disease" id="lung_disease" type="checkbox"><label for="lung_disease">Lung Disease</label><br/>
      <input name="osteoporosis" id="osteoporosis" type="checkbox"><label for="osteoporosis">Osteoporosis</label><br/>
      <input name="pace_maker" id="pace_maker" type="checkbox"><label for="pace_maker">Pace Maker</label><br/>
      <input name="poor_circulation" id="poor_circulation" type="checkbox"><label for="poor_circulation">Poor Circulation</label><br/>
      <input name="psychiatric_disorder" id="psychiatric_disorder" type="checkbox"><label for="psychiatric_disorder">Psychiatric Disorder</label><br/>
      <input name="replacement_heart" id="replacement_heart" type="checkbox"><label for="replacement_heart">Replacement Heart</label><br/>    
    </div>
    <div class="large-3 columns">
      <input name="rheumatic_fever" id="rheumatic_fever" type="checkbox"><label for="rheumatic_fever">Rhemnatic Fever</label><br/>
      <input name="sickle_cell" id="sickle_cell" type="checkbox"><label for="sickle_cell">Sickle Cell</label><br/>
      <input name="stomach_ulcer" id="stomach_ulcer" type="checkbox"><label for="stomach_ulcer">Stomach Ulcer</label><br/>
      <input name="swollen_ankles" id="swollen_ankles" type="checkbox"><label for="swollen_ankles">Swollen Ankles</label><br/>
      <input name="thyroid_problems" id="thyroid_problems" type="checkbox"><label for="thyroid_problems">Thyroid Problems</label><br/>
      <input name="turberculosis" id="turberculosis" type="checkbox"><label for="turberculosis">Turberculosis</label><br/>
      <input name="vascular_grafts" id="vascular_grafts" type="checkbox"><label for="vascular_grafts">Vascular Grafts</label><br/>
      <input name="valves" id="valves" type="checkbox"><label for="valves">Valves/Nitro Valve</label><br/>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <label>How were you referred to Dr. Trybuch? 
        <textarea name="referred" id="referred"type="text" rows="6" placeholder="ex: I found Dr. Trybuch from a google.com search"></textarea>
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-2 columns">
      <button type="submit">Submit</button>
    </div>
    <div class="large-10 columns"><small><a href="privacy_practices.pdf">Privacy Practices Statement</a></small></div>
  </div>
</form>
    <script>
    $(function(){
      $('#dob').fdatepicker(); 
       $('#signup').on('valid', function(e) {
        //prevent default form submitting and propagatin so it can run the ajax code first 
        e.stopPropagation();
        e.preventDefault();
       
       //
        $('#signup').on('valid.fndtn.abide', function() {    //if the form is valid then grab the values of these IDs (name, email, message) 
         var  first_name                = $("input#first_name").val(),
              last_name                 = $("input#last_name").val(),
              address_1                 = $("input#address_1").val(),
              address_2                 = $("input#address_2").val(),
              city                      = $("input#city").val(),
              state                     = $("select#state").val(),
              zip_code                  = $("input#zip_code").val(),
              phone_number              = $("input#phone_number").val(),
              dob                       = $("input#dob").val(),
              social_security           = $("input#social_security").val(),
              spouse_name               = $("input#spouse_name").val(),
              guarantor                 = $("input#guarantor").val(),
              primary_insurance         = $("input#primary_insurance").val(),
              primary_insurance_id      = $("input#primary_insurance_id").val(),
              primary_insurance_group   = $("input#primary_insurance_group").val(),
              secondary_insurance       = $("input#secondary_insurance").val(),
              secondary_insurance_id    = $("input#secondary_insurance_id").val(),
              secondary_insurance_group = $("input#secondary_insurance_group").val(),
              primary_care_name         = $("input#primary_care_name").val(),
              primary_care_number       = $("input#primary_care_number").val(),
              treatment                 = $("input[name=treatment]:checked").val(),
              current_medications       = $("input#current_medications").val(),
              allergies                 = $("input#allergies").val(),
              anemia                    = $("input#anemia").is(':checked'),
              alzheimer                 = $("input#alzheimer").is(':checked'),
              arthritis                 = $("input#arthritis").is(':checked'),
              asthma                    = $("input#asthma").is(':checked'),
              bleeding_disorder         = $("input#bleeding_disorder").is(':checked'),
              cancer                    = $("input#cancer").is(':checked'),
              lung_disease              = $("input#lung_disease").is(':checked'),
              swollen_ankles            = $("input#swollen_ankles").is(':checked'),
              hiv                       = $("input#hiv").is(':checked'),
              glaucoma                  = $("input#glaucoma").is(':checked'),
              gout                      = $("input#gout").is(':checked'),
              heart_condition           = $("input#heart_condition").is(':checked'),
              high_blood_pressure       = $("input#high_blood_pressure").is(':checked'),
              kidney_disorder           = $("input#kidney_disorder").is(':checked'),
              liver_disease             = $("input#liver_disease").is(':checked'),
              pace_maker                = $("input#pace_maker").is(':checked'),
              sickle_cell               = $("input#sickle_cell").is(':checked'),
              diabetes                  = $("input#diabetes").is(':checked'),
              poor_circulation          = $("input#poor_circulation").is(':checked'),
              psychiatric_disorder      = $("input#psychiatric_disorder").is(':checked'),
              rheumatic_fever           = $("input#rheumatic_fever").is(':checked'),
              stomach_ulcer             = $("input#stomach_ulcer").is(':checked'),
              thyroid_problems          = $("input#thyroid_problems").is(':checked'),
              turberculosis             = $("input#turberculosis").is(':checked'),
              epilepsy                  = $("input#epilepsy").is(':checked'),
              vascular_grafts           = $("input#vascular_grafts").is(':checked'),
              joint_implants            = $("input#joint_implants").is(':checked'),
              replacement_heart         = $("input#replacement_heart").is(':checked'),
              valves                    = $("input#valves").is(':checked'),
              chemotherapy              = $("input#chemotherapy").is(':checked'),
              osteoporosis              = $("input#osteoporosis").is(':checked'),
              referred                  = $("textaread#referred").val();



          //Data for reponse (store the values here)
          var dataString = 'last_name=' + last_name + '&first_name=' + first_name + '&address_1=' +  address_1+ '&address_2=' + address_2+ '&city=' + city + '&state=' + state + '&zip_code=' + zip_code + '&phone_number=' + phone_number + '&dob=' + dob + '&social_security=' + social_security + 
              '&spouse_name=' + spouse_name + '&guarantor=' + guarantor + '&primary_insurance=' + primary_insurance + '&primary_insurance_id=' + primary_insurance_id + '&primary_insurance_group=' + primary_insurance_group +
              '&secondary_insurance=' + secondary_insurance + '&secondary_insurance_id=' + secondary_insurance_id + '&secondary_insurance_group=' + secondary_insurance_group + '&primary_care_name=' + primary_care_name + '&primary_care_number=' + primary_care_number +
              '&treatment=' + treatment + '&current_medications=' + current_medications + '&allergies=' + allergies + '&anemia=' + anemia + '&alzheimer=' + alzheimer + '&arthritis=' + arthritis + '&asthma=' + asthma + '&bleeding_disorder=' + bleeding_disorder + '&cancer=' + cancer + '&lung_disease=' + lung_disease +
              '&swollen_ankles=' + swollen_ankles + '&hiv=' + hiv + '&glaucoma=' + glaucoma + '&gout=' + gout + '&heart_condition=' + heart_condition + '&high_blood_pressure=' + high_blood_pressure + '&kidney_disorder=' + kidney_disorder + '&liver_disease=' + liver_disease + '&pace_maker=' + pace_maker + '&sickle_cell=' + sickle_cell +
              '&diabetes=' + diabetes + '&poor_circulation=' + poor_circulation + '&psychiatric_disorder=' + psychiatric_disorder + '&rheumatic_fever=' + rheumatic_fever + '&stomach_ulcer=' + stomach_ulcer + '&thyroid_problems=' + thyroid_problems + '&turberculosis=' + turberculosis + '&epilepsy=' + epilepsy +
              '&vascular_grafts=' + vascular_grafts + '&joint_implants=' + joint_implants + '&replacement_heart=' + replacement_heart + '&valves=' + valves + '&chemotherapy=' + chemotherapy + '&osteoporosis=' + osteoporosis + '&referred=' + referred;
          console.log('firstname: ' + first_name);
          //Begin Ajax call
          $.ajax({
            type: "POST",
            url:"dir/patient_submit.php", //runs the php code 
            data: dataString, //stores the data to be passed 
            success: function(data){ // if success then generate the div and append the the following
              $('#signup').html("<div id='success'></div>");
              $('#success').html("<br /><h4>Thank you for saving paper!</h4>")
              .append('<p>'+ first_name + ' ' + last_name + ',<br />by filling out paperwork online, this helps your visit become quicker.</p>')
              .hide()
              .fadeIn(1500);
             
            },
            error: function(jqXHR, status, error){ //this is to check if there is any error
                alert("status: " + status + " message: " + error);
            }
          }); //End Ajax call
          return false;
        });
      });  
    });
  
    </script>
<?php include('footer.php'); ?>