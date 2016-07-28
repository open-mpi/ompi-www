<?
$subject_val = "Re: [OMPI users] Memory manager";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 00:42:39 2008" -->
<!-- isoreceived="20080521044239" -->
<!-- sent="Wed, 21 May 2008 14:42:28 +1000" -->
<!-- isosent="20080521044228" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory manager" -->
<!-- id="1211344949.5404.79.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="03EFC815-836B-47A0-9C01-1B6B01E495E1_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 00:42:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5713.php">Brian W. Barrett: "Re: [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="5711.php">Jim Kusznir: "[OMPI users] OpenMPI+PGI errors"</a>
<li><strong>In reply to:</strong> <a href="5708.php">Brian Barrett: "Re: [OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5713.php">Brian W. Barrett: "Re: [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="5713.php">Brian W. Barrett: "Re: [OMPI users] Memory manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian
<br>
<p>I ran your experiment.  Changing the MMAP threshold made no difference
<br>
to the memory footprint (&gt;8GB/process out of the box, an order of
<br>
magnitude smaller with --with-memory-manager=none).
<br>
<p>What does that tell us?
<br>
<p>Ciao
<br>
Terry
<br>
<p><p><p>On Tue, 2008-05-20 at 06:51 -0600, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; Terry -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would you be willing to do an experiment with the memory allocator?   
</span><br>
<span class="quotelev1">&gt; There are two values we change to try to make IB run faster (at the  
</span><br>
<span class="quotelev1">&gt; cost of corner cases you're hitting).  I'm not sure one is strictly  
</span><br>
<span class="quotelev1">&gt; necessary, and I'm concerned that it's the one causing problems.  If  
</span><br>
<span class="quotelev1">&gt; you don't mind recompiling again, would you change line 64 in opal/mca/ 
</span><br>
<span class="quotelev1">&gt; memory/ptmalloc2/malloc.c from:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define DEFAULT_MMAP_THRESHOLD (2*1024*1024)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define DEFAULT_MMAP_THRESHOLD (128*1024)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And then recompile with the memory manager, obviously.  That will make  
</span><br>
<span class="quotelev1">&gt; the mmap / sbrk cross-over point the same as the default allocator in  
</span><br>
<span class="quotelev1">&gt; Linux.  There's still one other tweak we do, but I'm almost 100%  
</span><br>
<span class="quotelev1">&gt; positive it's the threshold causing problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 19, 2008, at 8:17 PM, Terry Frankcombe wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; To tell you all what noone wanted to tell me, yes, it does seem to be
</span><br>
<span class="quotelev2">&gt; &gt; the memory manager.  Compiling everything with
</span><br>
<span class="quotelev2">&gt; &gt; --with-memory-manager=none returns the vmem use to the more reasonable
</span><br>
<span class="quotelev2">&gt; &gt; ~100MB per process (down from &gt;8GB).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I take it this may affect my peak bandwidth over infiniband.  What's  
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; general feeling about how bad this is?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 2008-05-13 at 13:12 +1000, Terry Frankcombe wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm trying to run an MPI app on an infiniband cluster with OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.2.6.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When run on a single node, this app is grabbing large chunks of  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; memory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (total per process ~8.5GB, including strace showing a single 4GB  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; grab)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but not using it.  The resident memory use is ~40MB per process.   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this app is compiled in serial mode (with conditionals to remove  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; calls) the memory use is more like what you'd expect, 40MB res and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ~100MB vmem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Now I didn't write it so I'm not sure what extra stuff the MPI  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; version
</span><br>
<span class="quotelev3">&gt; &gt;&gt; does, and we haven't tracked down the large memory grabs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Could it be that this vmem is being grabbed by the OpenMPI memory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; manager rather than directly by the app?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ciao
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Terry
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5713.php">Brian W. Barrett: "Re: [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="5711.php">Jim Kusznir: "[OMPI users] OpenMPI+PGI errors"</a>
<li><strong>In reply to:</strong> <a href="5708.php">Brian Barrett: "Re: [OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5713.php">Brian W. Barrett: "Re: [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="5713.php">Brian W. Barrett: "Re: [OMPI users] Memory manager"</a>
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
