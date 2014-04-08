<?php
$topdir = "../../..";
include_once("$topdir/includes/timeline-graph.inc");

$vpos = 0;
$graph = 0;
$data = array();

//////////////////////////////////////////////////////////////////////////
// v1.2 release series
series("v1.2 series", "2006-10-17", "2009-04-01", $data, $vpos, $graph);
milestone("branch", "2006-10-17", $data, $vpos);
milestone("v1.2", "2007-03-15", $data, $vpos);
milestone("Sun ClusterTools 7.0", "2007-04-05", $data, $vpos);
milestone("v1.2.1", "2007-04-25", $data, $vpos);
milestone("v1.2.2", "2007-05-16", $data, $vpos);
milestone("v1.2.3", "2007-06-20", $data, $vpos);
milestone("v1.2.4", "2007-09-26", $data, $vpos);
milestone("Sun ClusterTools 7.1", "2007-11-16", $data, $vpos);
milestone("v1.2.5", "2008-01-08", $data, $vpos);
milestone("v1.2.6", "2008-04-07", $data, $vpos);
milestone("v1.2.7", "2008-08-28", $data, $vpos);
milestone("v1.2.8", "2008-10-14", $data, $vpos);
milestone("v1.2.9", "2009-02-17", $data, $vpos);

// Party on
$graph->CreateSimple($data);
$graph->Stroke(); 
