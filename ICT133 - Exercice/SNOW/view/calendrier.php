<head>
    <link rel="stylesheet" type="text/css" href="view/content/styles/CSSCal.css" />
</head>
<div class="month">
    <ul>
        <li class="prev"><a style="cursor: pointer" onclick="<?php $MonthCalender--; ?>">&#10094;</a></li>
        <li class="next"><a style="cursor: pointer" onclick="<?php $MonthCalender++; ?>">&#10095;</a></li>
        <li><?php
            $MonthDisplay = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
            $MonthCalender = date("n");
            echo $MonthDisplay[$MonthCalender-1];
            ?>
            <br><span style="font-size:18px"><?php $Year=date("Y"); echo $Year; ?></span></li>
    </ul>
</div>

<ul class="weekdays">
    <?php
    $DayWeek = array("Lun","Mar","Mer","Jeu","Ven","Sam","Dim");

    for ($NbrDay=0;$NbrDay<7;$NbrDay++){
        ?>
        <li><?php
        echo $DayWeek[$NbrDay];
        ?></li><?php
    }
    ?>

</ul>

<ul class="days">

    <?php
    $day = date("j", mktime(0, 0, 0, $MonthCalender, 1, $Year));
    $Month = date("D", mktime(0, 0, 0, $MonthCalender, $day, $Year));
    $delay = 1;

    $i=0;
    switch ($Month) {
        case "Mon":
            $delay=1;
            break;
        case "Tue":
            $delay=2;
            break;
        case "Wed":
            $delay=3;
            break;
        case "Thu":
            $delay=4;
            break;
        case "Fri":
            $delay=5;
            break;
        case "Sat":
            $delay=6;
            break;
        case "Sun":
            $delay=7;
            break;
    }

    for ($k=1;$k<$delay;$k++){
        ?>
        <li><p></p></li><?php
    }
    while ($i<=4)
    {
        for ($j=1;$j<8;$j++)
        {

            if ($day == date("j") && $MonthCalender == date("n")){
                ?>
                <li class="today"><p class="today"><?php

                    echo date("j", mktime(0, 0, 0, $MonthCalender, $day, $Year));
                    $day++;

                    ?></p></li><?php
            }elseif (date("n", mktime(0, 0, 0, $MonthCalender, $day, $Year))==$MonthCalender){
                ?>
                <li><p><?php

                    echo date("j", mktime(0, 0, 0, $MonthCalender, $day, $Year));
                    $day++;

                    ?></p></li><?php
            }
        }
        $i++;
    }

    ?>
</ul>