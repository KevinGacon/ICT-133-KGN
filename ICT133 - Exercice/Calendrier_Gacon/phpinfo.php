<head>
    <link rel="stylesheet" type="text/css" href="CSSInfo.css" />
</head>

<div class="month">
    <ul>
        <li class="prev">&#10094;</li>
        <li class="next">&#10095;</li>
        <li><?php echo date("F"); ?><br><span style="font-size:18px"><?php echo date("Y"); ?></span></li>
    </ul>
</div>

<ul class="weekdays">
    <?php
    for ($DayWeek = 1;$DayWeek < 8; $DayWeek++) {
        ?>
        <li><?php
        echo date("D",mktime(0,0,0,0,$DayWeek));
        ?></li><?php
    }
    ?>
</ul>

<ul class="days">

<?php
$day = 0;
    for ($i=0;$i<5;$i++)
    {
        for ($j=1;$j<8;$j++)
        {
            if ($day == 0) {
                ?><li></li><?php
                $day++;
            }elseif ($day == date("j")){
                ?>
                <li class="today"><?php
                if ($day < 32) {
                    echo date("j", mktime(0, 0, 0, 12, $day, 2019));
                    $day++;
                }
                ?></li><?php
            }else{
                ?>
                <li><?php
                if ($day < 32) {
                    echo date("j", mktime(0, 0, 0, 12, $day, 2019));
                    $day++;
                }
                ?></li><?php
            }
        }
        echo "<br>";
    }

?>
</ul>