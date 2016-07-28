<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  3 18:51:23 2006" -->
<!-- isoreceived="20060503225123" -->
<!-- sent="Wed, 3 May 2006 17:51:16 -0500" -->
<!-- isosent="20060503225116" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] comm_join and singleton init" -->
<!-- id="20060503225116.GN25378_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="44170D80.1050004_at_cs.uh.edu" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-03 18:51:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1211.php">Amit Schreiber: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Previous message:</strong> <a href="1209.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0856.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1213.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Reply:</strong> <a href="1213.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Reply:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI users] comm_join and singleton init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 14, 2006 at 12:37:52PM -0600, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; I think I know what goes wrong. Since they are in different 'universes', 
</span><br>
<span class="quotelev1">&gt; they will have exactly the same 'Open MPI name', and therefore the 
</span><br>
<span class="quotelev1">&gt; algorithm in intercomm_merge can not determine which process should be 
</span><br>
<span class="quotelev1">&gt; first and which is second.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Practically, all jobs which are connected at a certain point in there 
</span><br>
<span class="quotelev1">&gt; lifetime have to be in the same MPI universe, such that all jobs will 
</span><br>
<span class="quotelev1">&gt; have different jobid's and therefore different names. To use the same 
</span><br>
<span class="quotelev1">&gt; universe, you have to start the orted daemon in the persistent mode, so 
</span><br>
<span class="quotelev1">&gt; the sequence should be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orted --seed --persistent --scope public
</span><br>
<span class="quotelev1">&gt; mpirun -np x ./app1
</span><br>
<span class="quotelev1">&gt; mpirun -np y ./app2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case everything should work as expected, you could do the 
</span><br>
<span class="quotelev1">&gt; comm_join between app1 and app2 and the intercomm_merge should work as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps
</span><br>
<p>This was fine on a single machine.  What do you recommend for multiple
<br>
machines (e.g. app1 on node1 and app2 on node2)? How do i tell
<br>
multiple orted instances that they are part of the same universe?
<br>
<p>thanks
<br>
==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Labs, IL USA                B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1211.php">Amit Schreiber: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Previous message:</strong> <a href="1209.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0856.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1213.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Reply:</strong> <a href="1213.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Reply:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI users] comm_join and singleton init"</a>
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
