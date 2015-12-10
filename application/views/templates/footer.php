<!-- footer -->
<footer>
	<div class="foot-text">
		<p>Arbo y Blanco 28 - Resistencia - Chaco  -  Argentina - Telefax: 0362 - 4430604 -<br>
		Todos los derechos reservados Copyright © Consejo Profesional de Abogados y Procuradores de Resistencia 2015</p>
	</div>
</footer>
<!-- footer -->
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: {lat: -27.4560772, lng: -58.98149}
        });

        var image = {
		url: '<?php echo base_url()?>assetics/img/logo.png',
		// This marker is 20 pixels wide by 32 pixels high.
		size: new google.maps.Size(20, 32),
		// The origin for this image is (0, 0).
		origin: new google.maps.Point(0, 0),
		// The anchor for this image is the base of the flagpole at (0, 32).
		anchor: new google.maps.Point(0, 32)
										  };
        var consejoMarker = new google.maps.Marker({
        position: {lat: -27.4,lng: -58.9},
        map: map,
        icon: image
        });
        }
</script>   
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjH3k3RxBQp2BNkbpVrC8iYfYxMKpKShI&signed_in=true&callback=initMap"></script>  
<script src="<?php echo base_url()?>assetics/js/jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url();?>assetics/js/mycarousel.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="<?php echo base_url();?>assetics/js/list-items.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="<?php echo base_url()?>assetics/vendors/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
</body>
</html>
