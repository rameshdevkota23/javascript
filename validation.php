<!DOCTYPE html>
<html>
<head>
<script>
 
        function myFunction(){
            let a = document.forms["myForm"]["name"].value;
            if (a == "") {
                alert("There should some value in name");
                return false;
            }
        }
</script>
</head>
<body>
<form name = "myForm" action="#" onsubmit ="myFunction()">
    <input type = "text" name = "name">
    <input type="submit" value="submit"  >
</form>

</body>
</html>
