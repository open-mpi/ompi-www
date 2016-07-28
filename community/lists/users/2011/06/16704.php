<?
$subject_val = "Re: [OMPI users] Deadlock with barrier und RMA";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 11 09:24:34 2011" -->
<!-- isoreceived="20110611132434" -->
<!-- sent="Sat, 11 Jun 2011 07:24:24 -0600" -->
<!-- isosent="20110611132424" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock with barrier und RMA" -->
<!-- id="03301628-A400-4D8B-B5FD-DEC62F3CCF20_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110611144327.GB3672_at_telvanni.starfleet" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock with barrier und RMA<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-11 09:24:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16705.php">Ole Kliemann: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Previous message:</strong> <a href="16703.php">Ole Kliemann: "[OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>In reply to:</strong> <a href="16703.php">Ole Kliemann: "[OMPI users] Deadlock with barrier und RMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16705.php">Ole Kliemann: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Reply:</strong> <a href="16705.php">Ole Kliemann: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh my - that is such an old version! Any reason for using it instead of something more recent?
<br>
<p><p>On Jun 11, 2011, at 8:43 AM, Ole Kliemann wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to use MPI on a cluster running OpenMPI 1.2.4 and starting
</span><br>
<span class="quotelev1">&gt; processes through PBSPro_11.0.2.110766. I've been running into a couple
</span><br>
<span class="quotelev1">&gt; of performance and deadlock problems and like to check whether I'm
</span><br>
<span class="quotelev1">&gt; making a mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One of the deadlocks I managed to boil down to the attached example. I
</span><br>
<span class="quotelev1">&gt; run it on 8 cores. It usually deadlocks with all except one process
</span><br>
<span class="quotelev1">&gt; showing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	start barrier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as last output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The one process out of order shows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	start getting local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question at this point is simply whether this is expected behaviour
</span><br>
<span class="quotelev1">&gt; of OpenMPI. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance!
</span><br>
<span class="quotelev1">&gt; Ole
</span><br>
<span class="quotelev1">&gt; &lt;mpi_barrier.cc&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="16705.php">Ole Kliemann: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Previous message:</strong> <a href="16703.php">Ole Kliemann: "[OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>In reply to:</strong> <a href="16703.php">Ole Kliemann: "[OMPI users] Deadlock with barrier und RMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16705.php">Ole Kliemann: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Reply:</strong> <a href="16705.php">Ole Kliemann: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
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
