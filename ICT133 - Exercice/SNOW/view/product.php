<?php
ob_start();
?>
    <link href="View/Content/script/bootstrap/css/boostrapShop" rel="stylesheet" type="text/css">
    <h1> Snowboard shop </h1>
    <div class="table table-hover  table-condensed">
        <table >
            <tr>

                <?php
                /** @var  $item  *reading into the array and pin up data of snow with information */
                foreach ($_GET['prContent'] as $item) {
                    foreach ($item as $value) {
                        echo '<td ><a href=""><img src=" ' . $value->image . '  ">', " <br> ", $value->name, "", "</a></td>               ";

                    }
                }
                ?>
            </tr>
        </table>
    </div>

<?php
$content = ob_get_clean();
require "gabarit.php";
