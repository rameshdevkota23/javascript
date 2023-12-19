<!DOCTYPE html>
<html>
<body>

<h2>JavaScript HTML DOM</h2>
<h3>Replace an HTML Element.</h3>

<div id="div1">
<p id="p1">This is a paragraph.</p>
<p id="p2">This is a paragraph.</p>
</div>

<script>
     const element = document.createElement("p");
     const node = document.createTextNode("THis is new paragraph");
     element.appendChild(node);
    
     const parent = document.getElementById("div1");
     const child = document.getElementById("p1");
      parent.replaceChild(element, child);

</script>

</body>
</html>
