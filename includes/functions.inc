<?php
global $included_files;

function ompi_set_included($filename) {
    global $included_files;
    $included_files[] = $filename;
}