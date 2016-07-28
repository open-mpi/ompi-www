<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 15:43:38 2011" -->
<!-- isoreceived="20110414194338" -->
<!-- sent="Thu, 14 Apr 2011 15:43:26 -0400" -->
<!-- isosent="20110414194326" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly" -->
<!-- id="952BF0CD-26C3-4852-AB85-9BD4F4827B5B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="85A7AF1E-E550-4C00-ABA8-785AB59BF0B2_at_ornl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 15:43:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9197.php">George Bosilca: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<li><strong>Previous message:</strong> <a href="9195.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
<li><strong>In reply to:</strong> <a href="9195.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9186.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2011, at 3:13 PM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev2">&gt;&gt; That can easily be a run-time check during startup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It could be fixed. My point was that in the existing code, it's compile time decision and not run time.
</span><br>
<p>I agree; I mentioned the same issue in my review, too.  Some of the code can clearly use both a compile time and a run time check (like the part that we're talking about right now :-) ).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9197.php">George Bosilca: "Re: [OMPI devel] Problem of memory lost in MPI_Type_create_hindexed() with count = 1 (patch proposed)"</a>
<li><strong>Previous message:</strong> <a href="9195.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
<li><strong>In reply to:</strong> <a href="9195.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9186.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
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
