<?
$subject_val = "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 19:04:21 2007" -->
<!-- isoreceived="20071211000421" -->
<!-- sent="Mon, 10 Dec 2007 18:04:17 -0600 (CST)" -->
<!-- isosent="20071211000417" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??" -->
<!-- id="Pine.LNX.4.64.0712101757300.19926_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFEA1CC824.231BB406-ON852573AD.007C15CC-862573AD.007E34B2_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-10 19:04:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2780.php">Patrick Geoffray: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open	MPI at Runtime??"</a>
<li><strong>Previous message:</strong> <a href="2778.php">Peter Wong: "[OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<li><strong>In reply to:</strong> <a href="2778.php">Peter Wong: "[OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2780.php">Patrick Geoffray: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open	MPI at Runtime??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 10 Dec 2007, Peter Wong wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI defines its own malloc (by default), so malloc of glibc
</span><br>
<span class="quotelev1">&gt; is not called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, without calling malloc of glibc, the allocator of libhugetlbfs
</span><br>
<span class="quotelev1">&gt; to back text and dynamic data by large pages, e.g., 16MB pages on
</span><br>
<span class="quotelev1">&gt; POWER systems, is not used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, we can build Open MPI with --with-memory-manager=none.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am wondering the feasibility of turning the memory manger on
</span><br>
<span class="quotelev1">&gt; and off dynamically at runtime as a new feature?
</span><br>
<p>Hi Peter -
<br>
<p>The problem is that we actually intercept the malloc() call, so once we've 
<br>
done that (which is a link-time thing), it's too late to use the 
<br>
underlying malloc to actually do its thing.
<br>
<p>I was going to add some code to Open MPI to make it an application link 
<br>
time choice (rather than an OMPI-build time choice), but unfortunately 
<br>
my current day to day work is not on Open MPI, so unless someone else 
<br>
picks it up, it's unlikely this will get implemented in the near future. 
<br>
Of course, if someone has the time and desire, I can describe to them what 
<br>
I was thinking.
<br>
<p>The only way I've found to do memory tracking at run-time is to use 
<br>
LD_PRELOAD tricks, which I believe there were some other (easy to 
<br>
overcome) problems with.
<br>
<p>What would be really nice (although unlikely to occur) is if there was a 
<br>
thread-safe way to hook into the memory manager directly (rather than 
<br>
playing linking tricks).  GLIBC's malloc provides hooks, but they aren't 
<br>
thread safe (as in two user threads calling malloc at the same time would 
<br>
result in badness).  Darwin/Mac OS X provides thread-safe hooks that work 
<br>
very well (don't require linker tricks and can be turned off at run-time), 
<br>
but are slightly higher level than what we want -- there we can intercept 
<br>
malloc/free, but what we'd really like to know is when memory is being 
<br>
given back to the operating system.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2780.php">Patrick Geoffray: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open	MPI at Runtime??"</a>
<li><strong>Previous message:</strong> <a href="2778.php">Peter Wong: "[OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<li><strong>In reply to:</strong> <a href="2778.php">Peter Wong: "[OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2780.php">Patrick Geoffray: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open	MPI at Runtime??"</a>
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
