<?php
include 'header.php';
include_once 'rankings_widget.php';

/*
echo <<<EOT
<h2>Current Rankings</h2>
<p>These rankings are updated continuously, 24 hours a day. Want to see your
  name on the leaderboard? Check out the <a href="quickstart.php">
  Five Minute Quickstart Guide</a>!</p>
EOT;
 */
/*echo <<<EOT
<h2>Current Rankings</h2>
<p>The rankings are currently frozen until release of the final results.
Release of the final results is currently scheduled to take place at 6:00pm
(Central Standard Time; server time as seen in the game listings).</p>
EOT;
*/

echo <<<EOT
<h2>Final Rankings</h2>
<p>Congratulations to this term's winner, <a href="http://quotenil.com/">
  Gábor Melis</a>! Whereas the Google AI Challenge has traditionally been
  dominated by entries written in languages like
  <a href="http://ai-contest.com/language_profile.php?lang=C%2B%2B">C++</a>,
  Gábor has solidly taken the top spot with an innovative algorithm. His
  entry is one of just 33 submissions written in
  <a href="http://ai-contest.com/language_profile.php?lang=Lisp">Lisp</a>,
  and is entitled <a href="http://ai-contest.com/profile.php?user_id=8565">
  bocsimacko</a>. Congratulations Gábor!</p>
<p>A big congratulations also goes out to the runners up,
  <a href="http://ai-contest.com/profile.php?user_id=7026">_iouri_</a> and
  <a href="http://ai-contest.com/profile.php?user_id=11248">Slin-.-</a>,
  as well as all the finalists in the top 100. With over 4600 submissions
  received, securing a spot in the top 100 was no easy task!</p>
<p>On behalf of <a href="http://www.google.com">Google</a> and the
  <a href="http://csclub.uwaterloo.ca">University of Waterloo Computer
  Science Club</a>, we would like to thank everybody who took part in the
  Google AI Challenge. This term was the best yet, with more than 4600 working
  entries submitted by people from 112 different countries. Thank you!</p>
<p>We would also like to thank all the <a href="thanks.php">people</a>
  who generously volunteered their time and mad skills to make the Google
  AI Challenge happen.</p>
<p>Here are the complete final rankings. These rankings are based on the
  <a href="http://en.wikipedia.org/wiki/Elo_rating_system">Elo rating
  system</a>. Click on any player's name to see their game history. If
  you crave more interesting statistics and rankings, check out the
  <a href="country_rankings.php">country rankings</a> and
  <a href="organization_rankings.php">organization rankings</a>. Also check
  out <a href="http://ai-contest.com/forum/viewtopic.php?f=19&t=1184">
  this cool forum thread</a> for tons of the most interesting game replays!</p>
EOT;

echo getRankingsTableString(1, false, 100, "");

include 'footer.php';
?>
