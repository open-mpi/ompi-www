<?
$subject_val = "Re: [OMPI users] oversubscription of slots with GridEngine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  9 12:56:59 2014" -->
<!-- isoreceived="20141109175659" -->
<!-- sent="Sun, 9 Nov 2014 18:56:47 +0100" -->
<!-- isosent="20141109175647" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oversubscription of slots with GridEngine" -->
<!-- id="057EB295-74FC-4DBB-83D2-1B240B03D098_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="814E6D361B66804FBF146E8AB57FE1CC2E31C902_at_CISAMRMBS02.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] oversubscription of slots with GridEngine<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-09 12:56:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25720.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25718.php">SLIM H.A.: "[OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25718.php">SLIM H.A.: "[OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25720.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25720.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; Am 09.11.2014 um 18:20 schrieb SLIM H.A. &lt;h.a.slim_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We switched on hyper threading on our cluster with two eight core sockets per node (32 threads per node).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We configured  gridengine with 16 slots per node to allow the 16 extra threads for kernel process use but this apparently does not work. Printout of the gridengine hostfile shows that for a 32 slots job, 16 slots are placed on each of two nodes as expected. Including the openmpi --display-map option shows that all 32 processes are incorrectly  placed on the head node.
</span><br>
<p>You mean the master node of the parallel job I assume.
<br>
<p><span class="quotelev1">&gt; Here is part of the output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; master=cn6083
</span><br>
<span class="quotelev1">&gt; PE=orte
</span><br>
<p>What allocation rule was defined for this PE - &quot;control_slave yes&quot; is set?
<br>
<p><span class="quotelev1">&gt; JOB_ID=2481793
</span><br>
<span class="quotelev1">&gt; Got 32 slots.
</span><br>
<span class="quotelev1">&gt; slots:
</span><br>
<span class="quotelev1">&gt; cn6083 16 par6.q_at_cn6083 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt; cn6085 16 par6.q_at_cn6085 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt; Sun Nov  9 16:50:59 GMT 2014
</span><br>
<span class="quotelev1">&gt; Data for JOB [44767,1] offset 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: cn6083  Num slots: 16   Max slots: 0    Num procs: 32
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [44767,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [44767,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;        Process OMPI jobid: [44767,1] App: 0 Process rank: 31
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found some related mailings about a new warning in 1.8.2 about oversubscription and  I tried a few options to avoid the use of the extra threads for MPI tasks by openmpi without success, e.g. variants of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --cpus-per-proc 1 
</span><br>
<span class="quotelev1">&gt; --bind-to-core 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and some others. Gridengine treats hw threads as cores==slots (?) but the content of $PE_HOSTFILE suggests it distributes the slots sensibly  so it seems there is an option for openmpi required to get 16 cores per node?
</span><br>
<p>Was Open MPI configured with --with-sge?
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt; I tried both 1.8.2, 1.8.3 and also 1.6.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for some clarification that anyone can give.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Henk
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25718.php">http://www.open-mpi.org/community/lists/users/2014/11/25718.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25720.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25718.php">SLIM H.A.: "[OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25718.php">SLIM H.A.: "[OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25720.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25720.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
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
