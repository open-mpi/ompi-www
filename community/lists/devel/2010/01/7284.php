<?
$subject_val = "[OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 17:15:12 2010" -->
<!-- isoreceived="20100107221512" -->
<!-- sent="Thu, 07 Jan 2010 14:16:47 -0800" -->
<!-- isosent="20100107221647" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)" -->
<!-- id="4B465D4F.8010808_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-07 17:16:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7285.php">Christoph Konersmann: "[OMPI devel] [PMX:VIRUS] Re: Howto pause BTL's sending at runtime"</a>
<li><strong>Previous message:</strong> <a href="7283.php">Jeff Squyres: "[OMPI devel] RFC: silently allow component open() to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7289.php">Sylvain Jeaugey: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7289.php">Sylvain Jeaugey: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could someone tell me how these settings are used in OMPI or give any 
<br>
guidance on how they should or should not be used?
<br>
<p>The background is that (on Linux? with GCC libc? with OMPI?) small 
<br>
memory allocations are allocated on the heap, with brk() or sbrk() used 
<br>
to modify the high-water mark.  Lest a large, freed allocation cannot be 
<br>
returned to the OS due to a small, active allocation, the memory 
<br>
allocator uses mmap() instead of brk/sbrk for large allocations.  There 
<br>
is some discussion of the internet about how mmap is a costly way of 
<br>
allocating memory, but I'm concerned about something else.  With mmap, 
<br>
you get page-aligned allocations back.  This means that if you loop over 
<br>
the elements of multiple large arrays (which is common in HPC), you can 
<br>
generate a lot of cache conflicts, depending on the cache associativity.
<br>
<p>There are multiple reasons one might want to modify the behavior of the 
<br>
memory allocator, including high cost of mmap calls, wanting to register 
<br>
memory for faster communications, and now this cache-conflict issue.  
<br>
The usual solution is
<br>
<p>setenv MALLOC_MMAP_MAX_        0
<br>
setenv MALLOC_TRIM_THRESHOLD_ -1
<br>
<p>or the equivalent mallopt() calls.
<br>
<p>This issue becomes an MPI issue for at least three reasons:
<br>
<p>*)  MPI may care about these settings due to memory registration and 
<br>
pinning.  (I invite you to explain to me what I mean.  I'm talking over 
<br>
my head here.)
<br>
<p>*)  (Related to the previous bullet), MPI performance comparisons may 
<br>
reflect these effects.  Specifically, in comparing performance of OMPI, 
<br>
Intel MPI, Scali/Platform MPI, and MVAPICH2, some tests (such as HPCC 
<br>
and SPECmpi) have shown large performance differences between the 
<br>
various MPIs when, it seems, none were actually spending much time in 
<br>
MPI.  Rather, some MPI implementations were turning off large-malloc 
<br>
mmaps and getting good performance (and sadly OMPI looked bad in 
<br>
comparison).
<br>
<p>*)  These settings seem to be desirable for HPC codes since they don't 
<br>
do much allocation/deallocation and they do tend to have loop nests that 
<br>
wade through multiple large arrays at once.  For best &quot;out of the box&quot; 
<br>
performance, a software stack should turn these settings on for HPC.  
<br>
Codes don't typically identify themselves as &quot;HPC&quot;, but some indicators 
<br>
include Fortran, OpenMP, and MPI.
<br>
<p>I don't know the full scope of the problem, but I've run into this with 
<br>
at least HPCC STREAM (which shouldn't depend on MPI at all, but OMPI 
<br>
looks much slower than Scali/Platform on some tests) and SPECmpi 
<br>
(primarily one or two codes, though it depends also on problem size).
<br>
<p>Discussion is invited.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7285.php">Christoph Konersmann: "[OMPI devel] [PMX:VIRUS] Re: Howto pause BTL's sending at runtime"</a>
<li><strong>Previous message:</strong> <a href="7283.php">Jeff Squyres: "[OMPI devel] RFC: silently allow component open() to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7289.php">Sylvain Jeaugey: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7289.php">Sylvain Jeaugey: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
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
