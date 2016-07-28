<?
$subject_val = "Re: [OMPI users] Deadlock with barrier und RMA";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 11 09:37:22 2011" -->
<!-- isoreceived="20110611133722" -->
<!-- sent="Sat, 11 Jun 2011 15:17:05 +0000" -->
<!-- isosent="20110611151705" -->
<!-- name="Ole Kliemann" -->
<!-- email="ole-ompi-2011_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock with barrier und RMA" -->
<!-- id="20110611151705.GC3672_at_telvanni.starfleet" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="03301628-A400-4D8B-B5FD-DEC62F3CCF20_at_open-mpi.org" -->
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
<strong>From:</strong> Ole Kliemann (<em>ole-ompi-2011_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-11 11:17:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16706.php">Constantinos Makassikis: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Previous message:</strong> <a href="16704.php">Ralph Castain: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>In reply to:</strong> <a href="16704.php">Ralph Castain: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16706.php">Constantinos Makassikis: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Reply:</strong> <a href="16706.php">Constantinos Makassikis: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Jun 11, 2011 at 07:24:24AM -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Oh my - that is such an old version! Any reason for using it instead of something more recent?
</span><br>
<p>I'm using the cluster of the university where I work und I'm not the
<br>
admin. So I'm going with what is installed there.
<br>
<p>It's the first time I'm using MPI. Before I complain to the admins about
<br>
old versions or anything else, I'd like to check whether my code
<br>
actually should be okay in regard to MPI specifications.
<br>
<p><span class="quotelev1">&gt; On Jun 11, 2011, at 8:43 AM, Ole Kliemann wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi everyone!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to use MPI on a cluster running OpenMPI 1.2.4 and starting
</span><br>
<span class="quotelev2">&gt; &gt; processes through PBSPro_11.0.2.110766. I've been running into a couple
</span><br>
<span class="quotelev2">&gt; &gt; of performance and deadlock problems and like to check whether I'm
</span><br>
<span class="quotelev2">&gt; &gt; making a mistake.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; One of the deadlocks I managed to boil down to the attached example. I
</span><br>
<span class="quotelev2">&gt; &gt; run it on 8 cores. It usually deadlocks with all except one process
</span><br>
<span class="quotelev2">&gt; &gt; showing
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 	start barrier
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; as last output.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The one process out of order shows:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 	start getting local
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My question at this point is simply whether this is expected behaviour
</span><br>
<span class="quotelev2">&gt; &gt; of OpenMPI. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt; &gt; Ole
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mpi_barrier.cc&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16705/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16706.php">Constantinos Makassikis: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Previous message:</strong> <a href="16704.php">Ralph Castain: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>In reply to:</strong> <a href="16704.php">Ralph Castain: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16706.php">Constantinos Makassikis: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Reply:</strong> <a href="16706.php">Constantinos Makassikis: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
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
