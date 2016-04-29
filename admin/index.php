<?php include('header.php');?>
      <div class="row">
        <div class="large-12 columns">
          <h1>ADMIN</h1>
          <ul class="button-group">
            <li><a href="#" class="button tiny btn-admin" id="btn-patients">New Patients</a></li>
            <li><a href="#" class="button tiny btn-admin" id="btn-requets">Apt Requests</a></li>
          </ul>
          <div class="row" id="quote">
            <div class="large-12 columns">
              <blockquote id="qod-quote"></blockquote>
              <script src="http://quotesondesign.com/api/3.0/api-3.0.js" type="text/javascript" charset="utf-8"></script>
            </div>
          </div>
          <div class="row" id="request-wrapper">
            <div class="large-12 columns" id="request-container">
              <?php
                #################
                ##
                ##  REQUEST LIST
                ##
                #################
                include('request_list.php');
              ?>
            </div>
          </div>
          <div class="row" id="patient-info-wrapper">
            <div class="large-12 columns" id="patient-info-container"></div>
          </div>
          <div class="row" id="patient-wrapper">
            <div class="large-12 columns" id="patient-container">
              <?php
                #################
                ##
                ##  PATIENT LIST
                ##
                #################
                include('patient_list.php');
              ?>
            </div>
          </div>
        </div>
    </div>
<?php #include('../footer.php');?>
