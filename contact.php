<?php include('header.php') ?>

      <div class="row">
        <div class="large-9 columns">
          <h3>Get in Touch!</h3>
          <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
          <div class="section-container tabs" data-section>
            <section class="section">
              <h5 class="title"><a href="#panel1">Contact Dr. Trybuch</a></h5>
              <div class="content" data-slug="panel1">
                <form data-abide="ajax" id="contact">
                  <div class="row collapse">
                    <div class="large-2 columns">
                      <label class="inline">Your Name</label>
                    </div>
                    <div class="large-10 columns">
                      <input type="text" id="name" placeholder="Jane Smith" required>
                      <small class="error">What shall we call you?</small>
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="large-2 columns">
                      <label class="inline"> Your Email</label>
                    </div>
                    <div class="large-10 columns">
                      <input type="email" id="email" placeholder="jane@smithco.com" required>
                      <small class="error">What email should we reply to?</small>
                    </div>
                  </div>
                  <label>Your Message</label>
                  <textarea rows="6" required id="message" placeholder="How may we help you?"></textarea>
                  <small class="error">What would you like to discuss?</small>
                  <button type="submit" class="radius button">Submit</button>
                </form>
              </div>
            </section>
            <section class="section">
              <h5 class="title">Staff</h5>
              <div class="content" data-slug="panel2">
                <ul class="large-block-grid-5">
                  <li data-attribute="doctor"><a href="mailto:dr@myfeetdoc.com"><img src="/img/doctor_sm.jpg" alt="Dr.Trybuch">Dr. Trybuch</a></li>
                </ul>
              </div>
            </section>
          </div>
        </div>
        <div class="large-3 columns">
          <h5>Office Locations:</h5>

          <p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.6504396379787!2d-76.99982028420946!3d38.88623877957241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b8321ed74e85%3A0xbfae8e187c1192a1!2s620+C+St+SE%2C+Washington%2C+DC+20003!5e0!3m2!1sen!2sus!4v1459281794926" frameborder="0" style="border:0; height: 400px; width:280px;" allowfullscreen></iframe>

          </p>
          <h5>Capitol Hill</h5>
          <h6>202.543.0035</h6>
          <p>
            620 C St SE,<br/>
            Washington, DC 20003
          </p>
        </div>

      </div>
      <script>
 $('#contact').submit(function(e) {
    //prevent default form submitting so it can run the ajax code first
    e.preventDefault();

    $(this).on('valid.fndtn.abide', function() {    //if the form is valid then grab the values of these IDs (name, email, message)
      var name = $("input#name").val();
      var email = $("input#email").val();
      var message = $("textarea#message").val();

      //Data for reponse (store the values here)
      var dataString = 'name=' + name +
        '&email=' + email +
        '&message=' + message;

      //Begin Ajax call
      $.ajax({
        type: "POST",
        url:"/dir/email.php", //runs the php code
        data: dataString, //stores the data to be passed
        success: function(data){ // if success then generate the div and append the the following
          $('#contact').html("<div id='success'></div>");

            $('#success').html("<br /><h4>Thanks!</h4>")
            .append('<p><span style="font-size:1.5em;">Hey</span> <span class="fancy">'+ name +'</span>,<br />I&acute;ll get back to you as soon as I can ;)</p>')
            .hide()
            .fadeIn(1500);
            $('#success').hide(8000);
        },
        error: function(jqXHR, status, error){ //this is to check if there is any error
            alert("status: " + status + " message: " + error);
        }
      }); //End Ajax call
      //return false;
    });
  });


      </script>
<?php include('footer.php') ?>
