<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# The v2.x series isn't done yet
$beyond_end_date = strftime("%Y-%m-%d", time() + (90 * 24 * 60 * 60));

//////////////////////////////////////////////////////////////////////////
// v2.x release series
series("v2.x series", "2015-06-01", $beyond_end_date, $data, $vpos, $graph);
milestone("branch", "2015-06-16", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke(); 
