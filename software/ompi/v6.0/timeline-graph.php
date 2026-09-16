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
milestone("branch from main", "2025-10-24", $data, $vpos);
milestone("v6.0.0rc1", "2026-09-16", $data, $vpos);
milestone("v6.0.0 (planned)", "2026-09-30", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke();
