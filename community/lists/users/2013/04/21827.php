<?
$subject_val = "Re: [OMPI users] Broadcast and root process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 03:52:20 2013" -->
<!-- isoreceived="20130430075220" -->
<!-- sent="Tue, 30 Apr 2013 09:52:06 +0200" -->
<!-- isosent="20130430075206" -->
<!-- name="giggzounet" -->
<!-- email="giggzounet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Broadcast and root process" -->
<!-- id="klnt71$lsg$1_at_ger.gmane.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D26C3D68-44F3-4B41-90A7-0DF217870BBB_at_icl.utk.edu" -->
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
<strong>From:</strong> giggzounet (<em>giggzounet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 03:52:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21828.php">George Bosilca: "Re: [OMPI users] Broadcast problem"</a>
<li><strong>Previous message:</strong> <a href="21826.php">Randolph Pullen: "Re: [OMPI users] Broadcast problem"</a>
<li><strong>In reply to:</strong> <a href="21824.php">George Bosilca: "Re: [OMPI users] Broadcast and root process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ok. Thx for your answer. The documentation was not clear on this subject.
<br>
<p>Cheers
<br>
Guillaume
<br>
<p>Le 29/04/2013 17:49, George Bosilca a &#233;crit :
<br>
<span class="quotelev1">&gt; No, the root processor can be different for every broadcast, but for a same broadcast every process involved must know who the root is. That's the only condition MPI imposes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 29, 2013, at 13:15 , giggzounet &lt;giggzounet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm new on this list. I'm using MPI for years but I don't have written a
</span><br>
<span class="quotelev2">&gt;&gt; lot of code with MPI. Therefore is my question perhaps ridiculous:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using a Computational Fluid Mechanics (CFD) Solver. This Solver uses
</span><br>
<span class="quotelev2">&gt;&gt; MPI to exchange the data between the different partitions. In this
</span><br>
<span class="quotelev2">&gt;&gt; solver the &quot;root processor&quot; is always the processor 1. So this proc
</span><br>
<span class="quotelev2">&gt;&gt; reads the input, broadcast a lot of things and writes the output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; During a time step the solver computes the reference pressure at a
</span><br>
<span class="quotelev2">&gt;&gt; point. This computation is done on a processor, which may not be the
</span><br>
<span class="quotelev2">&gt;&gt; root processor. Therefore after the computation a broadcast of the value
</span><br>
<span class="quotelev2">&gt;&gt; is necessary. For the moment in the code the broadcast is done with the
</span><br>
<span class="quotelev2">&gt;&gt; processor, where the reference pressure is computed, as root processor
</span><br>
<span class="quotelev2">&gt;&gt; (and not with the standard &quot;root processor&quot;).	
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it false ? Must the root processor be the same during a computation
</span><br>
<span class="quotelev2">&gt;&gt; for all broadcasts ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Guillaume
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21828.php">George Bosilca: "Re: [OMPI users] Broadcast problem"</a>
<li><strong>Previous message:</strong> <a href="21826.php">Randolph Pullen: "Re: [OMPI users] Broadcast problem"</a>
<li><strong>In reply to:</strong> <a href="21824.php">George Bosilca: "Re: [OMPI users] Broadcast and root process"</a>
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
