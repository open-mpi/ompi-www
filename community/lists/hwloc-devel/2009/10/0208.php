<?
$subject_val = "Re: [hwloc-devel] MPICH2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 12:51:00 2009" -->
<!-- isoreceived="20091021165100" -->
<!-- sent="Wed, 21 Oct 2009 12:50:55 -0400" -->
<!-- isosent="20091021165055" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 question" -->
<!-- id="CD4A73B3-3E3C-43D3-BF04-A60A509CDBDD_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4ADF2B4B.80205_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] MPICH2 question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 12:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0209.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict compiler flags"</a>
<li><strong>Previous message:</strong> <a href="0207.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0205.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0211.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0211.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0212.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I see at least some GNU-isms in the hwloc code that might be  
<br>
problematic for embedding hwloc in other code bases that don't use gcc  
<br>
to compile.  E.g., in OMPI, we'd prefer to use the same compiler suite  
<br>
to compile hwloc that was used to compile OMPI itself (e.g., intel,  
<br>
PGI, ...etc. -- configuring/building hwloc with icc results in a *lot*  
<br>
of warnings; I didn't test functionality).
<br>
<p>I don't know if we want to target that for v0.9.1 or not -- my first  
<br>
reaction is to postpone this to v1.0 in order to get v0.9.1 out the  
<br>
door.  Fully bake in all the embedding -- including cleaning up any  
<br>
potential GNU-isms -- for v1.0.
<br>
<p>Pavan -- is it a problem to always compile hwloc with gcc?
<br>
<p><p>On Oct 21, 2009, at 11:39 AM, Pavan Balaji wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/21/2009 10:38 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Pavan Balaji, le Wed 21 Oct 2009 10:36:33 -0500, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 10/21/2009 10:28 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Pavan Balaji, le Wed 21 Oct 2009 09:55:36 -0500, a &#233;crit :
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1. I see a AC_PROG_CC_C99 in the configure.ac. Do you require the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; compiler to be C99 capable always?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; No, we ended up using constructs which should pass c90 and the  
</span><br>
<span class="quotelev1">&gt; compilers
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; we have tested (aix, solaris, icc).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So shouldn't the AC_PROG_CC_C99 be gotten rid of?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No because when C99 is available, we enable some optimization  
</span><br>
<span class="quotelev1">&gt; features,
</span><br>
<span class="quotelev2">&gt; &gt; like __hwloc_restrict.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gotcha! Thanks for the clarification.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Pavan Balaji
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0209.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict compiler flags"</a>
<li><strong>Previous message:</strong> <a href="0207.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0205.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0211.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0211.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0212.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
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
