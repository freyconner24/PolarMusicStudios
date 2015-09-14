<?php

//echo '<div class="row">';
//echo '<div class="col-md-12" style="">';
//echo '<div id="links" style="left:4%;">';

//for($i = 1; $i <= 33; $i++)
//{
	//echo '<a href="pictures/photo/PMS-'. $i .'.jpg" title="" data-gallery><img class="image-responsive" style="padding: 3px;" src="pictures/photo/PMS-'. $i .'.jpg" height="" width="250px"></a>';
//}

//echo '</div>';
//echo '</div>';
//echo '</div>';




$total_pics = 40;
$i = 1;
$j = 2;
$k = 3;
$r = 4;

echo '<div class="row">';
echo '<div class="col-md-12" style="">';
while(true)
{
	echo '<div class="row" style="margin-left: -11px;">';

		if($i > $total_pics)
		{break;
		} //if
		echo '<div class="col-sm-3 col-xs-6" style="padding: 4px 4px 0px 0px;">';
			echo '<a href="pictures/photo/PMS-'. $i .'.jpg" data-gallery><img src="pictures/photo/square/PMS-'. $i .'.jpg" class="img-responsive" alt="Responsive image"></a>';
		echo '</div>';

		if($j > $total_pics)
                {break;
                } //if
                echo '<div class="col-sm-3 col-xs-6" style="padding: 4px 4px 0px 0px;">';
                        echo '<a href="pictures/photo/PMS-'. $j .'.jpg" data-gallery><img src="pictures/photo/square/PMS-'. $j .'.jpg" class="img-responsive" alt="Responsive image"></a>';
                echo '</div>';

		if($k > $total_pics)
                {break;
                } //if
                echo '<div class="col-sm-3 col-xs-6" style="padding: 4px 4px 0px 0px;">';
                        echo '<a href="pictures/photo/PMS-'. $k .'.jpg" data-gallery><img src="pictures/photo/square/PMS-'. $k .'.jpg" class="img-responsive" alt="Responsive image"></a>';
                echo '</div>';

		if($r > $total_pics)
                {break;
                } //if
                echo '<div class="col-sm-3 col-xs-6" style="padding: 4px 4px 0px 0px;">';
                        echo '<a href="pictures/photo/PMS-'. $r .'.jpg" data-gallery><img src="pictures/photo/square/PMS-'. $r .'.jpg" class="img-responsive" alt="Responsive image"></a>';
                echo '</div>';

	echo '</div>';
	$i = $i + 4;
	$j = $j + 4;
	$k = $k + 4;
	$r = $r + 4;
} //for

echo '</div>';
echo '</div>';

?>

