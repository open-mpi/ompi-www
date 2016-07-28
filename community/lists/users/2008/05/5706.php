<?
$subject_val = "Re: [OMPI users] Memory manager";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 22:17:18 2008" -->
<!-- isoreceived="20080520021718" -->
<!-- sent="Tue, 20 May 2008 12:17:02 +1000" -->
<!-- isosent="20080520021702" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory manager" -->
<!-- id="1211249822.5404.10.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="1210648377.5400.193.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Date:</strong> 2008-05-19 22:17:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5707.php">Gleb Natapov: "Re: [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="5705.php">Doug Reeder: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
<li><strong>In reply to:</strong> <a href="5658.php">Terry Frankcombe: "[OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5707.php">Gleb Natapov: "Re: [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="5707.php">Gleb Natapov: "Re: [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="5708.php">Brian Barrett: "Re: [OMPI users] Memory manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To tell you all what noone wanted to tell me, yes, it does seem to be
<br>
the memory manager.  Compiling everything with
<br>
--with-memory-manager=none returns the vmem use to the more reasonable
<br>
~100MB per process (down from &gt;8GB).
<br>
<p>I take it this may affect my peak bandwidth over infiniband.  What's the
<br>
general feeling about how bad this is?
<br>
<p><p>On Tue, 2008-05-13 at 13:12 +1000, Terry Frankcombe wrote:
<br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to run an MPI app on an infiniband cluster with OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.2.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When run on a single node, this app is grabbing large chunks of memory
</span><br>
<span class="quotelev1">&gt; (total per process ~8.5GB, including strace showing a single 4GB grab)
</span><br>
<span class="quotelev1">&gt; but not using it.  The resident memory use is ~40MB per process.  When
</span><br>
<span class="quotelev1">&gt; this app is compiled in serial mode (with conditionals to remove the MPI
</span><br>
<span class="quotelev1">&gt; calls) the memory use is more like what you'd expect, 40MB res and
</span><br>
<span class="quotelev1">&gt; ~100MB vmem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I didn't write it so I'm not sure what extra stuff the MPI version
</span><br>
<span class="quotelev1">&gt; does, and we haven't tracked down the large memory grabs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could it be that this vmem is being grabbed by the OpenMPI memory
</span><br>
<span class="quotelev1">&gt; manager rather than directly by the app?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5707.php">Gleb Natapov: "Re: [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="5705.php">Doug Reeder: "Re: [OMPI users] openmpi 32-bit g++ compilation issue"</a>
<li><strong>In reply to:</strong> <a href="5658.php">Terry Frankcombe: "[OMPI users] Memory manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5707.php">Gleb Natapov: "Re: [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="5707.php">Gleb Natapov: "Re: [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="5708.php">Brian Barrett: "Re: [OMPI users] Memory manager"</a>
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
