<?
$subject_val = "[OMPI devel] Intercomm Merge";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 13 10:21:59 2013" -->
<!-- isoreceived="20130913142159" -->
<!-- sent="Fri, 13 Sep 2013 16:21:54 +0200" -->
<!-- isosent="20130913142154" -->
<!-- name="Suraj Prabhakaran" -->
<!-- email="suraj.prabhakaran_at_[hidden]" -->
<!-- subject="[OMPI devel] Intercomm Merge" -->
<!-- id="6861B50E-D25A-463C-8C0E-BB410C1B93F1_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Intercomm Merge<br>
<strong>From:</strong> Suraj Prabhakaran (<em>suraj.prabhakaran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-13 10:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12891.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Previous message:</strong> <a href="12889.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem fortran interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12892.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12892.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Is there a plan to fix the problem with MPI_Intercomm_merge with 1.7.3 as stated in this ticket? We are really in need of this at the moment. Any hints?
<br>
<p>We face the following problem.
<br>
<p>Parents (x and y) spawn child (z). (all of them execute on separate nodes)
<br>
x is the root.
<br>
x,y and z do an MPI_Intercomm_merge.
<br>
x and z are able to communicate properly.
<br>
But y and z are not able to communicate after the merge. 
<br>
<p>Is this bug in high priority for the next release?
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/2904">https://svn.open-mpi.org/trac/ompi/ticket/2904</a>
<br>
<p>Best,
<br>
Suraj
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12891.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Previous message:</strong> <a href="12889.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem fortran interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12892.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12892.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
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
