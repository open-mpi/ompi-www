<?
$subject_val = "Re: [OMPI devel] GCC atomic intrinsics";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 20 12:12:43 2010" -->
<!-- isoreceived="20100720161243" -->
<!-- sent="Tue, 20 Jul 2010 10:12:29 -0600" -->
<!-- isosent="20100720161229" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GCC atomic intrinsics" -->
<!-- id="517FF204-D9DF-4231-B4F4-93FE3E7FD240_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8309BB1A-1841-49FC-A607-0CEA841DA839_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] GCC atomic intrinsics<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-20 12:12:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8201.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8199.php">Paul H. Hargrove: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>In reply to:</strong> <a href="8198.php">Jeff Squyres: "[OMPI devel] GCC atomic intrinsics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8202.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Reply:</strong> <a href="8202.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff -
<br>
<p>I think falling back to GCC built-in if available is a rational idea.  We've been using them in another project without any problems.  They are potentially a bit slower than the hand-crafted assembly because they generally use full memory barriers when we only need read memory barriers, but that's not a bad thing for the portability case.
<br>
<p>There's still an issue with the high resolution timers, but there are actually rational fall-backs for that, so we're probably ok there.
<br>
<p>Brian
<br>
<p>On Jul 20, 2010, at 9:49 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; *** This mail mainly targeted at Brian and George ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Debian maintainer Manuel Prinz raised an idea to me this morning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Debian community compiles and tests Debian on a huge range of hardware platforms.  It's been a long-standing issue that Open MPI doesn't support all of them (e.g., MIPS, ARM, ...).  Specifically, we don't have assembly to support all of those platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Debian community asks: if building with a recent GCC on one of these platforms where OMPI doesn't have native assembly, can we fall back to the GCC intrinsic atomics?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2495">https://svn.open-mpi.org/trac/ompi/ticket/2495</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, there's then OpenPA project from Argonne that supports a bunch of atomics on a bunch of platforms.  George told me at one point that he didn't think it was sufficient for Open MPI's needs.  Do we know if that's still true?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8201.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8199.php">Paul H. Hargrove: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>In reply to:</strong> <a href="8198.php">Jeff Squyres: "[OMPI devel] GCC atomic intrinsics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8202.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Reply:</strong> <a href="8202.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
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
