<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# The v1.5 series isn't done yet
$beyond_end_date = "2012-05-15";

//////////////////////////////////////////////////////////////////////////
// v1.5 release series
series("v1.5 series", "2009-12-01", $beyond_end_date, $data, $vpos, $graph);
milestone("branch", "2010-01-15", $data, $vpos);
milestone("v1.5", "2010-10-10", $data, $vpos);
milestone("v1.5.1", "2010-12-15", $data, $vpos);
milestone("v1.5.2", "2011-03-09", $data, $vpos);
milestone("v1.5.3", "2011-03-16", $data, $vpos);
milestone("v1.5.4", "2011-08-18", $data, $vpos);
milestone("v1.5.5", "2012-03-27", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke(); 
