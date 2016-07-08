<?php

$mirror_dir = "/community/mirrors";

//
// Class to hold a bunch of stuff
//
class mirror {
    var $name, $region, $location, $flag, $url, $server, $display;
    
    function mirror($n, $r, $l, $f, $disp, $s, $u) {
        $this->name = $n;
        $this->region = $r;
        $this->location = $l;
        $this->flag = $f;
        $this->display = $disp;
        $this->server = $s;
        $this->url = $u;
    }
    
    function get_name() { return $this->name; }
    function get_region() { return $this->region; }
    function get_location() { return $this->location; }
    function get_flag() { return $this->flag; }
    function get_display() { return $this->display; }
    function get_server() { return $this->server; }
    function get_url() { return $this->url; }
}

//
// Sort the mirror objects.  Sort order:
// Region
// Flag name
// Name
//
function mirror_cmp($a, $b) {
    if ($a->region < $b->region) {
        return -1;
    } else if ($a->region > $b->region) {
        return 1;
    } else {
        $ret = strcasecmp($a->flag, $b->flag);
        if (0 !=$ret) {
            return $ret;
        }
        return strcasecmp($a->name, $b->name);
    }
}


// Read in all the mirrors, and return a sorted array

function read_mirrors() {
    global $topdir;
    
    $f = fopen("$topdir/community/mirrors/mirrors.txt", "r");
    while (($line = fgets($f, 1024)) != false) {
        $line = trim($line);
        if (substr($line, 0, 1) != "#") {
            $parts = explode("\!", $line);
            $mirrors[] = new mirror($parts[0], $parts[1], $parts[2],
                                    $parts[3], $parts[4], $parts[5],
                                    $parts[6]);
        }
    }
    
    usort($mirrors, "mirror_cmp");
    return $mirrors;
}
