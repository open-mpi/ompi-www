<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

//////////////////////////////////////////////////////////////////////////
// v1.0 release series
series("v1.0 series", "2005-10-07", "2006-06-01", $data, $vpos, $graph);
milestone("branch", "2005-10-07", $data, $vpos);
milestone("v1.0", "2005-11-17", $data, $vpos);
milestone("v1.0.1", "2005-12-12", $data, $vpos);
milestone("v1.0.2", "2006-04-07", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke(); 
