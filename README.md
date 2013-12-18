WikiStats
=========

Simple PHP program to Get Wikipedia Hits for Given Keyword.


--------------------------------------------------------------------------------
?php
//Algorithm for WikiStats -Jagadeesh J
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
#Results:
By using this algorithm we can get the results which will be useful in different fields.

#Test Case 1: 
#I want to know which is most searched programming language in internet.

So tried some popular programming languages and applied to this algorithm.

-------------------------------------------
Wiki Statasticts for Keyword :: C_(programming_language)

PresentMonthHits -> 112287
Last30DaysHits   -> 211603

AverageDayHits   -> 6645.8

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: c++

PresentMonthHits -> 73383
Last30DaysHits   -> 138306

AverageDayHits   -> 4343.5166666667

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: Objective-C

PresentMonthHits -> 25748
Last30DaysHits   -> 45738

AverageDayHits   -> 1477.5222222222

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: java

PresentMonthHits -> 4182567
Last30DaysHits   -> 5983943

AverageDayHits   -> 215914.8

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: basic

PresentMonthHits -> 23047
Last30DaysHits   -> 40510

AverageDayHits   -> 1315.3611111111

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: php

PresentMonthHits -> 97150
Last30DaysHits   -> 177957

AverageDayHits   -> 5664.5611111111

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: perl

PresentMonthHits -> 23902
Last30DaysHits   -> 41041

AverageDayHits   -> 1347.9611111111

-------------------------------------------
-------------------------------------------
#Top Scorer     <-> java
#AverageDay Hits   -> 215914.8
-------------------------------------------



#Test Case 2: 
#i want to know who was the most viewed actor in web(india).

So tried some popular names and applied to this algorithm.

And i got the results like this some are expected and some are unexpected.
I got these results on Tue Dec  3 17:39:05 IST 2013


-------------------------------------------
Wiki Statasticts for Keyword :: Chiranjeevi

PresentMonthHits -> 28512
Last30DaysHits   -> 49691

AverageDayHits   -> 1620.1833333333

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: kamal_haasan

PresentMonthHits -> 53430
Last30DaysHits   -> 108165

AverageDayHits   -> 3286.9166666667

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: Amitabh_Bachchan

PresentMonthHits -> 101416
Last30DaysHits   -> 185827

AverageDayHits   -> 5914.2277777778

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: salman_khan

PresentMonthHits -> 290944
Last30DaysHits   -> 447919

AverageDayHits   -> 15547.094444444

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: Aamir_Khan

PresentMonthHits -> 168618
Last30DaysHits   -> 268676

AverageDayHits   -> 9161.7666666667

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: Shahrukh_Khan

PresentMonthHits -> 169155
Last30DaysHits   -> 300681

AverageDayHits   -> 9710.1

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: Rajinikanth

PresentMonthHits -> 144571
Last30DaysHits   -> 209104

AverageDayHits   -> 7500.9277777778

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: Vijay_(actor)

PresentMonthHits -> 96642
Last30DaysHits   -> 174502

AverageDayHits   -> 5592.8666666667

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: ajith_kumar

PresentMonthHits -> 73817
Last30DaysHits   -> 136162

AverageDayHits   -> 4319.8388888889

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: mahesh_babu

PresentMonthHits -> 69254
Last30DaysHits   -> 125721

AverageDayHits   -> 4019.0722222222

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: pawan_kalyan

PresentMonthHits -> 48658
Last30DaysHits   -> 90285

AverageDayHits   -> 2856.3611111111

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: Hrithik_Roshan

PresentMonthHits -> 192883
Last30DaysHits   -> 287604

AverageDayHits   -> 10151.261111111

-------------------------------------------
-------------------------------------------
Wiki Statasticts for Keyword :: ranbir_kapoor

PresentMonthHits -> 151722
Last30DaysHits   -> 236749

AverageDayHits   -> 8160.3166666667

-------------------------------------------
-------------------------------------------
#Top Scorer     <-> salman_khan
#AverageDay Hits   -> 15547.094444444
-------------------------------------------





