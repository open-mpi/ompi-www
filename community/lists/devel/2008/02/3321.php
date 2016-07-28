<?
$subject_val = "[OMPI devel] Latency optimizations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 15:36:19 2008" -->
<!-- isoreceived="20080228203619" -->
<!-- sent="Thu, 28 Feb 2008 15:36:04 -0500" -->
<!-- isosent="20080228203604" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="[OMPI devel] Latency optimizations" -->
<!-- id="C3EC8564.176E5%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Latency optimizations<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 15:36:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3322.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>Previous message:</strong> <a href="3320.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3323.php">George Bosilca: "Re: [OMPI devel] Latency optimizations"</a>
<li><strong>Reply:</strong> <a href="3323.php">George Bosilca: "Re: [OMPI devel] Latency optimizations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI, About six months ago several of us spent some time coming up with a
<br>
plan to deal with the latency problems in Open MPI.  George went ahead and
<br>
has been implementing the send side changes of this optimization over the
<br>
last several months, but has not had time to get to the receive side. Galen
<br>
is picking up on this, and will be checking in changes over the next several
<br>
weeks. The gist of these is going from an active-message tag approach with
<br>
one tag per protocol (ptp, one-sided, etc) to an 8 bit global tag space, and
<br>
finer grain functions (short message, rendezvous packet, ...), as well as
<br>
some function consolidation.
<br>
<p>Rich
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3322.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>Previous message:</strong> <a href="3320.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3323.php">George Bosilca: "Re: [OMPI devel] Latency optimizations"</a>
<li><strong>Reply:</strong> <a href="3323.php">George Bosilca: "Re: [OMPI devel] Latency optimizations"</a>
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
