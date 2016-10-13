<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h3> GET Sincron </h3>

<script>

    var peticio = new XMLHttpRequest();
    peticio.open("DELETE", "http://localhost/XMLHTTPRequest/DELETE_Asincron/formulari.php");
    //peticio.open("DELETE", 'http://localhost/XMLHTTPRequest/X-Test/1Mb.txt', false);  //Test 1M
    //peticio.open("DELETE", 'http://localhost/XMLHTTPRequest/X-Test/10Mb', false);  //Test 10M
    peticio.onreadystatechange = function() {
        if (peticio.readyState == 4) {
            if (peticio.status == 200) {
                console.log(peticio.responseText);
            } else {
                console.log("Error loading page\n");
            }
        }
    };
    peticio.send();

</script>


</body>
</html>