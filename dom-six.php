<!DOCTYPE html>
<html>
<body>

<h2>JavaScript HTML DOM</h2>
<h3>Remove an HTML Element.</h3>

<div>
<p id="p1">This is a paragraph.</p>
<p id="p2">This is another paragraph.</p>
</div>
<button onclick = "myFunction()">Button</button>

<script>
function myFunction(){
    document.getElementById("p1").remove();
}

</script>

</body>
</html>