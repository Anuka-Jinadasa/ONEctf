<script>
function myFunction() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("s1").value;
if(!x)
{
  alert("Please enter the flag!");

}

 else if(x == "onectf{5eabe85ec9ba2ac17a0f65f4dcac2dc9}")
 {
    //text = "Incorrect";
    alert("Congratulations");
  }
  else
  {
    //text = "Congratulations";
    alert("Wrong Flag");
  }
  document.getElementById("txt").innerHTML = text;
}
</script>
