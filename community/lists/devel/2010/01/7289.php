<?
$subject_val = "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  8 09:24:51 2010" -->
<!-- isoreceived="20100108142451" -->
<!-- sent="Fri, 8 Jan 2010 15:25:39 +0100 (CET)" -->
<!-- isosent="20100108142539" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)" -->
<!-- id="alpine.DEB.2.00.1001081502410.21907_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B465D4F.8010808_at_sun.com" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-08 09:25:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7290.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Previous message:</strong> <a href="7288.php">Jeff Squyres: "[OMPI devel] [PMX:VIRUS] Sophos virus"</a>
<li><strong>In reply to:</strong> <a href="7284.php">Eugene Loh: "[OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7299.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7299.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 7 Jan 2010, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Could someone tell me how these settings are used in OMPI or give any 
</span><br>
<span class="quotelev1">&gt; guidance on how they should or should not be used?
</span><br>
This is a very good question :-) As this whole e-mail, though it's hard 
<br>
(in my opinion) to give it a Good (TM) answer.
<br>
<p><span class="quotelev1">&gt; This means that if you loop over the elements of multiple large arrays 
</span><br>
<span class="quotelev1">&gt; (which is common in HPC), you can generate a lot of cache conflicts, 
</span><br>
<span class="quotelev1">&gt; depending on the cache associativity.
</span><br>
On the other hand, high buffer alignment sometimes gives better 
<br>
performance (e.g. Infiniband QDR bandwidth).
<br>
<p><span class="quotelev1">&gt; There are multiple reasons one might want to modify the behavior of the 
</span><br>
<span class="quotelev1">&gt; memory allocator, including high cost of mmap calls, wanting to register 
</span><br>
<span class="quotelev1">&gt; memory for faster communications, and now this cache-conflict issue.  The 
</span><br>
<span class="quotelev1">&gt; usual solution is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv MALLOC_MMAP_MAX_        0
</span><br>
<span class="quotelev1">&gt; setenv MALLOC_TRIM_THRESHOLD_ -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or the equivalent mallopt() calls.
</span><br>
But yes, this set of settings is the number one tweak on HPC code that I'm 
<br>
aware of.
<br>
<p><span class="quotelev1">&gt; This issue becomes an MPI issue for at least three reasons:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *)  MPI may care about these settings due to memory registration and pinning. 
</span><br>
<span class="quotelev1">&gt; (I invite you to explain to me what I mean.  I'm talking over my head here.)
</span><br>
Avoiding mmap is good since it prevents from calling munmap (a function we 
<br>
need to hack to prevent data corruption).
<br>
<p><span class="quotelev1">&gt; *)  (Related to the previous bullet), MPI performance comparisons may reflect 
</span><br>
<span class="quotelev1">&gt; these effects.  Specifically, in comparing performance of OMPI, Intel MPI, 
</span><br>
<span class="quotelev1">&gt; Scali/Platform MPI, and MVAPICH2, some tests (such as HPCC and SPECmpi) have 
</span><br>
<span class="quotelev1">&gt; shown large performance differences between the various MPIs when, it seems, 
</span><br>
<span class="quotelev1">&gt; none were actually spending much time in MPI.  Rather, some MPI 
</span><br>
<span class="quotelev1">&gt; implementations were turning off large-malloc mmaps and getting good 
</span><br>
<span class="quotelev1">&gt; performance (and sadly OMPI looked bad in comparison).
</span><br>
I don't think this bullet is related to the previous one. The first one is 
<br>
a good reason, this one is typically the Bad reason. Bad, but 
<br>
unfortunately true : competitors' MPI libraries are faster because ... 
<br>
they do much more than MPI (accelerate malloc being the main difference). 
<br>
Which I think is Bad, because all these settings should be let in 
<br>
developper's hands. You'll always find an application where these settings 
<br>
will waste memory and prevent an application from running.
<br>
<p><span class="quotelev1">&gt; *)  These settings seem to be desirable for HPC codes since they don't do 
</span><br>
<span class="quotelev1">&gt; much allocation/deallocation and they do tend to have loop nests that wade 
</span><br>
<span class="quotelev1">&gt; through multiple large arrays at once.  For best &quot;out of the box&quot; 
</span><br>
<span class="quotelev1">&gt; performance, a software stack should turn these settings on for HPC.  Codes 
</span><br>
<span class="quotelev1">&gt; don't typically identify themselves as &quot;HPC&quot;, but some indicators include 
</span><br>
<span class="quotelev1">&gt; Fortran, OpenMP, and MPI.
</span><br>
In practice, I agree. Most HPC codes benefit from it. But I also ran into 
<br>
codes where the memory waste was a problem.
<br>
<p><span class="quotelev1">&gt; I don't know the full scope of the problem, but I've run into this with at 
</span><br>
<span class="quotelev1">&gt; least HPCC STREAM (which shouldn't depend on MPI at all, but OMPI looks much 
</span><br>
<span class="quotelev1">&gt; slower than Scali/Platform on some tests) and SPECmpi (primarily one or two 
</span><br>
<span class="quotelev1">&gt; codes, though it depends also on problem size).
</span><br>
I had also those codes in mind. That's also why I don't like those MPI 
<br>
&quot;benchmarks&quot;, since they benchmark much more than MPI. They hence 
<br>
encourage MPI provider to incorporate into their libraries things that 
<br>
have (more or less) nothing to do with MPI.
<br>
<p>But again, yes, from the (basic) user point of view, library X seems 
<br>
faster than library Y. When there is nothing left to improve on MPI, start 
<br>
optimizing the rest .. maybe we should reimplement a faster libc inside 
<br>
MPI :-)
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7290.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Previous message:</strong> <a href="7288.php">Jeff Squyres: "[OMPI devel] [PMX:VIRUS] Sophos virus"</a>
<li><strong>In reply to:</strong> <a href="7284.php">Eugene Loh: "[OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7299.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7299.php">Jeff Squyres: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
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
