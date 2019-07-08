<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>


	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


<?php

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values */

    function calculate () {
        $num1 = 5;
        $num2 = 6;
        $sum = $num1 + $num2;
        return $sum;
    }

    $the_sum = calculate();

    echo $the_sum;

    echo "<br>";

    function sum ($num1, $num2) {
        $sum1 = $num1 + $num2;
        echo $sum1;
    }

    sum (33, 44);
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>
