WikiStats
=========

Simple PHP Algorithm to Get Wikipedia Hits for Given Keyword


--------------------------------------------------------------------------------
<?php
//Algorithm for WikiStats

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
$data=system($rurl);
$split = explode(" ", $data);
$rcount=$split[count($split)-1];

echo "\n\n-------------------------------------------";
echo "\nWiki Statasticts for Keyword :: ".$var;
echo "\nPresentMonthHits -> ".$rcount."\n\n";
echo "AverageDayHits   -> ".$rcount/$day."\n\n";
echo "-------------------------------------------\n";
}
?>

#Results:
By using this alogorithm we can get the results which will be useful.

//for example 
i want to know who is the most viewd actor in web <india>.

So tried some popular names applied to this algorithm.

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



salman_khan win this test.



