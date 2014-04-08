<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "faq";

include_once("categories.inc");
for ($i = 0; $i < sizeof($titles); ++$i) {
    if ("" != $short_titles[$i]) {
        if("" == $parent_name[$i]) {
            $has_children = 0;
            #This is potentially a parent, we must get all the children before adding it
            for($j = $i + 1; $j < sizeof($titles); ++$j) {
                if("" != $short_titles[$j]) {
                    if($names[$i] == $parent_name[$j]) {
                        $has_children = 1;
                        $children[] = new Nav($short_titles[$j], "./?category=" . $names[$j], "");
                    } else {
                        break;
                    }
                }
            }
            #special case, is it has no children, it is not a parent
            if(0 == $has_children) {
                $this_nav[] = new Nav($short_titles[$i], "./?category=" . $names[$i]);
            } else {
                //$this_nav[] = new Nav($short_titles[$i], "./?parent=" . $names[$i], $children);
                $this_nav[] = new Nav($short_titles[$i], "",  $children);
                $i = $j;
                if($j < sizeof($titles)) {
                    $i = $j - 1;
                }
                unset($children);
            }
        } else {
            #this should never happen, but to be on the safe side, we'll just go with it
            $this_nav[] = new Nav($short_titles[$i], "./?category=" . $names[$i]);
        }
    }
}
