<?php
# Question: What is this 'parent_name' thing?
# Answer: This identifies an entry as a child of other entries. If 
#   'parent_name' is blank for an entry, it means 1 of 2 things:
#       1. it is the parent of some other entries
#       2. It is a top-level FAQ page
#    The way we tell the difference between tese two is that if any other
#    entries refer to it in the 'parent_name' field, then it is a parent.
#    Otherwise it is just another FAQ page
#    Note that this is a simple 2 level hierarchy implemented, i.e.
#    children cannot also be parents.

$cat_titles[] = "General information";
$cat_short_titles[] = "General information";
$cat_names[] = "general_parent";
$cat_parent_name[] = "";

    $cat_titles[] = "General information";
    $cat_short_titles[] = "General information";
    $cat_names[] = "general";
    $cat_parent_name[] = "general_parent";

$cat_titles[] = "Tuning";
$cat_short_titles[] = "Tuning";
$cat_names[] = "tune_parent";
$cat_parent_name[] = "";

    $cat_titles[] = "General run-time tuning";
    $cat_short_titles[] = "General tuning";
    $cat_names[] = "tuning";
    $cat_parent_name[] = "tune_parent";

    $cat_titles[] = "Tuning the run-time characterisitics of MPI OpenFabrics communications (InfiniBand and iWARP)";
    $cat_short_titles[] = "OpenFabrics";
    $cat_names[] = "openfabrics";
    $cat_parent_name[] = "tune_parent";

$cat_titles[] = "Developer information";
$cat_short_titles[] = "Developer information";
$cat_names[] = "developer_parent";
$cat_parent_name[] = "";

    $cat_titles[] = "Mercurial";
    $cat_short_titles[] = "Mercurial";
    $cat_names[] = "mercurial";
    $cat_parent_name[] = "developer_parent";

    $cat_titles[] = "Open MPI code internals";
    $cat_short_titles[] = "Internals";
    $cat_names[] = "internals";
    $cat_parent_name[] = "developer_parent";

$cat_titles[] = "Third-party systems and applications";
$cat_short_titles[] = "3rd party";
$cat_names[] = "third_party_parent";
$cat_parent_name[] = "";

    $cat_titles[] = "Simple Linux utility for resource management";
    $cat_short_titles[] = "Slurm";
    $cat_names[] = "slurm";
    $cat_parent_name[] = "third_party_parent";

    $cat_titles[] = "MR+";
    $cat_short_titles[] = "MR+";
    $cat_names[] = "mrplus";
    $cat_parent_name[] = "third_party_parent";

