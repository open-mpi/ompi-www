<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "video";

include_once("categories.inc");
for ($i = 0; $i < sizeof($cat_titles); ++$i) {
    if ("" != $cat_short_titles[$i]) {
        if("" == $cat_parent_name[$i]) {
            $has_children = 0;
            #This is potentially a parent, we must get all the children before adding it
            for($j = $i + 1; $j < sizeof($cat_titles); ++$j) {
                if("" != $cat_short_titles[$j]) {
                    if($cat_names[$i] == $cat_parent_name[$j]) {
                        $has_children = 1;
                        $children[] = new Nav($cat_short_titles[$j], "./?category=" . $cat_names[$j], "");
                    } else {
                        break;
                    }
                }
            }
            #special case, is it has no children, it is not a parent
            if(0 == $has_children) {
                $this_nav[] = new Nav($cat_short_titles[$i], "./?category=" . $cat_names[$i]);
            } else {
                //$this_nav[] = new Nav($cat_short_titles[$i], "./?parent=" . $cat_names[$i], $children);
                $this_nav[] = new Nav($cat_short_titles[$i], "",  $children);
                $i = $j;
                if($j < sizeof($cat_titles)) {
                    $i = $j - 1;
                }
                unset($children);
            }
        } else {
            #this should never happen, but to be on the safe side, we'll just go with it
            $this_nav[] = new Nav($cat_short_titles[$i], "./?category=" . $cat_names[$i]);
        }
    }
}
