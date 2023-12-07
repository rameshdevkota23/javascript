<!DOCTYPE html>
<html>
<body>
<h1>JavaScript Classes</h1>
<p>Creating two car objects from a car class:</p>

<p id="demo"></p>

<script>
class Car {
    constructor(name, age){
        this.name = name;
        this.age = age;
    }
}

const myCar1 = new Car("bsw","two");

document.getElementById("demo").innerHTML = myCar1.name;
</script>

</body>
</html>
