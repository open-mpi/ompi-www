<?
$subject_val = "[OMPI devel] Incorrect one-sided test";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 11:43:22 2007" -->
<!-- isoreceived="20071107164322" -->
<!-- sent="Wed, 7 Nov 2007 11:43:20 -0500 (EST)" -->
<!-- isosent="20071107164320" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] Incorrect one-sided test" -->
<!-- id="Pine.LNX.4.64.0711071139200.30654_at_milliways.osl.iu.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 11:43:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2564.php">George Bosilca: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2562.php">Jeff Squyres: "Re: [OMPI devel] v1.2 branch mpi_preconnect_all"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>Lisa Glendenning, who's working on a Portals one-sided component, 
<br>
discovered that the test onesided/test_start1.c in our repository is 
<br>
incorrect.  It assumes that MPI_Win_start is non-blocking, but the 
<br>
standard says that &quot;MPI_WIN_START is allowed to block until the 
<br>
corresponding MPI_WIN_POST calls are executed&quot;.  The pt2pt and rdma 
<br>
components did not block, so the test error did not show up with those 
<br>
components.
<br>
<p>I've fixed the test in r1223, but thought I'd let everyone know I changed 
<br>
one of our conformance tests.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2564.php">George Bosilca: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2562.php">Jeff Squyres: "Re: [OMPI devel] v1.2 branch mpi_preconnect_all"</a>
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
