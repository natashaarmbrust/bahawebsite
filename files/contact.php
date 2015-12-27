
<!doctype html>

<!--Contact created by Shayra Kamal-->

<html>

	<head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Syncopate' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Arimo:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
		<title>Contact</title>

    </head>

    <body>

    <?php include '../components/navigation.php' ;?> 
        
        <div id="container">

            <h5 id="contactheader">Want to Join Baja? Want to Sponsor Baja? Send Us a Message!</h5>
            
            <?php include '../components/form.php' ;?>
            <br/>

            <?php
            // helper function to sanitize form values // 
            function sanitizeForm($input) {
                $input = strip_tags(trim($input));
                return $input;
            }

            // initialization  //
            $inquiry = '';
            $lastname = '';
            $firstname = '';
            $email = '';
            $message = '';
            $fsubmit = 1;

            if (isset($_POST['submit'])) {

                $inquiry = sanitizeForm($_POST['inquiry']);
                $lastname = sanitizeForm($_POST['lastname']);
                $firstname = sanitizeForm($_POST['firstname']);
                $email = sanitizeForm($_POST['email']);
                $message = sanitizeForm($_POST['message']);

                if (strlen($lastname) == 0) {
                    echo "<p class='error'><span class='red'>Please enter last name</span></p>";
                    $fsubmit = 0;
                } 

                if (strlen($firstname) == 0) {
                    echo "<p class='error'><span class='red'>Please enter first name</span></p>";
                    $fsubmit = 0;
                } 

                if (strlen($email) == 0) {
                    echo "<p class='error'><span class='red'>Please enter your email address</span></p>";
                    $fsubmit = 0;
                } 

                if (strlen($message) == 0) {
                    echo "<p class='error'><span class='red'>Please enter a message</span></p>";
                    $fsubmit = 0;
                } 

                if (strlen($lastname) > 0 && strlen($firstname) > 0 && strlen($email) > 0 && strlen($message) > 0) {
                    $fsubmit = 1;
                } else {
                    $fsubmit = 0;
                }

                if ($fsubmit == 1) {
                    echo 
                    "<div id='form-submission'>
                    <p><em>Form Submitted</em></p>
                    Here is what you sent: <br/><br/>
                    Inquiry:<br/>"
                    .$inquiry.
                    "<br/><br/>Last Name: <br/>"
                    .$lastname.
                    "<br/><br/>First name: <br/>"
                    .$firstname.
                    "<br/><br/>Email: <br/>"
                    .$email.
                    "<br/><br/>Message: <br/>"
                    .$message.
                    "<br/>
                    </div>  
                    <script>
                    setTimeout(function(){
                        window.location='thankyou.php';
                    }, 4000);
                    </script>"
                    ;
                    // JS timer -- successful submission automatically transitions to thank you page // 
                    // JS timer -- scrolling down after sucessful submission automatically transitions to thank you page // 

                } else {
                    echo
                    "<div id='form-submission'>
                    <p><em>Form Not Submitted. Please Revise</em></p>
                    </div>";
                }
            } 

            ?>


        </div> <!--end container div -->

        <?php include '../components/footer.php' ;?>        
        
        <!-- i_set('display_errors', 1);
        error_reporting(~0); -->
    </body>

</html>