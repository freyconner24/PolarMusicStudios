<?php

function pics1($picPath1)
{
	echo '<hr>';
	echo '<div class="row row-pic-pad">';
	    echo '<div class="col-sm-12 col-pic-pad" >';
	            echo '<img src="'. $picPath1 .'" class="img-responsive" alt="Responsive image" style="">';
	    echo '</div>';
	echo '</div>';
	echo '<hr>';
} //pics1

function pics2($picPath1, $picPath2)
{
	echo '<hr>';
	echo '<div class="row row-pic-pad">';
	    echo '<div class="col-sm-6 col-pic-pad" >';
	            echo '<img src="'. $picPath1 .'" class="img-responsive" alt="Responsive image" style="">';
	    echo '</div>';
	    echo '<div class="col-sm-6 col-pic-pad">';
	                    echo '<img src="'. $picPath2 .'" class="img-responsive" alt="Responsive image">';
	    echo '</div>';
	echo '</div>';
	echo '<hr>';
} //pics2

function pics3($picPath1, $picPath2, $picPath3)
{
	echo '<hr>';
	echo '<div class="row row-pic-pad">';
	    echo '<div class="col-sm-4 col-pic-pad" >';
	            echo '<img src="'. $picPath1 .'" class="img-responsive" alt="Responsive image" style="">';
	    echo '</div>';
	    echo '<div class="col-sm-4 col-pic-pad">';
	                    echo '<img src="'. $picPath2 .'" class="img-responsive" alt="Responsive image">';
	    echo '</div>';
	    echo '<div class="col-sm-4 col-pic-pad">';
	            echo '<img src="'. $picPath3 .'" class="img-responsive" alt="Responsive image">';
	    echo '</div>';
	echo '</div>';
	echo '<hr>';
} //pics3

?>
