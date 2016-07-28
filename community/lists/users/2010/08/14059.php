<?
$subject_val = "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 17 11:21:07 2010" -->
<!-- isoreceived="20100817152107" -->
<!-- sent="Tue, 17 Aug 2010 17:14:41 +0200" -->
<!-- isosent="20100817151441" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1" -->
<!-- id="22E23C47-8B49-4075-9B7E-33351030D9F5_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="74F7E507-5011-4D9F-99AD-53D9732E93CE_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-17 11:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14060.php">Gus Correa: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<li><strong>Previous message:</strong> <a href="14058.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14056.php">Gijsbert Wiesenekker: "[OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14060.php">Gus Correa: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17, 2010, at 11:29 , Gijsbert Wiesenekker wrote:
<br>
<p><span class="quotelev1">&gt; I have a four-node quad core cluster. I am running OpenMPI (version 1.4.2) jobs with Torque (version 2.4.8). I can submit jobs using
</span><br>
<span class="quotelev1">&gt; #PBS -lnodes=4:ppn=4
</span><br>
<span class="quotelev1">&gt; And 16 processes are launched. However if I use
</span><br>
<span class="quotelev1">&gt; #PBS -lnodes=4:ppn=1 
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; #PBS -lnodes=4
</span><br>
<span class="quotelev1">&gt; The call to MPI_Init is succesful, but the call to 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;mpi_nprocs)
</span><br>
<span class="quotelev1">&gt; hangs and never returns.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas? Any workarounds?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gijsbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>You may disregard this question, I was fooled by a print statement in the wrong place.
<br>
<p>Gijsbert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14060.php">Gus Correa: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<li><strong>Previous message:</strong> <a href="14058.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14056.php">Gijsbert Wiesenekker: "[OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14060.php">Gus Correa: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
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
