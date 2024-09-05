<?php
if (!session_id())
    session_start();
if (isset($_GET['exit'])) {
    session_unset();
    header("Location: /");
}
?>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>МУП "Водоканал"</title>

        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
              integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
              crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">


    </head>
    <body>
<?php include 'header.php'; ?>