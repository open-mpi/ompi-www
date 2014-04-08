<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# The v1.6 series isn't done yet
$beyond_end_date = strftime("%Y-%m-%d", time() + (90 * 24 * 60 * 60));

//////////////////////////////////////////////////////////////////////////
// v1.6 release series
series("v1.6 series", "2012-03-15", $beyond_end_date, $data, $vpos, $graph);
milestone("branch", "2012-04-03", $data, $vpos);
milestone("v1.6", "2012-05-14", $data, $vpos);
milestone("v1.6.1", "2012-08-22", $data, $vpos);
milestone("v1.6.2", "2012-09-25", $data, $vpos);
milestone("v1.6.3", "2012-10-30", $data, $vpos);
milestone("v1.6.4", "2013-02-21", $data, $vpos);
milestone("v1.6.5", "2013-06-26", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke(); 
