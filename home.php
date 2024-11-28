<html>
    <head>
        <title>first pHP program</title>
    </head>
<body>
<?php
$students=[
    ["studentName" => "salma", "percentage" => 80],
    ["studentName" =>"inara", "percentage"  => 56],
    ["studentName" =>"zainab", "percentage"  => 68],
    ["studentName" =>"humera", "percentage" => 92],
    ["studentName" =>"ruksar", "percentage"  => 75]
   
];

function calculate_Grade($percentage)
{
    if($percentage >=90)
    {
        return 'A';
    }
    elseif($percentage >=80)
    {
        return 'B';
    }
    elseif($percentage >=70)
    {
        return 'C';
    }
    elseif($percentage >=60)
    {
        return 'D';
    }
    else{
        return 'F';
    }
}

foreach($students as $student)
 {
    
     $name=$student['studentName'];
     $percentage=$student['percentage'];
     $grade= calculate_Grade($percentage);   
    echo"<br>Hi, $name You've got $percentage% and $grade Grade."; 
    
 }

?>
</body>
</html>