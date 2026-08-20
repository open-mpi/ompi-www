<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# Current date/time
$ts = time();
$beyond_end_date = strftime("%Y-%m-%d", $ts);

//////////////////////////////////////////////////////////////////////////
// v6.0 release series
series("v6.0 series", "2026-01-01", $beyond_end_date, $data, $vpos, $graph);
milestone("v6.0.0 (planned)", "202					6-xx-xx", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke();
