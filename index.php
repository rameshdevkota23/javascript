<!DOCTYPE html>
<html>
<body>
<h1>JavaScript Arrays</h1>
<h2>The flatMap() Method</h2>

<p id="demo"></p>

<script>
const myArr = [1, 2, 3, 4, 5,6];
const newArr = myArr.flatMap(y => [y*y+1]);
document.getElementById("demo").innerHTML = newArr;
</script>

</body>
</html>