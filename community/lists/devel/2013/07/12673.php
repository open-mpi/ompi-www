<?
$subject_val = "[OMPI devel] v1.7 RTE testing / changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 22 15:15:09 2013" -->
<!-- isoreceived="20130722191509" -->
<!-- sent="Mon, 22 Jul 2013 19:12:11 +0000" -->
<!-- isosent="20130722191211" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.7 RTE testing / changes" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD440C9DA0_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> [OMPI devel] v1.7 RTE testing / changes<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-22 15:12:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12674.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28911 - trunk"</a>
<li><strong>Previous message:</strong> <a href="12672.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>As some of you probably noticed, we brought the RTE framework changes from the trunk to v1.7 this morning.  This is a big change, but should help with some of the merge conflicts we've been seeing (we're also going to move the config/ directories to match the trunk).  We did a bunch of testing this weekend, but were limited in what we could test.
<br>
<p>In particular, the cudasm BTL and the Mellanox-specific components (hcol, fca, mxm, etc.) did not get tested due to lack of resources (or hardware issues on the resources I did have).  If nVidia and Mellanox could give the 1.7 branch a spin on your hardware, it would be much appreciated.  Again, sorry about the change, but it should make the merge issues sigificantly less problematic for the remainder of 1.7 / 1.8.
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
<li><strong>Next message:</strong> <a href="12674.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28911 - trunk"</a>
<li><strong>Previous message:</strong> <a href="12672.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
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
