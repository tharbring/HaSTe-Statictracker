<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="T. Harbring">
    <meta name="generator" content="N/A">
    <!--<title>GROUPNAME</title>-->
    <title>Staticplanner-Demo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">

</head>

<header>
    <?php include ($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
</header> 

<body>
    <main>
        <form action="/authenticate.php" method="post">
            <div class="mb-3">
                <!--<label for="GroupPassword" class="form-label">Password:</label>-->
                <label for="GroupPassword" class="form-label">Password: (StaticplannerDemo2022)</label>
                <input type="password" class="form-control" id="GroupPassword" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="cookie" name="setcookie">
                <label class="form-check-label" for="cookie">Keep me logged in for 90 days (This function will require the usage of cookies on the users computer)</label>
            </div>
            <button type="submit" class="btn btn-light">Login</button>
        </form>
    </main>
</body>
