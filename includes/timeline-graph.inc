<?php
include_once("$topdir/includes/jpgraph/jpgraph.php"); 
include_once("$topdir/includes/jpgraph/jpgraph_gantt.php"); 

// Cross-index for labels
$months[] = "Jan";
$months[] = "Feb";
$months[] = "Mar";
$months[] = "Apr";
$months[] = "May";
$months[] = "Jun";
$months[] = "Jul";
$months[] = "Aug";
$months[] = "Sep";
$months[] = "Oct";
$months[] = "Nov";
$months[] = "Dec";

// Add a major series
function series($name, $start, $end, &$data, &$vpos, &$graph) {
    // Vertical position index
    $vpos = 0;

    //    $data[] = array($vpos, ACTYPE_GROUP, $name, $start, $end, "");

    // Make the graph object
    $graph = new GanttGraph(0, 0, "auto"); 
    $graph->SetShadow(); 
    $graph->hgrid->Show();
    $graph->hgrid->line->SetColor('lightblue' ); 
    $graph->hgrid->SetRowFillColor( 'darkblue@0.9');
    $graph->title->Set("Open MPI Release Version Timeline: $name"); 
    $graph->subtitle->Set(strftime("As of %B %e, %Y", time()));
    $graph->ShowHeaders(GANTT_HMONTH | GANTT_HYEAR); 
    $graph->scale->year->SetFontColor("white");
    $graph->scale->year->SetBackgroundColor("blue");
    $graph->scale->month->SetStyle(MONTHSTYLE_SHORTNAME);
    $graph->SetDateRange($start, $end);
}

// Add a milestone / release
function milestone($text, $date, &$data, &$vpos) {
    global $months;
    $ltext = "  " . $months[substr($date, 5, 2) - 1] . " " . 
	substr($date, 8, 2) . ", " .
	substr($date, 0, 4);
    $data[] = array($vpos, ACTYPE_MILESTONE, $ltext, $date, $text);
    ++$vpos;
}
