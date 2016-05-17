 <strong>Printing: </strong>
      {{ 'Hello World' }}
      <br>

<strong>Mathematical Computations.</strong> <br>


    Result For Addition: 
    <?php
        $add_res = $num1 + $num2;
    ?>
    {{ "$num1 + $num2 = $add_res" }}
    <br>

    Result For Subtraction:
    <?php
        $sub_res = $num1 - $num2;
    ?>
    {{ "$num1 - $num2 = $sub_res" }}
    <br>

    Result For Multiplication:
    <?php
        $pro_res = $num1 * $num2;
    ?>
    {{ "$num1 * $num2 = $pro_res" }}
    <br>

    Result For Division:
    <?php
        $quo_res = $num1 / $num2;
    ?>
    {{ "$num1 / $num2 = $quo_res" }}
    <br>
    
    <strong>Conditional.</strong> <br>
    Conditions: <br>
    - when the two numbers are equal print "Struggle" <br>
    - when the 1st number is lesser than 2nd number print "Is" <br>
    - when the 1st number is greater than 2nd number print "Real" <br> <br>

    1st Number=5 and 2nd Number=5 <br>
    Result: 
        @if($num1 === $num2)
            {{ 'Struggle' }}
        @elseif($num1 < $num2)
            {{ 'Is' }}
        @else
            {{ 'Real' }}
        @endif


