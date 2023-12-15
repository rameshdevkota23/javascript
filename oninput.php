<!DOCTYPE html>
<html>
<body>

<label>Your Name</label>
<input type="text" id="fname" oninput="upperCase()">
<p id="demo"></p>

<script>
function upperCase(){
  document.getElementById("fname").value = document.getElementById("fname").value.toUpperCase();
}
</script>

</body>
</html>

