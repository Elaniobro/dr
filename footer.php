    <footer class="row" id="footer">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>©<span id="copyright-date"></span> • Dr. Eliezer Trybuch, DPM, LLC</p>
          </div>
          <div class="large-6 columns">
            <ul class="inline-list right">
              <li>Office Hours: 9am - 5pm Tuesday & Thursday</li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
        </div>
      </div>
      <script>
       var d = new Date();
      var copyDate = d.getFullYear();
      document.getElementById("copyright-date").innerHTML = copyDate;
      </script>
    </footer>

    <script>
      $(document).foundation({
        orbit: {
          animation: 'fade', // Sets the type of animation used for transitioning between slides, can also be 'fade'
          timer_speed: 2000, // Sets the amount of time in milliseconds before transitioning a slide
          pause_on_hover: false, // Pauses on the current slide while hovering
          resume_on_mouseout: true, // If pause on hover is set to true, this setting resumes playback after mousing out of slide
          next_on_click: true, // Advance to next slide on click
          animation_speed: 800, // Sets the amount of time in milliseconds the transition between slides will last
          container_class: 'orbit-container',
          slide_number: false,
          next_class: 'orbit-next', // Class name given to the next button
          prev_class: 'orbit-prev', // Class name given to the previous button
          timer_container_class: 'orbit-timer', // Class name given to the timer
          bullets: false, // Does the slider have bullets visible?
          circular: true, // Does the slider should go to the first slide after showing the last?
          timer: true, // Does the slider have a timer active? Setting to false disables the timer.
          variable_height: false, // Does the slider have variable height content?
          swipe: true
      }
    });
    </script>
  </body>
</html>
