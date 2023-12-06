<!DOCTYPE html>
<html>
<body>

<p>Functions can be invoked automatically without being called:</p>

<p id="demo"></p>

<script>
    (function(){
        document.getElementById("demo").innerHTML = "this is test";
    })();
</script>

</body>
</html>