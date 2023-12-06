<!DOCTYPE html>
<html>
<body>
    <p id = "demo"></p>

<script>
    const obj = {
        name : "Ramesh Devkota",
        age : "26",
        sex : "boy",
        college : {
            name : "moonlight school",
            address: "serigaun",
        }
    }

    document.getElementById("demo").innerHTML = obj.college.name;
</script>
</body>
</html>