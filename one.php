<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Functions</h2>
<p>This example calls the fullName method of person, using it on person1:
</p>

<p id="demo"></p>

<script>
    const person = {
      myFunction : function(){
        return "first name " + this.first + "last Name" + this.last;
      }
    }

const obj1 = {
    first : "Ramesh",
     last : "Devkota"
}
document.getElementById("demo").innerHTML = person.myFunction.call(obj1);
</script>

</body>
</html>

