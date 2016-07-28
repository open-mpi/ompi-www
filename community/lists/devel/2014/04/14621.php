<?
$subject_val = "[OMPI devel] RFC: continue cleanup of build system abstractions";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 27 19:40:02 2014" -->
<!-- isoreceived="20140427234002" -->
<!-- sent="Sun, 27 Apr 2014 16:39:39 -0700" -->
<!-- isosent="20140427233939" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: continue cleanup of build system abstractions" -->
<!-- id="1B6AA396-0A3F-481E-AEE7-DEE2833D6016_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: continue cleanup of build system abstractions<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-27 19:39:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14622.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14620.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14679.php">Ralph Castain: "Re: [OMPI devel] RFC: continue cleanup of build system abstractions"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14679.php">Ralph Castain: "Re: [OMPI devel] RFC: continue cleanup of build system abstractions"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14762.php">Ralph Castain: "Re: [OMPI devel] RFC: continue cleanup of build system abstractions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:   continue the cleanup of build system abstractions that was started
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a couple of years ago by Brian, Jeff, and I. The objective is to fix
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;all the naming conventions for things like OMPI_CHECK_PACKAGE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;so they accurately reflect their targeted level in the code base - e.g.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_foo gets used for things in the MPI layer. This basically just
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;corrects some historical decisions made before we cared as much
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;about abstractions
<br>
<p>WHEN:  to be done in a series of commits over the next two months
<br>
<p>HOW:    a simple search_replace.pl across the repo
<br>
<p>First step:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CHECK_PACKAGE                    -&gt;  OPAL_CHECK_PACKAGE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CHECK_FUNC_LIB                    -&gt;  OPAL_CHECK_FUNC_LIB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CHECK_COMPILER_WORKS   -&gt;  OPAL_CHECK_COMPILER_WORKS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CHECK_WITHDIR                      -&gt;  OPAL_CHECK_WITHDIR
<br>
<p><p>TIMEOUT:  if nobody raises an objection, sometime after the Tues telecon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14622.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14620.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14679.php">Ralph Castain: "Re: [OMPI devel] RFC: continue cleanup of build system abstractions"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14679.php">Ralph Castain: "Re: [OMPI devel] RFC: continue cleanup of build system abstractions"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14762.php">Ralph Castain: "Re: [OMPI devel] RFC: continue cleanup of build system abstractions"</a>
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
