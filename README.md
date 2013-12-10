WikiStats
=========

Simple PHP program to Get Wikipedia Hits for Given Keyword.


--------------------------------------------------------------------------------
<?php
//Algorithm for WikiStats
error_reporting(E_ERROR);
$tmp=0;
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
if($count >= $tmp)
{
$tmp=$count;
$name=$var;
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
#Results:
By using this algorithm we can get the results which will be useful in different fields.

//Test 1: 
#i want to know who is the most viewed actor in web(india).

So tried some popular names and applied to this algorithm.

And i got the results like this some are expected and some are unexpected.
I got these results on Tue Dec  3 17:39:05 IST 2013


-------------------------------------------
Wiki Statasticts for Keyword :: Chiranjeevi

PresentMonthHits -> 3205

AverageDayHits   -> 1068.3333333333

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: kamal_haasan

PresentMonthHits -> 6934

AverageDayHits   -> 2311.3333333333

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: Amitabh_Bachchan

PresentMonthHits -> 12866

AverageDayHits   -> 4288.6666666667

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: salman_khan

PresentMonthHits -> 44594

AverageDayHits   -> 14864.666666667

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: Aamir_Khan

PresentMonthHits -> 17599

AverageDayHits   -> 5866.3333333333

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: Shahrukh_Khan

PresentMonthHits -> 23035

AverageDayHits   -> 7678.3333333333

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: Rajinikanth

PresentMonthHits -> 10691

AverageDayHits   -> 3563.6666666667

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: Vijay_(actor)

PresentMonthHits -> 12685

AverageDayHits   -> 4228.3333333333

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: ajith_kumar

PresentMonthHits -> 8501

AverageDayHits   -> 2833.6666666667

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: mahesh_babu

PresentMonthHits -> 8826

AverageDayHits   -> 2942

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: pawan_kalyan

PresentMonthHits -> 6750

AverageDayHits   -> 2250

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: Hrithik_Roshan

PresentMonthHits -> 12804

AverageDayHits   -> 4268

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: ranbir_kapoor

PresentMonthHits -> 16847

AverageDayHits   -> 5615.6666666667

-------------------------------------------



(salman_khan win this test.)



