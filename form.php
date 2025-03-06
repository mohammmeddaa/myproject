<?php



    
   if (isset($_POST['submit']))  { 

    $firstName =       $_POST ['firstName'];
    $lastName =        $_POST ['lastName'];
   $email  =            $_POST ['email'];

    $firstName =       mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName =        mysqli_real_escape_string($conn, $_POST['lastName']);
    $email  =          mysqli_real_escape_string($conn, $_POST['email']);

    


// echo $firstName . ' ' . $lastName . ' ' . $email;

      // echo $firstName . ' ' . $lastName . ' ' . $email;

      $sql="INSERT INTO users(firstName, lastName, email) 
            VALUES ('$firstName' , '$lastName' , '$email')";

            if(empty($firstName)){
              $errors['firstNameEroor'] = 'يرجى ادخال الاسم الاول';
            }elseif(empty($lastName)){
                $errors['lastNameEroor'] = 'يرجى ادخال الاخير ';
            }elseif(empty($email)){
                $errors['firstNameEroor'] = 'يرجى ادخال الايميل ';
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['firstNameEroor'] = 'يرجى ادخال الاسم الاخير ';
            }else{
                if(mysqli_query($conn, $sql )){
                    header('Location:  index.php');
                 }else{
                     echo 'Error: ' . mysqli_error($conn);
                 }
            }
         
        
        
    }
