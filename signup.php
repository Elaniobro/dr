<?php include('header.php'); ?>
<form data-abide="ajax" id="signup">
  <div class="row">
    <div class="large-12 columns">
      <h1>New Patient Form</h2>
    </div>
  </div>
  <!-- Full Name, Phone & DOB-->
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
        <input name="phone_number" type="dashes_only" id="phone_number" placeholder="ex: 555-555-5555" required/>
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
  <!-- Address-->
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
  <!-- Email, Primary Insurance-->
  <div class="row">
    <div class="large-3 columns">
      <label>Primary Insurance: <small>required</small>
        <input name="primary_insurance" id="primary_insurance" type="text" placeholder="ex: Blue Cross" required/>
      </label>
       <small class="error">Who is your Primary Insurance Provider?</small>
    </div>
    <div class="large-3 columns">
      <label>ID #: <small>required</small>
        <input name="primary_insurance_id" id="primary_insurance_id" type="text" placeholder="ex: XX00XX00" required/>
      </label>
       <small class="error">What is your Primary Insurance ID#?</small>
    </div>
    <div class="large-3 columns">
      <label>E-mail: <small>required</small>
        <input name="email" type="email" id="email" placeholder="jane.doe@gmail.com" required/>
      </label>
      <small class="error">Please provide us with a valid email.</small>
    </div>
    <div class="large-3 columns">
      <label>Current medications taken:
        <input name="current_medications" type="text" id="current_medications" placeholder="ex: tyenol, advil, etc.."/>
      </label>      
    </div>      
  </div>
  <!-- Secondary Insurance, Primary Care-->
  <div class ="row">
    <div class="large-3 columns">
      <label>Secondary Insurance:
        <input name="secondary_insurance" id="secondary_insurance" type="text" placeholder="ex: Aetna" />
      </label>
    </div>
    <div class="large-3 columns">
      <label>ID #: <small>required</small>
        <input name="secondary_insurance_id" id="secondary_insurance_id" type="text" placeholder="ex: XX00XX00" />
      </label>
    </div>
    <div class="large-3 columns">
      <label>Primary Care Doctor's Name:
        <input name="primary_care_name" type="dashes_only" id="primary_care_name" placeholder="ex: Dr. Smith" />
      </label>
    </div>
    <div class="large-3 columns">
      <label>Primary Care Doctor's #: 
        <input name="primary_care_number" type="number" id="primary_care_number" placeholder="ex: 555-555-5555" />
      </label>
    </div>
  </div>
  <!-- Questionaire, Pharmacy Info -->
  <div class="row">
    <div class="large-3 columns">
        <label>Currently under treatment?</label>
        <input type="radio" name="treatment" value="yes" required><label for="treatment">Yes</label>
        <input type="radio" name="treatment" value="no" required><label for="treatment">No</label>
       <small class="error">Please indcate your status.</small>
    </div>
    <div class="large-3 columns">
        <label>Are you Diabetic?</label>
        <input type="radio" name="diabetic" value="yes" required><label for="diabetic">Yes</label>
        <input type="radio" name="diabetic" value="no" required><label for="diabetic">No</label>
       <small class="error">Please indcate your status.</small>
    </div>
     <div class="large-3 columns">
      <label>Pharmacy Name: <small>required</small>
        <input name="pharmacy_name" type="text" id="pharmacy_name" placeholder="ex: CVS" required/>
      </label>
      <small class="error">What is the name of your pharmacy?</small>     
    </div>
     <div class="large-3 columns">
      <label>Pharmacy Location: <small>required</small>
        <input name="pharmacy_loc" type="text" id="pharmacy_loc" placeholder="ex: 123 main st, Washington D.C." required/>
      </label>
      <small class="error">What is the locaiton of your pharmacy?</small>     
    </div>
  </div>
  <!-- Medical History & Current Meds -->
  <div class="row">
    <div class="large-3 columns">
      <label>Are you currently taking any Blood Thining Medications?</label>
      <input type="radio" name="blood_meds" value="yes" required><label for="blood_meds">Yes</label>
      <input type="radio" name="blood_meds" value="no" required><label for="blood_meds">No</label>
       <small class="error">Please indcate your status.</small>
    </div>
    <div class="large-5 columns">
      <label>Do you have any of the following? (Check all that apply)</label>
      <input name="kidney_disorder" id="kidney_disorder" type="checkbox" value="kidney_disorder"><label for="kidney_disorder">Kidney Disorders</label><br/>
      <input name="high_blood_pressure" id="high_blood_pressure" type="checkbox" value="high_blood_pressure"><label for="high_blood_pressure">High Blood Pressure</label><br/>
      <input name="heart_condition" id="heart_condition" type="checkbox" value="heart_condition"><label for="heart_condition">Heart Condition</label><br/>
    </div>
    <div class="large-2 columns">
    <br/>
      <input name="cancer" id="cancer" type="checkbox" value="cancer"><label for="cancer">Cancer</label>
      <br/>
      <input name="hiv" id="hiv" type="checkbox" value="hiv"><label for="hiv">H.I.V.</label><br/>
      <input name="gout" id="gout" type="checkbox" value="gout"><label for="gout">Gout</label><br/>
    </div>
    <div class="large-2 columns">
      <br/>
      <input name="poor_circulation" id="poor_circulation" type="checkbox" value="poor_circulation"><label for="poor_circulation">Poor Circulation</label><br/>
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
              email                     = $("input#email").val(),
              primary_insurance         = $("input#primary_insurance").val(),
              primary_insurance_id      = $("input#primary_insurance_id").val(),
              secondary_insurance       = $("input#secondary_insurance").val(),
              secondary_insurance_id    = $("input#secondary_insurance_id").val(),
              primary_care_name         = $("input#primary_care_name").val(),
              primary_care_number       = $("input#primary_care_number").val(),
              treatment                 = $("input[name=treatment]:checked").val(),
              current_medications       = $("input#current_medications").val(),
              blood_meds                = $("input#blood_meds").is(':checked'),
              cancer                    = $("input#cancer").is(':checked'),
              hiv                       = $("input#hiv").is(':checked'),
              gout                      = $("input#gout").is(':checked'),
              heart_condition           = $("input#heart_condition").is(':checked'),
              high_blood_pressure       = $("input#high_blood_pressure").is(':checked'),
              kidney_disorder           = $("input#kidney_disorder").is(':checked'),
              diabetes                  = $("input#diabetes").is(':checked'),
              poor_circulation          = $("input#poor_circulation").is(':checked'),
              referred                  = $("textarea#referred").val(),
              pharmacy_name             = $("input#pharmacy_name").val(),
              pharmacy_loc              = $("input#pharmacy_loc").val();



          //Data for reponse (store the values here)
          var dataString = 'last_name=' + last_name + '&first_name=' + first_name + '&address_1=' +  address_1+ '&address_2=' + address_2+ '&city=' + city + '&state=' + state + '&zip_code=' + zip_code + '&phone_number=' + phone_number + '&dob=' + dob + '&email=' + email +
               '&primary_insurance=' + primary_insurance + '&primary_insurance_id=' + primary_insurance_id + 
              '&secondary_insurance=' + secondary_insurance + '&secondary_insurance_id=' + secondary_insurance_id + '&primary_care_name=' + primary_care_name + '&primary_care_number=' + primary_care_number +
              '&treatment=' + treatment + '&current_medications=' + current_medications + '&cancer=' + cancer + '&hiv=' + hiv + '&gout=' + gout + '&heart_condition=' + heart_condition + '&high_blood_pressure=' + high_blood_pressure + '&kidney_disorder=' + kidney_disorder + 
              '&diabetes=' + diabetes + '&poor_circulation=' + poor_circulation + '&referred=' + referred + '&pharmacy_name=' + pharmacy_name + '&pharmacy_loc=' + pharmacy_loc + '&blood_meds=' + blood_meds;
         
          //Begin Ajax call
          $.ajax({
            type: "POST",
            url:"dir/patient_submit.php", //runs the php code
            data: dataString, //stores the data to be passed
            success: function(data){ // if success then generate the div and append the the following
              $('#signup').html("<div id='success' class='row'></div>");
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
