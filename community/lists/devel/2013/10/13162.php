<?
$subject_val = "[OMPI devel] CM PML / OpenSHMEM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 29 13:21:16 2013" -->
<!-- isoreceived="20131029172116" -->
<!-- sent="Tue, 29 Oct 2013 17:02:07 +0000" -->
<!-- isosent="20131029170207" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] CM PML / OpenSHMEM" -->
<!-- id="CE95462B.14A54%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> [OMPI devel] CM PML / OpenSHMEM<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-29 13:02:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13163.php">Ralph Castain: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13161.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: SHMEM v1.7 merge proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13163.php">Ralph Castain: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<li><strong>Reply:</strong> <a href="13163.php">Ralph Castain: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mellanox -
<br>
<p>It looks like someone fixed the segfault when calling start_pes() when the
<br>
CM PML is in use.  However, I'm not sure that a clean abort is much
<br>
better.  With the proc tags code (in both the trunk and v1.7), there's no
<br>
reason that you can't initialize both the btls and mtls.  This may require
<br>
some additional coding, but I think it should be doable.  I'm happy to
<br>
help with advice / discuss implementation issues, but not supporting
<br>
OpenSHMEM when the CM PML is in use is unacceptable and is, in my mind, a
<br>
blocker for v1.7.
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
<li><strong>Next message:</strong> <a href="13163.php">Ralph Castain: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13161.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: SHMEM v1.7 merge proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13163.php">Ralph Castain: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<li><strong>Reply:</strong> <a href="13163.php">Ralph Castain: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
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
