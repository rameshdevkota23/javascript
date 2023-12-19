<!DOCTYPE html>
<html>
<body>

<h2>JavaScript HTML DOM</h2>
<p>Add a new HTML Element.</p>

<div id="div1">
<p id="p1">This is a paragraph.</p>
<p id="p2">This is another paragraph.</p>
</div>

<script>
   const element = document.createElement("p");
   const newParagraph =  document.createTextNode("This is new paragraph");
         element.appendChild(newParagraph);

         const select = document.getElementById("div1");
         const p1 = document.getElementById("p2");
         select.insertBefore(element,p1); 

</script>

</body>
</html>