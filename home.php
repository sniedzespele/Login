<?php 
    // initialize errors variable
    $errors = "";

    // connect to database
    $db = mysqli_connect("localhost", "root", "", "userregistration");

    // insert a quote if submit button is clicked
    if (isset($_POST['submit'])) {
        if (empty($_POST['task'])) {
            $errors = "Please fill in all fields!";
        }else{
            $task = $_POST['task'];
            $sql = "INSERT INTO tasks (task) VALUES ('$task')";
            mysqli_query($db, $sql);
            header('location: home.php');
        }
    }   

session_start();
if(!isset($_SESSION['username'])){
    header('index.php');
} 
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Magebit</title>
        <script src="styles/script.js" defer></script>
        <link href="styles/style.css?version=51" rel="stylesheet" type="text/css">

    </head>

    <body>

        <header></header>
        <div class=content2>
            <div class="whitebg">
                <div class="heading">
                    <h2>Here you can add information about yourself</h2>
                </div>
                <form id="add" method="post" action="home.php" class="input_form">
                    <?php if (isset($errors)) { ?>
                        <p>
                            <?php echo $errors; ?>
                        </p>
                        <?php } ?>
                            <label for="statement">Statement<span style="color:red">*</span></label>
                            <br>
                            <input type="text" name="task" class="task_input">
                            <br>
                            <br>
                            <label for="answer">Answer<span style="color:red" class=ls>*</span></label>
                            <br>
                            <input type="text" name="task" class="task_input">
                            <br>
                            <button type="submit" name="submit" id="add_btn" class="addbtn">Add it</button>
                </form>
                <br>
                <br>
                <br>
                <div class=heading>
                    <h2>Personal information</h2>
                </div>

                <table style="width:90%">
                    <tr>
                        <th>Statement</th>
                        <th>Answer</th>
                    </tr>
                    <br>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
        <footer>
            <div class="footerdiv">
                <p>All Rights Reserved “Magebit” 2016</p>
            </div>
        </footer>
        </div>
        </div>
    </body>

    </html>