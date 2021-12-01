<html>
    <head>
        <style>
            .fl{
                display: flex;
                flex-wrap: wrap;
            }
            .s1,.s2,.s3,.s4,.s5{
               
                padding: 2vw;
                        }
            .submit{
                display: flex;
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            Name:<input type="text" name="name" required><br>
            Reg No:<input type="text" name="reg" required><br><br>
            <div class="fl">
            <div class="s1" >
            <b>Subject 1 Details</b><br>
            Course:<input type="text" name="course" required><br>
            Course code:<input type="text" name="code" required><br>
            Cat1 Marks:<input type="number" name="cat1" required><br>
            Cat2 Marks:<input type="number" name="cat2" required><br>
            DA1 Marks:<input type="number" name="da1" required><br>
            DA2 Marks:<input type="number" name="da2" required><br>
            Quiz Marks:<input type="number" name="quiz" required><br>
            </div>
            <div class="s2">
            <b>Subject 2 Details</b><br>
            Course:<input type="text" name="s2course" required><br>
            Course code:<input type="text" name="s2code" required><br>
            Cat1 Marks:<input type="number" name="s2cat1" required><br>
            Cat2 Marks:<input type="number" name="s2cat2" required><br>
            DA1 Marks:<input type="number" name="s2da1" required><br>
            DA2 Marks:<input type="number" name="s2da2" required><br>
            Quiz Marks:<input type="number" name="s2quiz" required><br>
            </div>
            <div class="s3">
            <b>Subject 3 Details</b><br>
            Course:<input type="text" name="s3course" required><br>
            Course code:<input type="text" name="s3code" required><br>
            Cat1 Marks:<input type="number" name="s3cat1" required><br>
            Cat2 Marks:<input type="number" name="s3cat2" required><br>
            DA1 Marks:<input type="number" name="s3da1" required><br>
            DA2 Marks:<input type="number" name="s3da2" required><br>
            Quiz Marks:<input type="number" name="s3quiz" required><br>
            </div>
            <div class="s4">
            <b>Subject 4 Details</b><br>
            Course:<input type="text" name="s4course" required><br>
            Course code:<input type="text" name="s4code" required><br>
            Cat1 Marks:<input type="number" name="s4cat1" required><br>
            Cat2 Marks:<input type="number" name="s4cat2" required><br>
            DA1 Marks:<input type="number" name="s4da1" required><br>
            DA2 Marks:<input type="number" name="s4da2" required><br>
            Quiz Marks:<input type="number" name="s4quiz" required><br>
            </div>
            <div class="s5">
            <b>Subject 5 Details</b><br>
            Course:<input type="text" name="s5course" required><br>
            Course code:<input type="text" name="s5code" required><br>
            Cat1 Marks:<input type="number" name="s5cat1" required><br>
            Cat2 Marks:<input type="number" name="s5cat2" required><br>
            DA1 Marks:<input type="number" name="s5da1" required><br>
            DA2 Marks:<input type="number" name="s5da2" required><br>
            Quiz Marks:<input type="number" name="s5quiz" required><br>
            </div></div>
           <divclass="submit">
            <input  type="submit"></div><br>
</form>
</body>
</html>        
        <?php
        error_reporting(E_ERROR | E_PARSE);
$name=$_POST['name'];
$reg=$_POST['reg'];
echo "Hi ";
echo $name."!";
//s1
$course=$_POST['course'];
$code=$_POST['code'];
$cat1 =  $_POST['cat1'];
$cat2 =  $_POST['cat2'];
$da1 =  $_POST['da1'];
$da2 =  $_POST['da2'];
$quiz =  $_POST['quiz'];
//s2
$s2course=$_POST['s2course'];
$s2code=$_POST['s2code'];
$s2cat1 =  $_POST['s2cat1'];
$s2cat2 =  $_POST['s2cat2'];
$s2da1 =  $_POST['s2da1'];
$s2da2 =  $_POST['s2da2'];
$s2quiz =  $_POST['s2quiz'];
//s3
$s3course=$_POST['s3course'];
$s3code=$_POST['s3code'];
$s3cat1 =  $_POST['s3cat1'];
$s3cat2 =  $_POST['s3cat2'];
$s3da1 =  $_POST['s3da1'];
$s3da2 =  $_POST['s3da2'];
$s3quiz =  $_POST['s3quiz'];
//s4
$s4course=$_POST['s4course'];
$s4code=$_POST['s4code'];
$s4cat1 =  $_POST['s4cat1'];
$s4cat2 =  $_POST['s4cat2'];
$s4da1 =  $_POST['s4da1'];
$s4da2 =  $_POST['s4da2'];
$s4quiz =  $_POST['s4quiz'];
//s5
$s5course=$_POST['s5course'];
$s5code=$_POST['s5code'];
$s5cat1 =  $_POST['s5cat1'];
$s5cat2 =  $_POST['s5cat2'];
$s5da1 =  $_POST['s5da1'];
$s5da2 =  $_POST['s5da2'];
$s5quiz =  $_POST['s5quiz'];
$total = NULL;
$average = NULL;
$percentage = NULL;
if($cat1>30||$cat1<0||$cat2>30||$cat2<0)
{
    echo "Invalid marks";
}
if($s2cat1>30||$s2cat1<0||$s2cat2>30||$s2cat2<0)
{
    echo "Invalid marks";
}
if($s3cat1>30||$s3cat1<0||$s3cat2>30||$s3cat2<0)
{
    echo "Invalid marks";
}
if($s4cat1>30||$s4cat1<0||$s4cat2>30||$s4cat2<0)
{
    echo "Invalid marks";
}
if($s4cat1>30||$s4cat1<0||$s4cat2>30||$s4cat2<0)
{
    echo "Invalid marks";
}

$total = ($cat1/2) + ($cat2/2) + $da1 + $da2 + $quiz;
$total2 = ($s2cat1/2) + ($s2cat2/2) + $s2da1 + $s2da2 + $s2quiz;
$total3 = ($s3cat1/2) + ($s3cat2/2) + $s3da1 + $s3da2 + $s3quiz;
$total4 = ($s4cat1/2) + ($s4cat2/2) + $s4da1 + $s4da2 + $s4quiz;
$total5 = ($s5cat1/2) + ($s5cat2/2) + $s5da1 + $s5da2 + $s5quiz;
$average = $total / 6.0;
$average2 = $total2 / 6.0;
$average3 = $total3 / 6.0;
$average4 = $total4 / 6.0;
$average5 = $total5 / 6.0;
$cgpa=0;

if($total>50)
{
$cgpa=$cgpa+10;
}
else if($total>40)
{
    $cgpa=$cgpa+9;
}
else if($total>30)
{
    $cgpa=$cgpa+8;
}
else if($total>20)
{
    $cgpa=$cgpa+7;
}
else if($total>10)
{
    $cgpa=$cgpa+6;
}
else
{
    $cgpa=$cgpa+5;
}
if($total2>50)
{
    $cgpa=$cgpa+10;
}
else if($total2>40)
{
    $cgpa=$cgpa+9;
}
else if($total2>30)
{
    $cgpa=$cgpa+8;
}
else if($total2>20)
{
    $cgpa=$cgpa+7;
}
else if($total2>10)
{
    $cgpa=$cgpa+6;
}
else
{
    $cgpa=$cgpa+5;
}
if($total3>50)
{
    $cgpa=$cgpa+10;
}
else if($total3>40)
{
    $cgpa=$cgpa+9;
}
else if($total3>30)
{
    $cgpa=$cgpa+8;
}
else if($total3>20)
{
    $cgpa=$cgpa+7;
}
else if($total3>10)
{
    $cgpa=$cgpa+6;
}
else
{
    $cgpa=$cgpa+5;
}
if($total4>50)
{
    $cgpa=$cgpa+10;
}
else if($total4>40)
{
    $cgpa=$cgpa+9;
}
else if($total4>30)
{
    $cgpa=$cgpa+8;
}
else if($total4>20)
{
    $cgpa=$cgpa+7;
}
else if($total4>10)
{
    $cgpa=$cgpa+6;
}
else
{
    $cgpa=$cgpa+5;
}
if($total5>50)
{
    $cgpa=$cgpa+10;
}
else if($total5>40)
{
    $cgpa=$cgpa+9;
}
else if($total5>30)
{
    $cgpa=$cgpa+8;
}
else if($total5>20)
{
    $cgpa=$cgpa+7;
}
else if($total5>10)
{
    $cgpa=$cgpa+6;
}
else
{
    $cgpa=$cgpa+5;
}
?>

<table>
  <tr>
    <th>Course</th>
    <th>Total</th>
    <th>Average</th>
  </tr>
  <tr>
    <td><?php echo $course ?></td>
    <td><?php echo $total ?></td>
    <td><?php echo $average ?></td>
  </tr>
  <tr>
    <td><?php echo $s2course ?></td>
    <td><?php echo $total2 ?></td>
    <td><?php echo $average2 ?></td>
  </tr>
  <tr>
    <td><?php echo $s3course ?></td>
    <td><?php echo $total3 ?></td>
    <td><?php echo $average3 ?></td>
  </tr>
  <tr>
    <td><?php echo $s4course ?></td>
    <td><?php echo $total4 ?></td>
    <td><?php echo $average4 ?></td>
  </tr>
  <tr>
    <td><?php echo $s5course ?></td>
    <td><?php echo $total5 ?></td>
    <td><?php echo $average5 ?></td>
  </tr>
 
</table>
The cgpa is:<?php echo ($cgpa)/5.0; ?>

</body>
</html>

