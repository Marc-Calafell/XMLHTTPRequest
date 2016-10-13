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
     peticio.open('GET', 'http://localhost/XMLHTTPRequest/GET_Sincron/index.php', false);
     //peticio.open('GET', 'http://localhost/XMLHTTPRequest/X-Test/1Mb.txt', false);  //Test 1M
     //peticio.open('GET', 'http://localhost/XMLHTTPRequest/X-Test/10Mb', false);  //Test 10M

    peticio.send(null);
    if (peticio.status == 200)
        console.log(peticio.responseText);
</script>


</body>
</html>