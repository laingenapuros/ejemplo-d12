<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Formulario de contacto</h1>
    @if ($errors->any())
	<div class="alert alert-danger">
		<ul>
		@foreach($errors ->all() as $error)
		<li> {{$error}} </li>
		@endforeach
		</ul>
	</div>
@endif
    <form action="contacto" method= "POST">

    <h3> {{ $tipo }} </h3>  <!-- limpian inserciones de javascript -->
    <!-- BASE DE DATOS -->
    
        <!-- ?php echo $tipo;*/-->
        @csrf 
        <label for ="correo"> Correo: </label>
        <input type ="text"  name="correo" 
        @if ($tipo == 'alumno')
            value="@alumnos.udg.mx"
        @else
            value= "@gmail.com" 
        @endif> </label>
        
        <label for ="comentario"> Comentario: </label>
        <textarea name="comentario" id="comentario" cols="10" rows = "1"> </textarea> 
        <select name = "tipo" id="">
            <option value = "alumno"> Alumno </option>
            <option value = "empleado"> Empleado </option>
</select>
        <input type ="submit"> </input>
</form>

</body>
</html>