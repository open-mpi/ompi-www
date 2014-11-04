<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# The v1.7 series is done
$beyond_end_date = "2014-05-01";

//////////////////////////////////////////////////////////////////////////
// v1.7 release series
series("v1.7 series", "2012-03-15", $beyond_end_date, $data, $vpos, $graph);
milestone("branch", "2012-04-03", $data, $vpos);
milestone("v1.7", "2013-04-01", $data, $vpos);
milestone("v1.7.1", "2013-04-16", $data, $vpos);
milestone("v1.7.2", "2013-06-26", $data, $vpos);
milestone("v1.7.3", "2013-10-17", $data, $vpos);
milestone("v1.7.4", "2014-02-05", $data, $vpos);
milestone("v1.7.5", "2014-03-20", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke(); 
