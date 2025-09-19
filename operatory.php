<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liczby parzyste od 0 do 10</title>
</head>
<body>
    <h1>Liczby parzyste od 0 do 10</h1>
    <ul id="evenNumbersList"></ul>
    <script>
        let i = 0;
        const list = document.getElementById('evenNumbersList');
            while (i <= 10) {
                if (i % 2 === 0) {
                const listItem = document.createElement('li');
                listItem.textContent = i;
                list.appendChild(listItem);
            } 
            i++;
        }
    </script>
</body>
</html>
