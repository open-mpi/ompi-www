<?
$subject_val = "Re: [OMPI users] OMPI monitor each process behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 10:28:30 2011" -->
<!-- isoreceived="20110413142830" -->
<!-- sent="Wed, 13 Apr 2011 16:28:14 +0200" -->
<!-- isosent="20110413142814" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI monitor each process behavior" -->
<!-- id="2D136B99-70C9-4349-B8FC-49E9838F82BB_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w416DFF93554A3DBF0007B1CBAA0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI monitor each process behavior<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 10:28:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16219.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16217.php">Rushton Martin: "[OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16210.php">Jack Bryan: "[OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16229.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Reply:</strong> <a href="16229.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 13.04.2011 um 05:55 schrieb Jack Bryan:
<br>
<p><span class="quotelev1">&gt; I need to monitor the memory usage of each parallel process on a linux Open MPI cluster. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, top, ps command cannot help here because they only show the head node information. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to follow the behavior of each process on each cluster node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I cannot use ssh to access each node. 
</span><br>
<p>What about submitting another job with `mpirun ... ps -e f` or alike - in case you can request the same nodes?
<br>
<p>Can you `qrsh` to a node by the queuingsystem?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; The program takes 8 hours to finish. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is really appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jack 
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
<li><strong>Next message:</strong> <a href="16219.php">Ralph Castain: "Re: [OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16217.php">Rushton Martin: "[OMPI users] Over committing?"</a>
<li><strong>In reply to:</strong> <a href="16210.php">Jack Bryan: "[OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16229.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Reply:</strong> <a href="16229.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
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
