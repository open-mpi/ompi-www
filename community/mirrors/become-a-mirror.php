<?php // -*- c++ -*-

  $topdir = "../..";
  $title = "How to become an Open MPI mirror site";

  include_once("nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/code.inc");
?>

<p> As of May 2018, the Open MPI mirror program is winding down; we
are not accepting new mirrors at this time.</p>

<p> Back when the Open MPI project started, the internet was
ubiquitious, but its connectivity was not.  Several Open MPI user
sites -- or geographic regions containing Open MPI users -- did not
enjoy high bandwidth connectivity to the Open MPI web site.  As such,
it made sense to physically mirror the Open MPI web site (including
the downloadable software packages) around the internet.</p>

<p> These days are mostly behind us: there is both good internet
connectivity to many more places, and Open MPI's web content is now
syndicated behind a web content distribution network (CDN) -- meaning
that everyone should be able to download Open MPI software packages
with good access.</p>

<p> As such, the role of mirrors is far less necessary than it used to
be.  The Open MPI community deeply appreciate those who spent time,
resources, and money mirroring the Open MPI web site.  Thank you!</p>

<?php
  include_once("$topdir/includes/footer.inc");
