<?php

# The bugs listed in build-sun-compilers section
# were made "link-able" by vijay.tatkar@sun.com

function sun_bug($num) {
    return "<a href=\"http://bugs.sun.com/bugdatabase/view_bug.do?bug_id=$num\">";
}

function ompi_bug($num) {
    return "<a href=\"https://github.com/open-mpi/ompi/issues/$num\">";
}

