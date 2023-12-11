<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Validation</h2>

<p>Please input a number between 1 and 10:</p>

<input id = "num1" type="text">
<button onclick = "myFunction()">Button</button>
<p id = "demo" ></p>

<script>
    function myFunction(){
        let x = document.getElementById("num1").value;
        if ( isNaN(x) || x<1 || x>10)  {
            document.getElementById("demo").innerHTML = "Invalid";
    }
    else{
        document.getElementById("demo").innerHTML = "Valid";
    }
    }

   
   
</script>

</body>
</html> 
