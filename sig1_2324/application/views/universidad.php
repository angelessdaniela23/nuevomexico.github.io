<br>
<h1>DIRECCION DE LA UTC</h1>
<img src="<?php echo base_url('assets/img/marcador_utc.png'); ?>"
alt="Logo UTC">
<br>
<div id="mapa1" style="width:100%; height:500px; border:2px solid black">
</div>
<script type="text/javascript">
  function initMap(){
    var coordenadaCentral=new google.maps.LatLng(-0.9177586146358654, -78.63283559993953);
    var miMapa=new google.maps.Map(document.getElementById('mapa1'),
    {
      center: coordenadaCentral,
      zoom:10,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }

  );
  var macadorUTC= new google.maps.Marker({
    position:new google.maps.LatLng(-0.9176727949587269, -78.63292143062216),
    map: miMapa,
    title:'UTC Matriz',
    icon:'<?php echo base_url('assets/img/marcador_utc.png'); ?>'
  });

  var macadorSalache= new google.maps.Marker({
    position:new google.maps.LatLng(-0.9994490969508111, -78.62335383606226),
    map: miMapa,
    title:'UTC Campus Salache'
  });

  var macadorPujili= new google.maps.Marker({
    position:new google.maps.LatLng(-0.9582520076782411, -78.69651281897521),
    map: miMapa,
    title:'UTC Extencion Pujili'
  });

  var macadorLaMana= new google.maps.Marker({
    position:new google.maps.LatLng(-0.9505184323832204, -79.22845049549157),
    map: miMapa,
    title:'UTC Extencion La Mana',
    icon:'<?php echo base_url('assets/img/marcador_utc.png'); ?>'
  });



}
</script>
