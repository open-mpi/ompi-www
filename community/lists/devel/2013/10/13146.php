<?
$subject_val = "[OMPI devel] SHMEM v1.7 merge proposal";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 28 19:09:29 2013" -->
<!-- isoreceived="20131028230929" -->
<!-- sent="Mon, 28 Oct 2013 23:02:30 +0000" -->
<!-- isosent="20131028230230" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] SHMEM v1.7 merge proposal" -->
<!-- id="CE944923.149DB%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> [OMPI devel] SHMEM v1.7 merge proposal<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-28 19:02:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13147.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Previous message:</strong> <a href="13145.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13147.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Reply:</strong> <a href="13147.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All -
<br>
<p>Ralph and I talked today about the logistics of bringing the OpenSHMEM
<br>
code to the 1.7 release branch, as it's now a fairly large set of changes
<br>
from the trunk.  What we propose is to follow the same proceedure we used
<br>
when merging in the RTE framework change, which is essentially a staging
<br>
branch.  So, Mellanox (as the one filing the CMR) would branch from 1.7,
<br>
bring the OpenSHMEM changes into that (and hopefully test), and then file
<br>
a single CMR for the changes from the branch.  If done properly, the GK
<br>
then only has to merge with --reintegrate and we're set.
<br>
<p>Let's talk about it on the call tomorrow, but that's the current proposal.
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
<li><strong>Next message:</strong> <a href="13147.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Previous message:</strong> <a href="13145.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: shmem vs. oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13147.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Reply:</strong> <a href="13147.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
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
