<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreOnline</title>
    <link rel="stylesheet" href="../css/Register.css">
</head>
<body>
    <header>
        <nav></nav>
    </header>

    <main class="ContainerMain">
        <div class="containerPrincipalRegister">
            <form action="../Controladores/Personascontrolador.php" method="post" class="containerRegistro">
                
                <h1>Registrate</h1>
                <label for="oneName">
                    <span>Ingresa tu nombre</span>
                    <input type="text" id="oneName" name="oneName">
                </label>
                <label for="twoName">
                    <span>Ingresa tu Segundo nombre</span>
                    <input type="text" id="twoName" name="twoName">
                </label>
                <label for="OneLastName">
                    <span>Ingresa tu Apellido</span>
                    <input type="text" id="OneLastName" name="OneLastName">
                </label>
                <label for="TwoLastName">
                    <span>Ingresa tu Segundo Apellido</span>
                    <input type="text" id="TwoLastName" name="TwoLastName">
                </label>
                
                <label for="Cedula">
                    <span>Ingresa tu Cedula</span>
                    <input type="text" id="Cedula" name="Cedula">
                </label>

                <label for="Email">
                    <span>Ingresa tu Email</span>
                    <input type="text" id="Email" name="Email">
                </label>

                <label for="UserName">
                    <span>Ingresa tu Usuario</span>
                    <input type="text" id="UserName" name="UserName">
                </label>
                <label for="Password">
                    <span>Ingresa tu Contraseña</span>
                    <input type="text" id="Password" name="Password">
                </label>
                <button class="BtnRegistro">Registrate</button>
            </form>
        </div>

    </main>
    <footer>

    </footer>
  

</body>
</html>