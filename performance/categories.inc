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

$cat_titles[] = "Devel Trunk";
$cat_short_titles[] = "Devel Trunk";
$cat_names[] = "v1.9";
$cat_parent_name[] = "";

    $cat_titles[] = "2013";
    $cat_short_titles[] = "2013";
    $cat_names[] = "v1.9/2013";
    $cat_parent_name[] = "v1.9";

