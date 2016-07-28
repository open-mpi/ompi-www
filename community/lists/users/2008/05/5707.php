<?
$subject_val = "Re: [OMPI users] Memory manager";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 01:54:16 2008" -->
<!-- isoreceived="20080520055416" -->
<!-- sent="Tue, 20 May 2008 08:53:52 +0300" -->
<!-- isosent="20080520055352" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory manager" -->
<!-- id="20080520055351.GV21806_at_minantech.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-20 01:53:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5708.php">Brian Barrett: "Re: [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="5706.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<li><strong>In reply to:</strong> <a href="5706.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5708.php">Brian Barrett: "Re: [OMPI users] Memory manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, May 20, 2008 at 12:17:02PM +1000, Terry Frankcombe wrote:
<br>
<span class="quotelev1">&gt; To tell you all what noone wanted to tell me, yes, it does seem to be
</span><br>
<span class="quotelev1">&gt; the memory manager.  Compiling everything with
</span><br>
<span class="quotelev1">&gt; --with-memory-manager=none returns the vmem use to the more reasonable
</span><br>
<span class="quotelev1">&gt; ~100MB per process (down from &gt;8GB).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I take it this may affect my peak bandwidth over infiniband.  What's the
</span><br>
<span class="quotelev1">&gt; general feeling about how bad this is?
</span><br>
You will not be able to use &quot;-mca mpi_leave_pinned 1&quot; parameter and your
<br>
micro benchmark performance will be bad. Real application will see the
<br>
difference only if it reuses communication buffers frequently.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 2008-05-13 at 13:12 +1000, Terry Frankcombe wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi folks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to run an MPI app on an infiniband cluster with OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt; 1.2.6.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When run on a single node, this app is grabbing large chunks of memory
</span><br>
<span class="quotelev2">&gt; &gt; (total per process ~8.5GB, including strace showing a single 4GB grab)
</span><br>
<span class="quotelev2">&gt; &gt; but not using it.  The resident memory use is ~40MB per process.  When
</span><br>
<span class="quotelev2">&gt; &gt; this app is compiled in serial mode (with conditionals to remove the MPI
</span><br>
<span class="quotelev2">&gt; &gt; calls) the memory use is more like what you'd expect, 40MB res and
</span><br>
<span class="quotelev2">&gt; &gt; ~100MB vmem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Now I didn't write it so I'm not sure what extra stuff the MPI version
</span><br>
<span class="quotelev2">&gt; &gt; does, and we haven't tracked down the large memory grabs.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could it be that this vmem is being grabbed by the OpenMPI memory
</span><br>
<span class="quotelev2">&gt; &gt; manager rather than directly by the app?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ciao
</span><br>
<span class="quotelev2">&gt; &gt; Terry
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5708.php">Brian Barrett: "Re: [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="5706.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<li><strong>In reply to:</strong> <a href="5706.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5708.php">Brian Barrett: "Re: [OMPI users] Memory manager"</a>
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
