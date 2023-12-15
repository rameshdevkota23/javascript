<!DOCTYPE html>
<html>
<body>
<h1>JavaScript HTML Events</h1>
<h2>The onclick Attribute</h2>
<button onclick="displayDate()">Buttton</button>

<script>
    function displayDate(){
        document.getElementById("demo").innerHTML = Date();
    }
</script>
<p id="demo"></P>
</body>
</html>