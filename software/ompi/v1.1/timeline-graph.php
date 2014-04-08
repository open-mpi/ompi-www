<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

//////////////////////////////////////////////////////////////////////////
// v1.1 release series
series("v1.1 series", "2006-04-11", "2007-05-01", $data, $vpos, $graph);
milestone("branch", "2006-04-11", $data, $vpos);
milestone("v1.1", "2006-06-23", $data, $vpos);
milestone("v1.1.1", "2006-08-28", $data, $vpos);
milestone("v1.1.2", "2006-10-18", $data, $vpos);
milestone("v1.1.3", "2007-01-26", $data, $vpos);
milestone("v1.1.4", "2007-01-30", $data, $vpos);
milestone("v1.1.5", "2007-03-19", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke(); 
