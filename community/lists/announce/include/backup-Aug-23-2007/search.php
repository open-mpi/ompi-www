<?php
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER["REQUEST_URI"])) {
    include("../../include/index-header.inc");
} else {
    include("include/index-header.inc");
}
  

# We need to transfer the follwoing parameters to the original
# search script(swish.cgi).

# query
# metaname
# sort
# reverse
# dr_o
# dr_s_day
# dr_s_mon
# dr_s_year
# dr_e_day
# dr_e_mon
# dr_e_year
# start

  $string ="";
  if(isset($_GET['query'])){
	$query = $_GET['query'];
        $query = str_replace(" ", "+", $query);
	$string .= "?query=$query";
  }

  if(isset($_GET['metaname'])){
	$metaname = $_GET['metaname'];
	$string .= "&metaname=$metaname";
  }
  if(isset($_GET['sort'])){
	$sort = $_GET['sort'];
	$string .= "&sort=$sort";
  }
  if(isset($_GET['reverse'])){
	$reverse = $_GET['reverse'];
	$string .= "&reverse=$reverse";
  }
  if(isset($_GET['dr_o'])){
	$dr_o = $_GET['dr_o'];
	$string .= "&dr_o=$dr_o";
  }
  if(isset($_GET['dr_s_day'])){
	$dr_s_day = $_GET['dr_s_day'];
	$string .= "&dr_s_day=$dr_s_day";
  }
  if(isset($_GET['dr_s_mon'])){
	$dr_s_mon = $_GET['dr_s_mon'];
	$string .= "&dr_s_mon=$dr_s_mon";
  }
  if(isset($_GET['dr_s_year'])){
	$dr_s_year = $_GET['dr_s_year'];
	$string .= "&dr_s_year=$dr_s_year";
  }
  if(isset($_GET['dr_e_day'])){
	$dr_s_day = $_GET['dr_e_day'];
	$string .= "&dr_e_day=$dr_e_day";
  }
  if(isset($_GET['dr_e_mon'])){
	$dr_s_mon = $_GET['dr_e_mon'];
	$string .= "&dr_e_mon=$dr_e_mon";
  }
  if(isset($_GET['dr_e_year'])){
	$dr_s_year = $_GET['dr_e_year'];
	$string .= "&dr_e_year=$dr_e_year";
  }
  if(isset($_GET['start'])){
	$start = $_GET['start'];
	$string .= "&start=$start";
  }

  #print "<br>$string<br>\n";
  # Change the following dir according to the list to index
  include("http://www.open-mpi.org/community/lists/announce/cgi-bin/swish.cgi$string");

if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $REQUEST_URI)) {
    include("../../include/index-footer.inc");
} else {
    include("include/index-footer.inc");
}
?>
