<?
$subject_val = "Re: [OMPI users] Memory manager";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 11:16:52 2008" -->
<!-- isoreceived="20080521151652" -->
<!-- sent="Wed, 21 May 2008 11:16:46 -0400 (EDT)" -->
<!-- isosent="20080521151646" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory manager" -->
<!-- id="Pine.LNX.4.64.0805211114220.10912_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1211344949.5404.79.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory manager<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 11:16:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5714.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Previous message:</strong> <a href="5712.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<li><strong>In reply to:</strong> <a href="5712.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry -
<br>
<p>It tells us that I'm not as smart as I thought :).  If you're willing to 
<br>
help track this down, I'd like to try some other things that will require 
<br>
a more involved patch (it'll take me a day or two to get the patch right). 
<br>
Let me know if you'd be wiling to look further (hopefully only another 
<br>
build or two) and I'll put the patch together.
<br>
<p>Brian
<br>
<p><p>On Wed, 21 May 2008, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran your experiment.  Changing the MMAP threshold made no difference
</span><br>
<span class="quotelev1">&gt; to the memory footprint (&gt;8GB/process out of the box, an order of
</span><br>
<span class="quotelev1">&gt; magnitude smaller with --with-memory-manager=none).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does that tell us?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ciao
</span><br>
<span class="quotelev1">&gt; Terry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 2008-05-20 at 06:51 -0600, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Terry -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would you be willing to do an experiment with the memory allocator?
</span><br>
<span class="quotelev2">&gt;&gt; There are two values we change to try to make IB run faster (at the
</span><br>
<span class="quotelev2">&gt;&gt; cost of corner cases you're hitting).  I'm not sure one is strictly
</span><br>
<span class="quotelev2">&gt;&gt; necessary, and I'm concerned that it's the one causing problems.  If
</span><br>
<span class="quotelev2">&gt;&gt; you don't mind recompiling again, would you change line 64 in opal/mca/
</span><br>
<span class="quotelev2">&gt;&gt; memory/ptmalloc2/malloc.c from:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define DEFAULT_MMAP_THRESHOLD (2*1024*1024)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define DEFAULT_MMAP_THRESHOLD (128*1024)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And then recompile with the memory manager, obviously.  That will make
</span><br>
<span class="quotelev2">&gt;&gt; the mmap / sbrk cross-over point the same as the default allocator in
</span><br>
<span class="quotelev2">&gt;&gt; Linux.  There's still one other tweak we do, but I'm almost 100%
</span><br>
<span class="quotelev2">&gt;&gt; positive it's the threshold causing problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 19, 2008, at 8:17 PM, Terry Frankcombe wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To tell you all what noone wanted to tell me, yes, it does seem to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the memory manager.  Compiling everything with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-memory-manager=none returns the vmem use to the more reasonable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~100MB per process (down from &gt;8GB).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I take it this may affect my peak bandwidth over infiniband.  What's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; general feeling about how bad this is?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, 2008-05-13 at 13:12 +1000, Terry Frankcombe wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to run an MPI app on an infiniband cluster with OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.2.6.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When run on a single node, this app is grabbing large chunks of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (total per process ~8.5GB, including strace showing a single 4GB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grab)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but not using it.  The resident memory use is ~40MB per process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this app is compiled in serial mode (with conditionals to remove
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; calls) the memory use is more like what you'd expect, 40MB res and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ~100MB vmem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now I didn't write it so I'm not sure what extra stuff the MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does, and we haven't tracked down the large memory grabs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could it be that this vmem is being grabbed by the OpenMPI memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; manager rather than directly by the app?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ciao
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Terry
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5714.php">Jeff Squyres: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Previous message:</strong> <a href="5712.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<li><strong>In reply to:</strong> <a href="5712.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
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
