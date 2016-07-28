<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 15:13:22 2011" -->
<!-- isoreceived="20110414191322" -->
<!-- sent="Thu, 14 Apr 2011 15:13:17 -0400" -->
<!-- isosent="20110414191317" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly" -->
<!-- id="85A7AF1E-E550-4C00-ABA8-785AB59BF0B2_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69F9FC2A-F4F9-4140-B06E-B91080153FD7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 15:13:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9196.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
<li><strong>Previous message:</strong> <a href="9194.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9192.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9196.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
<li><strong>Reply:</strong> <a href="9196.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually I'm not sure that it is good idea to enable CUDA by default, since it disables zero-copy protocol, that is critical for good performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That can easily be a run-time check during startup.
</span><br>
<p>It could be fixed. My point was that in the existing code, it's compile time decision and not run time.
<br>
&nbsp;
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9196.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
<li><strong>Previous message:</strong> <a href="9194.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9192.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9196.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
<li><strong>Reply:</strong> <a href="9196.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
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
