<?
$subject_val = "[OMPI devel] IB tests in OSHMEM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 13 16:22:16 2013" -->
<!-- isoreceived="20131213212216" -->
<!-- sent="Fri, 13 Dec 2013 21:21:54 +0000" -->
<!-- isosent="20131213212154" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] IB tests in OSHMEM" -->
<!-- id="CED0D688.165AC%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> [OMPI devel] IB tests in OSHMEM<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-13 16:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13430.php">Siddhartha Jana: "[OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>Previous message:</strong> <a href="13428.php">Barrett, Brian W: "[OMPI devel] Configure refactor branch / merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13431.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>Reply:</strong> <a href="13431.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mellanox -
<br>
<p>In cleaning up some code, I noticed that the OSHMEM_SETUP_CFLAGS test is
<br>
testing for infiniband libraries and then linking them into the OSHMEM
<br>
library.  This is fairly different than what we do for the MPI layer; is
<br>
there a reason those tests are in the top-level configure and not in a
<br>
component's configure test?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13430.php">Siddhartha Jana: "[OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>Previous message:</strong> <a href="13428.php">Barrett, Brian W: "[OMPI devel] Configure refactor branch / merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13431.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>Reply:</strong> <a href="13431.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
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
