<?
$subject_val = "Re: [OMPI users] Broadcast and root process";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 29 11:49:38 2013" -->
<!-- isoreceived="20130429154938" -->
<!-- sent="Mon, 29 Apr 2013 17:49:27 +0200" -->
<!-- isosent="20130429154927" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Broadcast and root process" -->
<!-- id="D26C3D68-44F3-4B41-90A7-0DF217870BBB_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="kllknj$bap$1_at_ger.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Broadcast and root process<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-29 11:49:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21825.php">Randolph Pullen: "[OMPI users] Broadcast problem"</a>
<li><strong>Previous message:</strong> <a href="21823.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>In reply to:</strong> <a href="21816.php">giggzounet: "[OMPI users] Broadcast and root process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21827.php">giggzounet: "Re: [OMPI users] Broadcast and root process"</a>
<li><strong>Reply:</strong> <a href="21827.php">giggzounet: "Re: [OMPI users] Broadcast and root process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, the root processor can be different for every broadcast, but for a same broadcast every process involved must know who the root is. That's the only condition MPI imposes.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Apr 29, 2013, at 13:15 , giggzounet &lt;giggzounet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm new on this list. I'm using MPI for years but I don't have written a
</span><br>
<span class="quotelev1">&gt; lot of code with MPI. Therefore is my question perhaps ridiculous:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using a Computational Fluid Mechanics (CFD) Solver. This Solver uses
</span><br>
<span class="quotelev1">&gt; MPI to exchange the data between the different partitions. In this
</span><br>
<span class="quotelev1">&gt; solver the &quot;root processor&quot; is always the processor 1. So this proc
</span><br>
<span class="quotelev1">&gt; reads the input, broadcast a lot of things and writes the output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; During a time step the solver computes the reference pressure at a
</span><br>
<span class="quotelev1">&gt; point. This computation is done on a processor, which may not be the
</span><br>
<span class="quotelev1">&gt; root processor. Therefore after the computation a broadcast of the value
</span><br>
<span class="quotelev1">&gt; is necessary. For the moment in the code the broadcast is done with the
</span><br>
<span class="quotelev1">&gt; processor, where the reference pressure is computed, as root processor
</span><br>
<span class="quotelev1">&gt; (and not with the standard &quot;root processor&quot;).	
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it false ? Must the root processor be the same during a computation
</span><br>
<span class="quotelev1">&gt; for all broadcasts ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Guillaume
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21825.php">Randolph Pullen: "[OMPI users] Broadcast problem"</a>
<li><strong>Previous message:</strong> <a href="21823.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>In reply to:</strong> <a href="21816.php">giggzounet: "[OMPI users] Broadcast and root process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21827.php">giggzounet: "Re: [OMPI users] Broadcast and root process"</a>
<li><strong>Reply:</strong> <a href="21827.php">giggzounet: "Re: [OMPI users] Broadcast and root process"</a>
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
