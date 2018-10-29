<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# Oldest milestone date
$first_date = "2017-10-01";

# The graph needs about a year time span for the title to display properly.
# So pick either a year beyond the first date or 90 days beyond now,
# whichever is greater.

# 3 months from today
$ts1 = time() + (90 * 24 * 60 * 60);
# 1 year beyond the first date (this i
$ts2 = mktime(0, 0, 0, 6, 1, 2016);
# 1 month before the first date:
$series_start = new DateTime($first_date);
$series_start->modify("-1 month");

$ts = (int) max($ts1, $ts2);
$beyond_end_date = strftime("%Y-%m-%d", $ts);

//////////////////////////////////////////////////////////////////////////
// v2.1 release series
series("v3.1 series", $series_start->format("Y-m-d"), $beyond_end_date, $data, $vpos, $graph);
milestone("branch from master", "2017-10-01", $data, $vpos);
milestone("v3.1.0", "2018-05-07", $data, $vpos);
milestone("v3.1.1", "2018-06-29", $data, $vpos);
milestone("v3.1.2", "2018-08-22", $data, $vpos);
milestone("v3.1.3", "2018-10-29", $data, $vpos);


// Party on
$graph->CreateSimple($data);
$graph->Stroke();
