<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Using Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <!-- User defined styles  -->
    <link rel="stylesheet" href="components/common-components/styles.css" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <title><?php print(!isset($_SESSION['userID'])? 'Login | Addressbook' : 'Boom | Addressbook' ) ?></title>
</head>

