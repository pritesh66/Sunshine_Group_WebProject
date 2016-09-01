    <?php

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        header("Access-Control-Allow-Origin: *");   //allow cross domain connections
        header('Access-Control-Allow-Methods: GET, POST');

        $firstName = $_POST['firstName'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];


        $error = array();

        if($firstName == "") {
            array_push($error,"First Name is required");
        }else{
                array_push($error,"0");
            }

        if($comment == "") {
            array_push($error,"Comment is required");
        }else{
            array_push($error,"0");
        }

        if($email != "") {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($error,"Email Id is invalid");
            }else {
                array_push($error, "0");
            }
        }
        else{
            array_push($error,"Email Id is required");
        }

    echo json_encode($error);

    }

    ?>


