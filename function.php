<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Objects</h2>
<p id="demo"></p>

<script>
const obj = {
    name : "Ramesh Devkota",
    age : "22",
    subject : "IT"
};
obj.names = function(){
return "my nick name is " + this.name;
}
document.getElementById("demo").innerHTML = obj.names();
</script>



</body>
</html>
