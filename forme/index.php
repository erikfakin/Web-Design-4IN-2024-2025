<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <!-- il method puo essere: get o post-->
    <!-- l'action rappresenta l'indirizzo dove voglio mandare la richiesta-->
    <form method="get" action="https://www.google.com/search">
        <label for="search">Cosa voui cercare su google? </label>
        <input type="text" name="q">
        <button type="submit">Cerca</button>
        <button type="reset">Resetta</button>
        <button type="button" onclick="alert('BUU')">Alert</button>
    </form>

    <hr>
    <h2>Tipi di input piu' comuni</h2>
    <form>
        <label for="nome">Nome:</label>
        <input type="text" name="nome">

        <label for="email">Email:</label>
        <input type="email" name="email">

        <label for="password">Password:</label>
        <input type="password" name="password">
        
        <label for="data">Data:</label>
        <input type="date" name="data" id="">

        <label for="descrizione">Descrizione:</label>
        <textarea name="descrizione"></textarea>
        <button>Invia</button>
    </form>
    
</body>
</html>