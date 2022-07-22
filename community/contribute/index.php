<?php
// This page is now effectively in the Open MPI docs.  So just
// permanently redirect out to that page.

// Note: the corporate.php and individual.php pages also sym link to
// this page (because there are random legacy links out on the
// internet that link to those pages), so that they will all HTTP
// redirect out to the contributing.html page.

header("Location: https://docs.open-mpi.org/en/main/contributing.html",
       TRUE, 301);
