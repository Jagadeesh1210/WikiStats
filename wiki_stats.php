<?php
//Algorithm for WikiStats - Author --> Jagadeesh J ;
error_reporting(E_ERROR);
$tmp=0;
$pmcount=0;
while(1)
{
echo "***Welcome to Wikistats***\n";
echo "Enter the Keyword ....\n";
$var = fgets(STDIN);
//echo $var;
$var=str_replace(' ','_',$var);
$day=date("d");
$rurl="curl 'http://stats.grok.se/en/".date("Y").date("m")."/".$var."' | grep 'has been'";
//$data=system("curl 'http://stats.grok.se/en/201312/india' | grep 'has been'");
$data=exec($rurl);
$split = explode(" ", $data);
$rcount=$split[count($split)-1];
$mdataurl="curl 'http://stats.grok.se/en/latest30/".$var."' | grep 'has been'";
//$data=exec("curl 'http://stats.grok.se/en/201312/india' | grep 'has been'");
$mdata=exec($mdataurl);
$msplit = explode(" ", $mdata);
$mcount=$msplit[count($msplit)-1];
$count=(($mcount/30)+($rcount/$day))/2;
$pm=($rcount/$day);
if($count > $tmp)
{
$tmp=$count;
$pmcount=$pm;
$name=$var;
}
else if($count == $tmp)
{
        if($pmcount <= $pm)
        {
        $tmp=$count;
        $pmcount=$pm;
        $name=$var;
        }
}
echo "\n\n-------------------------------------------";
echo "\nWiki Statasticts for Keyword :: ".$var;
echo "\nPresentMonthHits -> ".$rcount."\n";
echo "Last30DaysHits   -> ".$mcount."\n\n";
echo "AverageDayHits   -> ".$count."\n\n";
echo "-------------------------------------------\n";
echo "Top Scorer     <-> ".$name."AverageDay Hits   -> ".$tmp."\n";
echo "-------------------------------------------\n";
}
?>