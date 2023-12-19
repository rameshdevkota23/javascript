<!DOCTYPE html>
<html>
<body>
<div id = "id1">
<h2>JavaScript HTML DOM</h2>
<p>Add a new HTML Element.</p>
<div>
<script>
    const element = document.createElement ('p');
    const text = document.createTextNode("Thisis new paragraph");
     element.appendChild(text);
     main = document.getElementById("id1");
     main.appendChild(element);




</script>

</body>
</html>