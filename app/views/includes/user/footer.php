<!-- Footer -->
<footer class="page-footer">
		<div class="container">
		  <div class="row">
			<div class="col-lg-8 col-md-8 ">
</br>
			<p>Barangay Pinyahan is a barangay in Quezon City. Its population as determined by the 2020 Census was 21,868. This represented 0.74% of the total population of Quezon City. </p>
		  </div>
		  <div class="col-lg-4 col-md-4 col-sm-12">
			<h6 class="text-uppercase font-weight-bold">Contact</h6>
			<p>37 Malakas Street, Brgy. Pinyahan, DIstrict 4
			<br/>+ 63 917 712 4525
			<br/>+ 63 969 636 5242</p>
		  </div>
		</div>
		<div class="footer-copyright text-center">© 2023 Copyright: Barangay Pinyahan </div>
	</footer>

<!-- End of Footer -->


     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
     
 


	<!-- Jquery needed -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

   <script type="text/javascript">
    $(function(){
      var navbar = $('.header-inner');
      $(window).scroll(function(){
        if($(window).scrollTop() <=40){
          navbar.removeClass('navbar-scroll');
        }else{
          navbar.addClass('navbar-scroll');
        }
      });
     });
     </script>
 
     <script src="main.js"></script>
	 

	<!-- JS and Jquery Calendar-->
<script src="./javascript-calendar.js" type="text/javascript"></script>

<script>

try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>

  <script type='text/javascript'>
  $(document).ready(function(){

    $(".description_button").on('click', function(event){

      var name = $(this).attr('name');

      $("#descriptionModal .description_entry").addClass('d-none');
      
      $("#description_"+name).removeClass('d-none');

    });

  });
</script>

<script href="<?php echo URLROOT . '/user/js/gallery.js' ?>"></script>

 </body>
</html>