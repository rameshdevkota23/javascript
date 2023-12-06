<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Objects</h2>
<p>Object.values() converts an object to an array.</p>

<p id="demo"></p>

<script>
const person = {
  name: "John",
  age: 30,
  city: "New York"
};

let a = Object.values(person);

document.getElementById("demo").innerHTML = a;
</script>

</body>
</html>
