<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

    if (4>5) {
        echo "four is more then five";
    }elseif (5<4) {
        echo "five is less then four";
    }else {
        echo "I love PHP";
    }

    echo "<br>";


    for ($number = 0; $number < 10; $number++){
        echo $number . " ";
    }

    echo "<br>";

    $number = 13;

    switch ($number) {
        case 16:
            echo "Yes, it is 16";
                break;

        case 15:
            echo "Yes, it is 15";
                break;

        case 14:
            echo "Yes, it is 14";
                break;

        case 13:
            echo "Yes, it is 13";
                break;

        default :
            echo "we did not found anything";
                break;
    }


?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
