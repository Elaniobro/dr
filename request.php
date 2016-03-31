<?php include('header.php'); ?>
<form data-abide="ajax" id="request">
  
  <div class="row">
    <div class="large-12 columns">
      <h1>Appointment Request</h2>
    </div>
  </div>

  <div class="row">
    <div class="large-4 columns">
      <label>Full Name: <small>required</small>
        <input type="text" id="full_name" placeholder="ex: John Doe" required/>
      </label>
      <small class="error">Please state your full name</small>
    </div>
    <div class="large-4 columns">
      <label>Email address: <small>required</small>
        <input type="email" id="email" placeholder="myname@example.com" required/>
      </label>
      <small class="error">Please put your email.</small>
    </div>
    <div class="large-4 columns">
      <label>Please select a time: <small>required</small>
        <select name="select_time" id="select_time" size="1" class="textForm" required>
          <option value="9:00 AM">9:00 AM</option>
          <option value="10:00 AM">10:00 AM</option>
          <option value="11:00 AM">11:00 AM</option>
          <option value="12:00 PM">12:00 PM</option>
          <option value="1:00 PM">1:00 PM</option>
          <option value="2:00 PM">2:00 PM</option>
          <option value="3:00 PM">3:00 PM</option>
          <option value="4:00 PM">4:00 PM</option>
        </select>
      </label>
      <small class="error">Please select a time</small>
    </div>
  </div>
      <!--
    <div class="large-4 columns">
      <div class="row collapse">
        <label>d</label>
        <div class="small-9 columns">
          <input type="text" placeholder="small-9.columns" />
        </div>
        <div class="small-3 columns">
          <span class="postfix">.com</span>
        </div>
      </div>
    </div>
  -->
  <div class="row">
    <div class="large-4 columns">
      <div class="input-append date" id="dp3" data-date="" data-date-format="mm/dd/yyy">
        <label> Please select a date: <small>required</small>
          <input id="apt_date" size="16" type="text" value="" placeholder="mm/dd/yyy" required>
          <span class="add-on"><i class="icon-th"></i></span>
        <label>
        <small class="error">Pick a date</small>
      </div>
    </div>
    <div class="large-4 columns">
      <label>Is this your first visit?</label>
      <input type="radio" name="visit" value="yes" id="visit-yes"><label for="visit-yes">Yes</label>
      <input type="radio" name="visit" value="no" id="visit-no"><label for="visit-no">No</label>
    </div>
    <div class="large-4 columns">
      <label>Which location do you wish to visit? <small>required</small>
        <select name="office_location" id="office_location" size="1" class="textForm" required>
          <option value="silverspring">Silver Spring, MD</option>
          <option value="capitolhill">Capitol Hill, Washington DC</option>
        </select>
      </label>
      <small class="error">Pick a location</small>
    </div>
  </div>
  <div class="row">
    <div class="large-4 columns">
      <label>Phone Number: <small>required</small>
        <input type="number" id="phone_number" placeholder="ex: 555-555-5555" required/>
      </label>
      <small class="error">What phone number may we reach you at?</small>
    </div>
    <div class="large-8 columns">
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <label>Notes for Dr. Trybuch
        <textarea id="notes" placeholder="Please indicate any special requests or information pertinent to your vist."></textarea>
      </label>
    </div>
  </div>
  <div class="row">
    <div class="large-2 columns">
      <button type="submit">Submit</button>
    </div>
    <div class="large-10 columns"></div>
  </div>
</form>
    <script>
    $(function(){
      var nowTemp = new Date();
      var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
   
      var checkin = $('#apt_date').fdatepicker({
          onRender: function (date) {
              return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
      }).on('changeDate', function (ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
              var newDate = new Date(ev.date)
              newDate.setDate(newDate.getDate() + 1);
              checkout.update(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
      }).data('datepicker');
      var checkout = $('#dpd2').fdatepicker({
          onRender: function (date) {
              return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
      }).on('changeDate', function (ev) {
          checkout.hide();
      }).data('datepicker');

       $('#request').on('valid', function(e) {
        //prevent default form submitting and propagatin so it can run the ajax code first 
        e.stopPropagation();
        e.preventDefault();
       
       //
        $('#request').on('valid.fndtn.abide', function() {    //if the form is valid then grab the values of these IDs (name, email, message) 
         var  full_name       = $("input#full_name").val(),
              email           = $("input#email").val(),
              select_time     = $("select#select_time").val(),
              apt_date        = $("input#apt_date").val(),
              visit           = $("input[name=visit]:checked").val(),
              office_location = $("select#office_location").val(),
              phone_number    = $("input#phone_number").val(),
              notes           = $("textarea#notes").val();

          //Data for reponse (store the values here)
          var dataString =  'full_name=' +full_name +  '&email=' + email + '&select_time=' + select_time + '&apt_date=' + apt_date + '&visit=' + visit + '&office_location=' + office_location + '&phone_number=' + phone_number + '&notes=' + notes;
          
          console.log(dataString);
          //Begin Ajax call
          $.ajax({
            type: "POST",
            url:"dir/request_submit.php", //runs the php code 
            data: dataString, //stores the data to be passed 
            success: function(data){ // if success then generate the div and append the the following
              $('#request').html("<div id='success'></div>");
              $('#success').html("<br /><h4>Thank you!</h4>")
              .append('<p>'+ full_name + ',<br />Someone from the office will call and confirm your appointment.</p>')
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