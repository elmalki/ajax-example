<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exemple</title>
    <link rel="stylesheet" href="">
    <script src="js/jquery.js" ></script>
</head>
<body>
    <input id="number" type="text"><div id="resultat"></div>
</body>
</html>
<script>
$(document).ready(function($) {
        $('#number').keyup(function(event) {
            $.ajax({
                url: 'calcul.php',
                type: 'POST',
                data: {number: $(this).val()},
            })
            .done(function(data) {
                $('#resultat').html(data);
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });

        });
    });

</script>