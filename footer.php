<!-- FOOTER -->
<footer class="row width padtop">
    <div class="bluebg small-12 columns">
    <div class="smalltop">
    	<?php dynamic_sidebar("Footer"); ?>
    </div>

    <!-- Uncomment to enable footer menu -->
    <!--<?php wp_nav_menu(/*array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list')*/); ?>-->

    <!-- Contact Form -->
    <!--<div class="small-12 medium-12 large-4 columns">
    	<div class="row">
        <h4>Kontakt:</h4>
      </div>
      <div class="row">
    	<div class="small-8 columns">
    		<input type="text" id="yourEmail" placeholder="E-mail">
    	</div>
    	</div>
    	<div class="row">
    	<div class="small-12 columns">
    		<textarea rows="8"></textarea>
    	</div>
    	</div>
    	<div class="row">
    	<div class="small-12 columns">
    		<a href="#" title="" class="button tiny radius">Kontakt</a>
    	</div>
    	</div>-->
    </div>
</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation({
  orbit: {
      animation: 'fade', // Sets the type of animation used for transitioning between slides, can also be 'fade'
      timer_speed: 5000, // Sets the amount of time in milliseconds before transitioning a slide
      pause_on_hover: true, // Pauses on the current slide while hovering
      resume_on_mouseout: true, // If pause on hover is set to true, this setting resumes playback after mousing out of slide
      animation_speed: 500, // Sets the amount of time in milliseconds the transition between slides will last
      stack_on_small: false,
      navigation_arrows: true,
      slide_number: false,
      bullets: false, // Does the slider have bullets visible?
      circular: true, // Does the slider should go to the first slide after showing the last?
      timer: true, // Does the slider have a timer visible?
      variable_height: true, // Does the slider have variable height content?
  }
});

// Following lines of code adds an arrow to the active slider button
$(".arrowbtn-1").addClass("arrow");

$("#slidershow").on("after-slide-change.fndtn.orbit", function(event, orbit) {

  if ( orbit.slide_number == 1) {
    $(".arrowbtn-1").removeClass("arrow");
    $(".arrowbtn-3").removeClass("arrow");
    $(".arrowbtn-4").removeClass("arrow");
    $(".arrowbtn-5").removeClass("arrow");
    $(".arrowbtn-2").addClass("arrow");
  } else if ( orbit.slide_number == 2 ) {
    $(".arrowbtn-1").removeClass("arrow");
    $(".arrowbtn-2").removeClass("arrow");
    $(".arrowbtn-4").removeClass("arrow");
    $(".arrowbtn-5").removeClass("arrow");
    $(".arrowbtn-3").addClass("arrow");
  } else if ( orbit.slide_number == 3 ) {
    $(".arrowbtn-1").removeClass("arrow");
    $(".arrowbtn-2").removeClass("arrow");
    $(".arrowbtn-3").removeClass("arrow");
    $(".arrowbtn-5").removeClass("arrow");
    $(".arrowbtn-4").addClass("arrow");
  } else if ( orbit.slide_number == 4 ) {
    $(".arrowbtn-1").removeClass("arrow");
    $(".arrowbtn-2").removeClass("arrow");
    $(".arrowbtn-3").removeClass("arrow");
    $(".arrowbtn-4").removeClass("arrow");
    $(".arrowbtn-5").addClass("arrow");
  } else if ( orbit.slide_number == 0 ) {
    $(".arrowbtn-2").removeClass("arrow");
    $(".arrowbtn-3").removeClass("arrow");
    $(".arrowbtn-4").removeClass("arrow");
    $(".arrowbtn-5").removeClass("arrow");
    $(".arrowbtn-1").addClass("arrow");
  }

  console.info("after slide change");
  console.info("slide " + orbit.slide_number + " of " + orbit.total_slides);
});

	})(jQuery);

//Opens the first accordion on årsrapporter
  //$("#panel1").addClass("active");

  //adds space before first slide button
  //$(".slide-1").addClass("large-offset-1");
</script>

</body>
</html>