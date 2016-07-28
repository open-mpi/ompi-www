<?
$subject_val = "Re: [OMPI users] Memory manager";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 08:51:44 2008" -->
<!-- isoreceived="20080520125144" -->
<!-- sent="Tue, 20 May 2008 06:51:34 -0600" -->
<!-- isosent="20080520125134" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory manager" -->
<!-- id="03EFC815-836B-47A0-9C01-1B6B01E495E1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1211249822.5404.10.camel_at_rscpc28.anu.edu.au" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-20 08:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5709.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Previous message:</strong> <a href="5707.php">Gleb Natapov: "Re: [OMPI users] Memory manager"</a>
<li><strong>In reply to:</strong> <a href="5706.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5712.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="5712.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry -
<br>
<p>Would you be willing to do an experiment with the memory allocator?   
<br>
There are two values we change to try to make IB run faster (at the  
<br>
cost of corner cases you're hitting).  I'm not sure one is strictly  
<br>
necessary, and I'm concerned that it's the one causing problems.  If  
<br>
you don't mind recompiling again, would you change line 64 in opal/mca/ 
<br>
memory/ptmalloc2/malloc.c from:
<br>
<p>#define DEFAULT_MMAP_THRESHOLD (2*1024*1024)
<br>
<p>to:
<br>
<p>#define DEFAULT_MMAP_THRESHOLD (128*1024)
<br>
<p>And then recompile with the memory manager, obviously.  That will make  
<br>
the mmap / sbrk cross-over point the same as the default allocator in  
<br>
Linux.  There's still one other tweak we do, but I'm almost 100%  
<br>
positive it's the threshold causing problems.
<br>
<p><p>Brian
<br>
<p><p>On May 19, 2008, at 8:17 PM, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt; To tell you all what noone wanted to tell me, yes, it does seem to be
</span><br>
<span class="quotelev1">&gt; the memory manager.  Compiling everything with
</span><br>
<span class="quotelev1">&gt; --with-memory-manager=none returns the vmem use to the more reasonable
</span><br>
<span class="quotelev1">&gt; ~100MB per process (down from &gt;8GB).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I take it this may affect my peak bandwidth over infiniband.  What's  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; general feeling about how bad this is?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 2008-05-13 at 13:12 +1000, Terry Frankcombe wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run an MPI app on an infiniband cluster with OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.6.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When run on a single node, this app is grabbing large chunks of  
</span><br>
<span class="quotelev2">&gt;&gt; memory
</span><br>
<span class="quotelev2">&gt;&gt; (total per process ~8.5GB, including strace showing a single 4GB  
</span><br>
<span class="quotelev2">&gt;&gt; grab)
</span><br>
<span class="quotelev2">&gt;&gt; but not using it.  The resident memory use is ~40MB per process.   
</span><br>
<span class="quotelev2">&gt;&gt; When
</span><br>
<span class="quotelev2">&gt;&gt; this app is compiled in serial mode (with conditionals to remove  
</span><br>
<span class="quotelev2">&gt;&gt; the MPI
</span><br>
<span class="quotelev2">&gt;&gt; calls) the memory use is more like what you'd expect, 40MB res and
</span><br>
<span class="quotelev2">&gt;&gt; ~100MB vmem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now I didn't write it so I'm not sure what extra stuff the MPI  
</span><br>
<span class="quotelev2">&gt;&gt; version
</span><br>
<span class="quotelev2">&gt;&gt; does, and we haven't tracked down the large memory grabs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could it be that this vmem is being grabbed by the OpenMPI memory
</span><br>
<span class="quotelev2">&gt;&gt; manager rather than directly by the app?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ciao
</span><br>
<span class="quotelev2">&gt;&gt; Terry
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5709.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Previous message:</strong> <a href="5707.php">Gleb Natapov: "Re: [OMPI users] Memory manager"</a>
<li><strong>In reply to:</strong> <a href="5706.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5712.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="5712.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
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
