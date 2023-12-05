<!DOCTYPE html>
<html>
<body>
<h1>JavaScript Arrays</h1>
<h2>The filter() Method</h2>

<p>Create a new array from all array elements that passes a test:</p>

<p id="demo"></p>

<script>
const numbers = [45, 4, 9, 16, 25];
const number2 = numbers.filter(myFunction);

document.getElementById("demo").innerHTML = number2;

function myFunction(index,value,array){
    return 12 > index ;
}
</script>

</body>
</html>
