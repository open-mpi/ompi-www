<?
$subject_val = "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  9 06:33:46 2010" -->
<!-- isoreceived="20100109113346" -->
<!-- sent="Sat, 9 Jan 2010 06:33:41 -0500" -->
<!-- isosent="20100109113341" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)" -->
<!-- id="17A63099-7D68-45AF-A515-F4681770EB0D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1001081502410.21907_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-09 06:33:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7300.php">Eugene Loh: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7298.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Sophos virus"</a>
<li><strong>In reply to:</strong> <a href="7289.php">Sylvain Jeaugey: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7300.php">Eugene Loh: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7300.php">Eugene Loh: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure I follow -- are you saying that Open MPI is disabling the large mmap allocations, and we shouldn't?
<br>
<p>On Jan 8, 2010, at 9:25 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 7 Jan 2010, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could someone tell me how these settings are used in OMPI or give any
</span><br>
<span class="quotelev2">&gt; &gt; guidance on how they should or should not be used?
</span><br>
<span class="quotelev1">&gt; This is a very good question :-) As this whole e-mail, though it's hard
</span><br>
<span class="quotelev1">&gt; (in my opinion) to give it a Good (TM) answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This means that if you loop over the elements of multiple large arrays
</span><br>
<span class="quotelev2">&gt; &gt; (which is common in HPC), you can generate a lot of cache conflicts,
</span><br>
<span class="quotelev2">&gt; &gt; depending on the cache associativity.
</span><br>
<span class="quotelev1">&gt; On the other hand, high buffer alignment sometimes gives better
</span><br>
<span class="quotelev1">&gt; performance (e.g. Infiniband QDR bandwidth).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There are multiple reasons one might want to modify the behavior of the
</span><br>
<span class="quotelev2">&gt; &gt; memory allocator, including high cost of mmap calls, wanting to register
</span><br>
<span class="quotelev2">&gt; &gt; memory for faster communications, and now this cache-conflict issue.  The
</span><br>
<span class="quotelev2">&gt; &gt; usual solution is
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; setenv MALLOC_MMAP_MAX_        0
</span><br>
<span class="quotelev2">&gt; &gt; setenv MALLOC_TRIM_THRESHOLD_ -1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; or the equivalent mallopt() calls.
</span><br>
<span class="quotelev1">&gt; But yes, this set of settings is the number one tweak on HPC code that I'm
</span><br>
<span class="quotelev1">&gt; aware of.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This issue becomes an MPI issue for at least three reasons:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *)  MPI may care about these settings due to memory registration and pinning.
</span><br>
<span class="quotelev2">&gt; &gt; (I invite you to explain to me what I mean.  I'm talking over my head here.)
</span><br>
<span class="quotelev1">&gt; Avoiding mmap is good since it prevents from calling munmap (a function we
</span><br>
<span class="quotelev1">&gt; need to hack to prevent data corruption).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *)  (Related to the previous bullet), MPI performance comparisons may reflect
</span><br>
<span class="quotelev2">&gt; &gt; these effects.  Specifically, in comparing performance of OMPI, Intel MPI,
</span><br>
<span class="quotelev2">&gt; &gt; Scali/Platform MPI, and MVAPICH2, some tests (such as HPCC and SPECmpi) have
</span><br>
<span class="quotelev2">&gt; &gt; shown large performance differences between the various MPIs when, it seems,
</span><br>
<span class="quotelev2">&gt; &gt; none were actually spending much time in MPI.  Rather, some MPI
</span><br>
<span class="quotelev2">&gt; &gt; implementations were turning off large-malloc mmaps and getting good
</span><br>
<span class="quotelev2">&gt; &gt; performance (and sadly OMPI looked bad in comparison).
</span><br>
<span class="quotelev1">&gt; I don't think this bullet is related to the previous one. The first one is
</span><br>
<span class="quotelev1">&gt; a good reason, this one is typically the Bad reason. Bad, but
</span><br>
<span class="quotelev1">&gt; unfortunately true : competitors' MPI libraries are faster because ...
</span><br>
<span class="quotelev1">&gt; they do much more than MPI (accelerate malloc being the main difference).
</span><br>
<span class="quotelev1">&gt; Which I think is Bad, because all these settings should be let in
</span><br>
<span class="quotelev1">&gt; developper's hands. You'll always find an application where these settings
</span><br>
<span class="quotelev1">&gt; will waste memory and prevent an application from running.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *)  These settings seem to be desirable for HPC codes since they don't do
</span><br>
<span class="quotelev2">&gt; &gt; much allocation/deallocation and they do tend to have loop nests that wade
</span><br>
<span class="quotelev2">&gt; &gt; through multiple large arrays at once.  For best &quot;out of the box&quot;
</span><br>
<span class="quotelev2">&gt; &gt; performance, a software stack should turn these settings on for HPC.  Codes
</span><br>
<span class="quotelev2">&gt; &gt; don't typically identify themselves as &quot;HPC&quot;, but some indicators include
</span><br>
<span class="quotelev2">&gt; &gt; Fortran, OpenMP, and MPI.
</span><br>
<span class="quotelev1">&gt; In practice, I agree. Most HPC codes benefit from it. But I also ran into
</span><br>
<span class="quotelev1">&gt; codes where the memory waste was a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I don't know the full scope of the problem, but I've run into this with at
</span><br>
<span class="quotelev2">&gt; &gt; least HPCC STREAM (which shouldn't depend on MPI at all, but OMPI looks much
</span><br>
<span class="quotelev2">&gt; &gt; slower than Scali/Platform on some tests) and SPECmpi (primarily one or two
</span><br>
<span class="quotelev2">&gt; &gt; codes, though it depends also on problem size).
</span><br>
<span class="quotelev1">&gt; I had also those codes in mind. That's also why I don't like those MPI
</span><br>
<span class="quotelev1">&gt; &quot;benchmarks&quot;, since they benchmark much more than MPI. They hence
</span><br>
<span class="quotelev1">&gt; encourage MPI provider to incorporate into their libraries things that
</span><br>
<span class="quotelev1">&gt; have (more or less) nothing to do with MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But again, yes, from the (basic) user point of view, library X seems
</span><br>
<span class="quotelev1">&gt; faster than library Y. When there is nothing left to improve on MPI, start
</span><br>
<span class="quotelev1">&gt; optimizing the rest .. maybe we should reimplement a faster libc inside
</span><br>
<span class="quotelev1">&gt; MPI :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="7300.php">Eugene Loh: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7298.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Sophos virus"</a>
<li><strong>In reply to:</strong> <a href="7289.php">Sylvain Jeaugey: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7300.php">Eugene Loh: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7300.php">Eugene Loh: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
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
