<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# The v1.8 series isn't done yet
$beyond_end_date = strftime("%Y-%m-%d", time() + (90 * 24 * 60 * 60));

//////////////////////////////////////////////////////////////////////////
// v1.8 release series
series("v1.8 series", "2014-03-01", $beyond_end_date, $data, $vpos, $graph);
milestone("branch", "2014-03-25", $data, $vpos);
milestone("v1.8", "2014-03-31", $data, $vpos);
milestone("v1.8.1", "2014-04-23", $data, $vpos);
milestone("v1.8.2", "2014-08-25", $data, $vpos);
milestone("v1.8.3", "2014-09-26", $data, $vpos);
milestone("v1.8.4", "2014-12-19", $data, $vpos);
milestone("v1.8.5", "2015-05-05", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke(); 
