<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# The v1.4 series isn't done yet
$beyond_end_date = "2012-04-01";

//////////////////////////////////////////////////////////////////////////
// v1.4 release series
series("v1.4 series", "2009-11-01", $beyond_end_date, $data, $vpos, $graph);
milestone("branch", "2009-12-01", $data, $vpos);
milestone("v1.4", "2009-12-08", $data, $vpos);
milestone("v1.4.1", "2010-01-15", $data, $vpos);
milestone("Sun ClusterTools 8.2.1c", "2010-04-03", $data, $vpos);
milestone("v1.4.2", "2010-05-04", $data, $vpos);
milestone("v1.4.3", "2010-09-06", $data, $vpos);
milestone("v1.4.4", "2011-10-11", $data, $vpos);
milestone("v1.4.5", "2012-02-12", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke(); 
