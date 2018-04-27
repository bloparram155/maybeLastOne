 				 	

 		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   </body>
   <footer>
   	<nav class="container-fluid customFooter" style="background-color: rgb(89,25,45,0.8);;">
   		<div class="container">
   			&nbsp
   			<div class="row">
   				<div class="col-lg-3 text-white">
   				<p>thing3</p>
   				<ul>
   					<li>stuff</li>
   					<li>stuff</li>
   					<li>stuff</li>
   					<li>stuff</li>
   					<li>stuff</li>
   				</ul>
   				</div>
	   			<div class="col-lg-3 text-white">
	   				<p><strong>Siguenos en Nuestras Redes</strong></p>
	   				<ul style="padding-left: 0px">
	   					<li class="d-inline">
		            	<a href="https://www.facebook.com/glitters.studio/">
							<img src="assets/bootstrap/glyphicons/glyph-facebook.png">
						</a>
			            </li>
			            &nbsp
			            <li class="d-inline">
			            	<a href="https://www.instagram.com/glittersguaymas/">
								<img src="assets/bootstrap/glyphicons/glyph-instagram.png">
							</a>
			            </li>
	   				</ul>
	   			</div>
	   			<div class="col-lg-6">
				    <div id="map"class="customFooter"></div>
				    <script>
				      function initMap() {
				        var uluru = {lat: -25.363, lng: 131.044};
				        var map = new google.maps.Map(document.getElementById('map'), {
				          zoom: 4,
				          center: uluru
				        });
				        var marker = new google.maps.Marker({
				          position: uluru,
				          map: map
				        });
				      }
				    </script>
				    <script async defer
				    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDY7FYMHfKhZt8WcXT7ovq4yJUesCzFneQ&callback=initMap">
				    </script>

	   			</div>
   			</div>
   			
   		</div>
	</nav>
   </footer>
</html>