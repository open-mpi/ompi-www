<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  ibarrier failures on MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  5 21:20:42 2012" -->
<!-- isoreceived="20120706012042" -->
<!-- sent="Fri, 6 Jul 2012 01:20:14 +0000" -->
<!-- isosent="20120706012014" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  ibarrier failures on MTT" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD239200A4_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FF35F61.9060405_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  ibarrier failures on MTT<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-05 21:20:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11240.php">Eugene Loh: "[OMPI devel] non-blocking barrier"</a>
<li><strong>Previous message:</strong> <a href="11238.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11228.php">Eugene Loh: "[OMPI devel] ibarrier failures on MTT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/3/12 5:08 PM, &quot;Eugene Loh&quot; &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I'll look at this more, but for now I'll just note that the new ibarrier
</span><br>
<span class="quotelev1">&gt;test is showing lots of failures on MTT (cisco and oracle).
</span><br>
<p>I was initializing the MPI_ERROR field of the request status after calling
<br>
the request completion function, which was causing issues.  Should be
<br>
fixed now.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11240.php">Eugene Loh: "[OMPI devel] non-blocking barrier"</a>
<li><strong>Previous message:</strong> <a href="11238.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11228.php">Eugene Loh: "[OMPI devel] ibarrier failures on MTT"</a>
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
