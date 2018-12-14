<script type="text/javascript">
  var codigo = document.getElementById('codigo')
  if (codigo) {
    var codigoNu = codigo
    document.getElementById('numero').setAttribute('value', ''.concat('codigoNu'))
  }
</script>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Factura</title>
  </head>
  <body>
    <header>
      <img src="../assets/img/brand/logo.png" alt="" style="width: 200px;">
      <h2>Cablenet Patito S.A.</h2>
      <h3>NIT: 5039413-5</h3>
      <h3>15 calle "B" 12-69 Zona 5, Ciudad de Guatemala</h3>
      <h3>Teléfono: (502)5456-7890</h3>
      <span>Factura N° </span><input type="text" id="numero" style="color: red; background: none; border: none;" value="13" disabled >
    </header>
    <div>
      <input type="text" id="nombre" style="background: none; border: none;" value="Alejandro Chanquín" disabled>
      <span>Fecha </span> <input type="text" id="fecha" style="background: none; border: none;"  value="12/14/2018" disabled>
    </div>
    <div>
      <input type="text" id="servicio" style="background: none; border: none;" value="Cable" disabled>
      <input type="text" id="monto" style="background: none; border: none;"  value="Q 100.00" disabled>
    </div>
  </body>
</html>
