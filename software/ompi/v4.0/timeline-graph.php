<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# Oldest milestone date
$first_date = "2018-07-18";

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
// v4.0 release series
series("v4.0 series", $series_start->format("Y-m-d"), $beyond_end_date, $data, $vpos, $graph);
milestone("branch from master", "2018-07-18", $data, $vpos);
milestone("v4.0.0", "2018-11-12", $data, $vpos);
milestone("v4.0.1", "2019-03-27", $data, $vpos);
milestone("v4.0.2", "2019-10-7", $data, $vpos);
milestone("v4.0.3", "2020-03-04", $data, $vpos);
milestone("v4.0.4", "2020-06-11", $data, $vpos);
milestone("v4.0.5rc1", "2020-07-15", $data, $vpos);
milestone("v4.0.5rc2", "2020-08-20", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke();
