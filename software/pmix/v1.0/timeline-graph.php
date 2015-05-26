<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# The v1.0 series isn't done yet
$beyond_end_date = strftime("%Y-%m-%d", time() + (90 * 24 * 60 * 60));

//////////////////////////////////////////////////////////////////////////
// v1.0 release series
series("v1.0 series", "2015-05-01", $beyond_end_date, $data, $vpos, $graph);
milestone("branch", "2015-05-25", $data, $vpos);
milestone("v1.0.0", "2015-05-31", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke(); 
