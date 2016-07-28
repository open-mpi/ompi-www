<?
$subject_val = "Re: [OMPI users] OMPI monitor each process behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 12:34:47 2011" -->
<!-- isoreceived="20110413163447" -->
<!-- sent="Wed, 13 Apr 2011 10:34:38 -0600" -->
<!-- isosent="20110413163438" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI monitor each process behavior" -->
<!-- id="7DAE2130-D4CB-4197-AAB8-0D25DA4E10CF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w393C4A7544D78C31C85BC1CBAA0_at_phx.gbl" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 12:34:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16232.php">kishor kharbas: "[OMPI users] Process to resource mapping in ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="16230.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>In reply to:</strong> <a href="16227.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16237.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Reply:</strong> <a href="16237.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 13, 2011, at 10:19 AM, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Hi,  I am using 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.3.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, I have these, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orte-clean  orted       orte-iof    orte-ps     orterun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can they do the same thing ? 
</span><br>
<p>Unfortunately, no
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I use them, will they use a lot of memory on each worker node and print out a lot of things on some log files ?
</span><br>
<p>No, but they won't help. orte-top would be run only on the head node (i.e., where you are logged in), and would generate output to your screen.
<br>
<p>But you don't have it with that release, so the point is moot. Afraid there isn't much else you can do - you might talk to your sys admin and see what tools are available on your cluster for this purpose. Perhaps a nice parallel debugger is available?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is really appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jack 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Wed, 13 Apr 2011 08:09:17 -0600
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI monitor each process behavior
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What version are you using? If you are using 1.5.x, there is an &quot;orte-top&quot; command that will do what you ask. It queries the daemons to get the info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 12, 2011, at 9:55 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi , All: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to monitor the memory usage of each parallel process on a linux Open MPI cluster. 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program takes 8 hours to finish. 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16231/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16232.php">kishor kharbas: "[OMPI users] Process to resource mapping in ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="16230.php">Ralph Castain: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>In reply to:</strong> <a href="16227.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16237.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Reply:</strong> <a href="16237.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
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
