<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Dasar Ajax</title>
</head>

<body>
    <h1>Tutorial Ajax</h1>
    <div id="hasil"></div>
    <button onclick="loadContent()">Load Content</button>
    <script>
        function loadContent() {
            var xhr = new XMLHttpRequest();
            var url = "http://localhost/java/kode.json";
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("hasil").innerHTML = this.responseText;
                }
            };
            xhr.open("GET", url, true);
            xhr.send();
        }
    </script>
</body>

</html>