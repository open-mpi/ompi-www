<?
$subject_val = "[OMPI devel] Open MPI v1.2.9 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 11:04:20 2009" -->
<!-- isoreceived="20090217160420" -->
<!-- sent="Tue, 17 Feb 2009 11:04:15 -0500" -->
<!-- isosent="20090217160415" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI v1.2.9 released" -->
<!-- id="ea86ce220902170804s1be8ae41p275011d3c6cf8d6b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] Open MPI v1.2.9 released<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 11:04:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5441.php">Eugene Loh: "[OMPI devel] sm latency putback"</a>
<li><strong>Previous message:</strong> <a href="5439.php">Jeff Squyres: "[OMPI devel] SVN-specific tools?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic,
<br>
and industry partners, is pleased to announce the release of Open MPI
<br>
version 1.2.9. This release is mainly a bug fix release over the v1.2.8
<br>
release.  This is the last planned release from the 1.2 series.
<br>
<p>We strongly recommend that all users upgrade to the 1.3 series
<br>
if possible.
<br>
<p>Version 1.2.9 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.2.9 as compared to v1.2.8:
<br>
- Fix a segfault when using one-sided communications on some forms of derived
<br>
&nbsp;&nbsp;datatypes.  Thanks to Dorian Krause for reporting the bug. See #1715.
<br>
- Fix an alignment problem affecting one-sided communications on
<br>
&nbsp;&nbsp;some architectures (e.g., SPARC64). See #1738.
<br>
- Fix compilation on Solaris when thread support is enabled in Open MPI
<br>
&nbsp;&nbsp;(e.g., when using --with-threads). See #1736.
<br>
- Correctly take into account the MTU that an OpenFabrics device port
<br>
&nbsp;&nbsp;is using. See #1722 and
<br>
&nbsp;&nbsp;<a href="https://bugs.openfabrics.org/show_bug.cgi?id=1369">https://bugs.openfabrics.org/show_bug.cgi?id=1369</a>.
<br>
- Fix two datatype engine bugs. See #1677.
<br>
&nbsp;&nbsp;Thanks to Peter Kjellstrom for the bugreport.
<br>
- Fix the bml r2 help filename so the help message can be found. See #1623.
<br>
- Fix a compilation problem on RHEL4U3 with the PGI 32 bit compiler
<br>
&nbsp;&nbsp;caused by &lt;infiniband/driver.h&gt;.  See ticket #1613.
<br>
- Fix the --enable-cxx-exceptions configure option. See ticket #1607.
<br>
- Properly handle when the MX BTL cannot open an endpoint. See ticket #1621.
<br>
- Fix a double free of events on the tcp_events list. See ticket #1631.
<br>
- Fix a buffer overun in opal_free_list_grow (called by MPI_Init).
<br>
&nbsp;&nbsp;Thanks to Patrick Farrell for the bugreport and Stephan Kramer for
<br>
&nbsp;&nbsp;the bugfix.  See ticket #1583.
<br>
- Fix a problem setting OPAL_PREFIX for remote sh-based shells.
<br>
&nbsp;&nbsp;See ticket #1580.
<br>
<p><pre>
--
Tim Mattox, Ph.D.
Open Systems Lab
Indiana University
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5441.php">Eugene Loh: "[OMPI devel] sm latency putback"</a>
<li><strong>Previous message:</strong> <a href="5439.php">Jeff Squyres: "[OMPI devel] SVN-specific tools?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
