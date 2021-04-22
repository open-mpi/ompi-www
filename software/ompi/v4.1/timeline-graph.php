<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# Oldest milestone date
$first_date = "2020-05-30";

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
series("v4.1 series", $series_start->format("Y-m-d"), $beyond_end_date, $data, $vpos, $graph);
milestone("branch from v4.0.x", "2020-05-30", $data, $vpos);
milestone("v4.1.0", "2020-12-18", $data, $vpos);
milestone("v4.1.1rc1", "2021-02-10", $data, $vpos);
milestone("v4.1.1rc2", "2021-03-17", $data, $vpos);
milestone("v4.1.1rc3", "2021-04-20", $data, $vpos);
milestone("v4.1.1rc4", "2021-04-22", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke();
