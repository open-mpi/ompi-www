<?
$subject_val = "Re: [OMPI users] oversubscription of slots with GridEngine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 00:06:45 2014" -->
<!-- isoreceived="20141110050645" -->
<!-- sent="Sun, 9 Nov 2014 21:06:39 -0800" -->
<!-- isosent="20141110050639" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oversubscription of slots with GridEngine" -->
<!-- id="8E6FC616-4E1D-436F-A8C3-9069D6744068_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="057EB295-74FC-4DBB-83D2-1B240B03D098_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-10 00:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25721.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25719.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25719.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25741.php">SLIM H.A.: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25741.php">SLIM H.A.: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25769.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might also add the &#226;&#128;&#148;display-allocation flag to mpirun so we can see what it thinks the allocation looks like. If there are only 16 slots on the node, it seems odd that OMPI would assign 32 procs to it unless it thinks there is only 1 node in the job, and oversubscription is allowed (which it won&#226;&#128;&#153;t be by default if it read the GE allocation)
<br>
<p><p><span class="quotelev1">&gt; On Nov 9, 2014, at 9:56 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 09.11.2014 um 18:20 schrieb SLIM H.A. &lt;h.a.slim_at_[hidden] &lt;mailto:h.a.slim_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We switched on hyper threading on our cluster with two eight core sockets per node (32 threads per node).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We configured  gridengine with 16 slots per node to allow the 16 extra threads for kernel process use but this apparently does not work. Printout of the gridengine hostfile shows that for a 32 slots job, 16 slots are placed on each of two nodes as expected. Including the openmpi --display-map option shows that all 32 processes are incorrectly  placed on the head node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You mean the master node of the parallel job I assume.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is part of the output
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; master=cn6083
</span><br>
<span class="quotelev2">&gt;&gt; PE=orte
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What allocation rule was defined for this PE - &quot;control_slave yes&quot; is set?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; JOB_ID=2481793
</span><br>
<span class="quotelev2">&gt;&gt; Got 32 slots.
</span><br>
<span class="quotelev2">&gt;&gt; slots:
</span><br>
<span class="quotelev2">&gt;&gt; cn6083 16 par6.q_at_cn6083 &lt;NULL&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cn6085 16 par6.q_at_cn6085 &lt;NULL&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sun Nov  9 16:50:59 GMT 2014
</span><br>
<span class="quotelev2">&gt;&gt; Data for JOB [44767,1] offset 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: cn6083  Num slots: 16   Max slots: 0    Num procs: 32
</span><br>
<span class="quotelev2">&gt;&gt;       Process OMPI jobid: [44767,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev2">&gt;&gt;       Process OMPI jobid: [44767,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;       Process OMPI jobid: [44767,1] App: 0 Process rank: 31
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; =============================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I found some related mailings about a new warning in 1.8.2 about oversubscription and  I tried a few options to avoid the use of the extra threads for MPI tasks by openmpi without success, e.g. variants of
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --cpus-per-proc 1 
</span><br>
<span class="quotelev2">&gt;&gt; --bind-to-core 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and some others. Gridengine treats hw threads as cores==slots (?) but the content of $PE_HOSTFILE suggests it distributes the slots sensibly  so it seems there is an option for openmpi required to get 16 cores per node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Was Open MPI configured with --with-sge?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried both 1.8.2, 1.8.3 and also 1.6.5.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for some clarification that anyone can give.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Henk
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25718.php">http://www.open-mpi.org/community/lists/users/2014/11/25718.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25718.php">http://www.open-mpi.org/community/lists/users/2014/11/25718.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25719.php">http://www.open-mpi.org/community/lists/users/2014/11/25719.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25719.php">http://www.open-mpi.org/community/lists/users/2014/11/25719.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25720/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25721.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25719.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25719.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25741.php">SLIM H.A.: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25741.php">SLIM H.A.: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25769.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
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
