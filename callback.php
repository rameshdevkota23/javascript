<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Functions</h1>
<h2>Callback Functions</h2>

<p>The result of the calculation is:</p>
<p id="demo"></p>

<script>
function display(something){
    document.getElementById("demo").innerHTML = something;
}

function sum(a,b,callback){
    c = a + b;
    callback(c)
}

sum(2,4,display);
</script>

</body>
</html>
