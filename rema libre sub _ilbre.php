<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Primera Página Web</title>
    <style>
        /* Aquí damos color y forma a la página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .tarjeta {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 350px;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 10px;
        }
        p {
            color: #555555;
            line-height: 1.5;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 15px;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <!-- Aquí va el contenido visible de la página -->
    <div class="tarjeta">
        <h1>¡Hola, soy Alex!</h1>
        <p>Estoy aprendiendo a programar páginas web usando Sublime Text. Me gusta la tecnología, la música y el café.</p>
        
        <button onclick="alert('¡Gracias por visitar mi página!')">Saludar</button>
    </div>

</body>
</html>

