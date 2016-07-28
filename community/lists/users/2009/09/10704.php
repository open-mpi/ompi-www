<?
$subject_val = "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 02:27:36 2009" -->
<!-- isoreceived="20090921062736" -->
<!-- sent="Sun, 20 Sep 2009 20:27:26 -1000" -->
<!-- isosent="20090921062726" -->
<!-- name="Brian Powell" -->
<!-- email="powellb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2" -->
<!-- id="59D91317-A552-4DA4-A627-BEF1D184E61A_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Question about OpenMPI performance vs. MVAPICH2" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2<br>
<strong>From:</strong> Brian Powell (<em>powellb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 02:27:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10705.php">Pavel Shamis (Pasha): "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>Previous message:</strong> <a href="10703.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Maybe in reply to:</strong> <a href="10699.php">Brian Powell: "[OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jed Brown wrote:
<br>
<span class="quotelev1">&gt; Are you saying the output of mpicc/mpif90 -show has the same
</span><br>
<span class="quotelev1">&gt; optimization flags?  MPICH2 usually puts it's own optimization flags
</span><br>
<span class="quotelev1">&gt; into the wrappers.
</span><br>
<p>Jed, thank you for your reply. Yes, mpif90 shows (other than differing  
<br>
libraries) identical flags.
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Did you set -mca mpi_paffinity_alone 1? This will bind the processes
</span><br>
<span class="quotelev1">&gt; to cores and (usually) significantly improve performance.
</span><br>
<p>Ralph, thank you for the suggestion. I had focussed on RDMA, and this  
<br>
made a significant difference. I have only had time to re-run an  
<br>
ensemble of one configuration (rather than the suite I had been  
<br>
running) and it improved the OpenMPI performance by 19.5%. So, it  
<br>
would appear this was the primary cause.
<br>
<p>I will read through the documentation to find how to make this the  
<br>
default.
<br>
<p>Thank you for your assistance! I look forward to the 1.3.4 improvements.
<br>
<p>Cheers,
<br>
Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10705.php">Pavel Shamis (Pasha): "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>Previous message:</strong> <a href="10703.php">Ralph Castain: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Maybe in reply to:</strong> <a href="10699.php">Brian Powell: "[OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
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
