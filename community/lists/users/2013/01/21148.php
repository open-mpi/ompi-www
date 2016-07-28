<?
$subject_val = "Re: [OMPI users] help me understand these error msgs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 14:54:21 2013" -->
<!-- isoreceived="20130117195421" -->
<!-- sent="Thu, 17 Jan 2013 11:54:13 -0800" -->
<!-- isosent="20130117195413" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help me understand these error msgs" -->
<!-- id="778B1987-5CB2-41F6-AC33-16DF9F7AA42B_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20130117112533.6a89fd19.pegasus_at_nerv.eu.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] help me understand these error msgs<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 14:54:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21149.php">Ralph Castain: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="21147.php">Francesco Simula: "[OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>In reply to:</strong> <a href="21146.php">Jure Pe&#196;&#141;ar: "Re: [OMPI users] help me understand these error msgs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21187.php">Jure Pečar: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Reply:</strong> <a href="21187.php">Jure Pečar: "Re: [OMPI users] help me understand these error msgs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 17, 2013, at 2:25 AM, Jure Pe&#196;&#141;ar &lt;pegasus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 16 Jan 2013 07:46:41 -0800
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This one means that a backend node lost its connection to mpirun. We use a TCP socket between the daemon on a node and mpirun to launch the processes and to detect if/when that node fails for some reason.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hm. And what would be the reasons for this? Too much load on node where mpirun is run?
</span><br>
<p>No, the error means the connection was completely lost - i.e., the socket was closed. Do I understand correctly that the job runs for awhile and then dies? So there are processes executing on the node that reports a lost connection?
<br>
<p>Or is this happening on startup of the larger job, or during a call to MPI_Comm_spawn?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jure Pe&#196;&#141;ar
</span><br>
<span class="quotelev1">&gt; <a href="http://jure.pecar.org">http://jure.pecar.org</a>
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
<li><strong>Next message:</strong> <a href="21149.php">Ralph Castain: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="21147.php">Francesco Simula: "[OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>In reply to:</strong> <a href="21146.php">Jure Pe&#196;&#141;ar: "Re: [OMPI users] help me understand these error msgs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21187.php">Jure Pečar: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Reply:</strong> <a href="21187.php">Jure Pečar: "Re: [OMPI users] help me understand these error msgs"</a>
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
