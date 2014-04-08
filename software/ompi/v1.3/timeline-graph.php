<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

# The v1.3 series isn't done yet
$beyond_end_date = strftime("%Y-%m-%d", time() + (90 * 24 * 60 * 60));

//////////////////////////////////////////////////////////////////////////
// v1.3 release series
series("v1.3 series", "2008-06-25", "2010-01-31", $data, $vpos, $graph);
milestone("branch", "2008-06-25", $data, $vpos);
milestone("Sun ClusterTools 8.0", "2008-09-04", $data, $vpos);
milestone("Sun ClusterTools 8.1", "2008-11-13", $data, $vpos);
milestone("v1.3", "2009-01-19", $data, $vpos);
milestone("v1.3.1", "2009-03-19", $data, $vpos);
milestone("v1.3.2", "2009-04-22", $data, $vpos);
milestone("v1.3.3", "2009-07-14", $data, $vpos);
milestone("Sun ClusterTools 8.2", "2009-07-16", $data, $vpos);
milestone("v1.3.4", "2010-02-13", $data, $vpos);
milestone("Sun\nClusterTools\n8.2.1", "2009-10-23", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke(); 
