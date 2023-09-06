
<?php

include '../Controller/UserU.php';

$error = "";

// create formation
$user = null;

// create an instance of the controller
$userU = new userU();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["adress"]) &&
    isset($_POST["role"])

   
) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["adress"]) &&
        !empty($_POST["role"]) 

    ) {
        $user = new User(
            null,
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['adress'],
            $_POST['role']

        );
        $userU->addUser($user);
        header('Location:espace.php');
    } else
        $error = "Missing information";
}


?>



<!DOCTYPE html>
<html>

<head>
    <title>Account registration form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        html,
        body {
            min-height: 100%;
        }

        body,
        div,
        form,
        input,
        select,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
        }

        h1 {
            margin: 0;
            font-weight: 400;
        }

        h3 {
            margin: 12px 0;
            color: #8ebf42;
        }

        .main-block {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
        }

        form {
            width: 100%;
            padding: 20px;
        }

        fieldset {
            border: none;
            border-top: 1px solid #8ebf42;
        }

        .account-details,
        .personal-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .account-details>div,
        .personal-details>div>div {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .account-details>div,
        .personal-details>div,
        input,
        label {
            width: 100%;
        }

        label {
            padding: 0 5px;
            text-align: right;
            vertical-align: middle;
        }

        input {
            padding: 5px;
            vertical-align: middle;
        }

        .checkbox {
            margin-bottom: 10px;
        }

        select,
        .children,
        .gender,
        .bdate-block {
            width: calc(100% + 26px);
            padding: 5px 0;
        }

        select {
            background: transparent;
        }

        .gender input {
            width: auto;
        }

        .gender label {
            padding: 0 5px 0 0;
        }

        .bdate-block {
            display: flex;
            justify-content: space-between;
        }

        .birthdate select.day {
            width: 35px;
        }

        .birthdate select.mounth {
            width: calc(100% - 94px);
        }

        .birthdate input {
            width: 38px;
            vertical-align: unset;
        }

        .checkbox input,
        .children input {
            width: auto;
            margin: -2px 10px 0 0;
        }

        .checkbox a {
            color: #8ebf42;
        }

        .checkbox a:hover {
            color: #82b534;
        }

        button {
            width: 100%;
            padding: 10px 0;
            margin: 10px auto;
            border-radius: 5px;
            border: none;
            background: #8ebf42;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
        }

        button:hover {
            background: #82b534;
        }

        @media (min-width: 568px) {

            .account-details>div,
            .personal-details>div {
                width: 50%;
            }

            label {
                width: 40%;
            }

            input {
                width: 60%;
            }

            select,
            .children,
            .gender,
            .bdate-block {
                width: calc(60% + 16px);
            }
        }
    </style>
</head>

<body>
    <h1>Create a free account</h1>

      <legend>
          <h3>Account Details</h3>
        </legend>
 
          <div id="error">
        <?php echo $error; ?>
    </div>

        <form action="" method="POST">


                    <div>
                        <div><label>nom</label><input type="nom" name="nom" id="nom"></div>
                        <br>
                        <div><label>prenom</label><input type="prenom" name="prenom" id="prenom"></div>
                           <br>
                        <div><label>adress</label><input type="adress" name="adress" id="adress"></div>
                           <br>
                      <div class="form-group">
<label>role</label>
<select name="role" id="role" class="form-control">
<option value ="0" selected>Select</option>
<option value ="admin">admin</option>
<option value ="ens">ens</option>
<option value ="etud">etud</option>
<option value =" autre">autre</option>
                        </select>

   <br>
      <br>
                        </div>
            
                    </div>
                    
                </div>
            </fieldset>
            
<tr align="center">
                <td>
                    <input type="submit" value="Sign in">
                </td>
                   <br>  
                    <br>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>        </form>
    </div>
</body>

</html>