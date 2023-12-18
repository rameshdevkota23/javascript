<!DOCTYPE html>
<html>
<body>

<h2>JavaScript addEventListener()</h2>

<p>This example uses the addEventListener() method to attach a click event to a button.</p>

<button id="btn" >Button</button>

<script>
    document.getElementById("btn").addEventListener("click", myFunction);
    function myFunction(){
        alert("This is alert message");
    }
</script>
</body>
</html> 