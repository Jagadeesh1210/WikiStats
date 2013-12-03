WikiStats
=========

Simple PHP Algorithm to Get Wikipedia Hits for Given Keyword



<?php
#Algorithm for WikiStats

while(1)
{
echo "***Welcome to Wikistats***\n";
echo "Enter the Keyword ....\n";
$var = fgets(STDIN);
//echo $var;
$day=date("d");
$rurl="curl 'http://stats.grok.se/en/".date("Y").date("m")."/".$var."' | grep 'has been'";
//$data=system("curl 'http://stats.grok.se/en/201312/india' | grep 'has been'");
$data=system($rurl);
$split = explode(" ", $data);
$rcount=$split[count($split)-1];
echo "-------------------------------------------";
echo "\nWiki Statasticts for Keyword".$var;
echo "\nPresentMonthHits -> ".$rcount."\n\n";
echo "AverageDayHits   -> ".$rcount/$day."\n\n";
echo "-------------------------------------------\n";
}
?>
