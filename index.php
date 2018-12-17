<!-- This Bootstrap4 CDN should be added to the <head> tag of your site, but it's not required! -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- This should be added to the <body> tag of your site. -->
<table class="table table-striped">	
<thead>
    <tr>
      <th scope="col">Server Name</th>
      <th scope="col">IP</th>
      <th scope="col">Players</th>
	  <th scope="col">Map</th>
    </tr>
  </thead>
  <tbody>
	<?php
		
		$servers = array("ApiKey1", "ApiKey2", "ApiKey3", "ApiKey4");
		$url = 'https://unturned-servers.net/api/?object=servers&element=detail&key=';
		
		foreach ($servers as $api) {
			$key = "$url$api";
			$key_json = file_get_contents($key);
			$key_array = json_decode($key_json);
			# This is an example use of the options to display data in simple Bootstrap4 table.
			echo "<tr><td>" .$key_array->{'name'}. "</td><td>" .$key_array->{'address'}. ":" .$key_array->{'port'}. "</td><td>" .$key_array->{'players'}. "/" .$key_array->{'maxplayers'}. "</td><td>" .$key_array->{'map'}. "</td></tr>";
		}
	?>
  </tbody>
</table>