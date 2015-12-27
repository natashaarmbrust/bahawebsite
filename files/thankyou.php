
<!doctype html>

<!--Thank you modal page (sucessful contact form submission) created by Shayra Kamal-->

<html>

	<head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Syncopate' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Arimo:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
		<title>Thank you!</title>

    </head>

    <body>

    <?php include '../components/navigation.php' ;?> 
        
        <div id="container">
            <div id="thanks">
                <h1>Thank You! </h1>
                <p>Thank you for your message, a member of the Baja Team will get back to you shortly.</p>
            </div>
            
            
            
        </div> <!--end container div -->

        <?php include '../components/footer.php' ;?>        
        
        <!-- i_set('display_errors', 1);
        error_reporting(~0); -->
        <script>
            setTimeout(function(){
                window.location='../index.php';
            }, 3000);
        </script>
    </body>

</html>