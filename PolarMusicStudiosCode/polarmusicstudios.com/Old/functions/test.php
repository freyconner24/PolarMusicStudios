<?php
function hello() 
{

	$unfurl = "Sinking ships and false captains<br>
                      Have taxed the ties we’ve made<br>
                      Harmonize your sighs with mine and<br>
                      Maybe you’ll stay sane<br>
                      <br>
                      But I’ll fall into the unknown<br>
                      <br>
                      I’ll find solace in this if you<br>
                      Fill this hole in me<br>
                      I'll find solace in this if you<br>
                      Take this helm from me<br>
                      <br>
                      Come what may<br>
                      And I'll steal your heart away<br>
                      While worried sighs form clouds at night<br>
                      I don't think we can stay<br>
                      <br>
                      Set sail tonight<br>
                      Take me from this place<br>";

	$loving = "I awoke<br>
                      To a face<br>
                      Say what you say<br>
                      Just say it<br>
                      <br>
                      All this time<br>
                      I feared I would fall<br>
                      But I never thought<br>
                      Standing up would end it all<br>
                      <br>
                      But I’ll try and try and try<br>

                      I believe that I can see all of the things that we could be with somebody else and<br>
                      I know I could follow you into the dark and I could stay all by myself<br>
                      And I tried and tried and tried<br>
                      But I failed<br>
                      <br> 
                      I know I could always stay awake just to say that I love you<br>
                      I love you<br>
                      I know I could always find the time to do the things that I do<br>
                      For you<br>
                      <br>
                      But not this time<br>
                      Finally I’m done<br>
                      <br>
                      But I tried and tried and tried<br>
                      <br>
                      I believe that I can see all of the things that we could be with somebody else and<br>
                      I know I could follow you into the dark and i could stay all by myself<br>
                      And I tried and tried and tried<br>
                      But I failed<br>";

	$longwalks = "Our eyes they talked<br>
                      Our hands they talked<br>
                      And yes our mouths talked too<br>
                      But it’s hard to say what’s on my mind<br>
                      Cuz I’m so into you<br>
                      <br>
                      I took a walk to find my time<br>
                      I took a stroll to see a sign to carry on<br>
                      Oh to carry on<br>
                      <br>
                      I found a note in my top drawer<br>
                      Boy what are you waiting for<br>
                      Just try<br>
                      try, try to carry on<br>
                      <br>
                      Our eyes they talked<br>
                      Our hands they talked<br>
                      And yes our mouths talked too<br>
                      But it’s hard to speak these thoughts of mine<br>
                      Cuz I’m so into you<br>
                      <br>
                      Memories on broken shelves<br>
                      Find a way to fix yourself and carry<br>
                      Oh to carry on<br>
                      <br>
                      Picture frames beneath my bed<br>
                      Chasing ghosts inside my head<br>
                      Just try<br>
                      Try, try to carry on<br>
                      <br>
                      Our eyes they talked<br>
                      Our hands they talked<br>
                      But babe what did they say<br>
                      I held you till the morning light<br>
                      But I just couldn't stay<br>
                      I had to carry on<br>
                      Oh to carry on<br>";

	$vibrant = "Walking on rocks<br>
                      I slipped from the top in my dreams<br>
                      And just as I fell<br>
                      I saw the sun on a string<br>
                      <br>
                      Weighted on both sides<br>
                      It swung out as I tried<br>
                      To reach for the light<br>
                      From my bed<br>
                      <br>
                      But what I found<br>
                      Was warning signs instead<br>
                      <br>
                      Dreams are the canvas<br>
                      of this heavy heart, this heavy heart of mine<br>
                      Vibrant colors dance as <br>
                      City lights intertwine<br>
                      At night<br>
                      <br>
                      Bound to the clouds<br>
                      I fell apart at the seams<br>
                      While pictures behind my lids<br>
                      Make a scene<br>
                      <br>
                      Played before my eyes<br>
                      I looked on and I tried<br>
                      To make some sense of this<br>
                      But what I saw was something I can't miss<br>
                      <br>
                      Down<br>
                      Down in the dead grass<br>
                      I will lay here<br>
                      And burn in the sun<br>
                      <br>
                      She said sing me a song<br>
                      And I'll sing along<br>
                      And I'll forget everything<br>
                      All of the dreams<br>
                      All of the scenes<br>
                      In my head<br>
                      Once, twice, gone<br>
                      From me<br>";

	$mountain = "He was a mountain top<br>
                      Far too high to climb<br>
                      I stood beside on the ground<br>
                      And we crumbled with time<br>
                      <br>
                      Is he too far gone, far gone<br>
                      Because it's been so long, so long<br>
                      Since you've seen him, seen him<br>
                      <br>
                      Her smile swelled with the tide<br>
                      Tears captive in her eyes<br>
                      Nightfalls and her thoughts relapse<br>
                      So I guess I'll say goodbye<br>
                      <br>
                      Is she too far gone, far gone<br>
                      Because it's been so long, so long<br>
                      Since you've seen her, seen her<br>
                      <br>
                      He is a mountain top<br>
                      The I'll try to climb<br>";
	$conversations = "It was cold<br>
                      Behind the door<br>
                      And I saw some things<br>
                      I wish I could unsee<br>
                      <br>
                      The light<br>
                      The seeped into the room<br>
                      Illuminated faces<br>
                      I can’t forget<br>
                      <br>
                      Pre Chorus<br>
                      But I know<br>
                      I’m trying to forget<br>
                      <br>
                      I said I’m trying to forget<br>
                      I said I’m trying to forget<br>
                      <br>
                      These walls<br>
                      feel like a cage<br>
                      And the table set<br>
                      For you and I to face<br>
                      <br>
                      You know<br>
                      I had you in my sights<br>
                      And I know<br>
                      I tried to make it right<br>
                       Pre Chorus<br>
                      But I know<br>
                      I tried to make it right<br>
                      <br>
                      I said I tried to make it right<br>
                      I said I tried to make it right<br>";

	$lyricsArray = array(
					1 => array("title" => "Unfurl", "number" => "One", "lyrics" => $unfurl), 
					2 => array("title" => "Loving Askance", "number" => "Two", "lyrics" => $loving),
					3 => array("title" => "Long Walks And Effervescence", "number" => "Three", "lyrics" => $longwalks),
					4 => array("title" => "Vibrant Dreams And A Blank Canvas", "number" => "Four", "lyrics" => $vibrant),
					5 => array("title" => "The Mountain And The Sea", "number" => "Five", "lyrics" => $mountain),
					6 => array("title" => "Conversations", "number" => "Six", "lyrics" => $conversations)
					);

		echo "<div class='panel-group' id='accordion'>";
	for($i = 1; $i <= 6; $i++)
	{
			echo '<div class="panel panel-default">';
				echo '<div class="panel-heading">';
					echo '<h4 class="panel-title">';
						echo '<a data-toggle="collapse" data-parent="#accordion" href="#collapse'. $lyricsArray[$i]["number"] .'">';
							echo $lyricsArray[$i]["title"];
						echo '</a>';
					echo '</h4>';
				echo '</div>';
			echo '</div>';
			echo '<div id="collapse'. $lyricsArray[$i]["number"] .'" class="panel-collapse collapse">';
				echo '<div class="panel-body">';
					echo $lyricsArray[$i]["lyrics"]; 
				echo '</div>';
			echo '</div>';
    } //for

		echo '</div>';

}
?>
