<script type="text/javascript">
   function get(name){
   if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
      return decodeURIComponent(name[1]);
	}
	let a = get('message');
	if(a != undefined){
		alert(a);
	}

</script>