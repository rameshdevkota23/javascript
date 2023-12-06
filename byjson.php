<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Objects</h2>
<p>Display properties in JSON format:</p>

<p id="demo"></p>

<script>
const person = {
  name: "John",
  age: 30,
  city: "New York"
};
let a = JSON.stringify(person);
document.getElementById("demo").innerHTML = a;
</script>

</body>
</html>
