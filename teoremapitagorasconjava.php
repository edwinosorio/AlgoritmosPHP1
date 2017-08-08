

<HTML>
<HEAD>



<TITLE>Ejemplos Javascript: ejemplo práctico </TITLE>



</HEAD>

<BODY bgcolor="white">

<SCRIPT>





function touse() {
alert("just enter a and b, dont square it, your computer will do it for you")
}
function solvepg() {
a = document.pythagorean
b = a.a.value
c = a.b.value
c=parseInt(c)
b=parseInt(b)
b = b*b
c = c*c
d = b+c
e = Math.sqrt(d)
document.pythagorean.theorem.value = e

}
</script>
<P>


<FORM name="pythagorean">
<CENTER>
<P>El teorema de Pitágoras
<BR>
<I>a(cuadrado) + b(cuadrado) = c(cuadrado)
<HR>
<P>
<INPUT TYPE="button" onClick="touse()" value="ingrese numeros....">
<P>
A
<input type="text" name="a" value="">
<P>
A
<input type="text" name="b" value="">
<P>
<input type="button" value="buscar.." onClick="solvepg()">
<P>
Resultado:
<input type="text" name="theorem" value="">
</form>
</center>



</body>
</html>
