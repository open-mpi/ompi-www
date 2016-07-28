<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 21:59:27 2007" -->
<!-- isoreceived="20070921015927" -->
<!-- sent="Thu, 20 Sep 2007 19:59:14 -0600" -->
<!-- isosent="20070921015914" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Malloc segfaulting?" -->
<!-- id="38B2C298-76DD-42D3-95ED-1419F6AEEF1A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46F26F4A.7070502_at_cs.indiana.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-20 21:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2348.php">Jeff Squyres: "[OMPI devel] VT integration"</a>
<li><strong>Previous message:</strong> <a href="2346.php">Terry Dontje: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>In reply to:</strong> <a href="2343.php">Tim Prins: "[OMPI devel] Malloc segfaulting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2349.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Reply:</strong> <a href="2349.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 20, 2007, at 7:02 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; In our nightly runs with the trunk I have started seeing cases  
</span><br>
<span class="quotelev1">&gt; where we
</span><br>
<span class="quotelev1">&gt; appear to be segfaulting within/below malloc. Below is a typical  
</span><br>
<span class="quotelev1">&gt; output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this appears to only happen on the trunk, when we use  
</span><br>
<span class="quotelev1">&gt; openib,
</span><br>
<span class="quotelev1">&gt; and are in 32 bit mode. It seems to happen randomly at a very low
</span><br>
<span class="quotelev1">&gt; frequency (59 out of about 60,000 32 bit openib runs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could be a problem with our machine, and has showed up since I
</span><br>
<span class="quotelev1">&gt; started testing 32bit ofed 10 days ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyways, just curious if anyone had any ideas.
</span><br>
<p>As someone else said, this usually points to a duplicate free or the  
<br>
like in malloc.  You might want to try compiling with --without- 
<br>
memory-manager, as the ptmalloc2 in glibc frequently is more verbose  
<br>
about where errors occurred than is the one in Open MPI.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2348.php">Jeff Squyres: "[OMPI devel] VT integration"</a>
<li><strong>Previous message:</strong> <a href="2346.php">Terry Dontje: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>In reply to:</strong> <a href="2343.php">Tim Prins: "[OMPI devel] Malloc segfaulting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2349.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Reply:</strong> <a href="2349.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
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
