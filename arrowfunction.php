<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Arrow Functions</h2>

<p>With arrow functions, you don't have to type the function keyword, the return keyword, and the curly brackets.</p>

<p>Arrow functions are not supported in IE11 or earlier.</p>

<p id="demo"></p>

<script>
   function myfunction(){
    return "hello";
   }
    x = () => ("this is test");

   document.getElementById("demo").innerHTML = x(2,3) ;
</script>

</body>
</html>