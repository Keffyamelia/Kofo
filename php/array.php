<!DOCTYPE html>
<html>
    <body>
        <?php
        /* First method to create array*/
        $numbers = array(1,2,3,4,5);
        foreach( $numbers as $value )
        {
            echo "Value is $value <br />";
        }

        $numbers[3] = "four";
        $numbers[4] = "five";

        foreach( $numbers as $value )
        {
            echo "Value is $value <br />";
        }

        $salaries = array(
            "mohamad" => 2000,
            "qadir" => 1000,
            "zara" => 500
        );

        echo "Salary of mohamad is ". $salaries["mohamad"] . "<br />";
        echo "Salary of qadir is ". $salaries["qadir"] . "<br />";
        echo "Salary of zara is ". $salaries["zara"] . "<br />";

        $salaries["mohamad"] ="high";
        $salaries["qadir"] = "medium";
        $salaries["zara"] = "low";

        echo "Salary of mohamad is ". $salaries["mohamad"] . "<br />";
        echo "Salary of qadir is ". $salaries["qadir"] . "<br />";
        echo "Salary of zara is ". $salaries["zara"] . "<br />";

        ?>
        </body>
        </html>