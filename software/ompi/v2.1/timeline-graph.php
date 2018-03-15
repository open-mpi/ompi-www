<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

$first_date = "2017-01-01";

# The graph needs about a year time span for the title to display properly.
# So pick either a year beyond the first date or 90 days beyond now,
# whichever is greater.

# 3 months from today
$ts1 = time() + (90 * 24 * 60 * 60);
# 1 year beyond the first date (this i
$ts2 = mktime(0, 0, 0, 6, 1, 2016);

$ts = (int) max($ts1, $ts2);
$beyond_end_date = strftime("%Y-%m-%d", $ts);

//////////////////////////////////////////////////////////////////////////
// v2.1 release series
series("v2.1 series", "2015-06-01", $beyond_end_date, $data, $vpos, $graph);
milestone("branch from master", "2015-06-20", $data, $vpos);
milestone("v2.0.x branch from v2.x", "2016-09-13", $data, $vpos);
milestone("v2.1.0", "2017-03-21", $data, $vpos);
milestone("v2.1.1", "2017-05-10", $data, $vpos);
milestone("v2.1.2", "2017-09-20", $data, $vpos);
milestone("v2.1.3", "2018-03-15", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke();
