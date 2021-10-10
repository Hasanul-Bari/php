<?php 
    $pdo= new PDO("mysql:host=localhost;port=3306;dbname=test1","Hasan","arrow");


    if(isset($_POST['nm']) && isset($_POST['em']) &&  isset($_POST['mb']) && isset($_POST['sex']) && isset($_POST['cmnt'])){

        $dob=$_POST['day'].$_POST['month'].$_POST['year'];

        $sql="INSERT into students(name,email,mobile,sex,comments,dob) VALUES (:nm, :em, :mb, :sex, :cmnts, :dob )";

        $stmt=$pdo->prepare($sql);

        $stmt->execute(array(
            ":nm"=>$_POST['nm'],
            ":em"=>$_POST['em'],
            ":mb"=>$_POST['mb'],
            ":sex"=>$_POST['sex'],
            ":cmnts"=>$_POST['cmnt'],
            ":dob"=>$dob,
            )

        );


        echo "Date stored successfully";
        

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data insertion</title>
</head>
<body>

    <h1>Contact Form</h1>

    <form action="" method="post">

    <table>

        <tr align="right">
            <td>Name:</td>
            <td align="left"> 
                <input type="text" name="nm" placeholder="Your name" required>
            </td>
        </tr>

        <tr align="right">
            <td>Email:</td>
            <td align="left"> 
                <input type="email" name="em" placeholder=" ab@c.com" required>
            </td>
        </tr>

        <tr align="right">
            <td>Mobile:</td>
            <td align="left"> 
                <input type="text" name="mb" placeholder="Mobile no" required>
            </td>
        </tr>

        <tr align="right">
            <td>Sex:</td>
            <td align="left"> 
                <select name="sex" >
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </td>
        </tr>

        <tr align="right">
            <td>Date of Birth:</td>
            <td align="left"> 
                
                <select name="day">
                    <option value="day">Day</option>
                </select>

                <select name="month">
                    <option value="month">Month</option>
                </select>

                <select name="year">
                    <option value="year">Year</option>
                </select>
                
            </td>
        </tr>

        <tr align="right">
            <td valign="bottom">Comment:</td>
            <td> 
                <textarea name="cmnt" cols="30" rows="5" required></textarea>
            </td>
        </tr>

        <tr align="right">
            <td>
                <input type="submit" value="Submit">
            </td>
        </tr>

    </table>




    </form>

    
    
</body>
</html>


<!--

CREATE TABLE students(
    sid INTEGER NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    mobile VARCHAR(11),
    sex VARCHAR(10),
    comments VARCHAR,
    
    PRIMARY KEY(sid)
    
)


 -->