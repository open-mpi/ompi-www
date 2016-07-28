<?
$subject_val = "Re: [OMPI users] OMPI monitor each process behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 10:09:25 2011" -->
<!-- isoreceived="20110413140925" -->
<!-- sent="Wed, 13 Apr 2011 08:09:17 -0600" -->
<!-- isosent="20110413140917" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI monitor each process behavior" -->
<!-- id="1D6A3C88-C564-4080-9191-F61FDA62BB7A_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 10:09:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16217.php">Rushton Martin: "[OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16215.php">Eugene Loh: "Re: [OMPI users] Problem with setting up openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="16210.php">Jack Bryan: "[OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16227.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Reply:</strong> <a href="16227.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version are you using? If you are using 1.5.x, there is an &quot;orte-top&quot; command that will do what you ask. It queries the daemons to get the info.
<br>
<p><p>On Apr 12, 2011, at 9:55 PM, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Hi , All: 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16216/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16217.php">Rushton Martin: "[OMPI users] Over committing?"</a>
<li><strong>Previous message:</strong> <a href="16215.php">Eugene Loh: "Re: [OMPI users] Problem with setting up openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="16210.php">Jack Bryan: "[OMPI users] OMPI monitor each process behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16227.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
<li><strong>Reply:</strong> <a href="16227.php">Jack Bryan: "Re: [OMPI users] OMPI monitor each process behavior"</a>
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
