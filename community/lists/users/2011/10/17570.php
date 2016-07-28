<?
$subject_val = "Re: [OMPI users] Running MPI program  using dropbear";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 07:32:46 2011" -->
<!-- isoreceived="20111019113246" -->
<!-- sent="Wed, 19 Oct 2011 05:32:36 -0600" -->
<!-- isosent="20111019113236" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running MPI program  using dropbear" -->
<!-- id="6902FAD6-ADBB-4393-8908-9F50B6ACA2BB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1318994207.55037.YahooMailClassic_at_web161402.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running MPI program  using dropbear<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 07:32:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17571.php">Mathieu Westphal: "[OMPI users] ERROR: too many MPI processes"</a>
<li><strong>Previous message:</strong> <a href="17569.php">ganalekshmi guruparan: "[OMPI users] Running MPI program  using dropbear"</a>
<li><strong>In reply to:</strong> <a href="17569.php">ganalekshmi guruparan: "[OMPI users] Running MPI program  using dropbear"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, you asked for two processes, and your hostfile indicates that we can run two procs on each machine. So we put those two procs on the first machine, leaving nothing for the second machine to do.
<br>
<p>If you want the procs on different machines, then add -bynode to the cmd line. This will put one proc on each node, and cycle around all the nodes until all procs are placed.
<br>
<p><p>On Oct 18, 2011, at 9:16 PM, ganalekshmi guruparan wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; We are running an application on two PowerPC nodes using MPI.Dropbear is being used for SSH connection between two nodes.But when mpirun is given from one node it is not being reflected on the other node.SSH is working and password verifcation and acknowledgment from the other node is correct.But the program runs only on one node.What could be the solution?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command given was
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -hostfile /myhostfile ./app
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; myhostile
</span><br>
<span class="quotelev1">&gt; &lt;ip1&gt; slots=2
</span><br>
<span class="quotelev1">&gt; &lt;ip2&gt; slots=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please help
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17570/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17571.php">Mathieu Westphal: "[OMPI users] ERROR: too many MPI processes"</a>
<li><strong>Previous message:</strong> <a href="17569.php">ganalekshmi guruparan: "[OMPI users] Running MPI program  using dropbear"</a>
<li><strong>In reply to:</strong> <a href="17569.php">ganalekshmi guruparan: "[OMPI users] Running MPI program  using dropbear"</a>
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
