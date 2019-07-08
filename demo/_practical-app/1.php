<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>


	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">



		<?php
		/* Step 1:  Use the Echo Function to say hello with html h1 tags embedded inside php.

		   Step 2: Write a comment above the echo function and explain what that function is doing.*/

    //Creating simple text inside h1 tags

            echo "<h1>Valar Marguris</h1>";

    // creating a title, which I can use in any page I create

            $title = "Valar Marguris" ;
		?>

    <!-- showing "title" -->

		<h1><?php echo $title ." ". "kitaip" ?></h1>



		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
