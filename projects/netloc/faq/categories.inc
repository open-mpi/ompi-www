<?php
# Question: What is this 'parent_name' thing?
# Answer: This identifies an entry as a child of other entries. If 
#   'parent_name' is blank for an entry, it means 1 of 2 things:
#       1. it is the parent of some other entries
#       2. It is a top-level FAQ page
#    The way we tell the difference between these two is that if any other
#    entries refer to it in the 'parent_name' field, then it is a parent.
#    Otherwise it is just another FAQ page
#    Note that this is a simple 2 level hierarchy implemented, i.e.
#    children cannot also be parents.

$titles[] = "Rollup of ALL FAQ categories and questions";
$short_titles[] = "Rollup/ALL";
$names[] = "all";
$parent_name[] = "";

$titles[] = "General information about the netloc Project";
$short_titles[] = "General information";
$names[] = "general_parent";
$parent_name[] = "";

    $titles[] = "General information about the netloc Project";
    $short_titles[] = "General information";
    $names[] = "general";
    $parent_name[] = "general_parent";

$titles[] = "Building";
$short_titles[] = "Building";
$names[] = "build_parent";
$parent_name[] = "";

    $titles[] = "Building netloc";
    $short_titles[] = "Building netloc";
    $names[] = "building";
    $parent_name[] = "build_parent";

$titles[] = "Using network reader tools to discover network topologies";
$short_titles[] = "Network Readers";
$names[] = "reader_parent";
$parent_name[] = "";

    $titles[] = "General information about network reader tools";
    $short_titles[] = "General Reader Information";
    $names[] = "reader_general";
    $parent_name[] = "reader_parent";

    $titles[] = "Using netloc to discover an Infiniband network topology";
    $short_titles[] = "InfiniBand Networks";
    $names[] = "reader_ib";
    $parent_name[] = "reader_parent";

    $titles[] = "Using netloc to discover an Ethernet network topology that uses OpenFlow";
    $short_titles[] = "OpenFlow Networks";
    $names[] = "reader_of";
    $parent_name[] = "reader_parent";

$titles[] = "Navigating the API";
$short_titles[] = "API";
$names[] = "api_parent";
$parent_name[] = "";

    $titles[] = "General information about the APIs";
    $short_titles[] = "General API Information";
    $names[] = "api_general";
    $parent_name[] = "api_parent";

$titles[] = "Using the netloc tools";
$short_titles[] = "Tools";
$names[] = "tools_parent";
$parent_name[] = "";

    $titles[] = "General information about the netloc tools";
    $short_titles[] = "General Tool Information";
    $names[] = "tools_general";
    $parent_name[] = "tools_parent";

# $titles[] = "Known Issues";
# $short_titles[] = "Known Issues";
# $names[] = "known_issues";
# $parent_name[] = "";

#     $titles[] = "Known Issues";
#     $short_titles[] = "All releases";
#     $names[] = "known-issues";
#     $parent_name[] = "known_issues";
