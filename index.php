<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>DocuCodeAI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .card h1 {
            color: #333;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .card label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            color: #555;
        }

        .card input[type="file"] {
            margin: 10px 0 20px;
            width: 100%;
            padding: 8px;
        }

        .card button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .card button:hover {
            background-color: #45a049;
        }

        .footer {
            margin-top: 15px;
            font-size: 0.85rem;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>DocuCodeAI</h1>
        <p><strong>Análisis inteligente de código fuente</strong></p>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="file">Selecciona tu Proyecto (.zip):</label>
            <input type="file" name="file" id="file" accept=".zip" required>
            <button type="submit">Subir y Analizar</button>
        </form>
        <div class="footer">© 2025 - Patrones de Software - Viveros - Lupaca - Jarro</div>
    </div>

</body>
</html>
