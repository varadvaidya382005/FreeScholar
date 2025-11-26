<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM FILLING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Ensure content stacks vertically */
            align-items: center;
            justify-content: flex-start; /* Align content to the top of the screen */
            min-height: 100vh;
        }
        
        .form-container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 20px; /* Add some top margin to the form */
        }
        
        h1 {
            color: #e8b038;
            text-align: center;
            margin-bottom: 20px;
            margin-top: 0; /* Reset top margin */
        }
        h2 {
            color: #1e59c7;
        }
        
        select {
            width: calc(100% - 24px);
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 16px;
        }
        
        select option {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #1e59c7;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #004085;
        }
    </style>
</head>
<body>

<?php
    session_start();
    $uname = $_GET["uname"];
    if ($_SESSION['loggedin'] && $_SESSION['loggedin'] == true) {
        echo "<h1>Welcome ".$_SESSION['username']."</h1>";
    } else {
        header("location:/capstoneProject/Login_Pages/03_03_login_form_applicant.html");
    }
?>

<div class="form-container">
    <form action=<?php echo "user_form.php?uname=$uname";?> method="post">
        <h2>Suggested Eligible Schemes (On the basis of Caste, Religion and Income)</h2>
        <div class="scheme-eligibility-select">
            <select name="schemes" >
                <option>Select Scheme</option>
                <option value="OBC">POST-MATRIC SCHOLARSHIP FOR OBC STUDENTS</option>
                <option value="OPEN">POST MATRIC SCHOLARSHIP TO OPEN STUDENTS</option>
                <option value="SC">POST MATRIC SCHOLARSHIP TO SC STUDENTS</option>
                <option value="ST">POST MATRIC SCHOLARSHIP TO ST STUDENTS</option>
                <option value="NT">POST MATRIC SCHOLARSHIP TO NT STUDENTS</option>
            </select>
            <button type="submit" name="btn">Apply</button>
        </div>
    </form>
</div>

</body>
</html>
