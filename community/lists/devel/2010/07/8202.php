<?
$subject_val = "Re: [OMPI devel] GCC atomic intrinsics";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 11:53:50 2010" -->
<!-- isoreceived="20100721155350" -->
<!-- sent="Wed, 21 Jul 2010 11:54:26 -0400" -->
<!-- isosent="20100721155426" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GCC atomic intrinsics" -->
<!-- id="71AEC6FE-7AAD-4811-9692-57CAE4F59E35_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="517FF204-D9DF-4231-B4F4-93FE3E7FD240_at_sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 11:54:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8203.php">Jeff Squyres: "[OMPI devel] MPI_GET_COUNT in v1.4"</a>
<li><strong>Previous message:</strong> <a href="8201.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<li><strong>In reply to:</strong> <a href="8200.php">Barrett, Brian W: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8206.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul raises good points, too.
<br>
<p>Manuel -- do you have anyone that could work on this?  I'd be happy to supply the configury magic to check and see if the GCC intrinsics are available (assumedly outputing an AM_CONDITIONAL and/or AC_DEFINE to let the code base know the decision) if someone else can do the work of actually implementing the *use* of the GCC atomics.  Perhaps someone might even be inspired to check out the atomics openpa, the Gasnet tools, etc....?
<br>
<p>Our typical modus operandi for such projects is to fork off into a mercurial branch, iterate on the work there (particularly if it involves external collaborators), and then bring it back into the main OMPI SVN when done.
<br>
<p><p>On Jul 20, 2010, at 12:12 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; Jeff -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think falling back to GCC built-in if available is a rational idea.  We've been using them in another project without any problems.  They are potentially a bit slower than the hand-crafted assembly because they generally use full memory barriers when we only need read memory barriers, but that's not a bad thing for the portability case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's still an issue with the high resolution timers, but there are actually rational fall-backs for that, so we're probably ok there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 20, 2010, at 9:49 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *** This mail mainly targeted at Brian and George ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Debian maintainer Manuel Prinz raised an idea to me this morning:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The Debian community compiles and tests Debian on a huge range of hardware platforms.  It's been a long-standing issue that Open MPI doesn't support all of them (e.g., MIPS, ARM, ...).  Specifically, we don't have assembly to support all of those platforms.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The Debian community asks: if building with a recent GCC on one of these platforms where OMPI doesn't have native assembly, can we fall back to the GCC intrinsic atomics?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2495">https://svn.open-mpi.org/trac/ompi/ticket/2495</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Additionally, there's then OpenPA project from Argonne that supports a bunch of atomics on a bunch of platforms.  George told me at one point that he didn't think it was sufficient for Open MPI's needs.  Do we know if that's still true?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="8203.php">Jeff Squyres: "[OMPI devel] MPI_GET_COUNT in v1.4"</a>
<li><strong>Previous message:</strong> <a href="8201.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<li><strong>In reply to:</strong> <a href="8200.php">Barrett, Brian W: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8206.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
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
